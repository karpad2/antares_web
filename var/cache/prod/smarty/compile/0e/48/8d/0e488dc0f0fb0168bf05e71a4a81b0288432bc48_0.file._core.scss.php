<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:20
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\font-awesome\_core.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd83232d0_04741408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e488dc0f0fb0168bf05e71a4a81b0288432bc48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\font-awesome\\_core.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd83232d0_04741408 (Smarty_Internal_Template $_smarty_tpl) {
?>// Base Class Definition
// -------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
 {
  display: inline-block;
  font: normal normal normal #<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'size'-'base';?>
/1 FontAwesome; // shortening font declaration
  font-size: inherit; // can't have font-size inherit on line above, so need to override
  text-rendering: auto; // optimizelegibility throws things off #1094
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  transform: translate(0, 0); // ensures no half-pixel rendering in firefox

}
<?php }
}
