<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_grid.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd74222a8_52458368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e59817be903ac22d4767e394a30c588205d3926c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_grid.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd74222a8_52458368 (Smarty_Internal_Template $_smarty_tpl) {
?>// Grid system
//
// Generate semantic grid columns with these mixins.

// Centered container element
@mixin container-fixed() {
  margin-right: auto;
  margin-left: auto;
  padding-left:  ($grid-gutter-width / 2);
  padding-right: ($grid-gutter-width / 2);
  @include clearfix();
}

// Creates a wrapper for a series of columns
@mixin make-row($gutter: $grid-gutter-width) {
  margin-left:  ($gutter / -2);
  margin-right: ($gutter / -2);
  @include clearfix();
}

// Generate the extra small columns
@mixin make-xs-column($columns, $gutter: $grid-gutter-width) {
  position: relative;
  float: left;
  width: percentage(($columns / $grid-columns));
  min-height: 1px;
  padding-left:  ($gutter / 2);
  padding-right: ($gutter / 2);
}
@mixin make-xs-column-offset($columns) {
  margin-left: percentage(($columns / $grid-columns));
}
@mixin make-xs-column-push($columns) {
  left: percentage(($columns / $grid-columns));
}
@mixin make-xs-column-pull($columns) {
  right: percentage(($columns / $grid-columns));
}

// Generate the small columns
@mixin make-sm-column($columns, $gutter: $grid-gutter-width) {
  position: relative;
  min-height: 1px;
  padding-left:  ($gutter / 2);
  padding-right: ($gutter / 2);

  @media (min-width: $screen-sm-min) {
    float: left;
    width: percentage(($columns / $grid-columns));
  }
}
@mixin make-sm-column-offset($columns) {
  @media (min-width: $screen-sm-min) {
    margin-left: percentage(($columns / $grid-columns));
  }
}
@mixin make-sm-column-push($columns) {
  @media (min-width: $screen-sm-min) {
    left: percentage(($columns / $grid-columns));
  }
}
@mixin make-sm-column-pull($columns) {
  @media (min-width: $screen-sm-min) {
    right: percentage(($columns / $grid-columns));
  }
}

// Generate the medium columns
@mixin make-md-column($columns, $gutter: $grid-gutter-width) {
  position: relative;
  min-height: 1px;
  padding-left:  ($gutter / 2);
  padding-right: ($gutter / 2);

  @media (min-width: $screen-md-min) {
    float: left;
    width: percentage(($columns / $grid-columns));
  }
}
@mixin make-md-column-offset($columns) {
  @media (min-width: $screen-md-min) {
    margin-left: percentage(($columns / $grid-columns));
  }
}
@mixin make-md-column-push($columns) {
  @media (min-width: $screen-md-min) {
    left: percentage(($columns / $grid-columns));
  }
}
@mixin make-md-column-pull($columns) {
  @media (min-width: $screen-md-min) {
    right: percentage(($columns / $grid-columns));
  }
}

// Generate the large columns
@mixin make-lg-column($columns, $gutter: $grid-gutter-width) {
  position: relative;
  min-height: 1px;
  padding-left:  ($gutter / 2);
  padding-right: ($gutter / 2);

  @media (min-width: $screen-lg-min) {
    float: left;
    width: percentage(($columns / $grid-columns));
  }
}
@mixin make-lg-column-offset($columns) {
  @media (min-width: $screen-lg-min) {
    margin-left: percentage(($columns / $grid-columns));
  }
}
@mixin make-lg-column-push($columns) {
  @media (min-width: $screen-lg-min) {
    left: percentage(($columns / $grid-columns));
  }
}
@mixin make-lg-column-pull($columns) {
  @media (min-width: $screen-lg-min) {
    right: percentage(($columns / $grid-columns));
  }
}
<?php }
}
