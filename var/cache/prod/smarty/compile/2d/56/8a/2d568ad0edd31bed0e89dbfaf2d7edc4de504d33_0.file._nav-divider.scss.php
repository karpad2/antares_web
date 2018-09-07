<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_nav-divider.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7573463_24422496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d568ad0edd31bed0e89dbfaf2d7edc4de504d33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_nav-divider.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7573463_24422496 (Smarty_Internal_Template $_smarty_tpl) {
?>// Horizontal dividers
//
// Dividers (basically an hr) within dropdowns and nav lists

@mixin nav-divider($color: #e5e5e5) {
  height: 1px;
  margin: (($line-height-computed / 2) - 1) 0;
  overflow: hidden;
  background-color: $color;
}
<?php }
}
