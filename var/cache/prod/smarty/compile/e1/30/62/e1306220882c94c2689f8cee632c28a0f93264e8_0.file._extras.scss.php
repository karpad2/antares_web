<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:20
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\font-awesome\_extras.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd836fb81_70796988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1306220882c94c2689f8cee632c28a0f93264e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\font-awesome\\_extras.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd836fb81_70796988 (Smarty_Internal_Template $_smarty_tpl) {
?>/* EXTRAS
 * -------------------------- */

/* Stacked and layered icon */

/* Animated rotating icon */
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-spin {
  -webkit-animation: spin 2s infinite linear;
  -moz-animation: spin 2s infinite linear;
  -o-animation: spin 2s infinite linear;
  animation: spin 2s infinite linear;
}

@-moz-keyframes spin {
  0% { -moz-transform: rotate(0deg); }
  100% { -moz-transform: rotate(359deg); }
}
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(359deg); }
}
@-o-keyframes spin {
  0% { -o-transform: rotate(0deg); }
  100% { -o-transform: rotate(359deg); }
}
@-ms-keyframes spin {
  0% { -ms-transform: rotate(0deg); }
  100% { -ms-transform: rotate(359deg); }
}
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(359deg); }
}


// Icon rotations & flipping
// -------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-rotate-90  { @include fa-icon-rotate(90deg, 1);  }
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-rotate-180 { @include fa-icon-rotate(180deg, 2); }
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-rotate-270 { @include fa-icon-rotate(270deg, 3); }

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-flip-horizontal { @include fa-icon-flip(-1, 1, 0); }
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-flip-vertical   { @include fa-icon-flip(1, -1, 2); }
<?php }
}
