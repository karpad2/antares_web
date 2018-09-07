<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_pagination.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd75e54f9_62841600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8cddc19a7fc2abba4716b6cbe740f1012aa20f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_pagination.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd75e54f9_62841600 (Smarty_Internal_Template $_smarty_tpl) {
?>// Pagination

@mixin pagination-size($padding-vertical, $padding-horizontal, $font-size, $border-radius) {
  > li {
    > a,
    > span {
      padding: $padding-vertical $padding-horizontal;
      font-size: $font-size;
    }
    &:first-child {
      > a,
      > span {
        @include border-left-radius($border-radius);
      }
    }
    &:last-child {
      > a,
      > span {
        @include border-right-radius($border-radius);
      }
    }
  }
}
<?php }
}
