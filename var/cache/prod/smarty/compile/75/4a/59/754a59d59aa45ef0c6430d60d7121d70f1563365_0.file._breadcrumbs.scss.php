<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_breadcrumbs.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd790e185_05324533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '754a59d59aa45ef0c6430d60d7121d70f1563365' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_breadcrumbs.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd790e185_05324533 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Breadcrumbs
// --------------------------------------------------


.breadcrumb {
  padding: $breadcrumb-padding-vertical $breadcrumb-padding-horizontal;
  margin-bottom: $line-height-computed;
  list-style: none;
  background-color: $breadcrumb-bg;
  border-radius: $border-radius-base;

  > li {
    display: inline-block;

    + li:before {
      content: "#<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value-'separator';?>
\00a0"; // Unicode space added since inline-block means non-collapsing white-space
      padding: 0 5px;
      color: $breadcrumb-color;
    }
  }

  > .active {
    color: $breadcrumb-active-color;
  }
}
<?php }
}
