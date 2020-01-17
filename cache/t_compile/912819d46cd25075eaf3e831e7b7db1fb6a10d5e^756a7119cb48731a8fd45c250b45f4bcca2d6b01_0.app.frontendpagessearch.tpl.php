<?php
/* Smarty version 3.1.33, created on 2020-01-16 17:56:07
  from 'app:frontendpagessearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e20a3b7c6b1c4_35160394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '756a7119cb48731a8fd45c250b45f4bcca2d6b01' => 
    array (
      0 => 'app:frontendpagessearch.tpl',
      1 => 1577444167,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/objects/article_summary.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5e20a3b7c6b1c4_35160394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/wwwojs-test/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"common.search"), 0, false);
?>

<div class="container page-search">
	<div class="page-header">
		<h1>
			<?php if ($_smarty_tpl->tpl_vars['query']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.search.resultsFor",'query'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['query']->value ))),$_smarty_tpl ) );?>

			<?php } elseif ($_smarty_tpl->tpl_vars['authors']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.search.resultsFor",'query'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authors']->value ))),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.search"),$_smarty_tpl ) );?>

			<?php }?>
		</h1>
	</div>
	<div class="row justify-content-lg-center">
		<div class="col-lg-8 search-col-results">
			<div class="search-results">

								<?php if ($_smarty_tpl->tpl_vars['results']->value->wasEmpty()) {?>
					<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
						<div class="alert alert-danger" role="alert"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error']->value ));?>
</div>
					<?php } else { ?>
						<div class="alert alert-primary" role="alert"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"search.noResults"),$_smarty_tpl ) );?>
</div>
					<?php }?>

								<?php } else { ?>
					<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'results','item'=>'result'));
$_block_repeat=true;
echo $_block_plugin1->smartyIterate(array('from'=>'results','item'=>'result'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/article_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['result']->value['publishedArticle'],'journal'=>$_smarty_tpl->tpl_vars['result']->value['journal'],'showDatePublished'=>true,'hideGalleys'=>true), 0, false);
?>
					<?php $_block_repeat=false;
echo $_block_plugin1->smartyIterate(array('from'=>'results','item'=>'result'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<div class="pagination">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_info'][0], array( array('iterator'=>$_smarty_tpl->tpl_vars['results']->value),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_links'][0], array( array('anchor'=>"results",'iterator'=>$_smarty_tpl->tpl_vars['results']->value,'name'=>"search",'query'=>$_smarty_tpl->tpl_vars['query']->value,'searchJournal'=>$_smarty_tpl->tpl_vars['searchJournal']->value,'authors'=>$_smarty_tpl->tpl_vars['authors']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'abstract'=>$_smarty_tpl->tpl_vars['abstract']->value,'galleyFullText'=>$_smarty_tpl->tpl_vars['galleyFullText']->value,'discipline'=>$_smarty_tpl->tpl_vars['discipline']->value,'subject'=>$_smarty_tpl->tpl_vars['subject']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value,'coverage'=>$_smarty_tpl->tpl_vars['coverage']->value,'indexTerms'=>$_smarty_tpl->tpl_vars['indexTerms']->value,'dateFromMonth'=>$_smarty_tpl->tpl_vars['dateFromMonth']->value,'dateFromDay'=>$_smarty_tpl->tpl_vars['dateFromDay']->value,'dateFromYear'=>$_smarty_tpl->tpl_vars['dateFromYear']->value,'dateToMonth'=>$_smarty_tpl->tpl_vars['dateToMonth']->value,'dateToDay'=>$_smarty_tpl->tpl_vars['dateToDay']->value,'dateToYear'=>$_smarty_tpl->tpl_vars['dateToYear']->value,'orderBy'=>$_smarty_tpl->tpl_vars['orderBy']->value,'orderDir'=>$_smarty_tpl->tpl_vars['orderDir']->value),$_smarty_tpl ) );?>

					</div>
				<?php }?>
			</div>
		</div>
		<div class="col-lg-4 search-col-filters">
			<div class="search-filters">
				<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.search.params"),$_smarty_tpl ) );?>
</h2>
				<form class="form-search" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"search"),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

					<div class="form-group form-group-query">
						<label for="query">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.searchQuery"),$_smarty_tpl ) );?>

						</label>
						<input type="text" class="form-control" id="query" name="query" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['query']->value ));?>
">
					</div>
					<div class="form-group form-group-authors">
						<label for="authors">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"search.author"),$_smarty_tpl ) );?>

						</label>
						<input type="text" class="form-control" id="authors" name="authors" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authors']->value ));?>
">
					</div>
					<div class="form-group form-group-date-from">
						<label for="dateFromYear">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"search.dateFrom"),$_smarty_tpl ) );?>

						</label>
						<div class="form-control-date">
							<?php echo smarty_function_html_select_date(array('class'=>"form-control",'prefix'=>"dateFrom",'time'=>$_smarty_tpl->tpl_vars['dateFrom']->value,'start_year'=>$_smarty_tpl->tpl_vars['yearStart']->value,'end_year'=>$_smarty_tpl->tpl_vars['yearEnd']->value,'year_empty'=>'','month_empty'=>'','day_empty'=>'','field_order'=>"YMD"),$_smarty_tpl);?>

						</div>
					</div>
					<div class="form-group form-group-date-to">
						<label for="dateToYear">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"search.dateTo"),$_smarty_tpl ) );?>

						</label>
						<div class="form-control-date">
							<?php echo smarty_function_html_select_date(array('class'=>"form-control",'prefix'=>"dateTo",'time'=>$_smarty_tpl->tpl_vars['dateTo']->value,'start_year'=>$_smarty_tpl->tpl_vars['yearStart']->value,'end_year'=>$_smarty_tpl->tpl_vars['yearEnd']->value,'year_empty'=>'','month_empty'=>'','day_empty'=>'','field_order'=>"YMD"),$_smarty_tpl);?>

						</div>
					</div>
					<div class="form-group form-group-buttons">
						<button class="btn btn-primary" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.search"),$_smarty_tpl ) );?>
</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
