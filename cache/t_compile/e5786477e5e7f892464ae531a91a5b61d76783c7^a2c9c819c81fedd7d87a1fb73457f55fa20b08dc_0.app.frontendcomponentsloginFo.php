<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:53:40
  from 'app:frontendcomponentsloginFo' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2087047eb063_25977291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2c9c819c81fedd7d87a1fb73457f55fa20b08dc' => 
    array (
      0 => 'app:frontendcomponentsloginFo',
      1 => 1577444162,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2087047eb063_25977291 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['formType']->value && $_smarty_tpl->tpl_vars['formType']->value === "loginPage") {?>
	<?php $_smarty_tpl->_assignInScope('usernameId', "username");?>
	<?php $_smarty_tpl->_assignInScope('passwordId', "password");?>
	<?php $_smarty_tpl->_assignInScope('rememberId', "remember");
} elseif ($_smarty_tpl->tpl_vars['formType']->value && $_smarty_tpl->tpl_vars['formType']->value === "loginModal") {?>
	<?php $_smarty_tpl->_assignInScope('usernameId', "usernameModal");?>
	<?php $_smarty_tpl->_assignInScope('passwordId', "passwordModal");?>
	<?php $_smarty_tpl->_assignInScope('rememberId', "rememberModal");
}?>
<form class="form-login" method="post" action="<?php echo $_smarty_tpl->tpl_vars['loginUrl']->value;?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<input type="hidden" name="source" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value )) ));?>
"/>

	<fieldset>
		<div class="form-group form-group-username">
			<label for="<?php echo $_smarty_tpl->tpl_vars['usernameId']->value;?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.username"),$_smarty_tpl ) );?>

				<span class="required" aria-hidden="true">*</span>
				<span class="sr-only">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

				</span>
			</label>
			<input type="text" class="form-control" name="username" id="<?php echo $_smarty_tpl->tpl_vars['usernameId']->value;?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['username']->value ));?>
"
			       maxlength="32" required>
		</div>
		<div class="form-group form-group-password">
			<label for="<?php echo $_smarty_tpl->tpl_vars['passwordId']->value;?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.password"),$_smarty_tpl ) );?>

				<span class="required" aria-hidden="true">*</span>
				<span class="sr-only">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

				</span>
			</label>
			<input type="password" class="form-control" name="password" id="<?php echo $_smarty_tpl->tpl_vars['passwordId']->value;?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['password']->value ));?>
"
			       maxlength="32" required>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group form-group-forgot">
					<small class="form-text">
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"login",'op'=>"lostPassword"),$_smarty_tpl ) );?>
">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.forgotPassword"),$_smarty_tpl ) );?>

						</a>
					</small>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group form-check form-group-remember">
					<input type="checkbox" class="form-check-input" name="remember" id="<?php echo $_smarty_tpl->tpl_vars['rememberId']->value;?>
" value="1"
					       checked="$remember">
					<label for="<?php echo $_smarty_tpl->tpl_vars['rememberId']->value;?>
" class="form-check-label">
						<small class="form-text">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.rememberUsernameAndPassword"),$_smarty_tpl ) );?>

						</small>
					</label>
				</div>
			</div>
		</div>
		<div class="form-group form-group-buttons">
			<button class="btn btn-primary" type="submit">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login"),$_smarty_tpl ) );?>

			</button>
		</div>
		<?php if (!$_smarty_tpl->tpl_vars['disableUserReg']->value) {?>
			<div class="form-group form-group-register">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.register.noAccount"),$_smarty_tpl ) );?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'registerUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"user",'op'=>"register",'source'=>$_smarty_tpl->tpl_vars['source']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['registerUrl']->value;?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.healthSciences.register.registerHere"),$_smarty_tpl ) );?>

				</a>
			</div>
		<?php }?>
	</fieldset>
</form>
<?php }
}
