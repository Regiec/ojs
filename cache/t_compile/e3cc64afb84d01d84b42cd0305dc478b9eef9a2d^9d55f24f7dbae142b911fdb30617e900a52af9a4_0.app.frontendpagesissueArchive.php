<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:10:39
  from 'app:frontendpagesissueArchive' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e207cef7c54b9_23857751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d55f24f7dbae142b911fdb30617e900a52af9a4' => 
    array (
      0 => 'app:frontendpagesissueArchive',
      1 => 1577444166,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/notification.tpl' => 1,
    'app:frontend/objects/issue_summary.tpl' => 1,
    'app:frontend/components/pagination.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5e207cef7c54b9_23857751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitle", null);?>
	<?php if ($_smarty_tpl->tpl_vars['prevPage']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"archive.archivesPageNumber",'pageNumber'=>$_smarty_tpl->tpl_vars['prevPage']->value+1),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"archive.archives"),$_smarty_tpl ) );?>

	<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['pageTitle']->value), 0, false);
?>

<div class="container page-archives">

	<div class="page-header page-archives-header">
		<h1><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h1>
	</div>

		<?php if (empty($_smarty_tpl->tpl_vars['issues']->value)) {?>
		<div class="page-header page-issue-header">
			<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('messageKey'=>"current.noCurrentIssueDesc"), 0, false);
?>
		</div>

		<?php } else { ?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issues']->value, 'issue', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['issue']->value) {
?>
			<?php if ($_smarty_tpl->tpl_vars['i']->value%4 == 0 && $_smarty_tpl->tpl_vars['i']->value > 0) {?>
				</div>
				<?php $_smarty_tpl->_assignInScope('open', false);?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['i']->value%4 == 0) {?>
				<div class="row justify-content-around">
				<?php $_smarty_tpl->_assignInScope('open', true);?>
			<?php }?>
			<div class="col-md-3 col-lg-2">
				<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/issue_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('heading'=>"h2"), 0, true);
?>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if ($_smarty_tpl->tpl_vars['open']->value) {?>
			</div>		<?php }?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "prevUrl", null);?>
			<?php if ($_smarty_tpl->tpl_vars['prevPage']->value > 1) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"issue",'op'=>"archive",'path'=>$_smarty_tpl->tpl_vars['prevPage']->value),$_smarty_tpl ) );?>

			<?php } elseif ($_smarty_tpl->tpl_vars['prevPage']->value === 1) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"issue",'op'=>"archive"),$_smarty_tpl ) );?>

			<?php }?>
		<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "nextUrl", null);?>
			<?php if ($_smarty_tpl->tpl_vars['nextPage']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"issue",'op'=>"archive",'path'=>$_smarty_tpl->tpl_vars['nextPage']->value),$_smarty_tpl ) );?>

			<?php }?>
		<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prevUrl'=>trim($_smarty_tpl->tpl_vars['prevUrl']->value),'nextUrl'=>trim($_smarty_tpl->tpl_vars['nextUrl']->value),'showingStart'=>$_smarty_tpl->tpl_vars['showingStart']->value,'showingEnd'=>$_smarty_tpl->tpl_vars['showingEnd']->value,'total'=>$_smarty_tpl->tpl_vars['total']->value), 0, false);
?>
	<?php }?>
</div>


<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
