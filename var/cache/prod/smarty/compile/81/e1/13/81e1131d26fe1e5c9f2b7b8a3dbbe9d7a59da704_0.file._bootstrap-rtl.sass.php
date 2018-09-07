<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:18
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-rtl-sass\_bootstrap-rtl.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd6eb3669_06991854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e1131d26fe1e5c9f2b7b8a3dbbe9d7a59da704' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-rtl-sass\\_bootstrap-rtl.sass',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd6eb3669_06991854 (Smarty_Internal_Template $_smarty_tpl) {
?>// Right-to-Left for Bootstrap 3.0.0
// Morteza Ansarinia <ansarinia@me.com>
// --------------------------------------------------

// Original LESS files from the latest bootstrap
@import "../bootstrap-sass/variables"
@import "../bootstrap-sass/mixins"

// Core RTL CSS
@import "type-rtl"

// Right-to-left the original bootstrap - to be removed
@import "merged-rtl"

// Button groups
@import "button-groups-rtl"

// Right-to-left the grid system
@import "grid-rtl"

// List groups and badges inside them
@import "list-group-rtl"

// Components
@import "pagination-rtl"
@import "pager-rtl"

// Components w/ JavaScript
@import "carousel-rtl"
<?php }
}
