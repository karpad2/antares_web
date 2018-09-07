<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-rtl-sass\_type-rtl.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7190cc4_20274133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01134079f16019a2cc1c574664b0187eda45fd87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-rtl-sass\\_type-rtl.sass',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7190cc4_20274133 (Smarty_Internal_Template $_smarty_tpl) {
?>// Blockquotes

blockquote
	border-right: 5px solid $blockquote-border-color
	border-left: 0

	// Float left with text-align: left
	&.pull-left
		p,
		small,
		.small
			text-align: left

// Horizontal description lists

@media (min-width: $grid-float-breakpoint)
	.dl-horizontal
		dt
			float: right
			width: ($component-offset-horizontal - 20)
			clear: right
			text-align: left
		dd
			margin-left: 0
			margin-right: $component-offset-horizontal<?php }
}
