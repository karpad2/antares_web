<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_table-row.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd77b9ed3_63855373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f502bc6301e112a4ce7e994ad0616cb89e24ecd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_table-row.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd77b9ed3_63855373 (Smarty_Internal_Template $_smarty_tpl) {
?>// Tables

@mixin table-row-variant($state, $background) {
  // Exact selectors below required to override `.table-striped` and prevent
  // inheritance to nested tables.
  .table > thead > tr,
  .table > tbody > tr,
  .table > tfoot > tr {
    > td.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
,
    > th.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
,
    &.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 > td,
    &.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 > th {
      background-color: $background;
    }
  }

  // Hover states for `.table-hover`
  // Note: this is not available for cells or rows within `thead` or `tfoot`.
  .table-hover > tbody > tr {
    > td.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
:hover,
    > th.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
:hover,
    &.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
:hover > td,
    &:hover > .#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
,
    &.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
:hover > th {
      background-color: darken($background, 5%);
    }
  }
}
<?php }
}
