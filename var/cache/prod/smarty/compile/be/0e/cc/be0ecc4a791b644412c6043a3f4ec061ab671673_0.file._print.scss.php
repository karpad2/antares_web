<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:19
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\vendor\bootstrap-sass\_print.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd7e63f63_87490835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be0ecc4a791b644412c6043a3f4ec061ab671673' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\vendor\\bootstrap-sass\\_print.scss',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd7e63f63_87490835 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Basic print styles
// --------------------------------------------------
// Source: https://github.com/h5bp/html5-boilerplate/blob/master/css/main.css

@media print {

  * {
    text-shadow: none !important;
    color: #000 !important; // Black prints faster: h5bp.com/s
    background: transparent !important;
    box-shadow: none !important;
  }

  a,
  a:visited {
    text-decoration: underline;
  }

  a[href]:after {
    content: " (" attr(href) ")";
  }

  abbr[title]:after {
    content: " (" attr(title) ")";
  }

  // Don't show links for images, or javascript/internal links
  a[href^="javascript:"]:after,
  a[href^="#"]:after {
    content: "";
  }

  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }

  thead {
    display: table-header-group; // h5bp.com/t
  }

  tr,
  img {
    page-break-inside: avoid;
  }

  img {
    max-width: 100% !important;
  }

  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }

  h2,
  h3 {
    page-break-after: avoid;
  }

  // Chrome (OSX) fix for https://github.com/twbs/bootstrap/issues/11245
  // Once fixed, we can just straight up remove this.
  select {
    background: #fff !important;
  }

  // Bootstrap components
  .navbar {
    display: none;
  }
  .table {
    td,
    th {
      background-color: #fff !important;
    }
  }
  .btn,
  .dropup > .btn {
    > .caret {
      border-top-color: #000 !important;
    }
  }
  .label {
    border: 1px solid #000;
  }

  .table {
    border-collapse: collapse !important;
  }
  .table-bordered {
    th,
    td {
      border: 1px solid #ddd !important;
    }
  }

}
<?php }
}
