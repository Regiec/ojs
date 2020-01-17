<?php
/* Smarty version 3.1.33, created on 2020-01-16 11:18:28
  from 'app:formfieldLabel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e204684428b16_68656270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e011bb0ce24c298716c487f88854604671d1986' => 
    array (
      0 => 'app:formfieldLabel.tpl',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e204684428b16_68656270 (Smarty_Internal_Template $_smarty_tpl) {
?>
<label<?php if (!$_smarty_tpl->tpl_vars['FBV_suppressId']->value) {?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_name']->value ));?>
"<?php }
if ($_smarty_tpl->tpl_vars['FBV_class']->value) {?> class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_class']->value ));?>
"<?php }?> >
	<?php echo $_smarty_tpl->tpl_vars['FBV_label']->value;
if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?><span class="req">*</span><?php }?>
</label>

<?php }
}
