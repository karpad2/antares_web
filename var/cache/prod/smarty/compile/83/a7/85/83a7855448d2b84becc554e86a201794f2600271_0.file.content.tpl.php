<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:14:52
  from 'C:\xampp\htdocs\antares_web\administrator\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925dac445f53_67881939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83a7855448d2b84becc554e86a201794f2600271' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\administrator\\themes\\default\\template\\content.tpl',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925dac445f53_67881939 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
