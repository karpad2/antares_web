<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_pagination.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7dbefd3_93877974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1617a34f415a9b046f8bf083692e1f8edd90890c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_pagination.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7dbefd3_93877974 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Pagination (multiple pages)
// --------------------------------------------------
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: $line-height-computed 0;
  border-radius: $border-radius-base;

  > li {
    display: inline; // Remove list-style and block-level defaults
    > a,
    > span {
      position: relative;
      float: left; // Collapse white-space
      padding: $padding-base-vertical $padding-base-horizontal;
      line-height: $line-height-base;
      text-decoration: none;
      color: $pagination-color;
      background-color: $pagination-bg;
      border: 1px solid $pagination-border;
      margin-left: -1px;
    }
    &:first-child {
      > a,
      > span {
        margin-left: 0;
        @include border-left-radius($border-radius-base);
      }
    }
    &:last-child {
      > a,
      > span {
        @include border-right-radius($border-radius-base);
      }
    }
  }

  > li > a,
  > li > span {
    &:hover,
    &:focus {
      color: $pagination-hover-color;
      background-color: $pagination-hover-bg;
      border-color: $pagination-hover-border;
    }
  }

  > .active > a,
  > .active > span {
    &,
    &:hover,
    &:focus {
      z-index: 2;
      color: $pagination-active-color;
      background-color: $pagination-active-bg;
      border-color: $pagination-active-border;
      cursor: default;
    }
  }

  > .disabled {
    > span,
    > span:hover,
    > span:focus,
    > a,
    > a:hover,
    > a:focus {
      color: $pagination-disabled-color;
      background-color: $pagination-disabled-bg;
      border-color: $pagination-disabled-border;
      cursor: not-allowed;
    }
  }
}

// Sizing
// --------------------------------------------------

// Large
.pagination-lg {
  @include pagination-size($padding-large-vertical, $padding-large-horizontal, $font-size-large, $border-radius-large);
}

// Small
.pagination-sm {
  @include pagination-size($padding-small-vertical, $padding-small-horizontal, $font-size-small, $border-radius-small);
}
<?php }
}
