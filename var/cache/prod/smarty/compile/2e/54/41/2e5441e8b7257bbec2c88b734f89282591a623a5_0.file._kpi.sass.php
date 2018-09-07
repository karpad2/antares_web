<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:18
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\partials\_kpi.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd6a6c709_95711970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e5441e8b7257bbec2c88b734f89282591a623a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\partials\\_kpi.sass',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd6a6c709_95711970 (Smarty_Internal_Template $_smarty_tpl) {
?>.kpi-container
	padding-bottom: 10px !important
	.kpi-refresh
		position: absolute
		z-index: 1
		right: 20px

.box-stats
	display: block
	height: 64px
	margin-bottom: 10px
	.boxchart-overlay
		@include padding(10px, 10px, 5px, 10px)
		@include margin-right(10px)
		@include float(left)
		@include border-radius(3px)
	.kpi-content
		width: 100%
		position: relative
		@include padding-left(40px)
		@include float(left)
		i
			position: absolute
			top: 0
			font-size: 26px
			text-align: center
			color: white
			line-height: 26px
			@include left(0)
			@include border-radius(3px)

		.title
			display: block
			color: #666
		.subtitle
			display: block
			text-transform: uppercase
			color: #aaa
		.value
			display: block
			clear: both
			font-size: 1.5em
			white-space: nowrap
			text-overflow: ellipsis
			overflow: hidden
	&:hover
		text-decoration: none
.color1
	i, .boxchart-overlay
		color: #2BA8E3 !important
	.value
		color: #2BA8E3
.color2
	i, .boxchart-overlay
		color: #FF5450 !important
	.value
		color: #FF5450
.color3
	i, .boxchart-overlay
		color: #9E5BA1 !important
	.value
		color: #9E5BA1
.color4
	i, .boxchart-overlay
		color: #95CC6B !important
	.value
		color: #95CC6B

.data_chart
	rect
		fill: white
	path
		stroke: white
		stroke-width: 2
		fill: none
	line
		stroke: black
	.area
		fill: rgba(white,0.30)
		stroke-width: 0
<?php }
}
