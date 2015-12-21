<?php
require_once (__DIR__) . '/../php/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>COLGATE</title>
        <script src="<?php echo PATH_JS ?>jquery-1.11.2.min.js"></script>
        <script type="text/javascript">
            var PATH_CONTROLLER = '<?php echo PATH_CONTROLLER ?>';
            var PATH_HOME = '<?php echo PATH_HOME ?>';
        </script> 
    </head>
    <body>
        <?php
        require_once (__DIR__) . '/home.php';
        require_once (__DIR__) . '/productos.php';
        require_once (__DIR__) . '/bases.php';
        require_once (__DIR__) . '/registro.php';
        ?>
        <script src="<?php echo PATH_JS ?>funcs.js"></script>
    </body>
</html>
