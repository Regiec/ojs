<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:42:58
  from 'app:workflowsubmissionProgres' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e20848252d816_48844273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e049dcb345fadf8811edf842b3fec03c6263243e' => 
    array (
      0 => 'app:workflowsubmissionProgres',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e20848252d816_48844273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('selectedTabIndex', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['workflowStages']->value, 'stage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stage']->value) {
?>
	<?php if ($_smarty_tpl->tpl_vars['stage']->value['id'] < $_smarty_tpl->tpl_vars['stageId']->value) {?>
		<?php $_smarty_tpl->_assignInScope('selectedTabIndex', $_smarty_tpl->tpl_vars['selectedTabIndex']->value+1);?>
	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php echo '<script'; ?>
 type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#stageTabs').pkpHandler(
			'$.pkp.controllers.tab.workflow.WorkflowTabHandler',
			{
				selected: <?php echo $_smarty_tpl->tpl_vars['selectedTabIndex']->value;?>
,
				emptyLastTab: true
			}
		);
	});
<?php echo '</script'; ?>
>
<div id="stageTabs" class="pkp_controllers_tab">
	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['workflowStages']->value, 'stage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stage']->value) {
?>
			<li class="pkp_workflow_<?php echo $_smarty_tpl->tpl_vars['stage']->value['path'];?>
 stageId<?php echo $_smarty_tpl->tpl_vars['stage']->value['id'];
if ($_smarty_tpl->tpl_vars['stage']->value['statusKey']) {?> initiated<?php }?>">
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.workflow.WorkflowTabHandler",'op'=>"fetchTab",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>$_smarty_tpl->tpl_vars['stage']->value['id'],'escape'=>false),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['stage']->value['translationKey']),$_smarty_tpl ) );?>

					<?php if ($_smarty_tpl->tpl_vars['stage']->value['statusKey']) {?>
					<span class="pkp_screen_reader">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['stage']->value['statusKey']),$_smarty_tpl ) );?>

					</span>
					<?php }?>
				</a>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }
}