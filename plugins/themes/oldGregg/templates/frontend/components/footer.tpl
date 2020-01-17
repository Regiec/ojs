{**
 * templates/frontend/components/footer.tpl
 *
 * Copyright (c) 2018 Vitaliy Bezsheiko, MD
 *}

 <div class="pkp_structure_sidebar left" role="complementary" aria-label="Sidebar">

{if empty($isFullWidth)}
        {call_hook name="Templates::Common::Sidebar"}   {if $sidebarCode}
            <div class="pkp_structure_sidebar left" role="complementary" aria-label="{translate|escape key="common.navigation.sidebar"}">
                {$sidebarCode}




            </div><!-- pkp_sidebar.left -->
        {/if}
    {/if}



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



</div> {* end of the site-content wraper *}
{if $requestedPage|escape != "article123"}
<!--     <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col footer-left">
                    <a href="{url router=$smarty.const.ROUTE_PAGE page="about" op="contact"}">
                    {translate key="about.contact"}
                    </a>
                    <a href="{url router=$smarty.const.ROUTE_PAGE page="information" op="readers"}">
                        {translate key="navigation.infoForReaders"}
                    </a>
                    <a href="{url router=$smarty.const.ROUTE_PAGE page="information" op="authors"}">
                        {translate key="navigation.infoForAuthors"}
                    </a>
                </div>
                <div class="col footer-right">
                    <a href="{url router=$smarty.const.ROUTE_PAGE page="information" op="librarians"}">
                        {translate key="navigation.infoForLibrarians"}
                    </a>
                    <a href="{$pkpLink}">
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

{/if}
{load_script context="frontend" scripts=$scripts}
{call_hook name="Templates::Common::Footer::PageFooter"}
</body>
</html>
