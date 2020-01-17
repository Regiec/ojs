<?php
/* Smarty version 3.1.33, created on 2020-01-17 02:53:14
  from 'app:frontendcomponentslanguag' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e21219a9087e4_30208057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49597032b82355ca9af5d112adf30b75b1c6328c' => 
    array (
      0 => 'app:frontendcomponentslanguag',
      1 => 1577444162,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e21219a9087e4_30208057 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['languageToggleLocales']->value && count($_smarty_tpl->tpl_vars['languageToggleLocales']->value) > 1) {?>
	<div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value ));?>
" class="dropdown language-toggle">
		<button class="btn dropdown-toggle" type="button" id="languageToggleMenu<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value ));?>
" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.language.toggle"),$_smarty_tpl ) );?>
</span>
			<?php echo $_smarty_tpl->tpl_vars['languageToggleLocales']->value[$_smarty_tpl->tpl_vars['currentLocale']->value];?>

		</button>
		<div class="dropdown-menu" aria-labelledby="languageToggleMenu<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value ));?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languageToggleLocales']->value, 'localeName', false, 'localeKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['localeKey']->value => $_smarty_tpl->tpl_vars['localeName']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['localeKey']->value !== $_smarty_tpl->tpl_vars['currentLocale']->value) {?>
					<a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"user",'op'=>"setLocale",'path'=>$_smarty_tpl->tpl_vars['localeKey']->value,'source'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
						<?php echo $_smarty_tpl->tpl_vars['localeName']->value;?>

					</a>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
<?php }
}
}
