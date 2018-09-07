<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:20
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_utilities.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd8175493_65147099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b93d1e852df0ede118f5027a991a5d393bf73e49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_utilities.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd8175493_65147099 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Utility classes
// --------------------------------------------------


// Floats
// -------------------------

.clearfix {
  @include clearfix();
}
.center-block {
  @include center-block();
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}


// Toggling content
// -------------------------

// Note: Deprecated .hide in favor of .hidden or .sr-only (as appropriate) in v3.0.1
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  @include text-hide();
}


// Hide from screenreaders and browsers
//
// Credit: HTML5 Boilerplate

.hidden {
  display: none !important;
  visibility: hidden !important;
}


// For Affix plugin
// -------------------------

.affix {
  position: fixed;
}
<?php }
}
