<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:17
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\js\modernizr-loads.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd569de05_47018893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dd81f57564a92f7791d5f92a98d60b16b712685' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\js\\modernizr-loads.js',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd569de05_47018893 (Smarty_Internal_Template $_smarty_tpl) {
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
Modernizr.load([
	{
		test: window.matchMedia,
		nope: [baseAdminDir + "themes/default/js/vendor/matchMedia.js", baseAdminDir + "themes/default/js/vendor/matchMedia.addListener.js"]
	},
	baseAdminDir + "themes/default/js/vendor/enquire.min.js",
	baseAdminDir + "themes/default/js/admin-theme.js",
]);
<?php }
}
