<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_jumbotron.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7b8cd24_49028595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a0e2491077fce139092f5ff39dfad341a1f591a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_jumbotron.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7b8cd24_49028595 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Jumbotron
// --------------------------------------------------


.jumbotron {
  padding: $jumbotron-padding;
  margin-bottom: $jumbotron-padding;
  color: $jumbotron-color;
  background-color: $jumbotron-bg;

  h1,
  .h1 {
    color: $jumbotron-heading-color;
  }
  p {
    margin-bottom: ($jumbotron-padding / 2);
    font-size: $jumbotron-font-size;
    font-weight: 200;
  }

  > hr {
    border-top-color: darken($jumbotron-bg, 10%);
  }

  .container & {
    border-radius: $border-radius-large; // Only round corners at higher resolutions if contained in a container
  }

  .container {
    max-width: 100%;
  }

  @media screen and (min-width: $screen-sm-min) {
    padding-top:    ($jumbotron-padding * 1.6);
    padding-bottom: ($jumbotron-padding * 1.6);

    .container & {
      padding-left:  ($jumbotron-padding * 2);
      padding-right: ($jumbotron-padding * 2);
    }

    h1,
    .h1 {
      font-size: ($font-size-base * 4.5);
    }
  }
}
<?php }
}
