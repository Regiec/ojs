<?php
/* Smarty version 3.1.33, created on 2020-01-16 13:18:30
  from 'app:frontendobjectsarticlesum' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2062a63fb513_20315453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf1cd52b8ba8108de77f197078de34b733dd394' => 
    array (
      0 => 'app:frontendobjectsarticlesum',
      1 => 1577444163,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/galley_link.tpl' => 1,
  ),
),false)) {
function content_5e2062a63fb513_20315453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/wwwojs-test/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('articlePath', $_smarty_tpl->tpl_vars['article']->value->getBestArticleId());?>

<?php if ((!$_smarty_tpl->tpl_vars['section']->value['hideAuthor'] && $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == @constant('AUTHOR_TOC_DEFAULT')) || $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == @constant('AUTHOR_TOC_SHOW')) {?>
	<?php $_smarty_tpl->_assignInScope('showAuthor', true);
}?>

<div class="article-summary">

	<?php if ($_smarty_tpl->tpl_vars['showAuthor']->value && $_smarty_tpl->tpl_vars['article']->value->getPages()) {?>
		<div class="row">
			<div class="col">
				<div class="article-summary-authors"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getAuthorString() ));?>
</div>
			</div>
			<div class="col-3 col-md-2 col-lg-2">
				<div class="article-summary-pages text-right">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getPages() ));?>

				</div>
			</div>
		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['showAuthor']->value) {?>
		<div class="article-summary-authors"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getAuthorString() ));?>
</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['article']->value->getPages()) {?>
		<div class="article-summary-pages">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getPages() ));?>

		</div>
	<?php }?>

	<div class="article-summary-title">
		<a <?php if ($_smarty_tpl->tpl_vars['journal']->value) {?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
"<?php } else { ?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
"<?php }?>>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedFullTitle() ));?>

		</a>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['showDatePublished']->value && $_smarty_tpl->tpl_vars['article']->value->getDatePublished()) {?>
		<div class="article-summary-date">
			<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatLong']->value);?>

		</div>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['requestedPage']->value === 'issue') {?>
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
				<div class="article-summary-doi">
					<a href="<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['doiUr']->value;?>
</a>
				</div>
			<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['requestedOp']->value === "index" && $_smarty_tpl->tpl_vars['article']->value->getStoredPubId('doi')) {?>
		<?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( substr_replace($_smarty_tpl->tpl_vars['article']->value->getStoredPubId('doi'),'https://doi.org/',0,0) )));?>
		<?php if ($_smarty_tpl->tpl_vars['doiUrl']->value) {?>
			<div class="article-summary-doi">
				<a href="<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
</a>
			</div>
		<?php }?>
	<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['hideGalleys']->value && $_smarty_tpl->tpl_vars['article']->value->getGalleys()) {?>
		<div class="article-summary-galleys">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getGalleys(), 'galley');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['primaryGenreIds']->value) {?>
					<?php $_smarty_tpl->_assignInScope('file', $_smarty_tpl->tpl_vars['galley']->value->getFile());?>
					<?php if (!$_smarty_tpl->tpl_vars['galley']->value->getRemoteUrl() && !($_smarty_tpl->tpl_vars['file']->value && in_array($_smarty_tpl->tpl_vars['file']->value->getGenreId(),$_smarty_tpl->tpl_vars['primaryGenreIds']->value))) {?>
						<?php continue 1;?>
					<?php }?>
				<?php }?>
				<?php $_smarty_tpl->_assignInScope('hasArticleAccess', $_smarty_tpl->tpl_vars['hasAccess']->value);?>
				<?php if (($_smarty_tpl->tpl_vars['article']->value->getAccessStatus() == @constant('ARTICLE_ACCESS_OPEN'))) {?>
					<?php $_smarty_tpl->_assignInScope('hasArticleAccess', 1);?>
				<?php }?>
				<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'hasAccess'=>$_smarty_tpl->tpl_vars['hasArticleAccess']->value), 0, true);
?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php }?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Issue::Issue::Article"),$_smarty_tpl ) );?>

</div>
<?php }
}
