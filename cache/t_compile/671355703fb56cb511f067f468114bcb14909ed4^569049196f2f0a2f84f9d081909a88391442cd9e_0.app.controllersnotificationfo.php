<?php
/* Smarty version 3.1.33, created on 2020-01-16 16:02:16
  from 'app:controllersnotificationfo' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e208908085fc8_17921672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '569049196f2f0a2f84f9d081909a88391442cd9e' => 
    array (
      0 => 'app:controllersnotificationfo',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e208908085fc8_17921672 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'message', false, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['message']->value) {
?>
	<a href="#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value ));?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</a><br />
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
