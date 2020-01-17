<?php
/* Smarty version 3.1.33, created on 2020-01-16 19:20:12
  from 'app:frontendcomponentsregistr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e20b76c7fa0d1_00501216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cea4d98dd922416eabba9bb0a4e8286e214a0ca4' => 
    array (
      0 => 'app:frontendcomponentsregistr',
      1 => 1574168618,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e20b76c7fa0d1_00501216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/wwwojs-test/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<div class="registration-info-title alert alert-dark" role="alert">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.profile"),$_smarty_tpl ) );?>

</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="givenName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.givenName"),$_smarty_tpl ) );?>
</label>
        <input type="text" class="form-control" name="givenName" id="givenName" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['givenName']->value ));?>
" maxlength="255" required>
        <small class="form-text text-muted">*<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>
</small>
    </div>

    <div class="form-group col-md-6">
        <label for="familyName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.familyName"),$_smarty_tpl ) );?>
</label>
        <input type="text" class="form-control" name="familyName" id="familyName" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['familyName']->value ));?>
" maxlength="255">
    </div>

    <div class="form-group col-md-6">
        <label for="affiliation"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.affiliation"),$_smarty_tpl ) );?>
</label>
        <input type="text" class="form-control" name="affiliation" id="affiliation" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['affiliation']->value ));?>
" required>
        <small class="form-text text-muted">*<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>
</small>
    </div>
    <div class="form-group col-md-6">
        <label for="country"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.country"),$_smarty_tpl ) );?>
</label>
            <select class="form-control" name="country" id="country" required>
                <option></option>
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['countries']->value,'selected'=>$_smarty_tpl->tpl_vars['country']->value),$_smarty_tpl);?>

            </select>
        <small class="form-text text-muted">*<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>
</small>
    </div>
</div>

<div class="registration-info-title alert alert-dark" role="alert">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login"),$_smarty_tpl ) );?>

</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.email"),$_smarty_tpl ) );?>
</label>
        <input type="text" class="form-control" name="email" id="email" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email']->value ));?>
" maxlength="90" required>
        <small class="form-text text-muted">*<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>
</small>
    </div>

    <div class="form-group col-md-6">
        <label for="username"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.username"),$_smarty_tpl ) );?>
</label>
        <input type="text" class="form-control" name="username" id="username" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['username']->value ));?>
" maxlength="32" required>
        <small class="form-text text-muted">*<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>
</small>
    </div>

    <div class="form-group col-md-6">
        <label for="password"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.password"),$_smarty_tpl ) );?>
</label>
        <input type="password" class="form-control" name="password" id="password" password="true" maxlength="32" required>
        <small class="form-text text-muted">*<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>
</small>
    </div>

    <div class="form-group col-md-6">
        <label for="password2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.repeatPassword"),$_smarty_tpl ) );?>
</label>
        <input type="password" class="form-control"  name="password2" id="password2" password="true" maxlength="32" required>
        <small class="form-text text-muted">*<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>
</small>
    </div>
</div>


<?php }
}
