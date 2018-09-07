<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:20
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\font-awesome\_path.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd85c1dd6_59111898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f61448067162dfa39304bbc6b8746c815f51466a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\font-awesome\\_path.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd85c1dd6_59111898 (Smarty_Internal_Template $_smarty_tpl) {
?>/* FONT PATH
 * -------------------------- */

@font-face {
  font-family: 'FontAwesome';
  src: url('#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'path';?>
/fontawesome-webfont.eot?v=#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'version';?>
');
  src: url('#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'path';?>
/fontawesome-webfont.eot?#iefix&v=#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'version';?>
') format('embedded-opentype'),
    url('#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'path';?>
/fontawesome-webfont.woff2?v=#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'version';?>
') format('woff2'),
    url('#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'path';?>
/fontawesome-webfont.woff?v=#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'version';?>
') format('woff'),
    url('#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'path';?>
/fontawesome-webfont.ttf?v=#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'version';?>
') format('truetype'),
    url('#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'path';?>
/fontawesome-webfont.svg?v=#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'version';?>
#fontawesomeregular') format('svg');
//  src: url('#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'path';?>
/FontAwesome.otf') format('opentype'); // used when developing fonts
  font-weight: normal;
  font-style: normal;
}
<?php }
}
