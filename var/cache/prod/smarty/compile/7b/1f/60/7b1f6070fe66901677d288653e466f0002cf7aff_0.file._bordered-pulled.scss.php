<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:20
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\font-awesome\_bordered-pulled.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd82e3536_57550076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b1f6070fe66901677d288653e466f0002cf7aff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\font-awesome\\_bordered-pulled.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd82e3536_57550076 (Smarty_Internal_Template $_smarty_tpl) {
?>// Bordered & Pulled
// -------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-border {
  padding: .2em .25em .15em;
  border: solid .08em $fa-border-color;
  border-radius: .1em;
}

.pull-right { float: right; }
.pull-left { float: left; }

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
 {
  &.pull-left { margin-right: .3em; }
  &.pull-right { margin-left: .3em; }
}
<?php }
}
