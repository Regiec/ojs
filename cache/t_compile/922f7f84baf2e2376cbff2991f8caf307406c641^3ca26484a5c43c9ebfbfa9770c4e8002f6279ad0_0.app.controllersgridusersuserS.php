<?php
/* Smarty version 3.1.33, created on 2020-01-16 13:33:02
  from 'app:controllersgridusersuserS' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e20660e62e6c6_82703675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ca26484a5c43c9ebfbfa9770c4e8002f6279ad0' => 
    array (
      0 => 'app:controllersgridusersuserS',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e20660e62e6c6_82703675 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="radio" id="user_<?php echo $_smarty_tpl->tpl_vars['rowId']->value;?>
" name="userId" class="advancedUserSelect" <?php if ($_smarty_tpl->tpl_vars['userId']->value == $_smarty_tpl->tpl_vars['rowId']->value) {?>checked="checked" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['rowId']->value;?>
" />
<?php }
}
