<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:18
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\controllers\_translations.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd6240141_16881885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f24bf8e3e988b17e8a74f71b63bfac04ec25859' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\controllers\\_translations.sass',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd6240141_16881885 (Smarty_Internal_Template $_smarty_tpl) {
?>#translations_form
	.translations-email-panel
		padding: 8px 12px
		@include margin(0, 0, 8px, 20px)
	.block-mail
		iframe, textarea
			width: 100%
			height: 500px
	.panel-group
		display: none
	a.panel-title
		i
			display: none
		&:hover
			text-decoration: none
			i
				display: inline-block
	.mails_field
		border-bottom: 1px solid #eee
		padding-bottom: 8px
		margin-bottom: 16px
		ul.nav-pills
			margin-bottom: 5px
		h4 .badge
			font-size: 12px
			&.badge-danger
				color: $brand-danger
				border: solid 2px $brand-danger
				background-color: transparent
		.panel-footer
			margin: 0 -15px
<?php }
}
