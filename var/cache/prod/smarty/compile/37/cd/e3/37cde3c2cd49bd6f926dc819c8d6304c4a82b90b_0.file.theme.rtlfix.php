<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:17
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\public\theme.rtlfix' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd5ea5f03_75227859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37cde3c2cd49bd6f926dc819c8d6304c4a82b90b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\public\\theme.rtlfix',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd5ea5f03_75227859 (Smarty_Internal_Template $_smarty_tpl) {
?>@font-face {
  font-family: Vazir;
  src: url('https://res.cloudinary.com/ipresta/raw/upload/v1522045380/vazir_v18.0.0/Vazir.eot');
  src: url('https://res.cloudinary.com/ipresta/raw/upload/v1522045380/vazir_v18.0.0/Vazir.eot?#iefix') format('embedded-opentype'),
       url('https://res.cloudinary.com/ipresta/raw/upload/v1522045380/vazir_v18.0.0/Vazir.woff') format('woff'),
       url('https://res.cloudinary.com/ipresta/raw/upload/v1522044764/vazir_v18.0.0/Vazir.ttf') format('truetype');
  font-weight: normal;
}

@font-face {
  font-family: Vazir;
  src: url('https://res.cloudinary.com/ipresta/raw/upload/v1522045523/vazir_v18.0.0/Vazir-Bold.eot');
  src: url('https://res.cloudinary.com/ipresta/raw/upload/v1522045523/vazir_v18.0.0/Vazir-Bold.eot?#iefix') format('embedded-opentype'),
       url('https://res.cloudinary.com/ipresta/raw/upload/v1522045380/vazir_v18.0.0/Vazir.woff') format('woff'),
       url('https://res.cloudinary.com/ipresta/raw/upload/v1522045523/vazir_v18.0.0/Vazir-Bold.ttf') format('truetype');
  font-weight: bold;
}

@font-face {
  font-family: Vazir;
  src: url('https://res.cloudinary.com/ipresta/raw/upload/v1522044764/vazir_v18.0.0/Vazir-Light.eot');
  src: url('https://res.cloudinary.com/ipresta/raw/upload/v1522044764/vazir_v18.0.0/Vazir-Light.eot?#iefix') format('embedded-opentype'),
       url('https://res.cloudinary.com/ipresta/raw/upload/v1522044764/vazir_v18.0.0/Vazir-Light.woff') format('woff'),
       url('https://res.cloudinary.com/ipresta/raw/upload/v1522044764/vazir_v18.0.0/Vazir-Light.ttf') format('truetype');
  font-weight: 300;
}
.bootstrap body.lang-fa, body.lang-fa, .lang-fa #content.bootstrap .panel .panel-heading a.btn, .lang-fa #content.bootstrap #dash_version .panel-heading a.btn, .lang-fa #content.bootstrap .message-item-initial .message-item-initial-body .panel-heading a.btn, .lang-fa #content.bootstrap .timeline .timeline-item .timeline-caption .timeline-panel .panel-heading a.btn, .lang-fa #notification .dropdown-menu .notifications .nav-tabs .nav-item .nav-link, .lang-fa .bootstrap .tooltip, .lang-fa .bootstrap .btn-group-action .btn, .lang-fa .bootstrap .page-head h2.page-title, .lang-fa .bootstrap .page-head h4.page-subtitle, .lang-fa .bootstrap #dashboard section > section header .small, .lang-fa .bootstrap #login-panel #shop_name, .bootstrap #login-panel #reset_name, .bootstrap #login-panel #reset_confirm_name, .bootstrap #login-panel #forgot_name, .bootstrap #login-panel #forgot_confirm_name, .bootstrap h1, .lang-fa .bootstrap h2, .lang-fa .bootstrap h3, .lang-fa .bootstrap h4, .lang-fa .bootstrap h5, .lang-fa .bootstrap h6, .lang-fa .bootstrap .h1, .lang-fa .bootstrap .h2, .lang-fa .bootstrap .h3, .lang-fa .bootstrap .h4, .lang-fa .bootstrap .h5, .lang-fa .bootstrap .h6, .lang-fa #content.bootstrap .panel .panel-heading, .lang-fa #content.bootstrap #dash_version .panel-heading, .lang-fa #content.bootstrap .message-item-initial .message-item-initial-body .panel-heading, .lang-fa #content.bootstrap .timeline .timeline-item .timeline-caption .timeline-panel .panel-heading, .bootstrap .nav-tabs li a, .bootstrap .list-empty .list-empty-msg, .bootstrap #dashboard #dashtrends dt, .bootstrap #dashboard #dashproducts nav, .lang-fa .bootstrap #dashboard .tooltip-panel-heading {
	font-family:"Vazir",Helvetica,Arial,sans-serif;
}
.lang-fa .bootstrap input[type="text"], .lang-fa .bootstrap input[type="search"], .lang-fa .bootstrap input[type="password"], .lang-fa .bootstrap input[type="email"], .lang-fa .bootstrap input[type="tel"] {
	font-family:"Vazir",Helvetica,Arial,sans-serif !important;
}
.rtl-flip:not(.rtl-no-flip) {
  -moz-transform: scaleX(-1);
  -o-transform: scaleX(-1);
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
  -ms-transform: scale(-1, 1);
  filter: FlipH;
  -ms-filter: "FlipH";
}

i[class*="right"], i[class*="left"], i[class*="backward"], i[class*="forward"] {
  -moz-transform: scale(-1, 1);
  -webkit-transform: scale(-1, 1);
  -o-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
  filter: FlipH;
  -ms-filter: "FlipH";
}

.magnitude:before {
  content: "?";
  opacity: 0;
}

.dropdown-menu, .mce-window {
  right: auto;
}

ul.category-tree .category-label .category {
  left: 9px;
}

.adminproducts .dz-hidden-input {
  display: none;
}

ul.category-tree .more::before {
  content: "\E5CB";
}

.product-page .product-header {
  overflow: hidden;
}

.select2-container--open .select2-dropdown {
  right: auto;
  left: 0;
}

.collapse-button[data-v-442d0f8a], #search .search-input {
  text-align: right;
}

.ui-datepicker-rtl {
  right: auto;
}

svg {
  direction: ltr
}

.mce-panel {
  right: auto;
}

.process-icon-rtl:before {
  content : "\f1dd\f0d9";
}

#header_infos #header_logo {
  background-position: right;
}
<?php }
}
