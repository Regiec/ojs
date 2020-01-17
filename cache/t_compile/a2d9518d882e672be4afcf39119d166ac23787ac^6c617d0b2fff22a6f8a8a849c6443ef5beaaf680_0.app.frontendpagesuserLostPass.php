<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:24:05
  from 'app:frontendpagesuserLostPass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2080151e0059_30277685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c617d0b2fff22a6f8a8a849c6443ef5beaaf680' => 
    array (
      0 => 'app:frontendpagesuserLostPass',
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
function content_5e2080151e0059_30277685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"user.login.resetPassword"), 0, false);
?>

<div class="page page_lost_password">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"user.login.resetPassword"), 0, false);
?>
	<div class="container">
        <div class="alert alert-info" role="alert">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.resetPasswordInstructions"),$_smarty_tpl ) );?>

        </div>

        <form class="cmp_form lost_password" id="lostPasswordForm" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"login",'op'=>"requestResetPassword"),$_smarty_tpl ) );?>
" method="post">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="pkp_form_error alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['error']->value),$_smarty_tpl ) );?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php }?>
            <div class="form-group">
                <label for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.gregg.email"),$_smarty_tpl ) );?>
</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email']->value ));?>
" maxlength="32" required placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.gregg.enter-email"),$_smarty_tpl ) );?>
">
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['disableUserReg']->value) {?>
                <div class="btn-group" role="group">
                    <button class="btn btn-secondary" type="submit">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.resetPassword"),$_smarty_tpl ) );?>

                    </button>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "registerUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"user",'op'=>"register",'source'=>$_smarty_tpl->tpl_vars['source']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <a class="btn btn-secondary" type="button" href="<?php echo $_smarty_tpl->tpl_vars['registerUrl']->value;?>
" class="register">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.registerNewAccount"),$_smarty_tpl ) );?>

                    </a>
                </div>
            <?php } else { ?>
                <button class="btn btn-secondary" type="submit">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.resetPassword"),$_smarty_tpl ) );?>

                </button>
            <?php }?>

        </form>

	</div><!--container-->
</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
