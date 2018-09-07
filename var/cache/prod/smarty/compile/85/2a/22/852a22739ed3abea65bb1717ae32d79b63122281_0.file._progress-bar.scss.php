<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_progress-bar.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7663551_88202963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '852a22739ed3abea65bb1717ae32d79b63122281' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_progress-bar.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7663551_88202963 (Smarty_Internal_Template $_smarty_tpl) {
?>// Progress bars

@mixin progress-bar-variant($color) {
  background-color: $color;
  .progress-striped & {
    @include gradient-striped();
  }
}
<?php }
}
