<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_nav-vertical-align.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd75ac222_07686861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84066ddf8050cad2eeba474a0eb2f92e9730c3a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_nav-vertical-align.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd75ac222_07686861 (Smarty_Internal_Template $_smarty_tpl) {
?>// Navbar vertical align
//
// Vertically center elements in the navbar.
// Example: an element has a height of 30px, so write out `.navbar-vertical-align(30px);` to calculate the appropriate top margin.

@mixin navbar-vertical-align($element-height) {
  margin-top: (($navbar-height - $element-height) / 2);
  margin-bottom: (($navbar-height - $element-height) / 2);
}
<?php }
}
