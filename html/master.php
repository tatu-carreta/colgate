<?php
require_once (__DIR__) . '/../php/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Colgate</title>
        <meta charset="UTF-8">
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
    </head>
    <body>
        <?php
        
        require_once (__DIR__) . '/home.php';
        require_once (__DIR__) . '/registro.php';
        require_once (__DIR__) . '/productos.php';
        require_once (__DIR__) . '/bases.php';
        
        ?>
        <!-- FOOTER -->
        <footer>
            <p>© 2016 Colgate-Palmolive Company. Todos los derechos reservados.</p>
        </footer>

        <script>
            $(document).ready(function () {
                $('#masBases').hide();
            });
        </script>
        <script src="<?php echo PATH_JS ?>jqFuncs.js"></script>
    </body>
</html>
