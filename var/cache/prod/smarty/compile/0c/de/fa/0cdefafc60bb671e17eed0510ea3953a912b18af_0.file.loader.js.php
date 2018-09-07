<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:17
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\js\bundle\module\loader.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd5329c60_56088254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cdefafc60bb671e17eed0510ea3953a912b18af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\js\\bundle\\module\\loader.js',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd5329c60_56088254 (Smarty_Internal_Template $_smarty_tpl) {
?>/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
$(function() {
  var moduleImport = $("#module-import");
  moduleImport.click(function() {
    moduleImport.addClass("onclick", 250, validate);
  });

  function validate() {
    setTimeout(function() {
      moduleImport.removeClass("onclick");
      moduleImport.addClass("validate", 450, callback);
    }, 2250 );
  }
  function callback() {
    setTimeout(function() {
      moduleImport.removeClass("validate");
    }, 1250 );
  }

  $('body').on('click', 'a.module-read-more-grid-btn, a.module-read-more-list-btn', function (event) {
    event.preventDefault();
    var urlCallModule = event.target.href;
    var modulePoppin = $(event.target).data('target');

    $.get(urlCallModule, function (data) {
      $(modulePoppin).html(data);
      $(modulePoppin).modal();
    });
  });
});
<?php }
}
