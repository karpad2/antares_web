<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_responsive-embed.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7ed6e99_20161551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5d41b966781e6aa34bf345db53fdca28e52f3ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_responsive-embed.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7ed6e99_20161551 (Smarty_Internal_Template $_smarty_tpl) {
?>// Embeds responsive
//
// Credit: Nicolas Gallagher and SUIT CSS.

.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;

  .embed-responsive-item,
  iframe,
  embed,
  object {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    border: 0;
  }

  // Modifier class for 16:9 aspect ratio
  &.embed-responsive-16by9 {
    padding-bottom: 56.25%;
  }

  // Modifier class for 4:3 aspect ratio
  &.embed-responsive-4by3 {
    padding-bottom: 75%;
  }
}
<?php }
}
