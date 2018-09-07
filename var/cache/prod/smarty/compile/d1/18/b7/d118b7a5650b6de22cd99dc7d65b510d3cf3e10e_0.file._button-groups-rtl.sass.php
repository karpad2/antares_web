<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:18
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-rtl-sass\_button-groups-rtl.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd6ef4ec5_61705348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd118b7a5650b6de22cd99dc7d65b510d3cf3e10e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-rtl-sass\\_button-groups-rtl.sass',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd6ef4ec5_61705348 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Button groups
// --------------------------------------------------

// Make the div behave like a button
.btn-group,
.btn-group-vertical
	> .btn
		float: right

// Prevent double borders when buttons are next to each other
.btn-group 
	.btn + .btn,
	.btn + .btn-group,
	.btn-group + .btn,
	.btn-group + .btn-group
		margin-right: -1px

// Optional: Group multiple button groups together for a toolbar
.btn-toolbar
	margin-right: -5px // Offset the first child's margin

	.btn-group,
	.input-group
		float: right
	> .btn,
	> .btn-group,
	> .input-group
		margin-right: 5px

// Set corners individual because sometimes a single button can be in a .btn-group and we need :first-child and :last-child to both match
.btn-group > .btn:first-child
	margin-right: 0
	&:not(:last-child):not(.dropdown-toggle)
		@include border-left-radius(0)
		@include border-right-radius($border-radius-base)

// Need .dropdown-toggle since :last-child doesn't apply given a .dropdown-menu immediately after it
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child)
	@include border-right-radius(0)
	@include border-left-radius($border-radius-base)

// Custom edits for including btn-groups within btn-groups (useful for including dropdown buttons within a btn-group)
.btn-group > .btn-group
	float: right

.btn-group > .btn-group:first-child
	> .btn:last-child,
	> .dropdown-toggle
		@include border-left-radius(0)
		@include border-right-radius($border-radius-base)

.btn-group > .btn-group:last-child > .btn:first-child
	@include border-right-radius(0)
	@include border-left-radius($border-radius-base)<?php }
}
