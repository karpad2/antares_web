<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_media.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7c38e29_55061040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3325bb397fb3a9382ec5a5886ccc57146d14f618' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_media.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7c38e29_55061040 (Smarty_Internal_Template $_smarty_tpl) {
?>// Media objects
// Source: http://stubbornella.org/content/?p=497
// --------------------------------------------------


// Common styles
// -------------------------

// Clear the floats
.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}

// Proper spacing between instances of .media
.media,
.media .media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}

// For images and videos, set to block
.media-object {
  display: block;
}

// Reset margins on headings for tighter default spacing
.media-heading {
  margin: 0 0 5px;
}


// Media image alignment
// -------------------------

.media {
  > .pull-left {
    margin-right: 10px;
  }
  > .pull-right {
    margin-left: 10px;
  }
}


// Media list variation
// -------------------------

// Undo default ul/ol styles
.media-list {
  padding-left: 0;
  list-style: none;
}
<?php }
}
