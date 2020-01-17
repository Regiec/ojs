<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:10:39
  from 'app:frontendcomponentspaginat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e207cef94afa6_00384453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9682151be098398fb7a96b2156c8f1b007d7bfe0' => 
    array (
      0 => 'app:frontendcomponentspaginat',
      1 => 1577444162,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e207cef94afa6_00384453 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['prevUrl']->value || $_smarty_tpl->tpl_vars['nextUrl']->value) {?>
	<nav aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.pagination.label"),$_smarty_tpl ) ) ));?>
">
		<ul class="pagination justify-content-center">
			<li class="page-item<?php if (!$_smarty_tpl->tpl_vars['prevUrl']->value) {?> disabled<?php }?>">
				<a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['prevUrl']->value;?>
">
					<span aria-hidden="true">&larr;</span>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"help.previous"),$_smarty_tpl ) );?>

				</a>
			</li>
			<li class="page-item active">
				<span class="page-link">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.pagination",'start'=>$_smarty_tpl->tpl_vars['showingStart']->value,'end'=>$_smarty_tpl->tpl_vars['showingEnd']->value,'total'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl ) );?>

				</span>
			</li>
			<li class="page-item<?php if (!$_smarty_tpl->tpl_vars['nextUrl']->value) {?> disabled<?php }?>">
				<a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['nextUrl']->value;?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"help.next"),$_smarty_tpl ) );?>

					<span aria-hidden="true">&rarr;</span>
				</a>
			</li>
		</ul>
	</nav>
<?php }
}
}
