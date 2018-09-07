<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_image.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd74be378_75862125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55be7c6bc15157f3bca261ef157ae7270acf92b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_image.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd74be378_75862125 (Smarty_Internal_Template $_smarty_tpl) {
?>// Image Mixins
// - Responsive image
// - Retina image


// Responsive image
//
// Keep images from scaling beyond the width of their parents.
@mixin img-responsive($display: block) {
  display: $display;
  max-width: 100%; // Part 1: Set a maximum relative to the parent
  height: auto; // Part 2: Scale the height according to the width, otherwise you get stretching
}


// Retina image
//
// Short retina mixin for setting background-image and -size. Note that the
// spelling of `min--moz-device-pixel-ratio` is intentional.
@mixin img-retina($file-1x, $file-2x, $width-1x, $height-1x) {
  background-image: url(if($bootstrap-sass-asset-helper, twbs-image-path("#<?php echo $_smarty_tpl->tpl_vars['file']->value-'1x';?>
"), "#<?php echo $_smarty_tpl->tpl_vars['file']->value-'1x';?>
"));

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2),
  only screen and (   min--moz-device-pixel-ratio: 2),
  only screen and (     -o-min-device-pixel-ratio: 2/1),
  only screen and (        min-device-pixel-ratio: 2),
  only screen and (                min-resolution: 192dpi),
  only screen and (                min-resolution: 2dppx) {
    background-image: url(if($bootstrap-sass-asset-helper, twbs-image-path("#<?php echo $_smarty_tpl->tpl_vars['file']->value-'2x';?>
"), "#<?php echo $_smarty_tpl->tpl_vars['file']->value-'2x';?>
"));
    background-size: $width-1x $height-1x;
  }
}
<?php }
}
