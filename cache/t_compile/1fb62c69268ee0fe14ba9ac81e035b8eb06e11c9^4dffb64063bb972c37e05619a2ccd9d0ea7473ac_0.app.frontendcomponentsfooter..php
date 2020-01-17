<?php
/* Smarty version 3.1.33, created on 2020-01-16 15:11:24
  from 'app:frontendcomponentsfooter.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e207d1c4daae1_05100782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.',
      1 => 1576749570,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e207d1c4daae1_05100782 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="pkp_structure_sidebar left" role="complementary" aria-label="Sidebar">

<?php if (empty($_smarty_tpl->tpl_vars['isFullWidth']->value)) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );?>
   <?php if ($_smarty_tpl->tpl_vars['sidebarCode']->value) {?>
            <div class="pkp_structure_sidebar left" role="complementary" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));?>
">
                <?php echo $_smarty_tpl->tpl_vars['sidebarCode']->value;?>





            </div><!-- pkp_sidebar.left -->
        <?php }?>
    <?php }?>



	<div class="container2">
    <div class="card1">
        <h3 class="card-header" id="monthAndYear"></h3>
        <table class="table table-bordered table-responsive-sm" id="calendar">
            <thead>
            <tr>
                
                <th>Pn</th>
                <th>Wt</th>
                <th>Śr</th>
                <th>Cz</th>
                <th>Pt</th>
                <th>Sb</th>
                <th>N</th>
            </tr>
            </thead>

            <tbody id="calendar-body">

            </tbody>
        </table>

        <div class="form-inline">

            <button class="btn btn-outline-primary col-sm-6" id="previous" onclick="previous()">Poprzedni</button>

            <button class="btn btn-outline-primary col-sm-6" id="next" onclick="next()">Następny</button>
        </div>
        <br/>
        <form class="form-inline">
            <label class="lead mr-2 ml-2" for="month">Do: </label>
            <select class="form-control col-sm-4" name="month" id="month" onchange="jump()">
                <option value=0>Sty</option>
                <option value=1>Lut</option>
                <option value=2>Mar</option>
                <option value=3>Kwie</option>
                <option value=4>Maj</option>
                <option value=5>Cze</option>
                <option value=6>Lip</option>
                <option value=7>Sie</option>
                <option value=8>Wrz</option>
                <option value=9>Paź</option>
                <option value=10>Lis</option>
                <option value=11>Gru</option>
            </select>


            <label for="year"></label><select class="form-control col-sm-4" name="year" id="year" onchange="jump()">
            <option value=1990>1990</option>
            <option value=1991>1991</option>
            <option value=1992>1992</option>
            <option value=1993>1993</option>
            <option value=1994>1994</option>
            <option value=1995>1995</option>
            <option value=1996>1996</option>
            <option value=1997>1997</option>
            <option value=1998>1998</option>
            <option value=1999>1999</option>
            <option value=2000>2000</option>
            <option value=2001>2001</option>
            <option value=2002>2002</option>
            <option value=2003>2003</option>
            <option value=2004>2004</option>
            <option value=2005>2005</option>
            <option value=2006>2006</option>
            <option value=2007>2007</option>
            <option value=2008>2008</option>
            <option value=2009>2009</option>
            <option value=2010>2010</option>
            <option value=2011>2011</option>
            <option value=2012>2012</option>
            <option value=2013>2013</option>
            <option value=2014>2014</option>
            <option value=2015>2015</option>
            <option value=2016>2016</option>
            <option value=2017>2017</option>
            <option value=2018>2018</option>
            <option value=2019>2019</option>
            <option value=2020>2020</option>
            <option value=2021>2021</option>
            <option value=2022>2022</option>
            <option value=2023>2023</option>
            <option value=2024>2024</option>
            <option value=2025>2025</option>
            <option value=2026>2026</option>
            <option value=2027>2027</option>
            <option value=2028>2028</option>
            <option value=2029>2029</option>
            <option value=2030>2030</option>
        </select></form>
    </div>
</div>




</div>



</div> <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) != "article123") {?>
<!--     <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col footer-left">
                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"about",'op'=>"contact"),$_smarty_tpl ) );?>
">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.contact"),$_smarty_tpl ) );?>

                    </a>
                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"information",'op'=>"readers"),$_smarty_tpl ) );?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.infoForReaders"),$_smarty_tpl ) );?>

                    </a>
                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"information",'op'=>"authors"),$_smarty_tpl ) );?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.infoForAuthors"),$_smarty_tpl ) );?>

                    </a>
                </div>
                <div class="col footer-right">
                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"information",'op'=>"librarians"),$_smarty_tpl ) );?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.infoForLibrarians"),$_smarty_tpl ) );?>

                    </a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['pkpLink']->value;?>
">
                        Powered by PKP
                    </a>
                    <a href="https://github.com/Vitaliy-1/oldGregg">
                        oldGregg Theme
                    </a>
                </div>
            </div>
        </div>
    </div> pkp_structure_footer_wrapper --> 
<div id="pkp_content_footer" class="pkp_structure_footer_wrapper" role="contentinfo">
<div class="pkp_structure_footer">
<div class="pkp_footer_content">
<div class="container">
<div class="row">
<div class="col m5 s12">
<div class="foot-0"> </div>
</div>
<div class="col m5 s12">
<div class="foot-1">
<h5 class="white-text">Wydawnictwo Naukowe</h5>
<p class="grey-text text-lighten-4">Uniwersytet Pedagogiczny<br />im. Komisji Edukacji Narodowej w Krakowie</p>
</div>
</div>
<div class="col m3 s12 foot-2">
<div class="foot-box">
<h5 class="white-text">Kontakt:</h5>
<p>ul. Podchorążych 2, 30-084 Kraków<br />tel./fax 12 662 63 83<br />tel. 12 662 67 56<br /><a>redakcja@wydawnictwoup.pl</a></p>
</div>
</div>
<div class="col m4 s12 foot-3">
<div class="foot-3-box">
<div class="bip"><a href="http://bip.up.krakow.pl">Biuletyn Informacji Publicznej</a></div>
</div>
</div>
</div>
</div>
<div class="footer-copyright">
<div class="container">
<p>Copyright © Uniwersytet Pedagogiczny</p>
</div>
</div>
</div></div>
</div>

<?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend",'scripts'=>$_smarty_tpl->tpl_vars['scripts']->value),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

</body>
</html>
<?php }
}
