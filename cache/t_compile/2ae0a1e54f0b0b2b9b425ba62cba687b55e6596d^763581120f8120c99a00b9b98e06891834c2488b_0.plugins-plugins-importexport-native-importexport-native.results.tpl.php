<?php
/* Smarty version 3.1.33, created on 2020-01-16 12:57:35
  from 'plugins-plugins-importexport-native-importexport-native:results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e205dbf5f4294_58172677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '763581120f8120c99a00b9b98e06891834c2488b' => 
    array (
      0 => 'plugins-plugins-importexport-native-importexport-native:results.tpl',
      1 => 1559234184,
      2 => 'plugins-plugins-importexport-native-importexport-native',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e205dbf5f4294_58172677 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['submissionsWarnings']->value || $_smarty_tpl->tpl_vars['issuesWarnings']->value || $_smarty_tpl->tpl_vars['sectionWarnings']->value) {?>
	<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.common.warningsEncountered"),$_smarty_tpl ) );?>
</h2>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issuesWarnings']->value, 'issuesWarningMessages', false, NULL, 'issuesWarnings', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['issuesWarningMessages']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_issuesWarnings']->value['iteration']++;
?>
		<?php if (count($_smarty_tpl->tpl_vars['issuesWarningMessages']->value) > 0) {?>
			<p><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_issuesWarnings']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_issuesWarnings']->value['iteration'] : null);?>
. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.issue"),$_smarty_tpl ) );?>
</p>
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issuesWarningMessages']->value, 'issuesWarningMessage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['issuesWarningMessage']->value) {
?>
					<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issuesWarningMessage']->value ));?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionsWarnings']->value, 'sectionsWarningMessages', false, NULL, 'sectionsWarnings', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sectionsWarningMessages']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionsWarnings']->value['iteration']++;
?>
		<?php if (count($_smarty_tpl->tpl_vars['sectionsWarningMessages']->value) > 0) {?>
			<p><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sectionsWarnings']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sectionsWarnings']->value['iteration'] : null);?>
. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"section.section"),$_smarty_tpl ) );?>
</p>
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionsWarningMessages']->value, 'sectionsWarningMessage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sectionsWarningMessage']->value) {
?>
					<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sectionsWarningMessage']->value ));?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submissionsWarnings']->value, 'submissionsWarningMessages', false, NULL, 'submissionsWarnings', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['submissionsWarningMessages']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_submissionsWarnings']->value['iteration']++;
?>
		<?php if (count($_smarty_tpl->tpl_vars['submissionsWarningMessages']->value) > 0) {?>
			<p><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_submissionsWarnings']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_submissionsWarnings']->value['iteration'] : null);?>
. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submission"),$_smarty_tpl ) );?>
</p>
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submissionsWarningMessages']->value, 'submissionsWarningMessage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['submissionsWarningMessage']->value) {
?>
					<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionsWarningMessage']->value ));?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['validationErrors']->value) {?>
	<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.common.validationErrors"),$_smarty_tpl ) );?>
</h2>
	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['validationErrors']->value, 'validationError');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['validationError']->value) {
?>
			<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['validationError']->value->message ));?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php } elseif ($_smarty_tpl->tpl_vars['submissionsErrors']->value || $_smarty_tpl->tpl_vars['issuesErrors']->value || $_smarty_tpl->tpl_vars['sectionErrors']->value) {?>
	<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.common.errorsOccured"),$_smarty_tpl ) );?>
</h2>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issuesErrors']->value, 'issuesErrorMessages', false, NULL, 'issuesErrors', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['issuesErrorMessages']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_issuesErrors']->value['iteration']++;
?>
		<?php if (count($_smarty_tpl->tpl_vars['issuesErrorMessages']->value) > 0) {?>
			<p><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_issuesErrors']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_issuesErrors']->value['iteration'] : null);?>
. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.issue"),$_smarty_tpl ) );?>
</p>
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issuesErrorMessages']->value, 'issuesErrorMessage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['issuesErrorMessage']->value) {
?>
					<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issuesErrorMessage']->value ));?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionsErrors']->value, 'sectionsErrorMessages', false, NULL, 'sectionsErrors', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sectionsErrorMessages']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionsErrors']->value['iteration']++;
?>
		<?php if (count($_smarty_tpl->tpl_vars['sectionsErrorMessages']->value) > 0) {?>
			<p><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sectionsErrors']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sectionsErrors']->value['iteration'] : null);?>
. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"section.section"),$_smarty_tpl ) );?>
</p>
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionsErrorMessages']->value, 'sectionsErrorMessage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sectionsErrorMessage']->value) {
?>
					<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sectionsErrorMessage']->value ));?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submissionsErrors']->value, 'submissionsErrorMessages', false, NULL, 'submissionsErrors', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['submissionsErrorMessages']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_submissionsErrors']->value['iteration']++;
?>
		<?php if (count($_smarty_tpl->tpl_vars['submissionsErrorMessages']->value) > 0) {?>
			<p><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_submissionsErrors']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_submissionsErrors']->value['iteration'] : null);?>
. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submission"),$_smarty_tpl ) );?>
</p>
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submissionsErrorMessages']->value, 'submissionsErrorMessage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['submissionsErrorMessage']->value) {
?>
					<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionsErrorMessage']->value ));?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.native.importComplete"),$_smarty_tpl ) );?>

	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'contentItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contentItem']->value) {
?>
			<li>
				<?php if (is_a($_smarty_tpl->tpl_vars['contentItem']->value,'Submission')) {?>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['contentItem']->value->getLocalizedTitle() ));?>
</li>
				<?php } else { ?>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contentItem']->value->getIssueIdentification() ));?>

				<?php }?>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php }
}
}
