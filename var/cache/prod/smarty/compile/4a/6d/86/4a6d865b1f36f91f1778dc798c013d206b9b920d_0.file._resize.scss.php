<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_resize.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd76d8150_77886637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a6d865b1f36f91f1778dc798c013d206b9b920d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_resize.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd76d8150_77886637 (Smarty_Internal_Template $_smarty_tpl) {
?>// Resize anything

@mixin resizable($direction) {
  resize: $direction; // Options: horizontal, vertical, both
  overflow: auto; // Safari fix
}
<?php }
}
