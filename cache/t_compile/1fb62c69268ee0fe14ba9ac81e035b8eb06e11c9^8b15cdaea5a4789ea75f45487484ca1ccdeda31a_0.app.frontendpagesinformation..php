<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:11:24
  from 'app:frontendpagesinformation.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e207d1c4296b3_36155369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b15cdaea5a4789ea75f45487484ca1ccdeda31a' => 
    array (
      0 => 'app:frontendpagesinformation.',
      1 => 1574168619,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5e207d1c4296b3_36155369 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['contentOnly']->value) {?>
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>$_smarty_tpl->tpl_vars['pageTitle']->value), 0, false);
}?>

<div class="page page_information">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>$_smarty_tpl->tpl_vars['pageTitle']->value), 0, false);
?>
	<div class="description container">
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
</div>

<?php if (!$_smarty_tpl->tpl_vars['contentOnly']->value) {?>
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
