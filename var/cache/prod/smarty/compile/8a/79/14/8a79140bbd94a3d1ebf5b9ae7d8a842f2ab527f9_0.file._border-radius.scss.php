<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_border-radius.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd729ae70_00631738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a79140bbd94a3d1ebf5b9ae7d8a842f2ab527f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_border-radius.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd729ae70_00631738 (Smarty_Internal_Template $_smarty_tpl) {
?>// Single side border-radius

@mixin border-top-radius($radius) {
  border-top-right-radius: $radius;
   border-top-left-radius: $radius;
}
@mixin border-right-radius($radius) {
  border-bottom-right-radius: $radius;
     border-top-right-radius: $radius;
}
@mixin border-bottom-radius($radius) {
  border-bottom-right-radius: $radius;
   border-bottom-left-radius: $radius;
}
@mixin border-left-radius($radius) {
  border-bottom-left-radius: $radius;
     border-top-left-radius: $radius;
}
<?php }
}
