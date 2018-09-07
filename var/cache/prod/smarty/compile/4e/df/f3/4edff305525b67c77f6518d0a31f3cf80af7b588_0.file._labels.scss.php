<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_labels.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd74fdbe4_54159883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4edff305525b67c77f6518d0a31f3cf80af7b588' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_labels.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd74fdbe4_54159883 (Smarty_Internal_Template $_smarty_tpl) {
?>// Labels

@mixin label-variant($color) {
  background-color: $color;
  
  &[href] {
    &:hover,
    &:focus {
      background-color: darken($color, 10%);
    }
  }
}
<?php }
}
