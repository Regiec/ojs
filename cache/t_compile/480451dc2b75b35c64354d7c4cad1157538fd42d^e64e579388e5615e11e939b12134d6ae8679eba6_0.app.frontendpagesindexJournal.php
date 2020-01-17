<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:21:23
  from 'app:frontendpagesindexJournal' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e207f73f2dc51_55550753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64e579388e5615e11e939b12134d6ae8679eba6' => 
    array (
      0 => 'app:frontendpagesindexJournal',
      1 => 1577444166,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/objects/galley_link.tpl' => 1,
    'app:frontend/objects/issue_toc.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5e207f73f2dc51_55550753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/wwwojs-test/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedName()), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['homepageImage']->value) {?>
	<div class="homepage-image<?php if ($_smarty_tpl->tpl_vars['issue']->value) {?> homepage-image-behind-issue<?php }?>">
		<img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepageImage']->value['uploadName'],"url" ));?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepageImageAltText']->value ));?>
">
	</div>
<?php }?>

<div class="container container-homepage-issue page-content">
	<?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
		<h2 class="h5 homepage-issue-current">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.currentIssue"),$_smarty_tpl ) );?>

		</h2>
		<div class="h1 homepage-issue-identifier">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueSeries() ));?>

		</div>
		<div class="h6 homepage-issue-published">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.currentIssuePublished",'date'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['issue']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatLong']->value)),$_smarty_tpl ) );?>

		</div>

				<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl() || $_smarty_tpl->tpl_vars['issue']->value->hasDescription() || $_smarty_tpl->tpl_vars['issueGalleys']->value) {?>
			<div class="row justify-content-center homepage-issue-header">
				<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl()) {?>
					<div class="col-lg-3">
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"view",'page'=>"issue",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
							<img class="img-fluid homepage-issue-cover" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() != '') {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
						</a>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['issue']->value->hasDescription() || $_smarty_tpl->tpl_vars['journalDescription']->value || $_smarty_tpl->tpl_vars['issueGalleys']->value) {?>
					<div class="col-lg-9">
						<div class="homepage-issue-description-wrapper">
							<?php if ($_smarty_tpl->tpl_vars['issue']->value->hasDescription()) {?>
								<div class="homepage-issue-description">
									<div class="h2">
										<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedTitle()) {?>
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedTitle() ));?>

										<?php } else { ?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.issueDescription"),$_smarty_tpl ) );?>

										<?php }?>
									</div>
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedDescription() ));?>

									<div class="homepage-issue-description-more">
										<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"view",'page'=>"issue",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.more"),$_smarty_tpl ) );?>
</a>
									</div>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['journalDescription']->value) {?>
								<div class="homepage-journal-description long-text" id="homepageDescription">
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['journalDescription']->value ));?>

								</div>
								<div class="homepage-description-buttons hidden" id="homepageDescriptionButtons">
									<a class="homepage-journal-description-more hidden" id="homepageDescriptionMore"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.more"),$_smarty_tpl ) );?>
</a>
									<a class="homepage-journal-description-less hidden" id="homepageDescriptionLess"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.less"),$_smarty_tpl ) );?>
</a>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['issueGalleys']->value) {?>
								<div class="homepage-issue-galleys">
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
			</div>
		<?php }?>

	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['numAnnouncementsHomepage']->value && count($_smarty_tpl->tpl_vars['announcements']->value)) {?>
	<section class="row homepage-announcements">
		<h2 class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"announcement.announcementsHome"),$_smarty_tpl ) );?>
</h2>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
?>
			<article class="col-md-4 homepage-announcement">
				<h3 class="homepage-announcement-title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedTitle() ));?>
</h3>
				<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescriptionShort() ));?>

					<br>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"announcement",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['announcement']->value->getId()),$_smarty_tpl ) );?>
">
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "more", "more", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.more"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.more",'text'=>$_smarty_tpl->tpl_vars['more']->value),$_smarty_tpl ) );?>

					</a>
				</p>
				<footer>
					<small class="homepage-announcement-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement']->value->getDatePosted(),$_smarty_tpl->tpl_vars['dateFormatLong']->value);?>
</small>
				</footer>
			</article>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</section>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
		<div class="row issue-wrapper<?php if ($_smarty_tpl->tpl_vars['homepageImage']->value && $_smarty_tpl->tpl_vars['issue']->value->hasDescription()) {?> issue-full-data<?php } elseif ($_smarty_tpl->tpl_vars['homepageImage']->value && $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl()) {?> issue-image-cover<?php } elseif ($_smarty_tpl->tpl_vars['homepageImage']->value) {?> issue-only-image<?php }?>">
			<div class="col-12 col-lg-9">
				<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/issue_toc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sectionHeading'=>"h3"), 0, false);
?>
			</div>
		</div>

		<div class="text-center">
			<a class="btn" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"issue",'op'=>"archive"),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.viewAllIssues"),$_smarty_tpl ) );?>

			</a>
		</div>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['additionalHomeContent']->value) {?>
		<div class="row justify-content-center homepage-additional-content">
			<div class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['additionalHomeContent']->value;?>
</div>
		</div>
	<?php }?>
</div><!-- .container -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
