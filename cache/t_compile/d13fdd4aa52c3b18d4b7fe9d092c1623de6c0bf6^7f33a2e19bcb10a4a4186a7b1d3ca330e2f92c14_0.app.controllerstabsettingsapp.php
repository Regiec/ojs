<?php
/* Smarty version 3.1.33, created on 2020-01-16 11:08:14
  from 'app:controllerstabsettingsapp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e20441e8f9038_40056163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f33a2e19bcb10a4a4186a7b1d3ca330e2f92c14' => 
    array (
      0 => 'app:controllerstabsettingsapp',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e20441e8f9038_40056163 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['isSiteSidebar']->value) {?>
    <?php $_smarty_tpl->_assignInScope('component', "listbuilder.admin.siteSetup.AdminBlockPluginsListbuilderHandler");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('component', "listbuilder.settings.BlockPluginsListbuilderHandler");
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'blockPluginsUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>$_smarty_tpl->tpl_vars['component']->value,'op'=>"fetch",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"blockPluginsContainer",'url'=>$_smarty_tpl->tpl_vars['blockPluginsUrl']->value),$_smarty_tpl ) );?>

<?php }
}
