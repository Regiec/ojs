<?php
/* Smarty version 3.1.33, created on 2020-01-17 00:35:14
  from 'app:frontendpagesaboutThisPub' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2101421c18b9_35043144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68d74ed01764c7c08c77d46e2ab6f331c94fb2c8' => 
    array (
      0 => 'app:frontendpagesaboutThisPub',
      1 => 1559234184,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5e2101421c18b9_35043144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"about.aboutThisPublishingSystem"), 0, false);
?>

<div class="page page_about_publishing_system">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"about.aboutThisPublishingSystem"), 0, false);
?>

	<p>
		<?php if ($_smarty_tpl->tpl_vars['currentJournal']->value) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.aboutOJSJournal",'ojsVersion'=>$_smarty_tpl->tpl_vars['appVersion']->value),$_smarty_tpl ) );?>

		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.aboutOJSSite",'ojsVersion'=>$_smarty_tpl->tpl_vars['appVersion']->value),$_smarty_tpl ) );?>

		<?php }?>
	</p>

	<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pubProcessFile']->value;?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.aboutThisPublishingSystem.altText"),$_smarty_tpl ) );?>
">

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
