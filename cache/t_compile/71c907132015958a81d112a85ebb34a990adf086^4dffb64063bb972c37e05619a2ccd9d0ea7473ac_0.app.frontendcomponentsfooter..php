<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:21:39
  from 'app:frontendcomponentsfooter.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e207f830671e4_73975441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.',
      1 => 1577531746,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e207f830671e4_73975441 (Smarty_Internal_Template $_smarty_tpl) {
?>
	</main>

		<?php if (empty($_smarty_tpl->tpl_vars['isFullWidth']->value)) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sidebarCode", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php if ($_smarty_tpl->tpl_vars['sidebarCode']->value) {?>
			<aside id="sidebar" class="pkp_structure_sidebar left col-xs-12 col-sm-2 col-md-4" role="complementary" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));?>
">
				<?php echo $_smarty_tpl->tpl_vars['sidebarCode']->value;?>

			</aside><!-- pkp_sidebar.left -->
		<?php }?>
	<?php }?>
	</div><!-- pkp_structure_content -->

	<footer class="footer" role="contentinfo">

		<div class="container">

			<div class="row">
				<?php if ($_smarty_tpl->tpl_vars['pageFooter']->value) {?>
				<div class="col-md-10">
					<?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>

				</div>
				<?php }?>

				<div class="col-md-2" role="complementary">
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"about",'op'=>"aboutThisPublishingSystem"),$_smarty_tpl ) );?>
">
                                                <img class="img-responsive" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.aboutThisPublishingSystem"),$_smarty_tpl ) );?>
" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['brandImage']->value;?>
">
                                        </a>
				</div>

			</div> <!-- .row -->
		</div><!-- .container -->
	</footer>
</div><!-- pkp_structure_page -->

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend",'scripts'=>$_smarty_tpl->tpl_vars['scripts']->value),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

</body>
</html>
<?php }
}
