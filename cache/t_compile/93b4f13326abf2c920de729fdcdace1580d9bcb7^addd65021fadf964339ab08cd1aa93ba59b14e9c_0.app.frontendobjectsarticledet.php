<?php
/* Smarty version 3.1.33, created on 2020-01-16 11:00:19
  from 'app:frontendobjectsarticledet' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2042439b32b7_34755757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'addd65021fadf964339ab08cd1aa93ba59b14e9c' => 
    array (
      0 => 'app:frontendobjectsarticledet',
      1 => 1577444163,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/galley_link.tpl' => 3,
  ),
),false)) {
function content_5e2042439b32b7_34755757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/wwwojs-test/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="article-details">
	<div class="page-header row">
		<div class="col-lg article-meta-mobile">
						<div class="article-details-issue-section small-screen">
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueSeries() ));?>
</a><?php if ($_smarty_tpl->tpl_vars['section']->value) {?>, <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle() ));?>
</span><?php }?>
			</div>

			<div class="article-details-issue-identifier large-screen">
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueSeries() ));?>
</a>
			</div>

			<h1 class="article-details-fulltitle">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedFullTitle() ));?>

			</h1>

			<?php if ($_smarty_tpl->tpl_vars['section']->value) {?>
				<div class="article-details-issue-section large-screen"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle() ));?>
</div>
			<?php }?>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() != 'doi') {?>
					<?php continue 1;?>
				<?php }?>
				<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['article']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
				<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
					<?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) )));?>
					<div class="article-details-doi large-screen">
						<a href="<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
</a>
					</div>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php if ($_smarty_tpl->tpl_vars['article']->value->getDatePublished()) {?>
				<div class="article-details-published">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.currentIssuePublished",'date'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatLong']->value)),$_smarty_tpl ) );?>

				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['article']->value->getAuthors()) {?>
				<ul class="authors-string">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'authorString', false, 'authorStringKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['authorStringKey']->value => $_smarty_tpl->tpl_vars['authorString']->value) {
?>
						<li><?php if ($_smarty_tpl->tpl_vars['authorString']->value->getLocalizedAffiliation() || $_smarty_tpl->tpl_vars['authorString']->value->getLocalizedBiography()) {?><a class="author-string-href" href="#author-<?php echo $_smarty_tpl->tpl_vars['authorStringKey']->value+1;?>
"><span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authorString']->value->getFullName() ));?>
</span><sup class="author-symbol author-plus">&plus;</sup><sup class="author-symbol author-minus hide">&minus;</sup></a><?php } else { ?><span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authorString']->value->getFullName() ));?>
</span><?php }
if ($_smarty_tpl->tpl_vars['authorString']->value->getOrcid()) {?><a class="orcidImage" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authorString']->value->getOrcid() ));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['orcidImage']->value;?>
"></a><?php }?></li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>

								<?php $_smarty_tpl->_assignInScope('authorCount', count($_smarty_tpl->tpl_vars['article']->value->getAuthors()));?>
				<?php $_smarty_tpl->_assignInScope('authorBioIndex', 0);?>
				<div class="article-details-authors">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author', false, 'authorKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['authorKey']->value => $_smarty_tpl->tpl_vars['author']->value) {
?>
						<div class="article-details-author hideAuthor" id="author-<?php echo $_smarty_tpl->tpl_vars['authorKey']->value+1;?>
">
							<div class="article-details-author-name small-screen">
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>

							</div>
							<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {?>
								<div class="article-details-author-affiliation"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>
</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['author']->value->getOrcid()) {?>
								<div class="article-details-author-orcid">
									<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>
" target="_blank">
										<?php echo $_smarty_tpl->tpl_vars['orcidIcon']->value;?>

										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>

									</a>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography()) {?>
								<button type="button" class="article-details-bio-toggle" data-toggle="modal" data-target="#authorBiographyModal<?php echo $_smarty_tpl->tpl_vars['authorKey']->value+1;?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.article.authorBio"),$_smarty_tpl ) );?>

								</button>
																<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, "authorBiographyModalsTemp");?>
									<div
											class="modal fade"
											id="authorBiographyModal<?php echo $_smarty_tpl->tpl_vars['authorKey']->value+1;?>
"
											tabindex="-1"
											role="dialog"
											aria-labelledby="authorBiographyModalTitle<?php echo $_smarty_tpl->tpl_vars['authorKey']->value+1;?>
"
											aria-hidden="true"
									>
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<div class="modal-title" id="authorBiographyModalTitle<?php echo $_smarty_tpl->tpl_vars['authorKey']->value+1;?>
">
														<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>

													</div>
													<button type="button" class="close" data-dismiss="modal" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.close"),$_smarty_tpl ) ) ));?>
">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography() ));?>

												</div>
											</div>
										</div>
									</div>
								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php }?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>

			<?php }?>
		</div>
	</div><!-- .page-header -->

	<div class="row justify-content-md-center" id="mainArticleContent">
		<div class="col-lg-3 order-lg-2" id="articleDetailsWrapper">
			<div class="article-details-sidebar" id="articleDetails">

								<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage() || $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImage()) {?>
					<div class="article-details-block article-details-cover">
						<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage()) {?>
							<img class="img-fluid" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText()) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
						<?php } else { ?>
							<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
								<img class="img-fluid" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText()) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
							</a>
						<?php }?>
					</div>
				<?php }?>

								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "authorBiographyModals", null, null);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authorBiographyModalsTemp']->value, 'modal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['modal']->value) {
?>
						<?php echo $_smarty_tpl->tpl_vars['modal']->value;?>

					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


								<?php if ($_smarty_tpl->tpl_vars['primaryGalleys']->value) {?>
					<div class="article-details-block article-details-galleys article-details-galleys-sidebar">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['primaryGalleys']->value, 'galley');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
?>
							<div class="article-details-galley">
								<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'galley'=>$_smarty_tpl->tpl_vars['galley']->value,'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('purchaseArticleFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('currency')), 0, true);
?>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['supplementaryGalleys']->value) {?>
					<div class="article-details-block article-details-galleys-supplementary">
						<h2 class="article-details-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.article.supplementaryFiles"),$_smarty_tpl ) );?>
</h2>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplementaryGalleys']->value, 'galley');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
?>
							<div class="article-details-galley">
								<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'galley'=>$_smarty_tpl->tpl_vars['galley']->value,'isSupplementary'=>"1"), 0, true);
?>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				<?php }?>

								<?php if (!empty($_smarty_tpl->tpl_vars['keywords']->value[$_smarty_tpl->tpl_vars['currentLocale']->value])) {?>
					<div class="article-details-block article-details-keywords">
						<h2 class="article-details-heading">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.subject"),$_smarty_tpl ) );?>

						</h2>
						<div class="article-details-keywords-value">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keywords']->value, 'keyword');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyword']->value) {
?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keyword']->value, 'keywordItem', false, NULL, 'keywords', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keywordItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['total'];
?>
									<span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['keywordItem']->value ));?>
</span><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last'] : null)) {?><br><?php }?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['citation']->value) {?>
					<div class="article-details-block article-details-how-to-cite">
						<h2 class="article-details-heading">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.howToCite"),$_smarty_tpl ) );?>

						</h2>
						<div id="citationOutput" class="article-details-how-to-cite-citation" role="region" aria-live="polite">
							<?php echo $_smarty_tpl->tpl_vars['citation']->value;?>

						</div>
						<div class="dropdown">
							<button class="btn dropdown-toggle" type="button" id="cslCitationFormatsButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-csl-dropdown="true">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.howToCite.citationFormats"),$_smarty_tpl ) );?>

							</button>
							<div class="dropdown-menu" aria-labelledby="cslCitationFormatsButton">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['citationStyles']->value, 'citationStyle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['citationStyle']->value) {
?>
									<a
										class="dropdown-item"
										aria-controls="citationOutput"
										href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"citationstylelanguage",'op'=>"get",'path'=>$_smarty_tpl->tpl_vars['citationStyle']->value['id'],'params'=>$_smarty_tpl->tpl_vars['citationArgs']->value),$_smarty_tpl ) );?>
"
										data-load-citation
										data-json-href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"citationstylelanguage",'op'=>"get",'path'=>$_smarty_tpl->tpl_vars['citationStyle']->value['id'],'params'=>$_smarty_tpl->tpl_vars['citationArgsJson']->value),$_smarty_tpl ) );?>
"
									>
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['citationStyle']->value['title'] ));?>

									</a>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php if (count($_smarty_tpl->tpl_vars['citationDownloads']->value)) {?>
									<h3 class="dropdown-header">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.howToCite.downloadCitation"),$_smarty_tpl ) );?>

									</h3>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['citationDownloads']->value, 'citationDownload');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['citationDownload']->value) {
?>
										<a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"citationstylelanguage",'op'=>"download",'path'=>$_smarty_tpl->tpl_vars['citationDownload']->value['id'],'params'=>$_smarty_tpl->tpl_vars['citationArgs']->value),$_smarty_tpl ) );?>
">
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['citationDownload']->value['title'] ));?>

										</a>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php }?>
							</div>
						</div>
					</div>
				<?php }?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() == 'doi') {?>
						<?php continue 1;?>
					<?php }?>
					<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['article']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
					<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
						<div class="article-details-block article-details-pubid">
							<h2 class="article-details-heading">
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdDisplayType() ));?>

							</h2>
							<div class="article-details-pubid-value">
								<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) ))) {?>
									<a id="pub-id::<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() ));?>
" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) ));?>
">
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) ));?>

									</a>
								<?php } else { ?>
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubId']->value ));?>

								<?php }?>
							</div>
						</div>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Details"),$_smarty_tpl ) );?>

			</div>
		</div>
		<div class="col-lg-9 order-lg-1" id="articleMainWrapper">
			<div class="article-details-main" id="articleMain">

								<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract()) {?>
					<div class="article-details-block article-details-abstract">
						<h2 class="article-details-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.abstract"),$_smarty_tpl ) );?>
</h2>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract() ));?>

					</div>
				<?php }?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() != 'doi') {?>
						<?php continue 1;?>
					<?php }?>
					<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['article']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
					<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
						<?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) )));?>
						<div class="article-details-block article-details-doi small-screen">
							<a href="<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
</a>
						</div>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

								<?php if ($_smarty_tpl->tpl_vars['primaryGalleys']->value) {?>
					<div class="article-details-block article-details-galleys article-details-galleys-btm">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['primaryGalleys']->value, 'galley');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
?>
							<div class="article-details-galley">
								<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'galley'=>$_smarty_tpl->tpl_vars['galley']->value,'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('purchaseArticleFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('currency')), 0, true);
?>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['parsedCitations']->value->getCount() || $_smarty_tpl->tpl_vars['article']->value->getCitations()) {?>
					<div class="article-details-block article-details-references">
						<h2 class="article-details-heading">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.citations"),$_smarty_tpl ) );?>

						</h2>
						<div class="article-details-references-value">
							<?php if ($_smarty_tpl->tpl_vars['parsedCitations']->value->getCount()) {?>
								<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'parsedCitations','item'=>'parsedCitation'));
$_block_repeat=true;
echo $_block_plugin1->smartyIterate(array('from'=>'parsedCitations','item'=>'parsedCitation'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
									<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['parsedCitation']->value->getCitationWithLinks() ));?>
</p>
								<?php $_block_repeat=false;
echo $_block_plugin1->smartyIterate(array('from'=>'parsedCitations','item'=>'parsedCitation'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['article']->value->getCitations()) {?>
								<?php echo nl2br($_smarty_tpl->tpl_vars['article']->value->getCitations());?>

							<?php }?>
						</div>
					</div>
				<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['copyright']->value || $_smarty_tpl->tpl_vars['licenseUrl']->value) {?>
					<div class="article-details-block article-details-license">
						<?php if ($_smarty_tpl->tpl_vars['licenseUrl']->value) {?>
							<?php if ($_smarty_tpl->tpl_vars['ccLicenseBadge']->value) {?>
								<?php echo $_smarty_tpl->tpl_vars['ccLicenseBadge']->value;?>

									<?php if ($_smarty_tpl->tpl_vars['copyrightHolder']->value) {?>
										<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.copyrightStatement",'copyrightHolder'=>$_smarty_tpl->tpl_vars['copyrightHolder']->value,'copyrightYear'=>$_smarty_tpl->tpl_vars['copyrightYear']->value),$_smarty_tpl ) );?>
</p>
									<?php }?>
							<?php } else { ?>
								<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['licenseUrl']->value ));?>
" class="copyright">
									<?php if ($_smarty_tpl->tpl_vars['copyrightHolder']->value) {?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.copyrightStatement",'copyrightHolder'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['copyrightHolder']->value )),'copyrightYear'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['copyrightYear']->value ))),$_smarty_tpl ) );?>

									<?php } else { ?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.license"),$_smarty_tpl ) );?>

									<?php }?>
								</a>
							<?php }?>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>

						<?php }?>
					</div>
				<?php }?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Main"),$_smarty_tpl ) );?>


			</div>
		</div>

		<div class="col-lg-12 order-lg-3 article-footer-hook">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Footer::PageFooter"),$_smarty_tpl ) );?>

		</div>

	</div>
</div>
<?php }
}
