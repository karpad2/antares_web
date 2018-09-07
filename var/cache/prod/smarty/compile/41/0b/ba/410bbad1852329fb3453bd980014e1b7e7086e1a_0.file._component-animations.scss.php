<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_component-animations.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7a53950_75301406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '410bbad1852329fb3453bd980014e1b7e7086e1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_component-animations.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7a53950_75301406 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Component animations
// --------------------------------------------------

// Heads up!
//
// We don't use the `.opacity()` mixin here since it causes a bug with text
// fields in IE7-8. Source: https://github.com/twbs/bootstrap/pull/3552.

.fade {
  opacity: 0;
  @include transition(opacity .15s linear);
  &.in {
    opacity: 1;
  }
}

.collapse {
  display: none;

  &.in      { display: block; }
  // [converter] extracted tr&.in to tr.collapse.in
  // [converter] extracted tbody&.in to tbody.collapse.in
}

tr.collapse.in    { display: table-row; }

tbody.collapse.in { display: table-row-group; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  @include transition(height .35s ease);
}
<?php }
}
