<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_responsive-visibility.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd77174c7_65466675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41dcad8ec146a4113f8e426193895d5e74a2f891' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_responsive-visibility.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd77174c7_65466675 (Smarty_Internal_Template $_smarty_tpl) {
?>// Responsive utilities

//
// More easily include all the states for responsive-utilities.less.
// [converter] $parent hack
@mixin responsive-visibility($parent) {
  #<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    display: block !important;
  }
  table#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
  { display: table; }
  tr#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
     { display: table-row !important; }
  th#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
,
  td#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
     { display: table-cell !important; }
}

// [converter] $parent hack
@mixin responsive-invisibility($parent) {
  #<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    display: none !important;
  }
}
<?php }
}
