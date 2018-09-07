<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:20
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_thumbnails.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd80ba2f6_15188575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aea42fdec19c07fc84b889184e29dfe2422b38c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_thumbnails.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd80ba2f6_15188575 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Thumbnails
// --------------------------------------------------


// Mixin and adjust the regular image class
.thumbnail {
  display: block;
  padding: $thumbnail-padding;
  margin-bottom: $line-height-computed;
  line-height: $line-height-base;
  background-color: $thumbnail-bg;
  border: 1px solid $thumbnail-border;
  border-radius: $thumbnail-border-radius;
  @include transition(all .2s ease-in-out);

  > img,
  a > img {
    @include img-responsive();
    margin-left: auto;
    margin-right: auto;
  }

  // [converter] extracted a&:hover, a&:focus, a&.active to a.thumbnail:hover, a.thumbnail:focus, a.thumbnail.active

  // Image captions
  .caption {
    padding: $thumbnail-caption-padding;
    color: $thumbnail-caption-color;
  }
}

// Add a hover state for linked versions only
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: $link-color;
}
<?php }
}
