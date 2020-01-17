<?php
/* Smarty version 3.1.33, created on 2020-01-17 07:01:51
  from 'app:frontendpagesuserLostPass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e215bdf113c46_46097464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c617d0b2fff22a6f8a8a849c6443ef5beaaf680' => 
    array (
      0 => 'app:frontendpagesuserLostPass',
      1 => 1577444165,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5e215bdf113c46_46097464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"user.login.resetPassword"), 0, false);
?>

<div class="container page-lost-password">
	<div class="row page-header justify-content-md-center">
		<div class="col-md-8">
			<h1 class="text-md-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.resetPassword"),$_smarty_tpl ) );?>
</h1>
		</div>
	</div>
	<div class="row justify-content-md-center">
		<div class="col-md-8">
			<div class="page-content">
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.resetPasswordInstructions"),$_smarty_tpl ) );?>
</p>
				<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
					<div class="alert alert-danger">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['error']->value),$_smarty_tpl ) );?>

					</div>
				<?php }?>
				<div class="row justify-content-md-center mt-5">
					<div class="col-md-6">
						<form class="form-lost-password" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"login",'op'=>"requestResetPassword"),$_smarty_tpl ) );?>
" method="post">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

							<div class="form-group">
								<label for="email">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.registeredEmail"),$_smarty_tpl ) );?>

									<span class="required" aria-hidden="true">*</span>
									<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>
</span>
								</label>
								<input type="text" class="form-control" name="email" id="email" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email']->value ));?>
" required>
							</div>
							<div class="form-group form-group-buttons">
								<button class="btn btn-primary" type="submit">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.resetPassword"),$_smarty_tpl ) );?>

								</button>

								<?php if (!$_smarty_tpl->tpl_vars['disableUserReg']->value) {?>
									<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'registerUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"user",'op'=>"register",'source'=>$_smarty_tpl->tpl_vars['source']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['registerUrl']->value;?>
" class="btn btn-link">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.registerNewAccount"),$_smarty_tpl ) );?>

									</a>
								<?php }?>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
