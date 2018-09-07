<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_labels.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7bcd093_73022322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9d0e40c630a6ee2b11c8eedaf1de007a48c0fa6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_labels.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7bcd093_73022322 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Labels
// --------------------------------------------------

.label {
  display: inline;
  padding: 0.15em 0.4em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: $label-color;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;

  // [converter] extracted a& to a.label

  // Empty labels collapse automatically (not available in IE8)
  &:empty {
    display: none;
  }

  // Quick fix for labels in buttons
  .btn & {
    position: relative;
    top: -1px;
  }
}

// Add hover effects, but only for links
a.label {
  &:hover,
  &:focus {
    color: $label-link-hover-color;
    text-decoration: none;
    cursor: pointer;
  }
}

// Colors
// Contextual variations (linked labels get darker on :hover)

.label-default {
  @include label-variant($label-default-bg);
}

.label-primary {
  @include label-variant($label-primary-bg);
}

.label-success {
  @include label-variant($label-success-bg);
}

.label-info {
  @include label-variant($label-info-bg);
}

.label-warning {
  @include label-variant($label-warning-bg);
}

.label-danger {
  @include label-variant($label-danger-bg);
}
<?php }
}
