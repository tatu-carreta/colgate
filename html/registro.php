<form id="registro" action="<?php echo PATH_CONTROLLER ?>controladorAdminModel.php" method="post">
    <label for="nomyape">Nombre y Apellido</label>
    <input id="nomyape" type="text" name="nomyape" placeholder="requerido" required="true">
    <label for="dni">DNI</label>
    <input id="dni" type="text" name="dni" placeholder="Solo numeros y requerido" class="num" required="true">
    <label for="domicilio">Domicilio</label>
    <input id="domicilio" type="text" name="domicilio" placeholder="requerido" required="true">
    <label for="cdpost">CP</label>
    <input id="cdpost" type="text" name="cdpost" placeholder="requerido" required="true">
    <label for="ciudad">Ciudad</label>
    <input id="ciudad" type="text" name="ciudad" placeholder="requerido" required="true">
    <label for="provincia">Provincia</label>
    <input id="provincia" type="text" name="prov" placeholder="requerido" required="true">
    <label for="tel">Telefono de contacto</label>
    <input id="tel" type="text" name="codTel" placeholder="requerido (solo num)" class="num" required="true">
    <input type="text" name="numTel" placeholder="requerido (solo num)" class="num" required="true">
    <label for="correo">Correo electrónico</label>
    <input id="correo" type="email" name="correo" placeholder="requerido" required="true">
    <label for="ean">EAN del producto (código de barras de 13 dígitos)</label>
    <input id="ean" type="text" name="prods[]" placeholder="requerido (solo num)" class="num" required="true"> 
    <div id="masProd"></div>
    <span id="verMas">Ver más</span>
    
    <input type="submit" value="Enviar">
    <input type="hidden" name="section" value="registro">
</form>