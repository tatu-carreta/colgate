<form id="registro" action="<?php echo PATH_CONTROLLER ?>controladorAdminModel.php" method="post">
    Nombre y Apellido
    <input type="text" name="nomyape" placeholder="requerido">
    DNI
    <input type="text" name="dni" placeholder="Solo numeros y requerido">
    Domicilio
    <input type="text" name="domicilio" placeholder="requerido">
    CP
    <input type="text" name="cdpost" placeholder="requerido">
    Ciudad
    <input type="text" name="ciudad" placeholder="requerido">
    Provincia
    <input type="text" name="prov" placeholder="requerido">
    Telefono de contacto
    <input type="text" name="codTel" placeholder="requerido (solo num)">
    <input type="text" name="numTel" placeholder="requerido (solo num)">
    Correo electrónico
    <input type="text" name="correo" placeholder="requerido">
    EAN del producto (código de barras de 13 dígitos)
    <input type="text" name="prods[]" placeholder="requerido (solo num)"> 
    <div id="masProd"></div>
    <span id="verMas">Ver más</span>
    
    <input type="submit" value="Enviar">
    <input type="hidden" name="section" value="registro">
</form>