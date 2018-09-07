<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_text-emphasis.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd77ee6c2_26899819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c7eec47f5168476597f30db346ed6cdb3e08f1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_text-emphasis.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd77ee6c2_26899819 (Smarty_Internal_Template $_smarty_tpl) {
?>// Typography

// [converter] $parent hack
@mixin text-emphasis-variant($parent, $color) {
  #<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    color: $color;
  }
  a#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
:hover {
    color: darken($color, 10%);
  }
}
<?php }
}
