<?php require "requires/session_setup.php"; ?>
<!DOCTYPE html>
<html class='html_transform'>

<head>
	<title>Switch24 Configuration</title>
	<link href="<?php require 'requires/csspath_switch24.php'; ?>" rel="stylesheet">

	<meta name="viewport" content="width=1200, height=480, user-scalable=yes">
	<link href="/common/css/jquery-ui.css?ver=30700" rel="stylesheet" type="text/css">
	<link href="/common/css/jquery.ui.spinner.min.css?ver=30700" rel="stylesheet" type="text/css">
	<link href="/common/css/dropdown.css?ver=30700" rel="stylesheet" type="text/css">
	<link href="/common/css/jquery.modal_switch24.css?ver=30700" rel="stylesheet">
	<link href="/common/css/keyboard-custom-alphabetic.css?ver=30700" rel="stylesheet">
	<link href="/common/phason.ico" rel="shortcut icon" type="image/x-icon">

	<script src="/common/js/jquery-3.0.0.min.js?ver=30700" type="text/javascript"></script>

	<style>
		.grid_container {
			display: inline-grid;
			/* grid_template-columns: 12% 11% 11% 11% 11% 11% 11% 11% 11%; */

			/* grid-template-columns: 3.125% 10.625% 1.25% 10.625% 1.25% 10.625% 1.25% 10.625% 1.25% 10.625% 1.25% 10.625% 1.25% 10.625% 1.25% 10.625% 3.125%; */

			/* grid-template-columns: 1.125% 11.125% 1.25% 11.125% 1.25% 11.125% 1.25% 11.125% 1.25% 11.125% 1.25% 11.125% 1.25% 11.125% 1.25% 11.125% 1.125%; */

			grid-template-columns: 0% 11.265625% 1.25% 11.265625% 1.25% 11.265625% 1.25% 11.265625% 1.25% 11.265625% 1.25% 11.265625% 1.25% 11.265625% 1.25% 11.265625% 1.125%;

			grid-template-rows: 15.789473684210525% 25% 2.631578947368421% 25% 2.631578947368421% 25% 3.9473684210526314%;
			/* grid_template-rows: min-content 20% min-content min-content 30% min-content; */

			/* background: url("/common/afxptc/graphics/switch24.png") repeat fixed center; */
			/* background-size: cover; */
			/* background-size: 100% 100%; */
			height: 100%;
			width: 100%;
			/* position: relative; */
			/* border: 1px solid yellow; */
			box-sizing: border-box;
			/* padding: 12px 12px 12px 0; */
			/* padding-top: 12px; */
			z-index: 1;
		}

		.grid_container>div {
			/* background-color: rgba(255, 255, 255, 0.8); */

			/* border: 1px solid red; */

			/* text-align: center; */
			/* vertical-align: bottom; */

			/* padding: 20px 0; */
			/* font-size: 30px; */
			color: white;
		}

		.grid_container div h5 {
			/* font-size: 5px; */
			/* border: 1px solid red; */
			display: inline-flex;
		}

		.grid_container>div :not(a div, span) {
			background-color: #464646;
		}

		/* #grid_item1 h6,
		#grid_item10 h6,
		#grid_item19 h6 {
			background-color: transparent;
			margin-left: 10px;
		} */

		.switch_24 {
			display: flex;
			/* box-sizing: border-box; */
			opacity: 0.9;

			position: relative;
		}

		.switch_24>a {
			/* box-sizing: border-box; */
			width: 100%;
			/* border: 1px solid blue; */
		}

		.switch_24>a>div {
			width: 100%;
			display: flex;
			/* flex-flow: column; */
			flex-direction: column;
			align-items: center;
			justify-content: space-evenly;
			/* border: 1px solid red; */
			height: 100%;
			/* box-sizing: border-box; */
		}

		#grid_item_var {
			grid-column-start: 2;
			grid-column-end: 5;
		}

		#grid_item_io {
			grid-column-start: 6;
			grid-column-end: 17;
		}

		#grid_item_hahaha {
			grid-column-start: 1;
			grid-column-end: 2;
		}

		#grid_item19 {
			/* org 1 */
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		#grid_item20 {
			/* org 2 */
			grid-column-start: 4;
			grid-column-end: 5;
		}

		#grid_item1 {
			/* org 3 */
			grid-column-start: 6;
			grid-column-end: 7;
		}

		#grid_item2 {
			/* org 4 */
			grid-column-start: 8;
			grid-column-end: 9;
		}

		#grid_item3 {
			/* org 5 */
			grid-column-start: 10;
			grid-column-end: 11;
		}

		#grid_item4 {
			/* org 6 */
			grid-column-start: 12;
			grid-column-end: 13;
		}

		#grid_item5 {
			/* org 7 */
			grid-column-start: 14;
			grid-column-end: 15;
		}

		#grid_item6 {
			/* org 8 */
			grid-column-start: 16;
			grid-column-end: 17;
		}

		#grid_item21 {
			/* org 9 */
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		#grid_item22 {
			/* org 10 */
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		#grid_item7 {
			/* org 11 */
			grid-column-start: 6;
			grid-column-end: 7;
			grid-row-start: 4;
			grid-row-end: 5;
		}

		#grid_item8 {
			/* org 12 */
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		#grid_item9 {
			/* org 13 */
			grid-column-start: 10;
			grid-column-end: 11;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		#grid_item10 {
			/* org 14 */
			grid-column-start: 12;
			grid-column-end: 13;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		#grid_item11 {
			/* org 15 */
			grid-column-start: 14;
			grid-column-end: 15;
			grid-row-start: 4;
			grid-row-end: 5;
		}

		#grid_item12 {
			/* org 16 */
			grid-column-start: 16;
			grid-column-end: 17;
			grid-row-start: 4;
			grid-row-end: 5;
		}

		#grid_item23 {
			/* org 17 */
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		#grid_item24 {
			/* org 18 */
			grid-column-start: 4;
			grid-column-end: 5;
			grid-row-start: 6;
			grid-row-end: 7;
		}

		#grid_item13 {
			/* org 19 */
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		#grid_item14 {
			/* org 20 */
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		#grid_item15 {
			/* org 21 */
			grid-column-start: 10;
			grid-column-end: 11;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		#grid_item16 {
			/* org 22 */
			grid-column-start: 12;
			grid-column-end: 13;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		#grid_item17 {
			/* org 23 */
			grid-column-start: 14;
			grid-column-end: 15;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		#grid_item18 {
			/* org 24 */
			grid-column-start: 16;
			grid-column-end: 17;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		/* .switch_24 .switch_led_on {
			border: 1px solid green;
			box-sizing: border-box;
		} */

		/* .switch_24 .switch_led_on> :nth-child(2) {
			content: url("../common/graphics/icon-led-green.png");
		} */

		/* .switch_24 .switch_led_off> :nth-child(2) {
			content: url("../common/graphics/icon-led-grey.png");
		} */

		/* .switch_24 div> :nth-child(3) {
			content: url("../common/afxptc/graphics/icon-switch-down.svg");
		} */

		.grid_container>div {

			/* border: 1px solid red; */
		}

		#grid_item_var {
			/* content: url("../afx/afx_graphics/knob-label.svg"); */

			background-image: url('../afx/afx_graphics/knob-label.svg');
			/* background-repeat: no-repeat, no-repeat, no-repeat no-repeat; */
			background-size: 100% 100%;
		}

		#grid_item_io {
			/* content: url("../afx/afx_graphics/switch-label.svg"); */

			background-image: url('../afx/afx_graphics/switch-label.svg');
			/* background-repeat: no-repeat, no-repeat, repeat-x; */
			background-size: 100% 100%;
		}

		.switch_24 div>.switch_io_auto {
			/* content: url("../common/afxptc/graphics/icon-switch-down.svg"); */
			content: url("../afx/afx_graphics/switch-position-auto.png");
		}

		.switch_24 div>.switch_io_on {
			/* content: url("../common/afxptc/graphics/icon-switch-down.svg"); */
			content: url("../afx/afx_graphics/switch-position-manual.png");
		}

		.switch_24 div>.switch_io_off {
			/* content: url("../common/afxptc/graphics/icon-switch-down.svg"); */
			content: url("../afx/afx_graphics/switch-position-off.png");
		}

		.switch_24 div>.switch_var_auto {
			content: url("../afx/afx_graphics/knob-position-off.png");
		}

		.switch_24 div>.switch_var_ncfg {
			content: url("../afx/afx_graphics/knob-position-off.png");
		}

		/* 
		.switch_24 div>.switch_var_20 {
			content: url("../afx/afx_graphics/knob-position-20.png");
		}

		.switch_24 div>.switch_var_40 {
			content: url("../afx/afx_graphics/knob-position-40.png");
		}

		.switch_24 div>.switch_var_60 {
			content: url("../afx/afx_graphics/knob-position-60.png");
		}

		.switch_24 div>.switch_var_80 {
			content: url("../afx/afx_graphics/knob-position-80.png");
		}

		.switch_24 div>.switch_var_100 {
			content: url("../afx/afx_graphics/knob-position-100.png");
		}
*/
		.switch_24 .configed {
			border: 1px solid green;
			box-sizing: border-box;
		}


		/* ********************* modal ************************** */
		#switch_config_modal {
			height: calc(100% - 50px);
		}

		.switch24_container {
			display: flex;
			height: 100%;
			padding: 15px;
			background-color: white;
			border-radius: 8px;
		}

		.switch24_container>div {
			/* border: 2px solid blue; */
		}

		.switch24_left {
			flex-grow: 1;
			display: inline-grid;
			grid-template-columns: 50% 50%;
			grid-template-rows: 50% 20% 30%;
			background-size: 100% 100%;
		}

		.left_grid_top {
			grid-column-start: 1;
			grid-column-end: 3;
		}

		.left_grid_remove {
			grid-column-start: 1;
			grid-column-end: 3;
		}

		.switch24_left div {
			/* border: 1px solid red; */
		}

		.left_grid_remove,
		.left_grid_cancel,
		.left_grid_save {
			display: flex;
			justify-content: center;
		}

		.left_grid_remove {
			align-items: center;
		}

		.left_grid_cancel,
		.left_grid_save {
			align-items: flex-end;
		}

		.left_grid_remove input[type='button'] {
			background-color: aqua;
			color: black;
			border: none;
		}

		/* ********************* main ************************** */
		.switch24_right_container {
			flex-grow: 4;

			position: relative;
		}

		.switch24_right_container>div {
			/* border: 1px solid red; */
			width: 100%;
			height: 100%;
		}

		.switch24_right_main {
			/* flex-grow: 3; */
			position: absolute;
			z-index: 1;

			display: inline-grid;
			grid-template-columns: 4.35% 17.647058823529413% 7.058823529411765% 17.647058823529413% 7.058823529411765% 17.647058823529413% 7.058823529411765% 17.647058823529413% 4.2352941176470586%;

			/* grid-template-rows: 3.8461538461538464% 20.512820512820512% 4.358974358974359% 20.
			512820512820512% 4.358974358974359% 20.512820512820512% 4.358974358974359% 20.512820512820512% 1.0256410256410256%; */

			grid-template-rows: 4.2% 20.512820512820512% 4.358974358974359% 20.512820512820512% 4.358974358974359% 20.512820512820512% 4.358974358974359% 20.512820512820512% 1.0256410256410256%;

			/* background: url("/common/afxptc/graphics/AFXM_back_panel_resize.png") no-repeat  center; */
			/* background: url("/common/afxptc/graphics/auto_flex_bottom_board_resize.png") no-repeat center; */
			background: url("/afx/afx_graphics/switch-config-backboard-main.png") no-repeat center;

			background-size: 100% 100%;
		}

		.switch24_right_main_overlay {
			/* flex-grow: 3; */
			position: absolute;
			z-index: 2;

			display: inline-grid;
			grid-template-columns: 1.647058823529412% 22.35294117647059% 2.3529411764705882% 22.35294117647059% 2.3529411764705882% 22.35294117647059% 2.3529411764705882% 22.35294117647059% 1.8823529411764704%;

			grid-template-rows: 4.2% 20.512820512820512% 4.358974358974359% 20.512820512820512% 4.358974358974359% 20.512820512820512% 4.358974358974359% 20.512820512820512% 1.0256410256410256%;

			background-size: 100% 100%;
		}

		.switch24_right_main_mini {
			/* flex-grow: 3; */
			position: absolute;
			z-index: 1;

			display: inline-grid;
			grid-template-columns: 4.25% 17.647058823529413% 7.058823529411765% 17.647058823529413% 7.058823529411765% 17.647058823529413% 7.058823529411765% 17.647058823529413% 4.2352941176470586%;

			/* 7.142857142857142 */
			grid-template-rows: 7.842857142857142% 38.095238095238093% 8.095238095238096% 38.095238095238093% 8.095238095238096%;

			background: url("/afx/afx_graphics/switch-config-backboard-main-mini.png") no-repeat center;

			background-size: 100% 100%;
		}

		.switch24_right_main_mini_overlay {
			/* flex-grow: 3; */
			position: absolute;
			z-index: 2;

			display: inline-grid;
			grid-template-columns: 1.647058823529412% 22.35294117647059% 2.3529411764705882% 22.35294117647059% 2.3529411764705882% 22.35294117647059% 2.3529411764705882% 22.35294117647059% 1.8823529411764704%;

			/* 7.142857142857142 */
			grid-template-rows: 7.842857142857142% 38.095238095238093% 8.095238095238096% 38.095238095238093% 8.095238095238096%;


			background-size: 100% 100%;
		}

		.switch24_right_expansion {
			/* flex-grow: 3; */
			position: absolute;
			z-index: 1;

			display: inline-grid;
			grid-template-columns: 4.25% 17.647058823529413% 7.058823529411765% 17.647058823529413% 7.058823529411765% 17.647058823529413% 7.058823529411765% 17.647058823529413% 4.2352941176470586%;

			/* grid-template-rows: 3.8461538461538464% 20.512820512820512% 4.358974358974359% 20.
			512820512820512% 4.358974358974359% 20.512820512820512% 4.358974358974359% 20.512820512820512% 1.0256410256410256%; */

			grid-template-rows: 4.2% 20.512820512820512% 4.358974358974359% 20.512820512820512% 4.358974358974359% 20.512820512820512% 4.358974358974359% 20.512820512820512% 1.0256410256410256%;

			/* background: url("/common/afxptc/graphics/AFXM_back_panel_resize.png") no-repeat  center; */
			/* background: url("/common/afxptc/graphics/auto_flex_bottom_board_resize.png") no-repeat center; */
			background: url("/afx/afx_graphics/switch-config-backboard-expansion.png") no-repeat center;

			background-size: 100% 100%;
		}

		.switch24_right_expansion_overlay {
			/* flex-grow: 3; */
			position: absolute;
			z-index: 2;

			display: inline-grid;
			grid-template-columns: 1.647058823529412% 22.35294117647059% 2.3529411764705882% 22.35294117647059% 2.3529411764705882% 22.35294117647059% 2.3529411764705882% 22.35294117647059% 1.8823529411764704%;

			grid-template-rows: 4.2% 20.512820512820512% 4.358974358974359% 20.512820512820512% 4.358974358974359% 20.512820512820512% 4.358974358974359% 20.512820512820512% 1.0256410256410256%;


			background-size: 100% 100%;
		}

		.switch24_right_expansion_mini {
			/* flex-grow: 3; */
			position: absolute;
			z-index: 1;

			display: inline-grid;
			grid-template-columns: 4.25% 17.647058823529413% 7.058823529411765% 17.647058823529413% 7.058823529411765% 17.647058823529413% 7.058823529411765% 17.647058823529413% 4.2352941176470586%;

			/* 7.142857142857142 */
			grid-template-rows: 7.842857142857142% 38.095238095238093% 8.095238095238096% 38.095238095238093% 8.095238095238096%;

			background: url("/afx/afx_graphics/switch-config-backboard-expansion-mini.png") no-repeat center;

			background-size: 100% 100%;
		}

		.switch24_right_expansion_mini_overlay {
			/* flex-grow: 3; */
			position: absolute;
			z-index: 2;

			display: inline-grid;
			grid-template-columns: 1.647058823529412% 22.35294117647059% 2.3529411764705882% 22.35294117647059% 2.3529411764705882% 22.35294117647059% 2.3529411764705882% 22.35294117647059% 1.8823529411764704%;

			/* 7.142857142857142 */
			grid-template-rows: 7.842857142857142% 38.095238095238093% 8.095238095238096% 38.095238095238093% 8.095238095238096%;


			background-size: 100% 100%;
		}

		/* ********************* main ************************** */

		.switch24_right_main div {
			/* border: 1px solid red; */
			color: yellow;
			background-size: 100% 100%;
		}

		.switch24_right_main .right_grid_item1 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_main .right_grid_item2 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_main .right_grid_item3 {
			grid-column-start: 6;
			grid-column-end: 7;
			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_main .right_grid_item4 {
			grid-column-start: 8;
			grid-column-end: 9;
			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_main .right_grid_item5 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main .right_grid_item6 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main .right_grid_item7 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main .right_grid_item8 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main .right_grid_item9 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_main .right_grid_item10 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_main .right_grid_item11 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_main .right_grid_item12 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_main .right_grid_item13 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 8;
			grid-row-end: 9;
		}

		.switch24_right_main .right_grid_item14 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 8;
			grid-row-end: 9;
		}

		/* ********************* main overlay ************************** */
		.switch24_right_main_overlay div {
			color: blueviolet;
			font-size: x-large;
			background-size: 100% 100%;
			/* border: 1px dashed blue; */
		}

		.switch24_right_main_overlay .right_grid_item1 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_main_overlay .right_grid_item2 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_main_overlay .right_grid_item3 {
			grid-column-start: 6;
			grid-column-end: 7;
			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_main_overlay .right_grid_item4 {
			grid-column-start: 8;
			grid-column-end: 9;
			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_main_overlay .right_grid_item5 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main_overlay .right_grid_item6 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main_overlay .right_grid_item7 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main_overlay .right_grid_item8 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main_overlay .right_grid_item9 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_main_overlay .right_grid_item10 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_main_overlay .right_grid_item11 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_main_overlay .right_grid_item12 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_main_overlay .right_grid_item13 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 8;
			grid-row-end: 9;
		}

		.switch24_right_main_overlay .right_grid_item14 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 8;
			grid-row-end: 9;
		}

		.switch24_right_main_overlay .right_grid_arrow_left {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 8;
			grid-row-end: 9;
		}


		.switch24_right_main_overlay .right_grid_arrow_right {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 8;
			grid-row-end: 9;
		}

		.switch24_right_main_overlay>div {
			display: flex;

			/* justify-content: center; */

			/* ok for 4, not for 2 */
			/* justify-content: space-around;  */

			/* ok for 4, and 2? */
			justify-content: space-evenly;

			/* justify-content: space-between; */

			align-items: center;
		}

		.switch24_right_main_overlay>div div:not(.right_grid_arrow_left_inner, .right_grid_arrow_right_inner) {
			width: 24%;
			text-align: center;
			border-radius: 8px;
		}

		/* .switch24_right_main_overlay > div.right_grid_item1 > div.port_avail */

		.switch24_right_main_overlay>div div:nth-child(1).port_avail {
			background-image: url("/common/afxptc/graphics/button-1-green.svg");
		}

		.switch24_right_main_overlay>div div:nth-child(1).port_occupied {
			background-image: url("/common/afxptc/graphics/button-1-yellow.svg");
		}

		.switch24_right_main_overlay>div div:nth-child(1).port_unavail {
			background-image: url("/common/afxptc/graphics/button-1-gray.svg");
		}

		.switch24_right_main_overlay>div div:nth-child(1).port_clicked {
			background-image: url("/common/afxptc/graphics/button-1-blue.svg");
		}

		/*  */

		.switch24_right_main_overlay>div div:nth-child(2).port_avail {
			background-image: url("/common/afxptc/graphics/button-2-green.svg");
		}

		.switch24_right_main_overlay>div div:nth-child(2).port_occupied {
			background-image: url("/common/afxptc/graphics/button-2-yellow.svg");
		}

		.switch24_right_main_overlay>div div:nth-child(2).port_unavail {
			background-image: url("/common/afxptc/graphics/button-2-gray.svg");
		}

		.switch24_right_main_overlay>div div:nth-child(2).port_clicked {
			background-image: url("/common/afxptc/graphics/button-2-blue.svg");
		}

		/*  */

		.switch24_right_main_overlay>div div:nth-child(3).port_avail {
			background-image: url("/common/afxptc/graphics/button-3-green.svg");
		}

		.switch24_right_main_overlay>div div:nth-child(3).port_occupied {
			background-image: url("/common/afxptc/graphics/button-3-yellow.svg");
		}

		.switch24_right_main_overlay>div div:nth-child(3).port_unavail {
			background-image: url("/common/afxptc/graphics/button-3-gray.svg");
		}

		.switch24_right_main_overlay>div div:nth-child(3).port_clicked {
			background-image: url("/common/afxptc/graphics/button-3-blue.svg");
		}

		/*  */

		.switch24_right_main_overlay>div div:nth-child(4).port_avail {
			background-image: url("/common/afxptc/graphics/button-4-green.svg");
		}

		.switch24_right_main_overlay>div div:nth-child(4).port_occupied {
			background-image: url("/common/afxptc/graphics/button-4-yellow.svg");
		}

		.switch24_right_main_overlay>div div:nth-child(4).port_unavail {
			background-image: url("/common/afxptc/graphics/button-4-gray.svg");
		}

		.switch24_right_main_overlay>div div:nth-child(4).port_clicked {
			background-image: url("/common/afxptc/graphics/button-4-blue.svg");
		}


		/* ********************* arrow ************************** */

		.right_grid_arrow_left,
		.right_grid_arrow_right {
			display: flex;

			justify-content: center;
			align-items: center;
		}

		.right_grid_arrow_left div {
			content: url("/common/afxptc/graphics/icon-left.svg");
		}

		.right_grid_arrow_right div {
			content: url("/common/afxptc/graphics/icon-right.svg");
		}

		/* ********************* main mini ************************** */
		.switch24_right_main_mini div {
			/* border: 1px solid red; */
			color: blue;
			background-size: 100% 100%;
		}

		.switch24_right_main_mini .right_grid_item1 {
			grid-column-start: 6;
			grid-column-end: 7;
			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_main_mini .right_grid_item2 {
			grid-column-start: 8;
			grid-column-end: 9;
			grid-row-start: 2;
			grid-row-end: 3;
		}


		.switch24_right_main_mini .right_grid_item3 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main_mini .right_grid_item4 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main_mini .right_grid_item5 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main_mini .right_grid_item6 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		/* ********************* main mini overlay ************************** */

		.switch24_right_main_mini_overlay div {
			/* border: 1px solid red; */
			/* background-color: red; */
			color: blue;
			font-size: x-large;
			background-size: 100% 100%;
			/* border: 1px dashed blue; */
		}

		.switch24_right_main_mini_overlay .right_grid_item1 {
			grid-column-start: 6;
			grid-column-end: 7;
			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_main_mini_overlay .right_grid_item2 {
			grid-column-start: 8;
			grid-column-end: 9;
			grid-row-start: 2;
			grid-row-end: 3;
		}


		.switch24_right_main_mini_overlay .right_grid_item3 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main_mini_overlay .right_grid_item4 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main_mini_overlay .right_grid_item5 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main_mini_overlay .right_grid_item6 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_main_mini_overlay .right_grid_arrow_left {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_main_mini_overlay .right_grid_arrow_right {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		/* ss */
		.switch24_right_main_mini_overlay>div {
			display: flex;
			justify-content: space-evenly;
			align-items: center;
		}

		.switch24_right_main_mini_overlay>div div:not(.right_grid_arrow_left_inner, .right_grid_arrow_right_inner) {
			width: 24%;
			text-align: center;
			border-radius: 8px;
		}

		.switch24_right_main_mini_overlay>div div:nth-child(1).port_avail {
			background-image: url("/common/afxptc/graphics/button-1-green.svg");
		}

		.switch24_right_main_mini_overlay>div div:nth-child(1).port_occupied {
			background-image: url("/common/afxptc/graphics/button-1-yellow.svg");
		}

		.switch24_right_main_mini_overlay>div div:nth-child(1).port_unavail {
			background-image: url("/common/afxptc/graphics/button-1-gray.svg");
		}

		.switch24_right_main_mini_overlay>div div:nth-child(1).port_clicked {
			background-image: url("/common/afxptc/graphics/button-1-blue.svg");
		}

		/*  */

		.switch24_right_main_mini_overlay>div div:nth-child(2).port_avail {
			background-image: url("/common/afxptc/graphics/button-2-green.svg");
		}

		.switch24_right_main_mini_overlay>div div:nth-child(2).port_occupied {
			background-image: url("/common/afxptc/graphics/button-2-yellow.svg");
		}

		.switch24_right_main_mini_overlay>div div:nth-child(2).port_unavail {
			background-image: url("/common/afxptc/graphics/button-2-gray.svg");
		}

		.switch24_right_main_mini_overlay>div div:nth-child(2).port_clicked {
			background-image: url("/common/afxptc/graphics/button-2-blue.svg");
		}

		/*  */

		.switch24_right_main_mini_overlay>div div:nth-child(3).port_avail {
			background-image: url("/common/afxptc/graphics/button-3-green.svg");
		}

		.switch24_right_main_mini_overlay>div div:nth-child(3).port_occupied {
			background-image: url("/common/afxptc/graphics/button-3-yellow.svg");
		}

		.switch24_right_main_mini_overlay>div div:nth-child(3).port_unavail {
			background-image: url("/common/afxptc/graphics/button-3-gray.svg");
		}

		.switch24_right_main_mini_overlay>div div:nth-child(3).port_clicked {
			background-image: url("/common/afxptc/graphics/button-3-blue.svg");
		}

		/*  */

		.switch24_right_main_mini_overlay>div div:nth-child(4).port_avail {
			background-image: url("/common/afxptc/graphics/button-4-green.svg");
		}

		.switch24_right_main_mini_overlay>div div:nth-child(4).port_occupied {
			background-image: url("/common/afxptc/graphics/button-4-yellow.svg");
		}

		.switch24_right_main_mini_overlay>div div:nth-child(4).port_unavail {
			background-image: url("/common/afxptc/graphics/button-4-gray.svg");
		}

		.switch24_right_main_mini_overlay>div div:nth-child(4).port_clicked {
			background-image: url("/common/afxptc/graphics/button-4-blue.svg");
		}

		/* ********************* extend ************************** */

		.switch24_right_expansion div {
			/* border: 1px solid red; */
			color: blue;
			background-size: 100% 100%;
		}

		.switch24_right_expansion .right_grid_item15 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_expansion .right_grid_item16 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_expansion .right_grid_item17 {
			grid-column-start: 6;
			grid-column-end: 7;
			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_expansion .right_grid_item18 {
			grid-column-start: 8;
			grid-column-end: 9;
			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_expansion .right_grid_item19 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion .right_grid_item20 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion .right_grid_item21 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion .right_grid_item22 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion .right_grid_item23 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_expansion .right_grid_item24 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_expansion .right_grid_item25 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_expansion .right_grid_item26 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_expansion .right_grid_item27 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 8;
			grid-row-end: 9;
		}

		.switch24_right_expansion .right_grid_item28 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 8;
			grid-row-end: 9;
		}

		/* ********************* extend overlay ************************** */

		.switch24_right_expansion_overlay div {
			/* border: 1px solid red; */
			color: crimson;
			font-size: x-large;
			background-size: 100% 100%;
		}

		.switch24_right_expansion_overlay .right_grid_item15 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_expansion_overlay .right_grid_item16 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_expansion_overlay .right_grid_item17 {
			grid-column-start: 6;
			grid-column-end: 7;
			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_expansion_overlay .right_grid_item18 {
			grid-column-start: 8;
			grid-column-end: 9;
			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_expansion_overlay .right_grid_item19 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion_overlay .right_grid_item20 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion_overlay .right_grid_item21 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion_overlay .right_grid_item22 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion_overlay .right_grid_item23 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_expansion_overlay .right_grid_item24 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_expansion_overlay .right_grid_item25 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_expansion_overlay .right_grid_item26 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 6;
			grid-row-end: 7;
		}

		.switch24_right_expansion_overlay .right_grid_item27 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 8;
			grid-row-end: 9;
		}

		.switch24_right_expansion_overlay .right_grid_item28 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 8;
			grid-row-end: 9;
		}

		.switch24_right_expansion_overlay .right_grid_arrow_left {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 8;
			grid-row-end: 9;
		}


		.switch24_right_expansion_overlay .right_grid_arrow_right {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 8;
			grid-row-end: 9;
		}

		.switch24_right_expansion_overlay>div {
			display: flex;

			justify-content: space-evenly;

			align-items: center;
		}

		.switch24_right_expansion_overlay>div div:not(.right_grid_arrow_left_inner, .right_grid_arrow_right_inner) {
			width: 24%;

			text-align: center;
			border-radius: 8px;
		}

		.switch24_right_expansion_overlay>div div:nth-child(1).port_avail {
			background-image: url("/common/afxptc/graphics/button-1-green.svg");
		}

		.switch24_right_expansion_overlay>div div:nth-child(1).port_occupied {
			background-image: url("/common/afxptc/graphics/button-1-yellow.svg");
		}

		.switch24_right_expansion_overlay>div div:nth-child(1).port_unavail {
			background-image: url("/common/afxptc/graphics/button-1-gray.svg");
		}

		.switch24_right_expansion_overlay>div div:nth-child(1).port_clicked {
			background-image: url("/common/afxptc/graphics/button-1-blue.svg");
		}

		/*  */

		.switch24_right_expansion_overlay>div div:nth-child(2).port_avail {
			background-image: url("/common/afxptc/graphics/button-2-green.svg");
		}

		.switch24_right_expansion_overlay>div div:nth-child(2).port_occupied {
			background-image: url("/common/afxptc/graphics/button-2-yellow.svg");
		}

		.switch24_right_expansion_overlay>div div:nth-child(2).port_unavail {
			background-image: url("/common/afxptc/graphics/button-2-gray.svg");
		}

		.switch24_right_expansion_overlay>div div:nth-child(2).port_clicked {
			background-image: url("/common/afxptc/graphics/button-2-blue.svg");
		}

		/*  */

		.switch24_right_expansion_overlay>div div:nth-child(3).port_avail {
			background-image: url("/common/afxptc/graphics/button-3-green.svg");
		}

		.switch24_right_expansion_overlay>div div:nth-child(3).port_occupied {
			background-image: url("/common/afxptc/graphics/button-3-yellow.svg");
		}

		.switch24_right_expansion_overlay>div div:nth-child(3).port_unavail {
			background-image: url("/common/afxptc/graphics/button-3-gray.svg");
		}

		.switch24_right_expansion_overlay>div div:nth-child(3).port_clicked {
			background-image: url("/common/afxptc/graphics/button-3-blue.svg");
		}

		/*  */

		.switch24_right_expansion_overlay>div div:nth-child(4).port_avail {
			background-image: url("/common/afxptc/graphics/button-4-green.svg");
		}

		.switch24_right_expansion_overlay>div div:nth-child(4).port_occupied {
			background-image: url("/common/afxptc/graphics/button-4-yellow.svg");
		}

		.switch24_right_expansion_overlay>div div:nth-child(4).port_unavail {
			background-image: url("/common/afxptc/graphics/button-4-gray.svg");
		}

		.switch24_right_expansion_overlay>div div:nth-child(4).port_clicked {
			background-image: url("/common/afxptc/graphics/button-4-blue.svg");
		}

		/* ********************* extend mini ************************** */

		.switch24_right_expansion_mini div {
			/* border: 1px solid red; */
			color: blue;
			background-size: 100% 100%;
		}

		.switch24_right_expansion_mini .right_grid_item15 {
			grid-column-start: 6;
			grid-column-end: 7;
			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_expansion_mini .right_grid_item16 {
			grid-column-start: 8;
			grid-column-end: 9;
			grid-row-start: 2;
			grid-row-end: 3;
		}


		.switch24_right_expansion_mini .right_grid_item17 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion_mini .right_grid_item18 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion_mini .right_grid_item19 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion_mini .right_grid_item20 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion_mini .right_grid_arrow_left {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_expansion_mini .right_grid_arrow_right {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		/* ********************* extend mini overlay ************************** */
		.switch24_right_expansion_mini_overlay div {
			/* border: 1px solid red; */
			color: blue;
			font-size: x-large;
			background-size: 100% 100%;
		}

		.switch24_right_expansion_mini_overlay .right_grid_item15 {
			grid-column-start: 6;
			grid-column-end: 7;
			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_expansion_mini_overlay .right_grid_item16 {
			grid-column-start: 8;
			grid-column-end: 9;
			grid-row-start: 2;
			grid-row-end: 3;
		}


		.switch24_right_expansion_mini_overlay .right_grid_item17 {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion_mini_overlay .right_grid_item18 {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion_mini_overlay .right_grid_item19 {
			grid-column-start: 6;
			grid-column-end: 7;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion_mini_overlay .right_grid_item20 {
			grid-column-start: 8;
			grid-column-end: 9;

			grid-row-start: 4;
			grid-row-end: 5;
		}

		.switch24_right_expansion_mini_overlay .right_grid_arrow_left {
			grid-column-start: 2;
			grid-column-end: 3;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_expansion_mini_overlay .right_grid_arrow_right {
			grid-column-start: 4;
			grid-column-end: 5;

			grid-row-start: 2;
			grid-row-end: 3;
		}

		.switch24_right_expansion_mini_overlay>div {
			display: flex;

			justify-content: space-evenly;

			align-items: center;
		}

		.switch24_right_expansion_mini_overlay>div div:not(.right_grid_arrow_left_inner, .right_grid_arrow_right_inner) {
			width: 24%;

			text-align: center;
			border-radius: 8px;
		}

		.switch24_right_expansion_mini_overlay>div div:nth-child(1).port_avail {
			background-image: url("/common/afxptc/graphics/button-1-green.svg");
		}

		.switch24_right_expansion_mini_overlay>div div:nth-child(1).port_occupied {
			background-image: url("/common/afxptc/graphics/button-1-yellow.svg");
		}

		.switch24_right_expansion_mini_overlay>div div:nth-child(1).port_unavail {
			background-image: url("/common/afxptc/graphics/button-1-gray.svg");
		}

		.switch24_right_expansion_mini_overlay>div div:nth-child(1).port_clicked {
			background-image: url("/common/afxptc/graphics/button-1-blue.svg");
		}

		/*  */

		.switch24_right_expansion_mini_overlay>div div:nth-child(2).port_avail {
			background-image: url("/common/afxptc/graphics/button-2-green.svg");
		}

		.switch24_right_expansion_mini_overlay>div div:nth-child(2).port_occupied {
			background-image: url("/common/afxptc/graphics/button-2-yellow.svg");
		}

		.switch24_right_expansion_mini_overlay>div div:nth-child(2).port_unavail {
			background-image: url("/common/afxptc/graphics/button-2-gray.svg");
		}

		.switch24_right_expansion_mini_overlay>div div:nth-child(2).port_clicked {
			background-image: url("/common/afxptc/graphics/button-2-blue.svg");
		}

		/*  */

		.switch24_right_expansion_mini_overlay>div div:nth-child(3).port_avail {
			background-image: url("/common/afxptc/graphics/button-3-green.svg");
		}

		.switch24_right_expansion_mini_overlay>div div:nth-child(3).port_occupied {
			background-image: url("/common/afxptc/graphics/button-3-yellow.svg");
		}

		.switch24_right_expansion_mini_overlay>div div:nth-child(3).port_unavail {
			background-image: url("/common/afxptc/graphics/button-3-gray.svg");
		}

		.switch24_right_expansion_mini_overlay>div div:nth-child(3).port_clicked {
			background-image: url("/common/afxptc/graphics/button-3-blue.svg");
		}

		/*  */

		.switch24_right_expansion_mini_overlay>div div:nth-child(4).port_avail {
			background-image: url("/common/afxptc/graphics/button-4-green.svg");
		}

		.switch24_right_expansion_mini_overlay>div div:nth-child(4).port_occupied {
			background-image: url("/common/afxptc/graphics/button-4-yellow.svg");
		}

		.switch24_right_expansion_mini_overlay>div div:nth-child(4).port_unavail {
			background-image: url("/common/afxptc/graphics/button-4-gray.svg");
		}

		.switch24_right_expansion_mini_overlay>div div:nth-child(4).port_clicked {
			background-image: url("/common/afxptc/graphics/button-4-blue.svg");
		}

		/*  */

		.module-available-rm23ph {
			background-image: url("../common/afxptc/graphics/RM-2-3PH.png");
		}

		.module-available-rm2 {
			background-image: url("../common/afxptc/graphics/RM-2.png");
		}

		.module-available-act1t {
			background-image: url("../common/afxptc/graphics/ACT-1T.png");
		}

		.module-available-rm4 {
			background-image: url("../common/afxptc/graphics/RM-4.png");
		}

		.module-available-loopdrive {
			background-image: url("../common/afxptc/graphics/LOOP-DRIVE.png");
		}

		.module-available-loopsense {
			background-image: url("../common/afxptc/graphics/LOOP-SENSE.png");
		}

		.module-available-vac1 {
			background-image: url("../common/afxptc/graphics/VAC-1.png");
		}

		.module-available-vcmdc {
			background-image: url("../common/afxptc/graphics/RPM-1.png");
		}

		.module-available-act1v {
			background-image: url("../common/afxptc/graphics/ACT-1V.png");
		}

		.module-available-act1 {
			background-image: url("../common/afxptc/graphics/ACT-1.png");
		}

		.module-available-in4 {
			background-image: url("../common/afxptc/graphics/IN-4.png");
		}

		.module-available-vdc4 {
			background-image: url("../common/afxptc/graphics/VDC-4.png");
		}

		/*  BBBBBBBBBBBBBBBBBBBBBBB  */

		.module-unavailable-rm23ph {
			background-image: url("../common/afxptc/graphics/RM-2-3PH-grey.png");
		}

		.module-unavailable-rm2 {
			background-image: url("../common/afxptc/graphics/RM-2-grey.png");
		}

		.module-unavailable-act1t {
			background-image: url("../common/afxptc/graphics/ACT-1T-grey.png");
		}

		.module-unavailable-rm4 {
			background-image: url("../common/afxptc/graphics/RM-4-grey.png");
		}

		.module-unavailable-loopdrive {
			background-image: url("../common/afxptc/graphics/LOOP-DRIVE-grey.png");
		}

		.module-unavailable-loopsense {
			background-image: url("../common/afxptc/graphics/LOOP-SENSE-grey.png");
		}

		.module-unavailable-vac1 {
			background-image: url("../common/afxptc/graphics/VAC-1-grey.png");
		}

		.module-unavailable-vcmdc {
			background-image: url("../common/afxptc/graphics/RPM-1-grey.png");
		}

		.module-unavailable-act1v {
			background-image: url("../common/afxptc/graphics/ACT-1V-grey.png");
		}

		.module-unavailable-act1 {
			background-image: url("../common/afxptc/graphics/ACT-1-grey.png");
		}

		.module-unavailable-in4 {
			background-image: url("../common/afxptc/graphics/IN-4-grey.png");
		}

		.module-unavailable-vdc4 {
			background-image: url("../common/afxptc/graphics/VDC-4-grey.png");
		}

		/* .blink_test {
			animation: blink3 1.7s infinite alternate;
		} */

		.switch_blink {
			animation: blink_white 1.7s infinite alternate;
			/* box-shadow:
				0 0 3px #fff,
				0 0 6px #fff,
				0 0 9px #fff,
				0 0 12px green,
				0 0 15px green,
				0 0 18px green; */
		}

		.led_blink {
			animation: blink_led_white 1.7s infinite alternate;
		}

		/* .blink_test_red {
			animation: blink_red 1.7s infinite alternate;
		}

		.blink_test_red2 {
			animation: blink_red2 1.7s infinite alternate;
		} */

		.board_tip {
			display: flex;
			justify-content: center;
			align-items: center;

			position: absolute;
			width: 100%;
			height: 380px;

			color: white;
			opacity: 0.5;
			z-index: -2;
			/* border: 1px solid red; */
			box-sizing: border-box;
		}

		.board_tip h1 {
			font-size: 80px;
		}

		#for_exp {
			display: flex;
			justify-content: center;
			align-items: center;

			position: absolute;
			width: 100%;
			height: 380px;

			color: white;
			opacity: 0.5;
			z-index: -4;
			/* border: 2px solid blue; */
			box-sizing: border-box;
		}

		#grid_board_container {
			display: flex;
			flex-direction: row;
		}

		#board_select {
			/* background-color: palevioletred; */
			width: 40px;
			/* height: 100%; */
			display: inline-block;

			display: flex;
			flex-direction: column;
			justify-content: center;
			align-content: center;
			flex-wrap: wrap;

			/* padding: 15px; */
			gap: 15px;
		}

		#board_select ._slected {
			background-color: #79BCE7;
		}

		.page_bd {
			background-color: white;
			border-radius: 50%;

			width: 25px;
			height: 25px;
			text-align: center;
			color: black;
		}

		.div_led {
			position: absolute;
			right: 5px;
			top: 5px;

			width: 12px;
			height: 12px;
			border-radius: 50%;
		}

		.div_knob {
			position: absolute;
			right: 3px;
			top: 3px;

			/* width: 20px;
			height: 20px; */
			font-size: 11px;
			/* padding: 2px; */
			/* border-radius: 50%; */
			color: white;
			display: inline-block;
			/* background-color: transparent; */
			/* background-color: white; */
			border-radius: 50%;
			/* background-image: radial-gradient(circle, white 100%, white 50%, white 20%); */
		}

		.knob_on_ {
			/* background-color: green; */
			/* background-color: red; */
			/* box-shadow:
				0 0 3px #fff,
				0 0 6px #fff,
				0 0 9px #fff,
				0 0 12px green,
				0 0 15px green,
				0 0 28px green;			 */
			/* box-shadow:
				0 0 3px #000,
				0 0 6px #000,
				0 0 9px #fff,
				0 0 12px white,
				0 0 15px white,
				0 0 28px white; */
			box-shadow:
				0 0 10px 5px white;
		}

		.led_on {
			background-color: green;
			/* background-color: red; */
			/* background-color: whitesmoke; */
			/* box-shadow:
				0 0 3px #fff,
				0 0 6px #fff,
				0 0 9px #fff,
				0 0 12px green,
				0 0 15px green,
				0 0 28px green;			 */
			box-shadow:
				0 0 1px #fff,
				0 0 3px #fff,
				0 0 6px #fff,
				0 0 9px #fff,
				0 0 12px white,
				0 0 15px white,
				0 0 28px white;
		}

		.led_off {
			width: 9px;
			height: 9px;
			border: 1px solid white;
			background-color: white;
		}

		/* animation */
		/* @keyframes blink1 {
			0% {
				-moz-box-shadow:
					0 0 8px white;
				box-shadow:
					0 0 8px white;
			}

			25% {
				-moz-box-shadow:
					0 0 16px white;
				box-shadow:
					0 0 16px white;
			}

			50% {
				-moz-box-shadow:
					0 0 28px white;
				box-shadow:
					0 0 28px white;
			}

			75% {
				-moz-box-shadow:
					0 0 16px white;
				box-shadow:
					0 0 16px white;
			}

			100% {
				-moz-box-shadow:
					0 0 8px white;
				box-shadow:
					0 0 8px white;
			}
		}

		@-webkit-keyframes blink2 {
			100% {
				box-shadow:
					0 0 3px #fff,
					0 0 10px #fff,
					0 0 20px #fff,
					0 0 40px #0ba9ca,
					0 0 70px #0ba9ca,
					0 0 80px #0ba9ca;
			}
		}

		@keyframes blink2 {
			100% {
				box-shadow:
					0 0 3px #fff,
					0 0 10px #fff,
					0 0 20px #fff,
					0 0 40px #0ba9ca,
					0 0 70px #0ba9ca,
					0 0 80px #0ba9ca;
			}
		}


		@-webkit-keyframes blink3 {
			100% {
				box-shadow:
					0 0 3px #fff,
					0 0 6px #fff,
					0 0 9px #fff,
					0 0 12px rgb(64, 41, 235),
					0 0 15px rgb(64, 41, 235),
					0 0 28px rgb(64, 41, 235);
			}
		}

		@keyframes blink3 {
			100% {
				box-shadow:
					0 0 3px #fff,
					0 0 6px #fff,
					0 0 9px #fff,
					0 0 12px rgb(64, 41, 235),
					0 0 15px rgb(64, 41, 235),
					0 0 28px rgb(64, 41, 235);
			}
		} */

		@-webkit-keyframes blink_white {
			100% {
				box-shadow:
					0 0 3px #fff,
					0 0 6px #fff,
					0 0 9px #fff,
					0 0 12px green,
					0 0 15px green,
					0 0 28px green;
			}
		}

		@keyframes blink_white {
			100% {
				box-shadow:
					0 0 3px #fff,
					0 0 6px #fff,
					0 0 9px #fff,
					0 0 12px green,
					0 0 15px green,
					0 0 28px green;
			}
		}

		@-webkit-keyframes blink_led_white {
			100% {
				box-shadow:
					0 0 3px #fff,
					0 0 6px #fff,
					0 0 9px #fff,
					0 0 12px green,
					0 0 15px green,
					0 0 28px green;
			}
		}

		@keyframes blink_led_white {
			100% {
				box-shadow:
					0 0 3px #fff,
					0 0 6px #fff,
					0 0 9px #fff,
					0 0 12px green,
					0 0 15px green,
					0 0 28px green;
			}
		}


		/* UN */
		@-webkit-keyframes blink_red {
			100% {
				box-shadow:
					0 0 3px #fff,
					0 0 6px #fff,
					0 0 9px #fff,
					0 0 12px red,
					0 0 15px red,
					0 0 28px red;
			}
		}

		@keyframes blink_red {
			100% {
				box-shadow:
					0 0 3px #fff,
					0 0 6px #fff,
					0 0 9px #fff,
					0 0 12px red,
					0 0 15px red,
					0 0 28px red;
			}
		}

		@-webkit-keyframes blink_red2 {
			100% {
				box-shadow:
					0 0 3px red,
					0 0 6px red,
					0 0 9px red,
					0 0 12px red,
					0 0 15px red,
					0 0 28px red;
			}
		}

		@keyframes blink_red2 {
			100% {
				box-shadow:
					0 0 3px red,
					0 0 6px red,
					0 0 9px red,
					0 0 12px red,
					0 0 15px red,
					0 0 28px red;
			}
		}

		@keyframes animate {
			0% {
				transform: translateY(0%);
				opacity: 1
			}

			100% {
				transform: translateY(-1200%);
				opacity: 1
			}
		}
	</style>
</head>

<body class='body_transform'>
	<div id="content">
		<?php require 'navigation-bars.php'; ?>
		<div id="grid_board_container">
			<div id="board_select">
				<a data=1 href="../afx/switch24.php?board_id=1">
					<div class="page_bd">1</div>
				</a>
				<a data=2 href="../afx/switch24.php?board_id=2">
					<div class="page_bd">2</div>
				</a>
			</div>
			<div id="setup" class="grid_container">
				<div id="grid_item_var"></div>
				<div id="grid_item_io"></div>

				<div id="grid_item19" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=19" rel="modal:open">
						<div class="unconfiged">
							<h5>#19</h5>
							<div><img class="switch_var_auto" alt="switch." width="30" height="30"></div>
							<h6>Unassigned</h6>
						</div>
					</a>
					<div class="div_knob knob_on"></div>
				</div>
				<div id="grid_item20" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=20" rel="modal:open">
						<div class="unconfiged">
							<h5>#20</h5>
							<div><img class="switch_var_auto" alt="switch." width="30" height="30"></div>
							<h6>Unassigned</h6>
						</div>
					</a>
					<div class="div_knob knob_on"></div>
				</div>

				<div id="grid_item1" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=1" rel="modal:open">
						<div class="unconfiged">
							<h5>#1</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item2" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=2" rel="modal:open">
						<div class="unconfiged">
							<h5>#2</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item3" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=3" rel="modal:open">
						<div class="unconfiged">
							<h5>#3</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item4" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=4" rel="modal:open">
						<div class="unconfiged">
							<h5>#4</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item5" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=5" rel="modal:open">
						<div class="unconfiged">
							<h5>#5</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item6" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=6" rel="modal:open">
						<div class="unconfiged">
							<h5>#6</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item21" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=21" rel="modal:open">
						<div class="unconfiged">
							<h5>#21</h5>
							<!-- <img class="switch_var_auto" alt="switch." width="30" height="30"> -->
							<div><img class="switch_var_auto" alt="switch." width="30" height="30"></div>
							<h6>Unassigned</h6>
						</div>
					</a>
					<div class="div_knob knob_on"></div>
				</div>

				<div id="grid_item22" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=22" rel="modal:open">
						<div class="unconfiged">
							<h5>#22</h5>
							<!-- <img class="switch_var_auto" alt="switch." width="30" height="30"> -->
							<div><img class="switch_var_auto" alt="switch." width="30" height="30"></div>
							<h6>Unassigned</h6>
						</div>
					</a>
					<div class="div_knob knob_on"></div>
				</div>

				<div id="grid_item7" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=7" rel="modal:open">
						<div class="unconfiged">
							<h5>#7</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item8" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=8" rel="modal:open">
						<div class="unconfiged">
							<h5>#8</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item9" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=9" rel="modal:open">
						<div class="unconfiged">
							<h5>#9</h5>
							<img class="switch_io_off" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item10" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=10" rel="modal:open">
						<div class="unconfiged">
							<h5>#10</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item11" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=11" rel="modal:open">
						<div class="unconfiged">
							<h5>#11</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item12" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=12" rel="modal:open">
						<div class="unconfiged">
							<h5>#12</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item23" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=23" rel="modal:open">
						<div class="unconfiged">
							<h5>#23</h5>
							<!-- <img class="switch_var_auto" alt="switch." width="30" height="30"> -->
							<div><img class="switch_var_auto" alt="switch." width="30" height="30"></div>
							<h6>Unassigned</h6>
						</div>
					</a>
					<div class="div_knob knob_on"></div>
				</div>

				<div id="grid_item24" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=24" rel="modal:open">
						<div class="unconfiged">
							<h5>#24</h5>
							<div><img class="switch_var_auto" alt="switch." width="30" height="30"></div>
							<h6>Unassigned</h6>
						</div>
					</a>
					<div class="div_knob knob_on"></div>
				</div>

				<div id="grid_item13" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=13" rel="modal:open">
						<div class="unconfiged">
							<h5>#13</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item14" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=14" rel="modal:open">
						<div class="unconfiged">
							<h5>#14</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item15" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=15" rel="modal:open">
						<div class="unconfiged">
							<h5>#15</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item16" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=16" rel="modal:open">
						<div class="unconfiged">
							<h5>#16</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item17" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=17" rel="modal:open">
						<div class="unconfiged">
							<h5>#17</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

				<div id="grid_item18" class="switch_24">
					<a href="/common/afxptc/modals/switch24-modal.php?switch=18" rel="modal:open">
						<div class="unconfiged">
							<h5>#18</h5>
							<img class="" alt="switch." width="30" height="30">
							<h6>Unassigned</h6>
						</div>
					</a>
					<span class="div_led"></span>
				</div>

			</div>
		</div>
		<?php require 'bottom-bar-switch24.php'; ?>
	</div>

	<!-- <script src="/common/js/jquery-3.0.0.min.js?ver=30700" type="text/javascript"></script> -->
	<script src="/common/afxptc/js/afxptc_common.js?ver=30700"></script>
	<script src="/afx/afx_javas/autoflex_common.js?ver=30700"></script>
	<script src="/common/javas/common.js?ver=30700" type="text/javascript"></script>
	<script src="/common/afxptc/js/switch24_configuration.js?ver=30700" type="text/javascript"></script>

	<!-- <script src="/common/afxptc/js/backboard_configuration.js?ver=30700" type="text/javascript"></script> -->
	<script src="/common/js/jquery.i18n.js?ver=30700"></script>
	<script src="/common/js/jquery.i18n.messagestore.js?ver=30700"></script>

	<script src="/common/js/moment.js?ver=30700"></script>
	<!-- <script src="/common/afxptc/js/backboard_configuration.js?ver=30700" type="text/javascript"></script> -->
	<script src="/common/js/jquery.modal.min.js?ver=30700" type="text/javascript"></script>

	<!-- <script src="/common/js/jquery.ui.spinner.min.js?ver=30700"></script> ???? -->

	<script src="/afx/afx_javas/barn_switch24.js?ver=30700" type="text/javascript"></script>
	<script src="/common/js/jquery.keyboard.js?ver=30700"></script>
	<script src="/common/js/jquery.mobile.custom.min.js?ver=30700"></script>
	<script src="/common/js/fittext.js?ver=30700"></script>

	<script src="/common/js/object_hash.min.js?ver=30700"></script>

	<script>
		const board_id = "<?php echo $_GET['board_id']; ?>";

		const REQUEST_URI = "<?php echo $_SERVER['REQUEST_URI']; ?>";
		const SCRIPT_NAME = "<?php echo $_SERVER['SCRIPT_NAME']; ?>";

		// actuators/curtains/vcms/feed loop 
		const MODULE_T = {
			'2': 'RM4',			// RELAY
			'8': 'RM2',			// RELAY
			'3': 'VDC',			// VARIABLES
			'4': 'VAC',			// VARIABLES
			'9': 'VCM-DC',		// VARIABLES
			'5': 'ACT1',		// ?
			'12': 'ACT1T',		// VARIABLES?
			'10': 'LOOP DRIVE',	// ?
			'11': 'LOOP SENSE'	// ?
		}

		const STATUS_OVERRIDE = {
			OVER_USER: 0b0000000100000000,
			OVER_CURTAIN: 0b0001000000000000,
			OVER_VENT_V: 0b0010000000000000,
			OVER_VENT_D: 0b0100000000000000,
			MODIFIER_ANY: 0b0000000000000001,
			MODIFIER_1: 0b0000000000000010,
			MODIFIER_2: 0b0000000000000100,
			MODIFIER_3: 0b0000000000001000,
			MODIFIER_FB: 0b0000000010000000,
			OVER_USER_SFT: 8,
			OVER_CURTAIN_SFT: 12,
			OVER_VENT_V_SFT: 13,
			OVER_VENT_D_SFT: 14,
			MODIFIER_ANY_SFT: 0,
			MODIFIER_1_SFT: 1,
			MODIFIER_2_SFT: 2,
			MODIFIER_3_SFT: 3,
			MODIFIER_FB_SFT: 7,
		}

		// 1, 2, 9, 10, 17, 18
		// 19, 20, 21, 22, 23, 24
		let VARSW = [19, 20, 21, 22, 23, 24];

		var CPUSavingHash = {};

		var switch_knobs = null;
		// var switch_knobs_file = [
		// 	'var_off', 'var_020', 'auto', 'on', 'off', 'off', 'off', 'off',
		// 	'var_040', 'var_060', 'auto', 'on', 'off', 'off', 'off', 'off',
		// 	'var_080', 'var_100', 'auto', 'on', 'off', 'off', 'off', 'off'];

		// var switch_knobs_file = [
		// 	'var_ncfg', 'var_ncfg', 'off', 'off', 'off', 'off', 'off', 'off',
		// 	'var_ncfg', 'var_ncfg', 'off', 'on', 'off', 'off', 'off', 'off',
		// 	'var_ncfg', 'var_ncfg', 'off', 'off', 'off', 'off', 'auto', 'auto'];

		var switch_knobs_file = [
			'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off',
			'off', 'off', 'off', 'on', 'off', 'off', 'off', 'off',
			'off', 'off', 'var_ncfg', 'var_ncfg', 'var_ncfg', 'var_ncfg', 'var_ncfg', 'var_ncfg'];

		const GRID_HEADER = 'right_grid_item';

		const StatusClass = {
			OCCUP: 'port_occupied',		// YELLOW
			AVAIL: 'port_avail',		// GREEN
			UNAVAIL: 'port_unavail',	// GRAY
			CLICK: 'port_clicked'		// BLUE
		};

		var EXP_EasterEggs = [];
		var EXP_EasterEggsID = 0;

		function getSwitch24Info() {
			$.ajax({
				type: "POST",
				async: false,
				data: { board_id: board_id },
				dataType: "text",
				url: "/afx/afx_php/getSwitchKnobs.php",
				error: function (xhr, ajaxOptions, thrownError) {
					console.log(xhr);
				},
				success: function (data) {
					window.switch_knobs = data;
				}
			});
		}

		function getSwitch24Info_FILE(file) {
			// Array.from({ length: 24 }, (_, i) => i + 1).forEach(function (status, index) {
			// 	file[index] = 'off';
			// });
		}

		getSwitch24Info(switch_knobs);
		// getSwitch24Info_FILE(switch_knobs_file);

		// $(document).on('ready', function () {
		$(document).ready(function () {
			const switchCfgStatus = { yes: 'configed', no: 'unconfiged' };
			const switchIOStatus = { auto: 'switch_io_auto', on: 'switch_io_on', off: 'switch_io_off' };
			const switchVarStatus = { var_auto: 'switch_var_auto', var_ncfg: 'switch_var_ncfg' };

			// let switch01 = { name: 'switch01', type: 'vari', ui_target: 'grid_item19', title: 'Unassigned', status: 'var_auto', config: 'no', 'target_status': 0 };
			// let switch02 = { name: 'switch02', type: 'vari', ui_target: 'grid_item20', title: 'Unassigned', status: 'var_ncfg', config: 'no', 'target_status': 0 };
			// let switch03 = { name: 'switch03', type: 'io', ui_target: 'grid_item1', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch04 = { name: 'switch04', type: 'io', ui_target: 'grid_item2', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch05 = { name: 'switch05', type: 'io', ui_target: 'grid_item3', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch06 = { name: 'switch06', type: 'io', ui_target: 'grid_item4', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch07 = { name: 'switch07', type: 'io', ui_target: 'grid_item5', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch08 = { name: 'switch08', type: 'io', ui_target: 'grid_item6', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch09 = { name: 'switch09', type: 'vari', ui_target: 'grid_item21', title: 'Unassigned', status: 'var_ncfg', config: 'no', 'target_status': 0 };
			// let switch10 = { name: 'switch10', type: 'vari', ui_target: 'grid_item22', title: 'Unassigned', status: 'var_ncfg', config: 'no', 'target_status': 0 };
			// let switch11 = { name: 'switch11', type: 'io', ui_target: 'grid_item7', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch12 = { name: 'switch12', type: 'io', ui_target: 'grid_item8', title: 'Unassigned', status: 'on', config: 'no', 'target_status': 0 };
			// let switch13 = { name: 'switch13', type: 'io', ui_target: 'grid_item9', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 1 };
			// let switch14 = { name: 'switch14', type: 'io', ui_target: 'grid_item10', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch15 = { name: 'switch15', type: 'io', ui_target: 'grid_item11', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch16 = { name: 'switch16', type: 'io', ui_target: 'grid_item12', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch17 = { name: 'switch17', type: 'vari', ui_target: 'grid_item23', title: 'Unassigned', status: 'var_ncfg', config: 'no', 'target_status': 0 };
			// let switch18 = { name: 'switch18', type: 'vari', ui_target: 'grid_item24', title: 'Unassigned', status: 'var_ncfg', config: 'no', 'target_status': 0 };
			// let switch19 = { name: 'switch19', type: 'io', ui_target: 'grid_item13', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch20 = { name: 'switch20', type: 'io', ui_target: 'grid_item14', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch21 = { name: 'switch21', type: 'io', ui_target: 'grid_item15', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch22 = { name: 'switch22', type: 'io', ui_target: 'grid_item16', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch23 = { name: 'switch23', type: 'io', ui_target: 'grid_item17', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			// let switch24 = { name: 'switch24', type: 'io', ui_target: 'grid_item18', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };

			let switch01 = { name: 'switch01', type: 'io', ui_target: 'grid_item1', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch02 = { name: 'switch02', type: 'io', ui_target: 'grid_item2', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch03 = { name: 'switch03', type: 'io', ui_target: 'grid_item3', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch04 = { name: 'switch04', type: 'io', ui_target: 'grid_item4', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch05 = { name: 'switch05', type: 'io', ui_target: 'grid_item5', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch06 = { name: 'switch06', type: 'io', ui_target: 'grid_item6', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch07 = { name: 'switch07', type: 'io', ui_target: 'grid_item7', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch08 = { name: 'switch08', type: 'io', ui_target: 'grid_item8', title: 'Unassigned', status: 'on', config: 'no', 'target_status': 0 };
			let switch09 = { name: 'switch09', type: 'io', ui_target: 'grid_item9', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 1 };
			let switch10 = { name: 'switch10', type: 'io', ui_target: 'grid_item10', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch11 = { name: 'switch11', type: 'io', ui_target: 'grid_item11', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch12 = { name: 'switch12', type: 'io', ui_target: 'grid_item12', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch13 = { name: 'switch13', type: 'io', ui_target: 'grid_item13', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch14 = { name: 'switch14', type: 'io', ui_target: 'grid_item14', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch15 = { name: 'switch15', type: 'io', ui_target: 'grid_item15', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch16 = { name: 'switch16', type: 'io', ui_target: 'grid_item16', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch17 = { name: 'switch17', type: 'io', ui_target: 'grid_item17', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch18 = { name: 'switch18', type: 'io', ui_target: 'grid_item18', title: 'Unassigned', status: 'off', config: 'no', 'target_status': 0 };
			let switch19 = { name: 'switch19', type: 'vari', ui_target: 'grid_item19', title: 'Unassigned', status: 'var_ncfg', config: 'no', 'target_status': 0 };
			let switch20 = { name: 'switch20', type: 'vari', ui_target: 'grid_item20', title: 'Unassigned', status: 'var_ncfg', config: 'no', 'target_status': 0 };
			let switch21 = { name: 'switch21', type: 'vari', ui_target: 'grid_item21', title: 'Unassigned', status: 'var_ncfg', config: 'no', 'target_status': 0 };
			let switch22 = { name: 'switch22', type: 'vari', ui_target: 'grid_item22', title: 'Unassigned', status: 'var_ncfg', config: 'no', 'target_status': 0 };
			let switch23 = { name: 'switch23', type: 'vari', ui_target: 'grid_item23', title: 'Unassigned', status: 'var_ncfg', config: 'no', 'target_status': 0 };
			let switch24 = { name: 'switch24', type: 'vari', ui_target: 'grid_item24', title: 'Unassigned', status: 'var_ncfg', config: 'no', 'target_status': 0 };

			const switch24Status = [switch01, switch02, switch03, switch04, switch05, switch06, switch07, switch08, switch09, switch10, switch11, switch12, switch13, switch14, switch15, switch16, switch17, switch18, switch19, switch20, switch21, switch22, switch23, switch24];

			// console.log('💕2', switch24Status);

			setConfig(switch_knobs, switch_knobs_file, switch24Status);

			// console.log('💕2', switch24Status);

			setSwitches(switch24Status);

			setAnimation();

			setAnimationLed();

			$('#board_select a').on('click', function (e) {
				if (e.currentTarget.getAttribute('data') == board_id) {
					e.preventDefault();
				}
				e.stopPropagation();
			});

			// setBoardIndicator(board_id, $('#id_board_num'));

			function setConfig(from_backend, from_file, switches) {
				const jijiwaiwai = JSON.parse(from_backend);

				var __switches = jijiwaiwai['switch'];
				var moduals_ios = jijiwaiwai['moduals_ios'];

				// console.log('💕', moduals_ios);

				__switches.forEach(function (switch_iovar, index) {
					if (switch_iovar['is_cfged'] === '1') {
						switches[index]['config'] = 'yes';
						switches[index]['status'] = from_file[index];
						switches[index]['title'] = searchTitle(switch_iovar['module_num'], switch_iovar['output_num'], moduals_ios);
					} else {
						switches[index]['config'] = 'no';
						switches[index]['status'] = from_file[index];
						switches[index]['title'] = 'Unassigned';
					}
				});
			}

			function searchTitle(module_num, output_num, moduals) {
				var title = moduals.map(function (element, index) {
					if (element['module_num'] === module_num && element['output_num'] === output_num) {
						return element['relay_description'];
					}
				}).filter(function (element) { return element; });

				return title;
			}

			function setSwitch(switches, index) {
				var target = switches[index - 1];
				$('#' + target['ui_target'] + ' ' + 'h6').text(target['title']);
				$('#' + target['ui_target'] + ' > a > ' + 'div').attr('class', switchCfgStatus[target['config']]);

				if (target['type'] === 'io') {
					$('#' + target['ui_target'] + ' ' + 'img').attr('class', switchIOStatus[target['status']]);
				} else {
					$('#' + target['ui_target'] + ' ' + 'img').attr('class', switchVarStatus[target['status']]);
				}
			}

			function setSwitches(switches) {
				switches.forEach(function (switch_iovar, index) {
					// let grid_num = switch_iovar['ui_target'].substring(9);
					// switch_iovar['ui_target'] = 'grid_item' + SW_MAP[grid_num];
					// console.log('❤️', grid_num, switch_iovar['ui_target']);

					// console.log('😎', switch_iovar['title'], switch_iovar['ui_target']);

					$('#' + switch_iovar['ui_target'] + ' ' + 'h6').text(switch_iovar['title']);
					$('#' + switch_iovar['ui_target'] + ' > a > ' + 'div').attr('class', switchCfgStatus[switch_iovar['config']]);

					if (switch_iovar['type'] === 'io') {
						$('#' + switch_iovar['ui_target'] + ' ' + 'img').attr('class', switchIOStatus[switch_iovar['status']]);

						if (switch_iovar['config'] === 'yes') {
							// if (switch_iovar['target_status'] === 1) {
							// 	$('#' + switch_iovar['ui_target'] + ' ' + 'span').addClass('led_on');
							// } else {
							// 	$('#' + switch_iovar['ui_target'] + ' ' + 'span').addClass('led_off');
							// }
							if (switch_iovar['status'] === 'on') {
								$('#' + switch_iovar['ui_target'] + ' ' + 'span').addClass('led_on');
							} else {
								$('#' + switch_iovar['ui_target'] + ' ' + 'span').addClass('led_off');
							}
						}
					} else {
						// $('#' + switch_iovar['ui_target'] + ' ' + 'img').attr('class', switchVarStatus[switch_iovar['status']]);

						$('#' + switch_iovar['ui_target'] + ' ' + 'img').parent().css({
							'-webkit-transform': `rotate(${switch_iovar['target_status'] * 2.84 + 0}deg)`,
							'-webkit-transform': `rotate(${switch_iovar['target_status'] * 2.84 + 0}deg)`,
							'-webkit-transform': `rotate(${switch_iovar['target_status'] * 2.84 + 0}deg)`,
							'transform': `rotate(${switch_iovar['target_status'] * 2.84 + 0}deg)`
						}, 800);

						if (switch_iovar['target_status'] == 0) {
							$('#' + switch_iovar['ui_target'] + ' > ' + 'div').text(``);
						} else {
							$('#' + switch_iovar['ui_target'] + ' > ' + 'div').text(`${switch_iovar['target_status']}%`);
						}
					}
				});
			}

			function setAnimation() {
				$('.configed').addClass('switch_blink');
			}

			function setAnimationLed() {
				$('.led_on').addClass('led_blink');
			}

			function setBoardIndicator(board_id, target) {
				let board = '';
				switch (parseInt(board_id)) {
					case 1:
						board = 'Main';
						break;
					default:
						board = `Extension ${board_id - 1}`;
				}
				target.text(board);
			}

			function activeExp() {
				switch (sessionStorage.exp) {
					case '1':
						exp1();
						break;
					case '2':
						EXP_EasterEggsID = setInterval(exp2, 250);
						break;
					default:
				}
			}

			(() => {
				if (board_id == 1) {
					$('.page_bd:eq(0)').addClass('_slected');
				} else {
					$('.page_bd:eq(1)').addClass('_slected');
				}
			})();

			(() => {
				let links = $('.switch_24 a');
				links.each(function (index) {
					$(this).attr('href', $(this).attr('href') + `&board=${board_id}`);
				});
			})();


			// 1,3,1,1711536725,1,256,-2209161600,0,0,10,0,2,1,'Rm4_cooling',''
			// this is an example of a relay that is overridden on
			// 1,3,4,1711536725,0,0,-2209161600,0,0,1,0,2,1,'cool_relay',''
			// this is example of a relay that is AUTO off

			// so yes it seems the [override flag is in the upper/larger byte]

			// 1,3,4,1711536909,1,3,-2209161600,0,0,12,0,2,1,'cool_relay',''
			// this is a relay with a [modifier active]. so the flags that relate to modifiers is in the [lower/smaller byte]

			// 256
			// 0
			// 3
			// are the overridden numbers

			// *************************************************************************************************************************

			let __switchs_knobs = JSON.parse(switch_knobs);

			// setInterval(() => {
			// }, 1500);

			setInterval(switchsUpdate, 1500);

			switchsUpdate();

			function switchsUpdate() {
				let __switchs = __switchs_knobs['switch'].filter((swk) => swk.is_cfged == '1');
				let __val_ios = [];
				__switchs.forEach((ele) => {
					__val_ios.push({ board: board_id, switch: ele['switch_id'], module: ele['module_num'], port: ele['output_num'] })
				});
				__val_ios.sort((a, b) => a['module'] - b['module'] || a['port'] - b['port']);

				let __vios = JSON.parse(sessionStorage.flex_status_modules);
				__val_ios.forEach((ele) => {
					let io = status_io_and(parseInt(ele['module']), parseInt(ele['port']), __vios, parseInt(ele['switch']));

					// console.log('💕', ele['module'], io['mtype'], `<${MODULE_T[io['mtype']]}>`, ele['port'], io['iotype'], '**', io['over_user'], io['over_curtain'], io['over_vent_v'], io['over_vent_d'], io['modifier_any'], io['modifier_1'], io['modifier_2'], io['modifier_3'], io['modifier_fb']);

					let iohash = objectHash.sha1(io);
					let key = `hash_${ele['module']}_${ele['port']}`;

					if (CPUSavingHash[`${key}`] == iohash) {
						return;
					} else {
						CPUSavingHash[`${key}`] = iohash;
					}

					if (io['mtype'] == 2 || io['mtype'] == 8) {
						// console.log('🤣', 'RELAY'); 	// RELAY
						if (io['over_user'] == 0) {
							// switch down(auto)
							// relays: (RM2, RM4)
							// if override is cleared (that bit is 0), then it can only be AUTO
							$('#' + 'grid_item' + ele['switch'] + ' img').addClass(switchIOStatus['auto']).removeClass(switchIOStatus['on']).removeClass(switchIOStatus['off']);
							if (io['value'] == 0) {
								$('#' + 'grid_item' + ele['switch'] + ' span').removeClass('led_on').removeClass('led_blink').addClass('led_off');
							} else {
								$('#' + 'grid_item' + ele['switch'] + ' span').removeClass('led_off').addClass('led_on led_blink');
							}

						} else {
							if (!VARSW.includes(parseInt(ele['switch']))) {
								// relays: (RM2, RM4)
								// if override is set (256), then it cannot be AUTO, it can only be ON or OFF. for which you check the status file value
								if (io['value'] == 0) {
									// switch off(middle)
									$('#' + 'grid_item' + ele['switch'] + ' img').addClass(switchIOStatus['off']).removeClass(switchIOStatus['on']).removeClass(switchIOStatus['auto']);
									$('#' + 'grid_item' + ele['switch'] + ' span').removeClass('led_on').removeClass('led_blink').addClass('led_off');
								} else {
									// switch on(up)
									$('#' + 'grid_item' + ele['switch'] + ' img').addClass(switchIOStatus['on']).removeClass(switchIOStatus['auto']).removeClass(switchIOStatus['off']);
									$('#' + 'grid_item' + ele['switch'] + ' span').removeClass('led_off').addClass('led_on led_blink');
								}
							}
						}
					} else if (io['mtype'] == 3) {
						// console.log('🤣3', 'VDC');				// VARIABLES
						if (io['over_user'] == 0) {
							// knob(auto)
							// $('#' + 'grid_item' + ele['switch'] + ' img').addClass(switchIOStatus['auto']).removeClass(switchIOStatus['on']).removeClass(switchIOStatus['off']);
							let value = 0;

							$('#' + 'grid_item' + ele['switch'] + ' img').parent().css({
								'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
								'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
								'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
								'transform': `rotate(${value * 2.84 + 38}deg)`
							}, 800);

							$('#' + 'grid_item' + ele['switch'] + ' > div').html('Auto');
						} else {
							if (VARSW.includes(parseInt(ele['switch']))) {
								// knob value
								let value = parseInt(io['value']);
								$('#' + 'grid_item' + ele['switch'] + ' img').parent().css({
									'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
									'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
									'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
									'transform': `rotate(${value * 2.84 + 38}deg)`
								}, 800);

								$('#' + 'grid_item' + ele['switch'] + ' > div').html(`${value}%`);
							}
						}
					} else if (io['mtype'] == 4) {
						// console.log('🤣4', 'VAC');				// VARIABLES
						if (io['over_user'] == 0) {
							// knob(auto)
							// $('#' + 'grid_item' + ele['switch'] + ' img').addClass(switchIOStatus['auto']).removeClass(switchIOStatus['on']).removeClass(switchIOStatus['off']);
							let value = 0;

							$('#' + 'grid_item' + ele['switch'] + ' img').parent().css({
								'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
								'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
								'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
								'transform': `rotate(${value * 2.84 + 38}deg)`
							}, 800);

							$('#' + 'grid_item' + ele['switch'] + ' > div').html('Auto');
						} else {
							if (VARSW.includes(parseInt(ele['switch']))) {
								// knob value
								let value = parseInt(io['value']);
								$('#' + 'grid_item' + ele['switch'] + ' img').parent().css({
									'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
									'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
									'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
									'transform': `rotate(${value * 2.84 + 38}deg)`
								}, 800);

								$('#' + 'grid_item' + ele['switch'] + ' > div').html(`${value}%`);
							}
						}
					} else if (io['mtype'] == 9) {
						// console.log('🤣', 'VCM-DC');				// VARIABLES
						if (io['over_user'] == 0) {				// knob(auto)
							// variables: (VAC, VDC, VCM-DC)
							// if override is cleared (0), then it can only be AUTO		
							if (VARSW.includes(parseInt(ele['switch']))) {
								// knob value
								let value = 0;

								$('#' + 'grid_item' + ele['switch'] + ' img').parent().css({
									'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
									'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
									'-webkit-transform': `rotate(${value * 2.84 + 38}deg)`,
									'transform': `rotate(${value * 2.84 + 38}deg)`
								}, 800);

								$('#' + 'grid_item' + ele['switch'] + ' > div').html('Auto');
							}

						} else {
							// variables: (VAC, VDC, VCM-DC)
							// if override is set (256), then it cannot be AUTO, only 0-100% - check status file value
							let value = parseInt(io['value']);

							$('#' + 'grid_item' + ele['switch'] + ' img').parent().css({
								'-webkit-transform': `rotate(${0 * 2.84 + 38}deg)`,
								'-webkit-transform': `rotate(${0 * 2.84 + 38}deg)`,
								'-webkit-transform': `rotate(${0 * 2.84 + 38}deg)`,
								'transform': `rotate(${0 * 2.84 + 38}deg)`
							}, 800);

							$('#' + 'grid_item' + ele['switch'] + ' > div').html(`${value}%`);
						}
					} else if (io['mtype'] == 5) {
						console.log('🤣', 'ACT1');
					} else if (io['mtype'] == 10) {
						console.log('🤣', 'LOOP DRIVE');
					} else if (io['mtype'] == 11) {
						console.log('🤣', 'LOOP SENSE');
					} else if (io['mtype'] == 12) {
						console.log('🤣', 'ACT1T'); 				// VARIABLES?
					} else {
						console.log('🤣', 'GHOST');
					}

					// if (io['type'] == '1' && [1, 2, 9, 10, 17, 18].includes(parseInt(ele['switch']))) {
					// 	console.log('knob');
					// } else {
					// 	if (io['state'] == '0') {
					// 		$('#' + 'grid_item' + ele['switch'] + ' span').addClass('led_off').removeClass('led_on led_blink');
					// 	} else {
					// 		$('#' + 'grid_item' + ele['switch'] + ' span').addClass('led_on led_blink').removeClass('led_off');
					// 	}
					// }
				});
			}

			function status_io_and(module, port, vios, sw) {
				// console.log('Return IO Status   ====>',module, port, vios[(module-1)*4 + port]['io_type'],vios[(module-1)*4 + port]['io_state'],vios[(module-1)*4 + port]['io_value'] );
				let overridden;
				let offset = 0;

				let mtype = parseInt(vios[(module - 1) * 4 + port - 1]['module_type']);

				// module type number		|		module type		|		available offset	|		processed
				// 5,								ACT, 					0,3							...
				// 9,								VCM-DC, 				1							done
				// 2,8, 							RM4,RM2,				0							done
				// 4,								VAC						?							?
				// 3,								VDC						?							?
				// 10								LOOP DRIVE				?							?
				// 11								LOOP SENSE				?							?
				// 12								ACT1T					?							?

				// HAS NOTHING TO DO WITH sw !!!
				// if ([1, 2, 9, 10, 17, 18].includes(sw)) {
				// 	overridden = parseInt(vios[(module - 1) * 4 + port - 1 + 1]['overridden']);
				// } else {
				// 	overridden = parseInt(vios[(module - 1) * 4 + port - 1]['overridden']);
				// }

				switch (mtype) {
					case 2:
					case 8:			// RM2/RM4
						break;
					case 9:
						offset = 2;	// VCM-DC
						break;
					case 3:
						offset = 0; // VDC
						break;
					case 4:
						offset = 0; // VAC
						break;
					default:
				}

				if (mtype == 9) {
					overridden = parseInt(vios[(module - 1) * 4 + port - 1]['overridden']);
				} else {
					overridden = parseInt(vios[(module - 1) * 4 + port - 1 + offset]['overridden']);
				}

				io_type = parseInt(vios[(module - 1) * 4 + port - 1 + offset]['io_type']);
				io_state = parseInt(vios[(module - 1) * 4 + port - 1 + offset]['io_state']);
				io_value = parseInt(vios[(module - 1) * 4 + port - 1 + offset]['io_value']);

				// Byte 7	I/O # – runtime state
				// Bit 0 – I/O is currently overridden by user
				// Bit 1 – Unused
				// Bit 2 – Unused
				// Bit 3 – Unused
				// Bit 4 – Air Curtain target value
				// Bit 5 – Vent Grid target value
				// Bit 6 – Vent Grid duty cycle active
				// Bit 7 – Unused

				// Byte 8	I/O # – secondary modifiers applied
				// Bit 0 – any/some modifier is currently applied to the I/O
				// Bit 1 – modifier #1 is currently applied to the I/O
				// Bit 2 – modifier #2 is currently applied to the I/O
				// Bit 3 – modifier #3 is currently applied to the I/O
				// Bit 4 – unused 
				// Bit 5 – unused
				// Bit 6 – unused
				// Bit 7 – fallback active		

				// 256 is 0b0000 0001 0000 0000, --> byte 7 bit 0(I/O is currently overridden by user)
				// [override flag is in the upper/larger byte]
				// [modifier active].  in the [lower/smaller byte]

				let over_user = (overridden & STATUS_OVERRIDE['OVER_USER']) >> STATUS_OVERRIDE['OVER_USER_SFT'];
				let over_curtain = (overridden & STATUS_OVERRIDE['OVER_CURTAIN']) >> STATUS_OVERRIDE['OVER_CURTAIN_SFT'];
				let over_vent_v = (overridden & STATUS_OVERRIDE['OVER_VENT_V']) >> STATUS_OVERRIDE['OVER_VENT_V_SFT'];
				let over_vent_d = (overridden & STATUS_OVERRIDE['OVER_VENT_D']) >> STATUS_OVERRIDE['OVER_VENT_D_SFT'];

				let modifier_any = (overridden & STATUS_OVERRIDE['MODIFIER_ANY']) >> STATUS_OVERRIDE['MODIFIER_ANY_SFT'];
				let modifier_1 = (overridden & STATUS_OVERRIDE['MODIFIER_1']) >> STATUS_OVERRIDE['MODIFIER_1_SFT'];
				let modifier_2 = (overridden & STATUS_OVERRIDE['MODIFIER_2']) >> STATUS_OVERRIDE['MODIFIER_2_SFT'];
				let modifier_3 = (overridden & STATUS_OVERRIDE['MODIFIER_3']) >> STATUS_OVERRIDE['MODIFIER_3_SFT'];
				let modifier_fb = (overridden & STATUS_OVERRIDE['MODIFIER_FB']) >> STATUS_OVERRIDE['MODIFIER_FB_SFT'];

				return {
					over_user: over_user,
					over_curtain: over_curtain,
					over_vent_v: over_vent_v,
					over_vent_d: over_vent_d,
					modifier_any: modifier_any,
					modifier_1: modifier_1,
					modifier_2: modifier_2,
					modifier_3: modifier_3,
					modifier_fb: modifier_fb,
					mtype: mtype,
					iotype: io_type,
					state: io_state,
					value: io_value
				};
			}

			// $('.page_bd').click(function() {
			// 	console.log('',$(this).text());
			// });

			// $(".page_bd").on('click', function() {
			// 	console.log('',$(this).text());
			// });	

			// $(".page_bd").on('click', (e) => {
			// 	$('.page_bd').removeClass('_slected');
			// 	$(e.delegateTarget).addClass('_slected');
			// });	
		});
	</script>
</body>

</html>