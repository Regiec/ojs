<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:10:39
  from 'app:frontendobjectsissuesumma' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e207cef8ae9e7_86272799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86c3c6d3b8626fd94695da222063914b868c2845' => 
    array (
      0 => 'app:frontendobjectsissuesumma',
      1 => 1577444163,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e207cef8ae9e7_86272799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/wwwojs-test/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['issue']->value->getShowTitle() && $_smarty_tpl->tpl_vars['issue']->value->getLocalizedTitle()) {?>
	<?php $_smarty_tpl->_assignInScope('showTitle', true);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('showTitle', false);
}?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "issueTitle", null);?>
	<?php if ($_smarty_tpl->tpl_vars['issue']->value->getIssueSeries()) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueSeries() ));?>

	<?php } elseif ($_smarty_tpl->tpl_vars['showTitle']->value) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedTitle() ));?>

	<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.issue"),$_smarty_tpl ) );?>

	<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="card issue-summary">
	<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl()) {?>
		<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
			<img class="card-img-top issue-summary-cover" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() != '') {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
		</a>
	<?php }?>
	<div class="card-body">
		<<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
 class="card-title issue-summary-series">
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueTitle']->value ));?>

			</a>
		</<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
>
		<?php if ($_smarty_tpl->tpl_vars['showTitle']->value || $_smarty_tpl->tpl_vars['issue']->value->getDatePublished()) {?>
			<div class="card-text">
				<?php if ($_smarty_tpl->tpl_vars['issue']->value->getDatePublished()) {?>
					<p class="issue-summary-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['issue']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatLong']->value);?>
</p>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['issue']->value->getIssueSeries() && $_smarty_tpl->tpl_vars['showTitle']->value) {?>
					<p class="issue-summary-title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedTitle() ));?>
</p>
				<?php }?>
			</div>
		<?php }?>
	</div>
</div>
<?php }
}
