<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:06:45
  from 'app:frontendcomponentseditLin' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e207c054abdb9_43239824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3c52a8a644dae8ad3689fcdc7091f2c0eae2ce2' => 
    array (
      0 => 'app:frontendcomponentseditLin',
      1 => 1577444162,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e207c054abdb9_43239824 (Smarty_Internal_Template $_smarty_tpl) {
if (in_array(ROLE_ID_MANAGER,(array) $_smarty_tpl->tpl_vars['userRoles']->value)) {?>

		<?php if ($_smarty_tpl->tpl_vars['sectionTitleKey']->value) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sectionTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['sectionTitleKey']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php }?>

	<a class="btn btn-edit-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['page']->value,'op'=>$_smarty_tpl->tpl_vars['op']->value,'path'=>$_smarty_tpl->tpl_vars['path']->value,'anchor'=>$_smarty_tpl->tpl_vars['anchor']->value),$_smarty_tpl ) );?>
">
		<span aria-hidden="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.edit"),$_smarty_tpl ) );?>
</span>

				<span class="sr-only">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"help.goToEditPage",'sectionTitle'=>$_smarty_tpl->tpl_vars['sectionTitle']->value),$_smarty_tpl ) );?>

		</span>
	</a>
<?php }
}
}
