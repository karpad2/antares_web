<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_dropdowns.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7a8a3a4_52271177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5ba88b7fcce068dc2e8e9df04ee1c213b2b8273' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_dropdowns.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7a8a3a4_52271177 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Dropdown menus
// --------------------------------------------------


// Dropdown arrow/caret
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top:   $caret-width-base solid;
  border-right: $caret-width-base solid transparent;
  border-left:  $caret-width-base solid transparent;
}

// The dropdown wrapper (div)
.dropdown {
  position: relative;
}

// Prevent the focus on the dropdown toggle when closing dropdowns
.dropdown-toggle:focus {
  outline: 0;
}

// The dropdown menu (ul)
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: $zindex-dropdown;
  display: none; // none by default, but block on "open" of the menu
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0; // override default ul
  list-style: none;
  font-size: $font-size-base;
  text-align: left; // Ensures proper alignment if parent has it changed (e.g., modal footer)
  background-color: $dropdown-bg;
  border: 1px solid $dropdown-fallback-border; // IE8 fallback
  border: 1px solid $dropdown-border;
  border-radius: $border-radius-base;
  @include box-shadow(0 6px 12px rgba(0,0,0,.175));
  background-clip: padding-box;

  // Aligns the dropdown menu to right
  //
  // Deprecated as of 3.1.0 in favor of `.dropdown-menu-[dir]`
  &.pull-right {
    right: 0;
    left: auto;
  }

  // Dividers (basically an hr) within the dropdown
  .divider {
    @include nav-divider($dropdown-divider-bg);
  }

  // Links within the dropdown menu
  > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: $line-height-base;
    color: $dropdown-link-color;
    white-space: nowrap; // prevent links from randomly breaking onto new lines
  }
}

// Hover/Focus state
.dropdown-menu > li > a {
  &:hover,
  &:focus {
    text-decoration: none;
    color: $dropdown-link-hover-color;
    background-color: $dropdown-link-hover-bg;
  }
}

// Active state
.dropdown-menu > .active > a {
  &,
  &:hover,
  &:focus {
    color: $dropdown-link-active-color;
    text-decoration: none;
    outline: 0;
    background-color: $dropdown-link-active-bg;
  }
}

// Disabled state
//
// Gray out text and ensure the hover/focus state remains gray

.dropdown-menu > .disabled > a {
  &,
  &:hover,
  &:focus {
    color: $dropdown-link-disabled-color;
  }
}
// Nuke hover/focus effects
.dropdown-menu > .disabled > a {
  &:hover,
  &:focus {
    text-decoration: none;
    background-color: transparent;
    background-image: none; // Remove CSS gradient
    @include reset-filter();
    cursor: not-allowed;
  }
}

// Open state for the dropdown
.open {
  // Show the menu
  > .dropdown-menu {
    display: block;
  }

  // Remove the outline when :focus is triggered
  > a {
    outline: 0;
  }
}

// Menu positioning
//
// Add extra class to `.dropdown-menu` to flip the alignment of the dropdown
// menu with the parent.
.dropdown-menu-right {
  left: auto; // Reset the default from `.dropdown-menu`
  right: 0;
}
// With v3, we enabled auto-flipping if you have a dropdown within a right
// aligned nav component. To enable the undoing of that, we provide an override
// to restore the default dropdown menu alignment.
//
// This is only for left-aligning a dropdown menu within a `.navbar-right` or
// `.pull-right` nav component.
.dropdown-menu-left {
  left: 0;
  right: auto;
}

// Dropdown section headers
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: $font-size-small;
  line-height: $line-height-base;
  color: $dropdown-header-color;
}

// Backdrop to catch body clicks on mobile, etc.
.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: ($zindex-dropdown - 10);
}

// Right aligned dropdowns
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}

// Allow for dropdowns to go bottom up (aka, dropup-menu)
//
// Just add .dropup after the standard .dropdown class and you're set, bro.
// TODO: abstract this so that the navbar fixed styles are not placed here?

.dropup,
.navbar-fixed-bottom .dropdown {
  // Reverse the caret
  .caret {
    border-top: 0;
    border-bottom: $caret-width-base solid;
    content: "";
  }
  // Different positioning for bottom up menu
  .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-bottom: 1px;
  }
}


// Component alignment
//
// Reiterate per navbar.less and the modified component alignment there.

@media (min-width: $grid-float-breakpoint) {
  .navbar-right {
    .dropdown-menu {
      right: 0; left: auto;
    }
    // Necessary for overrides of the default right aligned menu.
    // Will remove come v4 in all likelihood.
    .dropdown-menu-left {
      left: 0; right: auto;
    }
  }
}

<?php }
}
