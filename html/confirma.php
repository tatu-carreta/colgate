<?php
require_once (__DIR__) . '/../php/config.php';

if(!isset($_GET['cg']) || ($_GET['cg'] != '090'))
{
header('Location: '.PATH_HOME);
}
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
	
	<script language='JavaScript1.1' src='//pixel.mathtag.com/event/js?mt_id=913147&mt_adid=156086&v1=&v2=&v3=&s1=&s2=&s3='></script>
	
	<script src="https://secure.adnxs.com/px?id=652525&seg=4363290&t=1" type="text/javascript"></script>
	

        <header>
            <nav class="menuResponsive">
                <ul>
                    <li><a href="#registro" class="reg"><span>¡Registrate ahora!</span></a></li>
                    <li><a href="#productos" class="prod"><span>Productos</span></a></li>
                    <li><a href="#bases" class="bases"><span>Bases y condiciones</span></a></li>
                </ul>
            </nav>
        </header>  

        <h1>Gracias por registrarse!!</h1>
		<br><br>
		<a href="<?php echo PATH_HOME ?>">Volver</a>

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
