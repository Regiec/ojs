<?php
/* Smarty version 3.1.33, created on 2020-01-16 11:09:22
  from 'app:frontendcomponentsfooter.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2044624c4fd8_54293686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.',
      1 => 1562228913,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2044624c4fd8_54293686 (Smarty_Internal_Template $_smarty_tpl) {
?>
	</div><!-- pkp_structure_main -->

		
<div class="pkp_structure_sidebar left" role="complementary" aria-label="Sidebar">

<?php if (empty($_smarty_tpl->tpl_vars['isFullWidth']->value)) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );?>
	<?php if ($_smarty_tpl->tpl_vars['sidebarCode']->value) {?>
			<div class="pkp_structure_sidebar left" role="complementary" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));?>
">
				<?php echo $_smarty_tpl->tpl_vars['sidebarCode']->value;?>

			</div><!-- pkp_sidebar.left -->
		<?php }?>
	<?php }?>
</div></div>


<!-- pkp_structure_content -->

<div id="pkp_content_footer" class="pkp_structure_footer_wrapper" role="contentinfo">

	<div class="pkp_structure_footer">

		<?php if ($_smarty_tpl->tpl_vars['pageFooter']->value) {?>
			<div class="pkp_footer_content">
				<?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>

			</div>
		<?php }?>

		<div class="pkp_brand_footer" role="complementary">
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"about",'op'=>"aboutThisPublishingSystem"),$_smarty_tpl ) );?>
">
				<img alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.aboutThisPublishingSystem"),$_smarty_tpl ) );?>
" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['brandImage']->value;?>
">
			</a>
		</div>
	</div>
</div><!-- pkp_structure_footer_wrapper -->

</div><!-- pkp_structure_page -->

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

</body>
</html>
<?php }
}
