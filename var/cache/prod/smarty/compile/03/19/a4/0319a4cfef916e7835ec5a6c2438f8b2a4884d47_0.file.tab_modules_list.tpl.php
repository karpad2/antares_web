<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:23
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\template\controllers\modules\tab_modules_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cdbf126d2_34659670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0319a4cfef916e7835ec5a6c2438f8b2a4884d47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\template\\controllers\\modules\\tab_modules_list.tpl',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/modules/tab_module_line.tpl' => 2,
  ),
),false)) {
function content_5b925cdbf126d2_34659670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\antares_web\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
if (isset($_smarty_tpl->tpl_vars['tab_modules_list']->value) && !empty($_smarty_tpl->tpl_vars['tab_modules_list']->value)) {?>
	<div class="row row-margin-bottom">
		<div class="col-lg-12">
			<ul class="nav nav-pills">
				<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])) {?>
					<li class="active">
						<a href="#tab_modules_list_not_installed" data-toggle="tab">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not Installed'),$_smarty_tpl ) );?>

						</a>
					</li>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])) {?>
					<li <?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed']) == 0) {?>class="active"<?php }?>>
						<a href="#tab_modules_list_installed" data-toggle="tab">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Installed'),$_smarty_tpl ) );?>

						</a>
					</li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div id="modules_list_container_content" class="tab-content modal-content-overflow">
		<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])) {?>
		<div class="tab-pane active" id="tab_modules_list_not_installed">
			<table id="tab_modules_list_not_installed" class="table">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'], 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
					<?php ob_start();
echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_row'=>$_prefixVariable6), 0, true);
?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
		</div>
		<?php }?>
		<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])) {?>
		<div class="tab-pane <?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed']) == 0) {?>active<?php }?>" id="tab_modules_list_installed">
			<table id="tab_modules_list_installed" class="table">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'], 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
					<?php ob_start();
echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_row'=>$_prefixVariable7), 0, true);
?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
		</div>
		<?php }?>
	</div>
<?php }?>
<div class="alert alert-addons row-margin-top">
	<a href="https://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }
if ($_smarty_tpl->tpl_vars['admin_list_from_source']->value) {?>&amp;utm_term=<?php echo $_smarty_tpl->tpl_vars['admin_list_from_source']->value;
}?>" onclick="return !window.open(this.href);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More modules on addons.prestashop.com'),$_smarty_tpl ) );?>
</a>
</div>
<?php }
}
