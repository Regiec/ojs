<?php
/* Smarty version 3.1.33, created on 2020-01-16 11:31:56
  from 'app:frontendpagesnavigationMe' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2049ac2aba19_05935551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa98b2463a2e6a634a506f0f0ac0cc0f4af5b846' => 
    array (
      0 => 'app:frontendpagesnavigationMe',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5e2049ac2aba19_05935551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>

<h1 class="page_title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));?>
</h1>
<div class="page">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
