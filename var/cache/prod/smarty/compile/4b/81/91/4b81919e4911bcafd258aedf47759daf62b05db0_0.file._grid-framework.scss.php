<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\mixins\_grid-framework.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd73dcc90_47376149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b81919e4911bcafd258aedf47759daf62b05db0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\mixins\\_grid-framework.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd73dcc90_47376149 (Smarty_Internal_Template $_smarty_tpl) {
?>// Framework grid generation
//
// Used only by Bootstrap to generate the correct number of grid classes given
// any value of `$grid-columns`.

// [converter] This is defined recursively in LESS, but Sass supports real loops
@mixin make-grid-columns() {
  $list: '';
  $i: 1;
  $list: ".col-xs-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, .col-sm-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, .col-md-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, .col-lg-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
";
  @for $i from (1 + 1) through $grid-columns {
    $list: "#<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
, .col-xs-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, .col-sm-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, .col-md-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, .col-lg-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
";
  }
  #<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
 {
    position: relative;
    // Prevent columns from collapsing when empty
    min-height: 1px;
    // Inner gutter via padding
    padding-left:  ($grid-gutter-width / 2);
    padding-right: ($grid-gutter-width / 2);
  }
}


// [converter] This is defined recursively in LESS, but Sass supports real loops
@mixin float-grid-columns($class) {
  $list: '';
  $i: 1;
  $list: ".col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
";
  @for $i from (1 + 1) through $grid-columns {
    $list: "#<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
, .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
";
  }
  #<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
 {
    float: left;
  }
}


@mixin calc-grid-column($index, $class, $type) {
  @if ($type == width) and ($index > 0) {
    .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-#<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
 {
      width: percentage(($index / $grid-columns));
    }
  }
  @if ($type == push) and ($index > 0) {
    .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-push-#<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
 {
      left: percentage(($index / $grid-columns));
    }
  }
  @if ($type == push) and ($index == 0) {
    .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-push-0 {
      left: auto;
    }
  }
  @if ($type == pull) and ($index > 0) {
    .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-pull-#<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
 {
      right: percentage(($index / $grid-columns));
    }
  }
  @if ($type == pull) and ($index == 0) {
    .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-pull-0 {
      right: auto;
    }
  }
  @if ($type == offset) {
    .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-offset-#<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
 {
      margin-left: percentage(($index / $grid-columns));
    }
  }
}

// [converter] This is defined recursively in LESS, but Sass supports real loops
@mixin loop-grid-columns($columns, $class, $type) {
  @for $i from 0 through $columns {
    @include calc-grid-column($i, $class, $type);
  }
}


// Create grid for specific class
@mixin make-grid($class) {
  @include float-grid-columns($class);
  @include loop-grid-columns($grid-columns, $class, width);
  @include loop-grid-columns($grid-columns, $class, pull);
  @include loop-grid-columns($grid-columns, $class, push);
  @include loop-grid-columns($grid-columns, $class, offset);
}
<?php }
}
