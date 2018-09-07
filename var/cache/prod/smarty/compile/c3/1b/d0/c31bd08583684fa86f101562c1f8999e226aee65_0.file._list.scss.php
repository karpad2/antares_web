<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:20
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\font-awesome\_list.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd8555ba6_66054647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c31bd08583684fa86f101562c1f8999e226aee65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\font-awesome\\_list.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd8555ba6_66054647 (Smarty_Internal_Template $_smarty_tpl) {
?>// List Icons
// -------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-ul {
  padding-left: 0;
  margin-left: $fa-li-width;
  list-style-type: none;
  > li { position: relative; }
}
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-li {
  position: absolute;
  left: -$fa-li-width;
  width: $fa-li-width;
  top: (2em / 14);
  text-align: center;
  &.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-lg {
    left: -$fa-li-width + (4em / 14);
  }
}
<?php }
}
