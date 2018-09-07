<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_pager.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7d8b600_06172734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b8343daed0d50353acf0bd43ea43168aab6bf74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_pager.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7d8b600_06172734 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Pager pagination
// --------------------------------------------------


.pager {
  padding-left: 0;
  margin: $line-height-computed 0;
  list-style: none;
  text-align: center;
  @include clearfix();
  li {
    display: inline;
    > a,
    > span {
      display: inline-block;
      padding: 5px 14px;
      background-color: $pager-bg;
      border: 1px solid $pager-border;
      border-radius: $pager-border-radius;
    }

    > a:hover,
    > a:focus {
      text-decoration: none;
      background-color: $pager-hover-bg;
    }
  }

  .next {
    > a,
    > span {
      float: right;
    }
  }

  .previous {
    > a,
    > span {
      float: left;
    }
  }

  .disabled {
    > a,
    > a:hover,
    > a:focus,
    > span {
      color: $pager-disabled-color;
      background-color: $pager-bg;
      cursor: not-allowed;
    }
  }

}
<?php }
}
