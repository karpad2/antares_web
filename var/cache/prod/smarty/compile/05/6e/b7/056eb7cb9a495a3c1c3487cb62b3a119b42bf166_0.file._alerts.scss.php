<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_alerts.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7895f45_32433148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '056eb7cb9a495a3c1c3487cb62b3a119b42bf166' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_alerts.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7895f45_32433148 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Alerts
// --------------------------------------------------


// Base styles
// -------------------------

.alert {
  padding: $alert-padding;
  margin-bottom: $line-height-computed;
  border: 1px solid transparent;
  border-radius: $alert-border-radius;

  // Headings for larger alerts
  h4 {
    margin-top: 0;
    // Specified for the h4 to prevent conflicts of changing $headings-color
    color: inherit;
  }
  // Provide class for links that match alerts
  .alert-link {
    font-weight: $alert-link-font-weight;
  }

  // Improve alignment and spacing of inner content
  > p,
  > ul {
    margin-bottom: 0;
  }
  > p + p {
    margin-top: 5px;
  }
}

// Dismissable alerts
//
// Expand the right padding and account for the close button's positioning.

.alert-dismissable {
 padding-right: ($alert-padding + 20);

  // Adjust close link position
  .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit;
  }
}

// Alternate styles
//
// Generate contextual modifier classes for colorizing the alert.

.alert-success {
  @include alert-variant($alert-success-bg, $alert-success-border, $alert-success-text);
}
.alert-info {
  @include alert-variant($alert-info-bg, $alert-info-border, $alert-info-text);
}
.alert-warning {
  @include alert-variant($alert-warning-bg, $alert-warning-border, $alert-warning-text);
}
.alert-danger {
  @include alert-variant($alert-danger-bg, $alert-danger-border, $alert-danger-text);
}
<?php }
}
