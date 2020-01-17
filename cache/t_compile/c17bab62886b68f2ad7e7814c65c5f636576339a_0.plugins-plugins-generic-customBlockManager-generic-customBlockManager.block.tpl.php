<?php
/* Smarty version 3.1.33, created on 2020-01-16 11:00:46
  from 'plugins-plugins-generic-customBlockManager-generic-customBlockManager:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e20425e528ac5_00358611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c17bab62886b68f2ad7e7814c65c5f636576339a' => 
    array (
      0 => 'plugins-plugins-generic-customBlockManager-generic-customBlockManager:block.tpl',
      1 => 1559234255,
      2 => 'plugins-plugins-generic-customBlockManager-generic-customBlockManager',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e20425e528ac5_00358611 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_block block_custom" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customBlockId']->value ));?>
">
	<div class="content">
		<?php echo $_smarty_tpl->tpl_vars['customBlockContent']->value;?>

	</div>
</div>
<?php }
}
