<?php
/* Smarty version 3.1.33, created on 2020-01-16 11:04:47
  from 'app:frontendobjectsarticledet' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e20434ff34d85_99249471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'addd65021fadf964339ab08cd1aa93ba59b14e9c' => 
    array (
      0 => 'app:frontendobjectsarticledet',
      1 => 1576751507,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/breadcrumbs_article.tpl' => 2,
    'app:frontend/objects/galley_link.tpl' => 1,
  ),
),false)) {
function content_5e20434ff34d85_99249471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/wwwojs-test/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/home/wwwojs-test/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>
<article class="article_details">
    <?php if ($_smarty_tpl->tpl_vars['section']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs_article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitle'=>$_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle()), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs_article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"article.article"), 0, true);
?>
    <?php }?>

	<div class="article-container container">
		<div class="buttons-wrapper row">
			<div class="col-sm">
				<p class="open-access"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.gregg.open.access"),$_smarty_tpl ) );?>
</p>
			</div>
			<!-- Load Facebook SDK for JavaScript -->
			<div class="col-sm">
				<div class="fb-share-button"
				     data-href="<?php echo $_smarty_tpl->tpl_vars['currentUrl']->value;?>
"
				     data-layout="button_count" data-size="small" data-mobile-iframe="false">
				</div>
				<div class="tw-share-button">
					<a href="https://twitter.com/share" class="twitter-share-button"
					   data-show-count="false"
					   data-text="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>
">
					</a>
					<?php echo '<script'; ?>
 async src="//platform.twitter.com/widgets.js" charset="utf-8"><?php echo '</script'; ?>
>
				</div>
			</div>
		</div>
		<div class="galley-article-meta row">
						<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage() || $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImage()) {?>
				<div class="article_cover_wrapper">
					<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage()) {?>
						<img class="galley-cover-image img-fluid img-thumbnail" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText()) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
					<?php } else { ?>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
							<img class="galley-cover-image img-fluid img-thumbnail" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText()) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
						</a>
					<?php }?>
				</div>
			<?php }?>
			<div class="galley-meta-row">

								<?php if ($_smarty_tpl->tpl_vars['article']->value->getDateSubmitted()) {?>
					<div class="galley-article-date-submitted">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submissions.submitted"),$_smarty_tpl ) );?>
:<span> <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->getDateSubmitted(),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>
</span>
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
						<div class="galley-article-doi">
						<span class="galley-doi-label">
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'translatedDOI', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.readerDisplayName"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['translatedDOI']->value),$_smarty_tpl ) );?>

						</span>
							<span class="galley-doi-value">
							<a href="<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
">
																<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['doiUrl']->value,"/http.*org\//"," ");?>

							</a>
						</span>
						</div>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

								<?php if ($_smarty_tpl->tpl_vars['article']->value->getSectionTitle()) {?>
					<div class="galley-article-section-title">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getSectionTitle() ));?>

					</div>
				<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['article']->value->getDatePublished()) {?>
					<div class="galley-article-date-published">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submissions.published"),$_smarty_tpl ) );?>
:<span> <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>
</span>
					</div>
				<?php }?>
			</div>

						<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedFullTitle()) {?>
				<h1><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedFullTitle() ));?>
</h1>
			<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['article']->value->getAuthors()) {?>
				<ul class="authors-string">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'authorString', false, 'authorStringKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['authorStringKey']->value => $_smarty_tpl->tpl_vars['authorString']->value) {
?>
						<li><a class="jatsparser-author-string-href" href="#author-<?php echo $_smarty_tpl->tpl_vars['authorStringKey']->value+1;?>
"><span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authorString']->value->getFullName() ));?>
</span><sup class="author-symbol author-plus">+</sup><sup class="author-symbol author-minus hide">&minus;</sup></a><?php if ($_smarty_tpl->tpl_vars['authorString']->value->getOrcid()) {?><a class="orcidImage" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authorString']->value->getOrcid() ));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['jatsParserOrcidImage']->value;?>
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
								<a class="article-details-bio-toggle" data-toggle="modal" data-target="#authorBiographyModal<?php echo $_smarty_tpl->tpl_vars['authorKey']->value+1;?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.article.authorBio"),$_smarty_tpl ) );?>

								</a>
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
							<?php }?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>

			<?php }?>

						<?php if (!empty($_smarty_tpl->tpl_vars['keywords']->value[$_smarty_tpl->tpl_vars['currentLocale']->value])) {?>
				<div class="galley-keywords-wrapper">
					<div class="galley-keywords-row">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keywords']->value, 'keywordArray');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keywordArray']->value) {
?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keywordArray']->value, 'keyword', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['keyword']->value) {
?>
								<span class="galley-span-keyword"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['keyword']->value ));?>
</span>
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
		</div>
		<div class="articleView-data row">
			<div class="left-article-block col-xl-3">
				<?php if ($_smarty_tpl->tpl_vars['generatePdfUrl']->value || $_smarty_tpl->tpl_vars['primaryGalleys']->value) {?>
					<div class="galley-link-wrapper">
						<?php if ($_smarty_tpl->tpl_vars['generatePdfUrl']->value) {?>
							<a class="galley-link" href="<?php echo $_smarty_tpl->tpl_vars['generatePdfUrl']->value;?>
">
								<i class="fas fa-file-pdf fa-2x"></i>
							</a>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['primaryGalleys']->value) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['primaryGalleys']->value, 'galley');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
?>
									<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'galley'=>$_smarty_tpl->tpl_vars['galley']->value,'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('purchaseArticleFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('currency')), 0, true);
?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</div>
				<?php }?>
			</div>
			<div class="col-xl-6 col-lg-8">
				<div class="article-fulltext">
					<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract()) {?>
						<h2 class="article-section-title article-abstract"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.abstract"),$_smarty_tpl ) );?>
</h2>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract() ));?>

					<?php }?>




					<?php echo $_smarty_tpl->tpl_vars['htmlDocument']->value;?>


				</div>


			</div>

			<div class="details-wrapper col-xl-3 col-lg-4">
				<div class="intraarticle-menu">
					<nav id="article-navbar" class="navbar navbar-light">
						<nav class="nav nav-pills flex-column" id="article-navigation-menu-items">
													</nav>
					</nav>
				</div>
			</div>
					  	<?php if ($_smarty_tpl->tpl_vars['parsedCitations']->value->getCount() || $_smarty_tpl->tpl_vars['article']->value->getCitations()) {?>
  		<div class="item references">
  			<h2 class="article-section-title article-references">
  				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.citations"),$_smarty_tpl ) );?>

  			</h2>
  			<div class="value">
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
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Details::Reference",'citation'=>$_smarty_tpl->tpl_vars['parsedCitation']->value),$_smarty_tpl ) );?>
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
		</div>
	</div>

</article>
<?php }
}
