<?php
require_once (__DIR__) . '/../php/config.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Colgate</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <link rel="shortcut icon" href="favicon.ico">
        <!-- CSS -->
        <link href="<?php echo PATH_CSS; ?>styles.css" rel="stylesheet" media="screen">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>

        <script src="<?php echo PATH_JS ?>jquery-1.11.2.min.js"></script>
        <script type="text/javascript">
            var PATH_CONTROLLER = '<?php echo PATH_CONTROLLER ?>';
            var PATH_HOME = '<?php echo PATH_HOME ?>';
        </script> 
        
        <!-- Scrip para abrir modal -->
        <script type="text/javascript" src="<?php echo PATH_JS ?>jquery.fancybox.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo PATH_CSS; ?>jquery.fancybox.css" media="screen" />
       <script>
            $(document).ready(function () {
                    $(".fancybox").fancybox();
                    $(".fancybox").trigger('click');
            });
        </script>

        <!-- anclas -->
        <script type="text/javascript">
            $(function () {
                $('a[href*=#]:not([href=#])').click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>

        <!-- Botón UP -->
        <script>
            $(window).scroll(function () {
                if ($(this).scrollTop() > 500) {
                    $('.scrollUp').fadeIn();
                } else {
                    $('.scrollUp').fadeOut();
                }
            });
            $(document).ready(function () {
                $('.scrollUp').click(function () {
                    $("html, body").animate({scrollTop: 0}, 600);
                    return false;
                });
            })
        </script>
        <script type="text/javascript" src="http://nexus.ensighten.com/colgatepalmolive/Bootstrap.js"></script>

        
    </head>
    <body>
	<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-73999373-1', 'auto');
    ga('send', 'pageview');

        </script>
	<script type="text/javascript">
		adroll_adv_id = "VKJQUJUJTJF5NDREB7MPIE";
		adroll_pix_id = "Z2YHR727OBAKHF6EZKNCKV";
		/* OPTIONAL: provide email to improve user identification */
		/* adroll_email = "username@example.com"; */
		(function () {
			var _onload = function(){
				if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
				if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
				var scr = document.createElement("script");
				var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
				scr.setAttribute('async', 'true');
				scr.type = "text/javascript";
				scr.src = host + "/j/roundtrip.js";
				((document.getElementsByTagName('head') || [null])[0] ||
					document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
			};
			if (window.addEventListener) {window.addEventListener('load', _onload, false);}
			else {window.attachEvent('onload', _onload)}
		}());
	</script>
	
	<script src="https://secure.adnxs.com/seg?add=4363327&t=1" type="text/javascript"></script>
	
	<script language='JavaScript1.1' src='//pixel.mathtag.com/event/js?mt_id=913146&mt_adid=156086&v1=&v2=&v3=&s1=&s2=&s3='></script>
	
    <!-- Modal -->
    <div id="popup" style="display:none;">
        <div id="modalPremios">
            <table>
                <tr>
                    <th colspan="2"><h2>Ganadores</h2></th>
                </tr>
                <tr>
                    <td><img src="../images/premio-play.jpg" alt="Consola, premios Volviendo al Cole Golgate"></td>
                    <td class="txt">Filomena Aloisio</td>
                </tr>
                <tr>
                    <td><img src="../images/premio-tablet.jpg" alt="Tablet, premios Volviendo al Cole Golgate"></td>
                    <td class="txt" class="txt">
                        Filomena Aloisio<br>
                        Andrea Driollet<br>
                        Alan Vilches<br>
                        María Yolanda Naccarato<br>
                        Paula Koller<br>
                        Mirta Estela Dipierri<br>
                        Ramón Medina<br>
                        María Alejandra Sancho<br>
                        Guillermo Benjaminsen<br>
                        Alejandro Reynoso
                    </td>
                </tr>
                <tr>
                    <td><img src="../images/premio-bici.jpg" alt="Bicicletas, premios Volviendo al Cole Golgate"></td>
                    <td class="txt">
                        Alejandro Reynoso<br>
                        Flavio Alejandro Taiariol<br>
                        Mariana Zunilda Armoa<br>
                        Estela Flores<br>
                        Ronen Man<br>
                        Sergio Barrionuevo<br>
                        María Cecilia Tomasini<br>
                        Florentina Galvan<br>
                        Pablo Bellomo<br>
                        Marcelo Galvan<br>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Fin Modal -->
        <header>
            <nav class="menuResponsive">
                <ul>
                    <li><a href="#registro" class="reg"><span>¡Registrate ahora!</span></a></li>
                    <li><a href="#productos" class="prod"><span>Productos</span></a></li>
                    <li><a href="#bases" class="bases"><span>Bases y condiciones</span></a></li>
                </ul>
            </nav>
        </header>  

        <?php
        require_once (__DIR__) . '/home.php';
        require_once (__DIR__) . '/registro.php';
        require_once (__DIR__) . '/productos.php';
        require_once (__DIR__) . '/bases.php';
        ?>

        <!-- FOOTER -->
        <footer>
            <p class="copyright"> © 2016 <a onclick="javascript:sendLinkEvent('', 'www.volviendoalcole.com.ar/www.colgatepalmolive.com.ar');" href="http://www.colgatepalmolive.com.ar" target="_blank">Colgate-Palmolive Company</a>. Todos los derechos reservados. Usted está viendo la página de Argentina. <br>Vea nuestras <a onclick="javascript:sendLinkEvent('', 'www.volviendoalcole.com.ar/www.colgate.com.ar/app/Colgate/AR/Corp/LegalPrivacy.cvsp');" href="http://www.colgate.com.ar/app/Colgate/AR/Corp/LegalPrivacy.cvsp" target="_blank">Políticas de Privacidad</a>. </p> 
            <p class="brand"> <a onclick="javascript:sendLinkEvent('', 'www.volviendoalcole.com.ar/www.colgatepalmolive.com.ar');" href="http://www.colgatepalmolive.com.ar" target="_blank"></a> </p>
        </footer>

        <div class="contentUp"><a href="#" class="scrollUp"></a></div>

        <div id="divLoading">
            <img width="48" height="48" src="<?php echo PATH_IMAGES; ?>loading.gif">
            <p>Espere un momento.</p>
        </div>

        <script>
            $(document).ready(function () {
                $('#masBases').hide();
                // $('.globoProd').hide();
            });
            $(function(){
                $('.fancybox').click(function(){
                    $(this).fancybox();
                });
            });
        </script>
        <script src="<?php echo PATH_JS ?>jqFuncs.js"></script>

        <!-- Dynamic SiteCatalyst code version: H.x. Copyright 1997-2004 Omniture, Inc. More info available at http://www.omniture.com --> 
        <script language="JavaScript" type="text/javascript">
            <!--
                    var s_account = 'CPARAll,CPARPromo';
-->
        </script>
        <script language='JavaScript' src='http://www.colgate.com/Colgate/Common/s_code_remote_h.js'></script>
        <script language="JavaScript">
            <!-- 
                    _omniture.pageName = 'http://www.volviendoalcole.com.ar/Colgate';
            _omniture.server = 'http://www.volviendoalcole.com.ar';
            _omniture.channel = 'main';
            _omniture.account = 'CPARAll,CPARPromo';
            _omniture.prop1 = 'Latin America';
            _omniture.prop2 = 'Argentina';
            _omniture.prop3 = 'Spanish';
            _omniture.prop4 = 'Colgate Promo';
            _omniture.prop5 = 'Viví con Colgate la Mejor Vuelta al Cole';
            _omniture.linkInternalFilter = 'javascript:,/Colgate';
            _omniture.hier1 = 'Colgate Universal,';
-->
        </script> 
        <script language='JavaScript' src='http://www.colgate.com/Colgate/Common/s_code_remote_h_post.js'></script>
        <script language="JavaScript">
            <!--
                    var s_code = _omniture.t();
            if (s_code) {
                alert("s_code = " + s_code);
                document.write(s_code);
            } //--></script> 
        <!-- End SiteCatalyst code version: H.x. --> 
        <noscript><img src="http://CPUYAll.112.2o7.net/b/ss/CPARAll,CPARPromo/1/1/H.7--NS/123456?pageName=http://www.volviendoalcole.com.ar/Colgate" width="1" height="1" border="0" /></noscript>

    </body>
</html>
