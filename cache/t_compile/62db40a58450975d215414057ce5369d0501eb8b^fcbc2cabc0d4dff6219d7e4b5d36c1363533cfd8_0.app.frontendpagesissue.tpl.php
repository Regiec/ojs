<?php
/* Smarty version 3.1.33, created on 2020-01-16 13:18:30
  from 'app:frontendpagesissue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2062a62e0457_97071705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcbc2cabc0d4dff6219d7e4b5d36c1363533cfd8' => 
    array (
      0 => 'app:frontendpagesissue.tpl',
      1 => 1577444164,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/notification.tpl' => 2,
    'app:frontend/objects/galley_link.tpl' => 1,
    'app:frontend/objects/issue_toc.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5e2062a62e0457_97071705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/wwwojs-test/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['issueIdentification']->value), 0, false);
?>

<div class="container page-issue">

		<?php if (!$_smarty_tpl->tpl_vars['issue']->value) {?>
		<div class="page-header page-issue-header">
			<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('messageKey'=>"current.noCurrentIssueDesc"), 0, false);
?>
		</div>

		<?php } else { ?>
		<div class="page-header page-issue-header">

				<?php if (!$_smarty_tpl->tpl_vars['issue']->value->getPublished()) {?>
			<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('messageKey'=>"editor.issues.preview"), 0, true);
?>
		<?php }?>

			<h1><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueSeries() ));?>
</h1>
			<div class="page-issue-date">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.currentIssuePublished",'date'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['issue']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatLong']->value)),$_smarty_tpl ) );?>

			</div>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
?>
				<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['issue']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
				<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
					<?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) )));?>
					<?php if ($_smarty_tpl->tpl_vars['doiUrl']->value) {?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pubId", null);?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
">
								<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>

							</a>
						<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php }?>
					<div class="page-issue-doi">
						<?php if ($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() == 'doi') {?>
							<?php echo $_smarty_tpl->tpl_vars['pubId']->value;?>

						<?php } else { ?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.issuePubId",'pubIdType'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdDisplayType() )),'pubId'=>$_smarty_tpl->tpl_vars['pubId']->value),$_smarty_tpl ) );?>

						<?php }?>
					</div>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>

		<div class="row justify-content-center page-issue-details">
			<?php if ($_smarty_tpl->tpl_vars['issueGalleys']->value || $_smarty_tpl->tpl_vars['issue']->value->hasDescription() || $_smarty_tpl->tpl_vars['issue']->value->getLocalizedTitle()) {?>
				<div class="col-lg-9">
					<div class="page-issue-description-wrapper">
						<?php if ($_smarty_tpl->tpl_vars['issue']->value->hasDescription() || $_smarty_tpl->tpl_vars['issue']->value->getLocalizedTitle()) {?>
							<div class="page-issue-description">
								<div class="h2">
									<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedTitle()) {?>
										<?php echo $_smarty_tpl->tpl_vars['issue']->value->getLocalizedTitle();?>

									<?php } else { ?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.issueDescription"),$_smarty_tpl ) );?>

									<?php }?>
								</div>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedDescription() ));?>

							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['issueGalleys']->value) {?>
							<div class="page-issue-galleys">
								<div class="h3">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.fullIssue"),$_smarty_tpl ) );?>

								</div>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issueGalleys']->value, 'galley');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
?>
									<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['issue']->value,'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('purchaseIssueFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('currency')), 0, true);
?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						<?php }?>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl()) {?>
				<div class="col-lg-3">
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"view",'page'=>"issue",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
						<img class="img-fluid page-issue-cover" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() != '') {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
					</a>
				</div>
			<?php }?>
		</div><!-- .row -->

		<div class="row<?php if (!$_smarty_tpl->tpl_vars['issue']->value->getLocalizedDescription() || !$_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl()) {?> issue-wrapper<?php }?>">
			<div class="col-12 col-lg-9">
				<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/issue_toc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sectionHeading'=>"h2"), 0, false);
?>
			</div>
		</div>
	<?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
