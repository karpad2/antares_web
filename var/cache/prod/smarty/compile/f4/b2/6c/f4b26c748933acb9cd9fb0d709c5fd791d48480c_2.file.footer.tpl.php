<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:29
  from 'C:\xampp\htdocs\antares_web\themes\classic\templates\checkout\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925ce16c3279_49157326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4b26c748933acb9cd9fb0d709c5fd791d48480c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\themes\\classic\\templates\\checkout\\_partials\\footer.tpl',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925ce16c3279_49157326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9582519455b925ce16c02f6_97305822', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_9582519455b925ce16c02f6_97305822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9582519455b925ce16c02f6_97305822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
