<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_vendor-prefixes.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7864fe7_54041174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e905c1e014863071c17d530631dee87c3fb09f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_vendor-prefixes.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7864fe7_54041174 (Smarty_Internal_Template $_smarty_tpl) {
?>// Vendor Prefixes
//
// All vendor mixins are deprecated as of v3.2 due to the introduction of
// Autoprefixer in our Gruntfile. They will be removed in v4.

// - Animations
// - Backface visibility
// - Box shadow
// - Box sizing
// - Content columns
// - Hyphens
// - Placeholder text
// - Transformations
// - Transitions
// - User Select


// Animations
@mixin animation($animation) {
  -webkit-animation: $animation;
       -o-animation: $animation;
          animation: $animation;
}
@mixin animation-name($name) {
  -webkit-animation-name: $name;
          animation-name: $name;
}
@mixin animation-duration($duration) {
  -webkit-animation-duration: $duration;
          animation-duration: $duration;
}
@mixin animation-timing-function($timing-function) {
  -webkit-animation-timing-function: $timing-function;
          animation-timing-function: $timing-function;
}
@mixin animation-delay($delay) {
  -webkit-animation-delay: $delay;
          animation-delay: $delay;
}
@mixin animation-iteration-count($iteration-count) {
  -webkit-animation-iteration-count: $iteration-count;
          animation-iteration-count: $iteration-count;
}
@mixin animation-direction($direction) {
  -webkit-animation-direction: $direction;
          animation-direction: $direction;
}
@mixin animation-fill-mode($fill-mode) {
  -webkit-animation-fill-mode: $fill-mode;
          animation-fill-mode: $fill-mode;
}

// Backface visibility
// Prevent browsers from flickering when using CSS 3D transforms.
// Default value is `visible`, but can be changed to `hidden`

@mixin backface-visibility($visibility){
  -webkit-backface-visibility: $visibility;
     -moz-backface-visibility: $visibility;
          backface-visibility: $visibility;
}

// Drop shadows
//
// Note: Deprecated `.box-shadow()` as of v3.1.0 since all of Bootstrap's
// supported browsers that have box shadow capabilities now support it.

@mixin box-shadow($shadow...) {
  -webkit-box-shadow: $shadow; // iOS <4.3 & Android <4.1
          box-shadow: $shadow;
}

// Box sizing
@mixin box-sizing($boxmodel) {
  -webkit-box-sizing: $boxmodel;
     -moz-box-sizing: $boxmodel;
          box-sizing: $boxmodel;
}

// CSS3 Content Columns
@mixin content-columns($column-count, $column-gap: $grid-gutter-width) {
  -webkit-column-count: $column-count;
     -moz-column-count: $column-count;
          column-count: $column-count;
  -webkit-column-gap: $column-gap;
     -moz-column-gap: $column-gap;
          column-gap: $column-gap;
}

// Optional hyphenation
@mixin hyphens($mode: auto) {
  word-wrap: break-word;
  -webkit-hyphens: $mode;
     -moz-hyphens: $mode;
      -ms-hyphens: $mode; // IE10+
       -o-hyphens: $mode;
          hyphens: $mode;
}

// Placeholder text
@mixin placeholder($color: $input-color-placeholder) {
  &::-moz-placeholder           { color: $color;   // Firefox
                                  opacity: 1; } // See https://github.com/twbs/bootstrap/pull/11526
  &:-ms-input-placeholder       { color: $color; } // Internet Explorer 10+
  &::-webkit-input-placeholder  { color: $color; } // Safari and Chrome
}

// Transformations
@mixin scale($ratio...) {
  -webkit-transform: scale($ratio);
      -ms-transform: scale($ratio); // IE9 only
       -o-transform: scale($ratio);
          transform: scale($ratio);
}
@mixin scale($ratioX, $ratioY...) {
  -webkit-transform: scale($ratioX, $ratioY);
      -ms-transform: scale($ratioX, $ratioY); // IE9 only
       -o-transform: scale($ratioX, $ratioY);
          transform: scale($ratioX, $ratioY);
}
@mixin scaleX($ratio) {
  -webkit-transform: scaleX($ratio);
      -ms-transform: scaleX($ratio); // IE9 only
       -o-transform: scaleX($ratio);
          transform: scaleX($ratio);
}
@mixin scaleY($ratio) {
  -webkit-transform: scaleY($ratio);
      -ms-transform: scaleY($ratio); // IE9 only
       -o-transform: scaleY($ratio);
          transform: scaleY($ratio);
}
@mixin skew($x, $y) {
  -webkit-transform: skew($x, $y);
      -ms-transform: skewX($x) skewY($y); // See https://github.com/twbs/bootstrap/issues/4885; IE9+
       -o-transform: skew($x, $y);
          transform: skew($x, $y);
}
@mixin translate($x, $y) {
  -webkit-transform: translate($x, $y);
      -ms-transform: translate($x, $y); // IE9 only
       -o-transform: translate($x, $y);
          transform: translate($x, $y);
}
@mixin translate3d($x, $y, $z) {
  -webkit-transform: translate3d($x, $y, $z);
          transform: translate3d($x, $y, $z);
}
@mixin rotate($degrees) {
  -webkit-transform: rotate($degrees);
      -ms-transform: rotate($degrees); // IE9 only
       -o-transform: rotate($degrees);
          transform: rotate($degrees);
}
@mixin rotateX($degrees) {
  -webkit-transform: rotateX($degrees);
      -ms-transform: rotateX($degrees); // IE9 only
       -o-transform: rotateX($degrees);
          transform: rotateX($degrees);
}
@mixin rotateY($degrees) {
  -webkit-transform: rotateY($degrees);
      -ms-transform: rotateY($degrees); // IE9 only
       -o-transform: rotateY($degrees);
          transform: rotateY($degrees);
}
@mixin perspective($perspective) {
  -webkit-perspective: $perspective;
     -moz-perspective: $perspective;
          perspective: $perspective;
}
@mixin perspective-origin($perspective) {
  -webkit-perspective-origin: $perspective;
     -moz-perspective-origin: $perspective;
          perspective-origin: $perspective;
}
@mixin transform-origin($origin) {
  -webkit-transform-origin: $origin;
     -moz-transform-origin: $origin;
      -ms-transform-origin: $origin; // IE9 only
          transform-origin: $origin;
}


// Transitions

@mixin transition($transition...) {
  -webkit-transition: $transition;
       -o-transition: $transition;
          transition: $transition;
}
@mixin transition-property($transition-property...) {
  -webkit-transition-property: $transition-property;
          transition-property: $transition-property;
}
@mixin transition-delay($transition-delay) {
  -webkit-transition-delay: $transition-delay;
          transition-delay: $transition-delay;
}
@mixin transition-duration($transition-duration...) {
  -webkit-transition-duration: $transition-duration;
          transition-duration: $transition-duration;
}
@mixin transition-timing-function($timing-function) {
  -webkit-transition-timing-function: $timing-function;
          transition-timing-function: $timing-function;
}
@mixin transition-transform($transition...) {
  -webkit-transition: -webkit-transform $transition;
     -moz-transition: -moz-transform $transition;
       -o-transition: -o-transform $transition;
          transition: transform $transition;
}


// User select
// For selecting text on the page

@mixin user-select($select) {
  -webkit-user-select: $select;
     -moz-user-select: $select;
      -ms-user-select: $select; // IE10+
          user-select: $select;
}
<?php }
}
