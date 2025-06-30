<?php
require "connect.php";

$for_board = $_POST['for_board'];
$for_switch = $_POST['for_switch'];


if ($for_board == 1) {
  $for_board_other = 2;
} else {
  $for_board_other = 1;
}

$query_module = "SELECT module_num,
module_type
FROM   flex_hardware
WHERE  module_state <> ''
ORDER  BY module_num;";

$query_module_cnt_all = "SELECT Count(module_num)
FROM   flex_hardware
WHERE  module_state <> '';";

$query_module_cnt_main = "SELECT Count(module_num)
FROM   flex_hardware
WHERE  module_state <> ''
       AND module_num <= 14;";

$query_module_cnt_expan = "SELECT Count(module_num)
FROM   flex_hardware
WHERE  module_state <> ''
       AND module_num >= 15;";

$query_switch = "SELECT module_num,
output_num,
is_cfged
FROM   flex_switch
WHERE  switch_id = $1 AND switchboard_id = $2;";

// $query_switches = "SELECT *
// FROM   flex_switch
// WHERE  switchboard_id = $1 AND switch_id <= 24 ORDER BY switch_id;";

// $query_switches = "SELECT fsw1.switchboard_id, fsw1.switch_id, fsw1.module_num, fsw1.output_num, fsw1.is_cfged, (SELECT fsw2.is_cfged AS is_cfged_other
// FROM   flex_switch AS fsw2
// WHERE  switchboard_id = $2 AND fsw2.switch_id = fsw1.switch_id)
// FROM   flex_switch AS fsw1
// WHERE  switchboard_id = $1 ORDER BY switch_id, switchboard_id;";

$query_switches = "SELECT fsw1.switchboard_id, fsw1.switch_id, fsw1.module_num, fsw1.output_num, fsw1.is_cfged,
(SELECT fsw2.switchboard_id AS switchboard_id_other
FROM flex_switch AS fsw2
WHERE  switchboard_id = $2 AND fsw2.switch_id = fsw1.switch_id),
(SELECT fsw2.switch_id AS switch_id_other
FROM   flex_switch AS fsw2
WHERE  switchboard_id = $2 AND fsw2.switch_id = fsw1.switch_id),
(SELECT fsw2.module_num AS module_num_other
FROM   flex_switch AS fsw2
WHERE  switchboard_id = $2 AND fsw2.switch_id = fsw1.switch_id),
(SELECT fsw2.output_num AS output_num_other
FROM   flex_switch AS fsw2
WHERE  switchboard_id = $2 AND fsw2.switch_id = fsw1.switch_id),
(SELECT fsw2.is_cfged AS is_cfged_other
FROM   flex_switch AS fsw2
WHERE  switchboard_id = $2 AND fsw2.switch_id = fsw1.switch_id)
FROM   flex_switch AS fsw1
WHERE  switchboard_id = $1 ORDER BY switch_id, switchboard_id;";

$query_module_io = "SELECT FR.module_num,
FR.output_num,
FR.relay_description,
FR.relay_use,
vsp_relay_functions(FR.relay_use) AS FUNCTION,
FZ.zone_name                  AS equipment_group
FROM   flex_relays AS FR
JOIN flex_zones AS FZ
  ON FZ.z_group_id = FR.z_group_id
WHERE  FZ.z_group_id IS NOT NULL
AND FR.settings_num = 1
UNION
SELECT FV.module_num,
FV.output_num,
FV.vsp_description,
FV.vsp_use,
vsp_relay_functions(FV.vsp_use) AS FUNCTION,
FZ.zone_name                AS equipment_group
FROM   flex_vsp AS FV
JOIN flex_zones AS FZ
  ON FZ.z_group_id = FV.z_group_id
WHERE  FV.z_group_id IS NOT NULL
AND FV.settings_num = 1
UNION
SELECT FI.module_num,
FI.input_num,
FI.input_description,
FI.input_type,
Input_functions(FI.input_type) AS FUNCTION,
FZ.zone_name                   AS equipment_group
FROM   flex_inputs AS FI
JOIN flex_inputs_to_zones AS FITZ
  ON FITZ.module_num = FI.module_num
     AND FITZ.input_num = FI.input_num
JOIN flex_zones AS FZ
  ON FZ.z_group_id = FITZ.z_group_id
WHERE  FI.input_type <> 0
AND FI.settings_num = 1
UNION
SELECT FRPM.module_num,
1 AS output,
FRPM.rpm_description,
FRPM.rpm_mode,
rpm_functions(FRPM.rpm_mode) AS FUNCTION,
FZ.zone_name                   AS equipment_group
FROM   flex_rpm AS FRPM
JOIN flex_zones AS FZ
  ON FZ.z_group_id = FRPM.z_group_id
WHERE  FRPM.z_group_id is not null
AND FRPM.settings_num = 1
ORDER  BY module_num,
   output_num;";

$feedback_switch;

$feedback_moduals = [];
$feedback_switches = [];
$feedback_main_nums = [];
$feedback_expan_nums = [];
$feedback_moduals_ios = [];

$switch_value = array($for_switch, $for_board);

$result_switch = pg_query_params($dbconn, $query_switch, $switch_value);
if (!$result_switch) {
  echo "An error occurred 1.\n";
  exit;
}

while ($row = pg_fetch_row($result_switch)) {
  $feedback_switch = $row;
}


$result_moduals = pg_query($dbconn, $query_module);
if (!$result_moduals) {
  echo "An error occurred 2.\n";
  exit;
}

while ($row = pg_fetch_assoc($result_moduals)) {
  $feedback_moduals[] = $row;
  if ($row["module_num"] <= 14) {
    $feedback_main_nums[] = $row["module_num"];
  } else {
    $feedback_expan_nums[] = $row["module_num"];
  }
}

$result_module_io = pg_query($dbconn, $query_module_io);
if (!$result_module_io) {
  echo "An error occurred 3.\n";
  exit;
}

while ($row = pg_fetch_assoc($result_module_io)) {
  $feedback_moduals_ios[] = $row;
}

//
// $result_switches = pg_query_params($dbconn, $query_switches, array($for_board));
// if (!$result_switches) {
//   echo "An error occurred.\n";
//   exit;
// }

$result_switches = pg_query_params($dbconn, $query_switches, array($for_board, $for_board_other));
if (!$result_switches) {
  echo "An error occurred 4.\n";
  exit;
}


while ($row = pg_fetch_assoc($result_switches)) {
  $feedback_switches[] = $row;
}

$result_module_cnt_all = pg_query($dbconn, $query_module_cnt_all);
$module_cnt_all = pg_fetch_result($result_module_cnt_all, 0, 0);

$result_module_cnt_main = pg_query($dbconn, $query_module_cnt_main);
$module_cnt_main = pg_fetch_result($result_module_cnt_main, 0, 0);

$result_module_cnt_expan = pg_query($dbconn, $query_module_cnt_expan);
$module_cnt_expan = pg_fetch_result($result_module_cnt_expan, 0, 0);

pg_close($dbconn);
echo json_encode(['modual_total' => $module_cnt_all, 'modual_main' => ['count' => $module_cnt_main, 'list' => $feedback_main_nums], 'modual_expan' => ['count' => $module_cnt_expan, 'list' => $feedback_expan_nums], 'current_switch' => ["switchboard_id" => $for_board, "module_num" => $feedback_switch[0], 'output_num' => $feedback_switch[1], 'is_cfged' => $feedback_switch[2]], 'switch_table' => $feedback_switches, 'moduals' => $feedback_moduals, 'moduals_ios' => $feedback_moduals_ios]);

?>