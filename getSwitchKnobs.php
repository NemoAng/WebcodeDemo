<?php
require "connect.php";

$board_id = $_POST['board_id'];

// $query_switch = "SELECT * FROM flex_switch ORDER BY switchboard_id, switch_id;";
$query_switch = "SELECT * FROM flex_switch WHERE switchboard_id = $1 ORDER BY switchboard_id, switch_id;";

$query_module_io = "SELECT FR.module_num,
       FR.output_num,
       FR.relay_description
      --  FR.relay_use,
      --  Relay_functions(FR.relay_use) AS FUNCTION
      --  FZ.zone_name                  AS equipment_group
FROM   flex_relays AS FR
       JOIN flex_zones AS FZ
         ON FZ.z_group_id = FR.z_group_id
WHERE  FZ.z_group_id IS NOT NULL
       AND FR.settings_num = 1
UNION
SELECT FV.module_num,
       FV.output_num,
       FV.vsp_description
      --  FV.vsp_use,
      --  Relay_functions(FV.vsp_use) AS FUNCTION
      --  FZ.zone_name                AS equipment_group
FROM   flex_vsp AS FV
       JOIN flex_zones AS FZ
         ON FZ.z_group_id = FV.z_group_id
WHERE  FV.z_group_id IS NOT NULL
       AND FV.settings_num = 1
UNION
SELECT FI.module_num,
       FI.input_num,
       FI.input_description
      --  FI.input_type,
      --  Input_functions(FI.input_type) AS FUNCTION
      --  FZ.zone_name                   AS equipment_group
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
       1 AS output_num,
       FRPM.rpm_description
FROM   flex_rpm AS FRPM
       JOIN flex_zones AS FZ
         ON FZ.z_group_id = FRPM.z_group_id
WHERE  FRPM.settings_num = 1
ORDER  BY module_num,
          output_num; ";

$feedback_switch = [];
$feedback_moduals_ios = [];

$result = pg_query_params($dbconn, $query_switch, array($board_id));
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

while ($row = pg_fetch_assoc($result)) {
  $feedback_switch[] = $row;
}

$result_module_io = pg_query($dbconn, $query_module_io);
if (!$result_module_io) {
  echo "An error occurred.\n";
  exit;
}

while ($row = pg_fetch_assoc($result_module_io)) {
  $feedback_moduals_ios[] = $row;
}

pg_close($dbconn);
echo json_encode(['switch' => $feedback_switch, 'moduals_ios' => $feedback_moduals_ios]);

?>