<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_list-group.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7c03816_76833887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98fbf41a48a631e39bc9a51446674e14cd25222d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_list-group.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7c03816_76833887 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// List groups
// --------------------------------------------------


// Base class
//
// Easily usable on <ul>, <ol>, or <div>.

.list-group {
  // No need to set list-style: none; since .list-group-item is block level
  margin-bottom: 20px;
  padding-left: 0; // reset padding because ul and ol
}


// Individual list items
//
// Use on `li`s or `div`s within the `.list-group` parent.

.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  // Place the border on the list items and negative margin up for better styling
  margin-bottom: -1px;
  background-color: $list-group-bg;
  border: 1px solid $list-group-border;

  // Round the first and last items
  &:first-child {
    @include border-top-radius($list-group-border-radius);
  }
  &:last-child {
    margin-bottom: 0;
    @include border-bottom-radius($list-group-border-radius);
  }

  // Align badges within list items
  > .badge {
    float: right;
  }
  > .badge + .badge {
    margin-right: 5px;
  }
}


// Linked list items
//
// Use anchor elements instead of `li`s or `div`s to create linked list items.
// Includes an extra `.active` modifier class for showing selected items.

a.list-group-item {
  color: $list-group-link-color;

  .list-group-item-heading {
    color: $list-group-link-heading-color;
  }

  // Hover state
  &:hover,
  &:focus {
    text-decoration: none;
    color: $list-group-link-hover-color;
    background-color: $list-group-hover-bg;
  }
}

.list-group-item {
  // Disabled state
  &.disabled,
  &.disabled:hover,
  &.disabled:focus {
    background-color: $list-group-disabled-bg;
    color: $list-group-disabled-color;

    // Force color to inherit for custom content
    .list-group-item-heading {
      color: inherit;
    }
    .list-group-item-text {
      color: $list-group-disabled-text-color;
    }
  }

  // Active class on item itself, not parent
  &.active,
  &.active:hover,
  &.active:focus {
    z-index: 2; // Place active items above their siblings for proper border styling
    color: $list-group-active-color;
    background-color: $list-group-active-bg;
    border-color: $list-group-active-border;

    // Force color to inherit for custom content
    .list-group-item-heading {
      color: inherit;
    }
    .list-group-item-text {
      color: $list-group-active-text-color;
    }
  }
}


// Contextual variants
//
// Add modifier classes to change text and background color on individual items.
// Organizationally, this must come after the `:hover` states.

@include list-group-item-variant(success, $state-success-bg, $state-success-text);
@include list-group-item-variant(info, $state-info-bg, $state-info-text);
@include list-group-item-variant(warning, $state-warning-bg, $state-warning-text);
@include list-group-item-variant(danger, $state-danger-bg, $state-danger-text);


// Custom content options
//
// Extra classes for creating well-formatted content within `.list-group-item`s.

.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
<?php }
}
