<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:18
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\partials\_rtl.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd6bd0bd1_29241789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '522d007f1ff532dfbaca173290d25f9216cec5fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\partials\\_rtl.sass',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd6bd0bd1_29241789 (Smarty_Internal_Template $_smarty_tpl) {
?>html
	direction: rtl
	font-family: tahoma, sans-serif


.bootstrap
	/* fix SVG */
	.chart svg
		direction: ltr
		svg
			text
				font: normal 11px Tahoma,Arial !important

	/* reverse font awesome icon directions */
	.icon-step-forward:before
		content: "\f048"
	.icon-fast-forward:before
		content: "\f049"
	.icon-forward:before
		content: "\f04a"
	.icon-backward:before
		content: "\f04e"
	.icon-fast-backward:before
		content: "\f050"
	.icon-step-backward:before
		content: "\f051"
	.icon-chevron-right:before
		content: "\f053"
	.icon-chevron-left:before
		content: "\f054"
	.icon-arrow-right:before
		content: "\f060"
	.icon-arrow-left:before
		content: "\f061"
	.icon-hand-o-left:before, .icon-hand-right:before
		content: "\f0a4"
	.icon-hand-o-right:before, .icon-hand-left:before
		content: "\f0a5"
	.icon-caret-right:before
		content: "\f0d9"
	.icon-caret-left:before
		content: "\f0da"
	.icon-angle-double-right:before, .icon-double-angle-right:before
		content: "\f100"
	.icon-angle-double-left:before, .icon-double-angle-left:before
		content: "\f101"
	.icon-angle-right:before
		content: "\f104"
	.icon-angle-left:before
		content: "\f105"
	.icon-quote-right:before
		content: "\f10d"
	.icon-quote-left:before
		content: "\f10e"
	.icon-chevron-circle-right:before, .icon-chevron-sign-right:before
		content: "\f137"
	.icon-chevron-circle-left:before, .icon-chevron-sign-left:before
		content: "\f138"
	.icon-toggle-left:before, .icon-caret-square-o-left:before
		content: "\f152"
	.icon-long-arrow-right:before
		content: "\f177"
	.icon-long-arrow-left:before
		content: "\f178"
	.icon-arrow-circle-o-left:before
		content: "\f18e"
	.icon-arrow-circle-o-right:before
		content: "\f190"
	.icon-toggle-right:before, .icon-caret-square-o-right:before
		content: "\f191"

	//fix bootstrap
	dd
		margin-right: 0

	.pull-right
		float: left !important
	.pull-left
		float: right !important
	.input-group input[type="text"]
		float: right

.kpi-container
	padding-bottom: 10px !important
	.kpi-refresh
		position: absolute
		z-index: 1
		left: 20px

#nav-bar
	ul.menu
		li.link-levelone
			&.hover:not(.active)
				&:before
					content: ''
					width: 0
					height: 0
					border-style: solid
					border-width: 8px 0 8px 10px
					border-color: transparent transparent transparent $main-color
					background-color: transparent
					margin-top: 6px
					@media (min-height: $min-height)
						margin-top: 10px
					position: absolute
					z-index: 1
					left: 0
					right: inherit
			&.active
				a, li.active a
					&.title
						border-left: 3px solid #fff
						border-right: 0px
						background-color: $sidebar-menu-bg-hover-color
				@media (min-height: $min-height)
					ul.submenu
						body:not(.page-sidebar-closed) &
							margin-right: 35px
							margin-left: 0px
							@include border-right(1px solid $sidebar-menu-bg-hover-color)
							border-left: 0px
<?php }
}
