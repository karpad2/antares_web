<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:23
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\template\controllers\logs\employee_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cdb60e2e4_69011905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59d8fa8c3704cec3252ada164ba1d7d8980a0390' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cdb60e2e4_69011905 (Smarty_Internal_Template $_smarty_tpl) {
?><span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>

<?php }
}
