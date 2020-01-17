<?php
/* Smarty version 3.1.33, created on 2020-01-16 11:08:14
  from 'app:controllerstabsettingsapp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e20441e8df0a2_72849294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '232d1bb48237b8c7f53be675f1e938a2b48b4a1f' => 
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
function content_5e20441e8df0a2_72849294 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#selectTheme').pkpHandler('$.pkp.controllers.form.ThemeOptionsHandler');
	});
<?php echo '</script'; ?>
>

<?php $_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"selectTheme"));
$_block_repeat=true;
echo $_block_plugin20->smartyFBVFormArea(array('id'=>"selectTheme"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php if ($_smarty_tpl->tpl_vars['wizardMode']->value) {?>		<?php $_smarty_tpl->_assignInScope('themeDescription', '');?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('themeDescription', "manager.setup.layout.themeDescription");?>
	<?php }?>
	<?php $_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.layout.theme",'for'=>"themePluginPath",'description'=>$_smarty_tpl->tpl_vars['themeDescription']->value));
$_block_repeat=true;
echo $_block_plugin21->smartyFBVFormSection(array('label'=>"manager.setup.layout.theme",'for'=>"themePluginPath",'description'=>$_smarty_tpl->tpl_vars['themeDescription']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"themePluginPath",'from'=>$_smarty_tpl->tpl_vars['enabledThemes']->value,'selected'=>$_smarty_tpl->tpl_vars['themePluginPath']->value,'translate'=>false),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin21->smartyFBVFormSection(array('label'=>"manager.setup.layout.theme",'for'=>"themePluginPath",'description'=>$_smarty_tpl->tpl_vars['themeDescription']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php if (count($_smarty_tpl->tpl_vars['activeThemeOptions']->value)) {?>
		<?php $_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"activeThemeOptions"));
$_block_repeat=true;
echo $_block_plugin22->smartyFBVFormArea(array('id'=>"activeThemeOptions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeThemeOptions']->value, 'themeOption', false, 'themeOptionName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['themeOptionName']->value => $_smarty_tpl->tpl_vars['themeOption']->value) {
?>

				<?php if ($_smarty_tpl->tpl_vars['themeOption']->value['type'] == 'text') {?>
					<?php $_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>$_smarty_tpl->tpl_vars['themeOption']->value['label']));
$_block_repeat=true;
echo $_block_plugin23->smartyFBVFormSection(array('label'=>$_smarty_tpl->tpl_vars['themeOption']->value['label']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( @constant('THEME_OPTION_PREFIX'),$_smarty_tpl->tpl_vars['themeOptionName']->value )),'value'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['themeOption']->value['value'] )),'label'=>$_smarty_tpl->tpl_vars['themeOption']->value['description']),$_smarty_tpl ) );?>

					<?php $_block_repeat=false;
echo $_block_plugin23->smartyFBVFormSection(array('label'=>$_smarty_tpl->tpl_vars['themeOption']->value['label']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['themeOption']->value['type'] == 'radio') {?>
					<?php $_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>$_smarty_tpl->tpl_vars['themeOption']->value['label'],'description'=>$_smarty_tpl->tpl_vars['themeOption']->value['description'],'list'=>true));
$_block_repeat=true;
echo $_block_plugin24->smartyFBVFormSection(array('label'=>$_smarty_tpl->tpl_vars['themeOption']->value['label'],'description'=>$_smarty_tpl->tpl_vars['themeOption']->value['description'],'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themeOption']->value['options'], 'themeOptionItem', false, 'themeOptionItemName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['themeOptionItemName']->value => $_smarty_tpl->tpl_vars['themeOptionItem']->value) {
?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( @constant('THEME_OPTION_PREFIX'),$_smarty_tpl->tpl_vars['themeOptionName']->value )),$_smarty_tpl->tpl_vars['themeOptionItemName']->value )),'name'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( @constant('THEME_OPTION_PREFIX'),$_smarty_tpl->tpl_vars['themeOptionName']->value )),'value'=>$_smarty_tpl->tpl_vars['themeOptionItemName']->value,'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['themeOption']->value['value'],$_smarty_tpl->tpl_vars['themeOptionItemName']->value )),'label'=>$_smarty_tpl->tpl_vars['themeOptionItem']->value),$_smarty_tpl ) );?>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php $_block_repeat=false;
echo $_block_plugin24->smartyFBVFormSection(array('label'=>$_smarty_tpl->tpl_vars['themeOption']->value['label'],'description'=>$_smarty_tpl->tpl_vars['themeOption']->value['description'],'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['themeOption']->value['type'] == 'colour') {?>
					<?php $_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin25, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>$_smarty_tpl->tpl_vars['themeOption']->value['label']));
$_block_repeat=true;
echo $_block_plugin25->smartyFBVFormSection(array('label'=>$_smarty_tpl->tpl_vars['themeOption']->value['label']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"colour",'id'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( @constant('THEME_OPTION_PREFIX'),$_smarty_tpl->tpl_vars['themeOptionName']->value )),'value'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['themeOption']->value['value'] )),'default'=>$_smarty_tpl->tpl_vars['themeOption']->value['default'],'label'=>$_smarty_tpl->tpl_vars['themeOption']->value['description']),$_smarty_tpl ) );?>

					<?php $_block_repeat=false;
echo $_block_plugin25->smartyFBVFormSection(array('label'=>$_smarty_tpl->tpl_vars['themeOption']->value['label']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php $_block_repeat=false;
echo $_block_plugin22->smartyFBVFormArea(array('id'=>"activeThemeOptions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
$_block_repeat=false;
echo $_block_plugin20->smartyFBVFormArea(array('id'=>"selectTheme"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
