<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:21:24
  from 'app:frontendobjectsissuetoc.t' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e207f740cc730_43793680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26de9c47ced54328a8eb56e39bb4d4079aa049c6' => 
    array (
      0 => 'app:frontendobjectsissuetoc.t',
      1 => 1577444163,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/article_summary.tpl' => 1,
  ),
),false)) {
function content_5e207f740cc730_43793680 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="issue-toc">

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publishedArticles']->value, 'section', false, NULL, 'sections', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
?>
		<div class="issue-toc-section">
			<?php if ($_smarty_tpl->tpl_vars['section']->value['articles']) {?>
				<?php if ($_smarty_tpl->tpl_vars['section']->value['title']) {?>
					<<?php echo $_smarty_tpl->tpl_vars['sectionHeading']->value;?>
 class="issue-toc-section-title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value['title'] ));?>
</<?php echo $_smarty_tpl->tpl_vars['sectionHeading']->value;?>
>
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value['articles'], 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
					<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/article_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
