<?php
/* Smarty version 3.1.33, created on 2020-01-17 07:30:27
  from 'app:frontendobjectsannounceme' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e216293cc4083_33168405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '660b223f3bf07582db114d3b754e5eef84375869' => 
    array (
      0 => 'app:frontendobjectsannounceme',
      1 => 1574676584,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e216293cc4083_33168405 (Smarty_Internal_Template $_smarty_tpl) {
?><article class="announcement-summary media">
	<div class="media-body">
		<h2 class="media-heading">
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"announcement",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['announcement']->value->getId()),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedTitle() ));?>

			</a>
		</h2>
		<p class="date">
			<span class="glyphicon glyphicon-calendar"></span>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getDatePosted() ));?>

		</p>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescriptionShort() ));?>

	</div>
</article><!-- .announcement-summary -->
<?php }
}
