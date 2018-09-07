<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:17
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\js\bundle\product\product-related.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd54cd474_36551224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4064030743f0ad4a29ac5466810366adca3f02d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\js\\bundle\\product\\product-related.js',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd54cd474_36551224 (Smarty_Internal_Template $_smarty_tpl) {
?>/**
 * Related product management
 */
var relatedProduct = (function() {
  return {
    'init': function() {
      var addButton = $('#add-related-product-button');
      var resetButton = $('#reset_related_product');
      var relatedContent = $('#related-content');
      var productItems = $('#form_step1_related_products-data');
      var searchProductsBar = $('#form_step1_related_products');

      addButton.on('click', function(e) {
        e.preventDefault();
        relatedContent.removeClass('hide');
        addButton.hide();
      });
      resetButton.on('click', function(e) {
        e.preventDefault();
        modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
          onContinue: function onContinue(){
            var items = productItems.find('li').toArray();

            items.forEach(function removeItem(item) {
              console.log(item);
              item.remove();
            });
            searchProductsBar.val('');

            relatedContent.addClass('hide');
            addButton.show();
          }
        }).show();
      });
    }
  };
})();

BOEvent.on("Product Related Management started", function initRelatedProductManagement() {
  relatedProduct.init();
}, "Back office");

<?php }
}
