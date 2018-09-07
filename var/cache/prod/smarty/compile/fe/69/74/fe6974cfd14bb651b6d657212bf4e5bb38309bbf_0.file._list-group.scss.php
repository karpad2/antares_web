<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_list-group.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd75352b7_97040864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe6974cfd14bb651b6d657212bf4e5bb38309bbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_list-group.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd75352b7_97040864 (Smarty_Internal_Template $_smarty_tpl) {
?>// List Groups

@mixin list-group-item-variant($state, $background, $color) {
  .list-group-item-#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 {
    color: $color;
    background-color: $background;

    // [converter] extracted a& to a.list-group-item-#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>

  }

  a.list-group-item-#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 {
    color: $color;

    .list-group-item-heading {
      color: inherit;
    }

    &:hover,
    &:focus {
      color: $color;
      background-color: darken($background, 5%);
    }
    &.active,
    &.active:hover,
    &.active:focus {
      color: #fff;
      background-color: $color;
      border-color: $color;
    }
  }
}
<?php }
}
