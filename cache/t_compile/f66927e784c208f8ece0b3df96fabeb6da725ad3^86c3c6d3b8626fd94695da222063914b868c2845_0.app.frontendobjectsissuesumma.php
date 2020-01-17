<?php
/* Smarty version 3.1.33, created on 2020-01-16 13:59:26
  from 'app:frontendobjectsissuesumma' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e206c3ec7ac23_60074055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86c3c6d3b8626fd94695da222063914b868c2845' => 
    array (
      0 => 'app:frontendobjectsissuesumma',
      1 => 1576242237,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e206c3ec7ac23_60074055 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['issue']->value->getShowTitle()) {
$_smarty_tpl->_assignInScope('issueTitle', $_smarty_tpl->tpl_vars['issue']->value->getLocalizedTitle());
}
$_smarty_tpl->_assignInScope('issueSeries', $_smarty_tpl->tpl_vars['issue']->value->getIssueSeries());
$_smarty_tpl->_assignInScope('issueCover', $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl());?>

<div class="card obj_issue_summary">

	<?php if ($_smarty_tpl->tpl_vars['issueCover']->value) {?>
		<a class="cover img-thumbnail" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
			<img class="card-img-top" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueCover']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() != '') {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
		</a>
	<?php }?>

	<div class="card-body">
		<h3 class="card-title issue-archive-title">
			<a class="title" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
				<?php if ($_smarty_tpl->tpl_vars['issueTitle']->value) {?>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueTitle']->value ));?>

				<?php } else { ?>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value ));?>

				<?php }?>
			</a>
		</h3>
		<p class="card-text">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueSeries']->value ));?>

		</p>

		<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
" class="btn btn-secondary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.gregg.issue-read"),$_smarty_tpl ) );?>
</a>
	</div>
</div>
<?php }
}
