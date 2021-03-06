<?php
/* Smarty version 3.1.33, created on 2020-01-16 10:59:55
  from 'plugins-plugins-generic-citationStyleLanguage-generic-citationStyleLanguage:citationstylesris.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e20422b4c2052_70405753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ea9929dfeb2642110baf7ab3373888c2e30ed37' => 
    array (
      0 => 'plugins-plugins-generic-citationStyleLanguage-generic-citationStyleLanguage:citationstylesris.tpl',
      1 => 1559234253,
      2 => 'plugins-plugins-generic-citationStyleLanguage-generic-citationStyleLanguage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e20422b4c2052_70405753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/wwwojs-test/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/home/wwwojs-test/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('containerTitle', "container-title");
$_smarty_tpl->_assignInScope('containerTitleShort', "container-title-short");?>
TY  - JOUR
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['citationData']->value->author, 'author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
AU  - <?php echo $_smarty_tpl->tpl_vars['author']->value->given;?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->family;?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
PY  - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['citationData']->value->issued->raw,"%Y/%m/%d");?>

Y2  - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['citationData']->value->accessed->raw,"%Y/%m/%d");?>

TI  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->title;?>

JF  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->{$_smarty_tpl->tpl_vars['containerTitle']->value};?>

JA  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->{$_smarty_tpl->tpl_vars['containerTitleShort']->value};?>

VL  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->volume;?>

IS  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->issue;?>

SE  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->section;?>

DO  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->DOI;?>

UR  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->URL;?>

AB  - <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract(),"\r\n",''),"\n",'');?>

ER  -
<?php }
}
