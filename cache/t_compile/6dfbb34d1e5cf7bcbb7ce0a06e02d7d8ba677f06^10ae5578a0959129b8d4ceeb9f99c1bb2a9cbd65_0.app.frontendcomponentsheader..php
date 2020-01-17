<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:24:38
  from 'app:frontendcomponentsheader.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e208036ecc187_22583717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ae5578a0959129b8d4ceeb9f99c1bb2a9cbd65' => 
    array (
      0 => 'app:frontendcomponentsheader.',
      1 => 1577444162,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 1,
    'app:frontend/components/languageSwitcher.tpl' => 2,
  ),
),false)) {
function content_5e208036ecc187_22583717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/wwwojs-test/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('showingLogo', true);
if ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_string($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('showingLogo', false);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "homeUrl", null);?>
	<?php if ($_smarty_tpl->tpl_vars['currentJournal']->value && $_smarty_tpl->tpl_vars['multipleContexts']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>@constant('ROUTE_PAGE')),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('context'=>"index",'router'=>@constant('ROUTE_PAGE')),$_smarty_tpl ) );?>

	<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['requestedOp']->value == 'index') {?>
	<?php $_smarty_tpl->_assignInScope('siteNameTag', "h1");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('siteNameTag', "div");
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "brand", null);
if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_array($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value)) {?><img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['uploadName'],"url" ));?>
"<?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] != '') {?>alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] ));?>
"<?php } else { ?>alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.pageHeaderLogo.altText"),$_smarty_tpl ) );?>
"<?php }?>class="img-fluid"><?php } elseif ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_string($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?><span class="navbar-logo-text"><?php echo $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value;?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_array($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?><img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value['uploadName'],"url" ));?>
"alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value['altText'] ));?>
"class="img-fluid"><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/structure/logo.png" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['applicationName']->value ));?>
" class="img-fluid"><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<!DOCTYPE html>
<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
" xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
">
<?php if (!$_smarty_tpl->tpl_vars['pageTitleTranslated']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitleTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body dir="<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentLocaleLangDir']->value )))===null||$tmp==='' ? "ltr" : $tmp);?>
">

<header class="main-header">
	<div class="container">

		<<?php echo $_smarty_tpl->tpl_vars['siteNameTag']->value;?>
 class="sr-only"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pageTitleTranslated']->value ));?>
</<?php echo $_smarty_tpl->tpl_vars['siteNameTag']->value;?>
>

	<div class="navbar-logo">
		<a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
</a>
	</div>

		<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
		        aria-controls="main-navbar" aria-expanded="false"
		        aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.nav.toggle"),$_smarty_tpl ) );?>
">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-md-center" id="main-navbar">
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "primaryMenu", null);?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"primary",'id'=>"primaryNav",'ulClass'=>"navbar-nav",'liClass'=>"nav-item"),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php if (!empty(trim($_smarty_tpl->tpl_vars['primaryMenu']->value)) || $_smarty_tpl->tpl_vars['currentContext']->value) {?>
				<?php echo $_smarty_tpl->tpl_vars['primaryMenu']->value;?>

			<?php }?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"user",'id'=>"primaryNav-userNav",'ulClass'=>"navbar-nav",'liClass'=>"nav-item"),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/languageSwitcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"languageSmallNav"), 0, false);
?>
		</div>
	</nav>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"user",'id'=>"userNav",'ulClass'=>"navbar-nav",'liClass'=>"nav-item"),$_smarty_tpl ) );?>


		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/languageSwitcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"languageLargeNav"), 0, true);
?>

	</div>
</header>
<?php }
}
