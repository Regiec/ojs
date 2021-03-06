<?php
/* Smarty version 3.1.33, created on 2020-01-16 18:35:25
  from 'app:frontendcomponentspaginat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e20aced061b45_20205168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9682151be098398fb7a96b2156c8f1b007d7bfe0' => 
    array (
      0 => 'app:frontendcomponentspaginat',
      1 => 1575115657,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e20aced061b45_20205168 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['prevUrl']->value || $_smarty_tpl->tpl_vars['nextUrl']->value) {?>
	<nav aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.pagination.label"),$_smarty_tpl ) ) ));?>
">
		<ul class="pager">
			<?php if ($_smarty_tpl->tpl_vars['prevUrl']->value) {?>
				<li class="previous">
					<a href="<?php echo $_smarty_tpl->tpl_vars['prevUrl']->value;?>
">
						<span aria-hidden="true">&larr;</span>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"help.previous"),$_smarty_tpl ) );?>

					</a>
				</li>
			<?php }?>
			<li class="current">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.pagination",'start'=>$_smarty_tpl->tpl_vars['showingStart']->value,'end'=>$_smarty_tpl->tpl_vars['showingEnd']->value,'total'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl ) );?>

			</li>
			<?php if ($_smarty_tpl->tpl_vars['nextUrl']->value) {?>
			<li class="next">
				<a class="next" href="<?php echo $_smarty_tpl->tpl_vars['nextUrl']->value;?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"help.next"),$_smarty_tpl ) );?>

					<span aria-hidden="true">&rarr;</span>
				</a>
			</li>
			<?php }?>
		</ul>
	</nav>
<?php }
}
}
