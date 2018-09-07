<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-rtl-sass\_pagination-rtl.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd715a235_99150715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dec962c1369d84c7de017727dcf7150378da162' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-rtl-sass\\_pagination-rtl.sass',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd715a235_99150715 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// RTL Pagination (multiple pages)
// --------------------------------------------------
.pagination
	padding-right: 0
	> li
		> a,
		> span
			float: right // Collapse white-space
			margin-right: -1px
			margin-left: 0px
		&:first-child
			> a,
			> span
				margin-left: 0
				@include border-right-radius($border-radius-base)
				@include border-left-radius(0)
		&:last-child
			> a,
			> span
				margin-right: -1px
				@include border-left-radius($border-radius-base)
				@include border-right-radius(0)<?php }
}
