<?php
/* Smarty version 3.1.33, created on 2020-01-16 11:13:25
  from 'core:controllerstabsettingsrol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e204555ab4b70_12995956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d0ac67e4f54bb51a52928fd4e9e4a0265f1b5d0' => 
    array (
      0 => 'core:controllerstabsettingsrol',
      1 => 1559234240,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e204555ab4b70_12995956 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"users-and-roles.md",'section'=>"roles",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<div id="userGroupsContainer">
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'rolesUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.roles.UserGroupGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"roleGridContainer",'url'=>$_smarty_tpl->tpl_vars['rolesUrl']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
