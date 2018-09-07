<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:17
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\js\bundle\modal-confirmation.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd52f0be3_21233479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '086d4b4ffb1814295c0b7b79a006b00779be6fca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\js\\bundle\\modal-confirmation.js',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd52f0be3_21233479 (Smarty_Internal_Template $_smarty_tpl) {
?>/**
 * modal confirmation management
 */
var modalConfirmation = (function() {
  var modal = $('#confirmation_modal');

  if(!modal) {
    throw new Error('Modal confirmation is not available');
  }

  var actionsCallbacks = {
    onCancel: function() {
      console.log('modal canceled');
      return;
    },
    onContinue: function() {
      console.log('modal continued');
      return;
    }
  };

  modal.find('button.cancel').click(function() {
    if (typeof actionsCallbacks.onCancel === 'function') {
      actionsCallbacks.onCancel();
    }
    modalConfirmation.hide();
  });

  modal.find('button.continue').click(function() {
    if (typeof actionsCallbacks.onContinue === 'function') {
      actionsCallbacks.onContinue();
    }
    modalConfirmation.hide();
  });
  return {
    'init': function init() {},
    'create': function create(content, title, callbacks) {
      if(title != null){
        modal.find('.modal-title').html(title);
      }
      if(content != null){
        modal.find('.modal-body').html(content);
      }

      actionsCallbacks = callbacks;
      return this;
    },
    'show': function show() {
      modal.modal('show');
    },
    'hide': function hide() {
      modal.modal('hide');
    }
  };
})();

BOEvent.on("Modal confirmation started", function initModalConfirmationSystem() {
  modalConfirmation.init();
}, "Back office");
<?php }
}
