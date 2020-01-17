<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:12:23
  from 'app:frontendobjectsissueslide' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e207d57ce75c3_63454112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9351f361b4a8dbb006c966fc60fa1d9bf42b3bb' => 
    array (
      0 => 'app:frontendobjectsissueslide',
      1 => 1574168619,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e207d57ce75c3_63454112 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="recent-issues-slider col-md-12">
    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.gregg.issues.slider.title"),$_smarty_tpl ) );?>
</h3>
</div>
<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "forCarouselIndicators", null, null);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latestIssues']->value, 'issue', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['issue']->value) {
?>
            <li data-target="#carouselIndicators" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>class="active"<?php }?>></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "forCarouselImages", null, null);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latestIssues']->value, 'issue', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['issue']->value) {
?>
            <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>active<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl()) {?>
                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl();?>
" class="img-fluid">
                    </a>
                <?php } else { ?>
                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['defaultCoverImageUrl']->value;?>
" class="img-fluid">
                    </a>
                <?php }?>
                <div class="carousel-caption">
                    <?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedTitle()) {?>
                        <h5><?php echo $_smarty_tpl->tpl_vars['issue']->value->getLocalizedTitle();?>
</h5>
                    <?php } else { ?>
                        <h5><?php echo $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value;?>
</h5>
                    <?php }?>
                    <p><?php echo $_smarty_tpl->tpl_vars['issue']->value->getVolume();?>

                        |
                        <?php echo $_smarty_tpl->tpl_vars['issue']->value->getNumber();?>
</p>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <ol class="carousel-indicators">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'forCarouselIndicators');?>

    </ol>
    <div class="carousel-inner">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'forCarouselImages');?>

    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button"
       data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button"
       data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?php }
}
