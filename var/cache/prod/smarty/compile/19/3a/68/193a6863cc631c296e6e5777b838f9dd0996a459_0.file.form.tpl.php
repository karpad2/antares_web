<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:25
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\template\controllers\scenes\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cdd11be87_23688522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '193a6863cc631c296e6e5777b838f9dd0996a459' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\template\\controllers\\scenes\\helpers\\form\\form.tpl',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cdd11be87_23688522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5482958815b925cdd115424_92644469', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_217257535b925cdd116fe9_75534082', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_5482958815b925cdd115424_92644469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_5482958815b925cdd115424_92644469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (($_smarty_tpl->tpl_vars['input']->value['type'] == "description")) {?>
		<p><?php echo $_smarty_tpl->tpl_vars['input']->value['text'];?>
</p>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "after"} */
class Block_217257535b925cdd116fe9_75534082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_217257535b925cdd116fe9_75534082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		startingData = new Array();
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>
			startingData[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
] = new Array(
				'<?php echo addcslashes($_smarty_tpl->tpl_vars['product']->value['details']->name,'\'');?>
',
				'<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
',
				<?php echo $_smarty_tpl->tpl_vars['product']->value['x_axis'];?>
,
				<?php echo $_smarty_tpl->tpl_vars['product']->value['y_axis'];?>
,
				<?php echo $_smarty_tpl->tpl_vars['product']->value['zone_width'];?>
,
				<?php echo $_smarty_tpl->tpl_vars['product']->value['zone_height'];?>
);
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "after"} */
}
