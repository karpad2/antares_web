<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_panels.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7626134_65007390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d06aa71a66d92b33f940aeee603f23a123accc0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_panels.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7626134_65007390 (Smarty_Internal_Template $_smarty_tpl) {
?>// Panels

@mixin panel-variant($border, $heading-text-color, $heading-bg-color, $heading-border) {
  border-color: $border;

  & > .panel-heading {
    color: $heading-text-color;
    background-color: $heading-bg-color;
    border-color: $heading-border;

    + .panel-collapse > .panel-body {
      border-top-color: $border;
    }
  }
  & > .panel-footer {
    + .panel-collapse > .panel-body {
      border-bottom-color: $border;
    }
  }
}
<?php }
}
