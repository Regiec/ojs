<?php
/* Smarty version 3.1.33, created on 2020-01-16 11:12:14
  from 'plugins-plugins-generic-pdfJsViewer-generic-pdfJsViewer:display.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e20450e8dea22_11383763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '504348cc7222e1110a6019067f9a002726c02324' => 
    array (
      0 => 'plugins-plugins-generic-pdfJsViewer-generic-pdfJsViewer:display.tpl',
      1 => 1577444168,
      2 => 'plugins-plugins-generic-pdfJsViewer-generic-pdfJsViewer',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 1,
  ),
),false)) {
function content_5e20450e8dea22_11383763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/wwwojs-test/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE html>
<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
" xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
">
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitleTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.pageTitle",'title'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['pageTitleTranslated']->value), 0, false);
?>
<body class="page-view-pdf">
	<div class="pdf-header">
		<div class="pdf-return-article">
			<a href="<?php echo $_smarty_tpl->tpl_vars['parentUrl']->value;?>
" class="btn btn-text">
				←
				<span class="sr-only">
					<?php if ($_smarty_tpl->tpl_vars['parent']->value instanceOf Issue) {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.return"),$_smarty_tpl ) );?>

					<?php } else { ?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.return"),$_smarty_tpl ) );?>

					<?php }?>
				</span>
				<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

			</a>
		</div>
		<div class="pdf-download-button">
			<a href="<?php echo $_smarty_tpl->tpl_vars['pdfUrl']->value;?>
" class="btn" download>
				<span class="label">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.download"),$_smarty_tpl ) );?>

				</span>
			</a>
		</div>
	</div>

	<div id="pdfCanvasContainer" class="pdf-frame">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['pluginUrl']->value;?>
/pdf.js/web/viewer.html?file=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pdfUrl']->value,"url" ));?>
" width="100%" height="100%" style="min-height: 500px;" allowfullscreen webkitallowfullscreen></iframe>
	</div>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

</body>
</html>
<?php }
}
