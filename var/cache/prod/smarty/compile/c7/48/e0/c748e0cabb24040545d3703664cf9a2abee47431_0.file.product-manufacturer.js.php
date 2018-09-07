<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:17
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\js\bundle\product\product-manufacturer.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd548fb42_46924675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c748e0cabb24040545d3703664cf9a2abee47431' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\js\\bundle\\product\\product-manufacturer.js',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd548fb42_46924675 (Smarty_Internal_Template $_smarty_tpl) {
?>/**
 * Manufacturer management
 */
var manufacturer = (function() {
  return {
    'init': function() {
      var addButton = $('#add_brand_button');
      var resetButton = $('#reset_brand_product');
      var manufacturerContent = $('#manufacturer-content');
      var selectManufacturer = $('#form_step1_id_manufacturer');

      /** Click event on the add button */
      addButton.on('click', function(e) {
        e.preventDefault();
        manufacturerContent.removeClass('hide');
        addButton.hide();
      });
      resetButton.on('click', function(e) {
        e.preventDefault();
        modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
          onContinue: function(){
            manufacturerContent.addClass('hide');
            selectManufacturer.val('').trigger('change');
            addButton.show();
          }
        }).show();
      });
    }
  };
})();

BOEvent.on("Product Manufacturer Management started", function initManufacturerManagement() {
  manufacturer.init();
}, "Back office");
<?php }
}
