<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:20
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_tooltip.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd80f6fe8_26021910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd27b45e8985da7a23c953b7ef80acc61811ce239' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_tooltip.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd80f6fe8_26021910 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Tooltips
// --------------------------------------------------


// Base class
.tooltip {
  position: absolute;
  z-index: $zindex-tooltip;
  display: block;
  visibility: visible;
  font-size: $font-size-small;
  line-height: 1.4;
  @include opacity(0);

  &.in     { @include opacity($tooltip-opacity); }
  &.top    { margin-top:  -3px; padding: $tooltip-arrow-width 0; }
  &.right  { margin-left:  3px; padding: 0 $tooltip-arrow-width; }
  &.bottom { margin-top:   3px; padding: $tooltip-arrow-width 0; }
  &.left   { margin-left: -3px; padding: 0 $tooltip-arrow-width; }
}

// Wrapper for the tooltip content
.tooltip-inner {
  max-width: $tooltip-max-width;
  padding: 20px;
  color: $tooltip-color;
  text-align: center;
  text-decoration: none;
  background-color: $tooltip-bg;
  border-radius: $border-radius-base;

  :last-child {
      margin-bottom: 0;
  }
}

// Arrows
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip {
  &.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -$tooltip-arrow-width;
    border-width: $tooltip-arrow-width $tooltip-arrow-width 0;
    border-top-color: $tooltip-arrow-color;
  }
  &.top-left .tooltip-arrow {
    bottom: 0;
    left: $tooltip-arrow-width;
    border-width: $tooltip-arrow-width $tooltip-arrow-width 0;
    border-top-color: $tooltip-arrow-color;
  }
  &.top-right .tooltip-arrow {
    bottom: 0;
    right: $tooltip-arrow-width;
    border-width: $tooltip-arrow-width $tooltip-arrow-width 0;
    border-top-color: $tooltip-arrow-color;
  }
  &.right .tooltip-arrow {
    top: 50%;
    left: 0;
    margin-top: -$tooltip-arrow-width;
    border-width: $tooltip-arrow-width $tooltip-arrow-width $tooltip-arrow-width 0;
    border-right-color: $tooltip-arrow-color;
  }
  &.left .tooltip-arrow {
    top: 50%;
    right: 0;
    margin-top: -$tooltip-arrow-width;
    border-width: $tooltip-arrow-width 0 $tooltip-arrow-width $tooltip-arrow-width;
    border-left-color: $tooltip-arrow-color;
  }
  &.bottom .tooltip-arrow {
    top: 0;
    left: 50%;
    margin-left: -$tooltip-arrow-width;
    border-width: 0 $tooltip-arrow-width $tooltip-arrow-width;
    border-bottom-color: $tooltip-arrow-color;
  }
  &.bottom-left .tooltip-arrow {
    top: 0;
    left: $tooltip-arrow-width;
    border-width: 0 $tooltip-arrow-width $tooltip-arrow-width;
    border-bottom-color: $tooltip-arrow-color;
  }
  &.bottom-right .tooltip-arrow {
    top: 0;
    right: $tooltip-arrow-width;
    border-width: 0 $tooltip-arrow-width $tooltip-arrow-width;
    border-bottom-color: $tooltip-arrow-color;
  }
}
<?php }
}
