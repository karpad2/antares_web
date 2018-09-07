<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_reset-filter.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd76a5e38_85191262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27cda3083835ac88797b17cd51a57af978f74da3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_reset-filter.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd76a5e38_85191262 (Smarty_Internal_Template $_smarty_tpl) {
?>// Reset filters for IE
//
// When you need to remove a gradient background, do not forget to use this to reset
// the IE filter for IE9 and below.

@mixin reset-filter() {
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
<?php }
}
