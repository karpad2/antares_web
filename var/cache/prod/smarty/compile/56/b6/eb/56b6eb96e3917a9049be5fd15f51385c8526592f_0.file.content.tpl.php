<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:15:07
  from 'C:\xampp\htdocs\antares_web\administrator\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925dbbcd9a32_41398945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56b6eb96e3917a9049be5fd15f51385c8526592f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\administrator\\themes\\new-theme\\template\\content.tpl',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925dbbcd9a32_41398945 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
