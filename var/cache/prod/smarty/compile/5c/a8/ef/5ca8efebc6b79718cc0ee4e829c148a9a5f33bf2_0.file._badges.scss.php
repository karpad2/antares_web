<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_badges.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd78d29c9_93059430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ca8efebc6b79718cc0ee4e829c148a9a5f33bf2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_badges.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd78d29c9_93059430 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Badges
// --------------------------------------------------


// Base class
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: $font-size-small;
  font-weight: $badge-font-weight;
  color: $badge-color;
  line-height: $badge-line-height;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: $badge-bg;
  border-radius: $badge-border-radius;

  // Empty badges collapse automatically (not available in IE8)
  &:empty {
    display: none;
  }

  // Quick fix for badges in buttons
  .btn & {
    position: relative;
    top: -1px;
  }
  .btn-xs & {
    top: 0;
    padding: 1px 5px;
  }

  // [converter] extracted a& to a.badge

  // Account for badges in navs
  a.list-group-item.active > &,
  .nav-pills > .active > a > & {
    color: $badge-active-color;
    background-color: $badge-active-bg;
  }
  .nav-pills > li > a > & {
    margin-left: 3px;
  }
}

// Hover state, but only for links
a.badge {
  &:hover,
  &:focus {
    color: $badge-link-hover-color;
    text-decoration: none;
    cursor: pointer;
  }
}
<?php }
}
