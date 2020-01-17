<?php
/* Smarty version 3.1.33, created on 2020-01-16 11:00:21
  from 'app:frontendcomponentsfooter.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2042450b7da9_92465748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.',
      1 => 1577444162,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/loginForm.tpl' => 1,
  ),
),false)) {
function content_5e2042450b7da9_92465748 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="site-footer">
	<div class="container site-footer-sidebar" role="complementary"
	     aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));?>
">
		<div class="row">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );?>

		</div>
	</div>
	<div class="container site-footer-content">
		<div class="row">
			<?php if ($_smarty_tpl->tpl_vars['pageFooter']->value) {?>
				<div class="col-md site-footer-content align-self-center">
					<?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>

				</div>
			<?php }?>

			<div class="col-md col-md-2 align-self-center text-right">
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"about",'op'=>"aboutThisPublishingSystem"),$_smarty_tpl ) );?>
">
					<img class="footer-brand-image" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.aboutThisPublishingSystem"),$_smarty_tpl ) );?>
"
					     src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['brandImage']->value;?>
">
				</a>
			</div>
		</div>
	</div>
</footer><!-- pkp_structure_footer_wrapper -->

<?php if (!empty(trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'authorBiographyModals')))) {?>
	<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'authorBiographyModals');?>

<?php }?>

<div id="loginModal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/loginForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('formType'=>"loginModal"), 0, false);
?>
			</div>
		</div>
	</div>
</div>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend",'scripts'=>$_smarty_tpl->tpl_vars['scripts']->value),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

</body>
</html>
<?php }
}
