<!DOCTYPE html>
<!-- Programa: Desplazamiento Palabra-->
<html>

    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Desplazamiento Palabra clave</title>


    <head>

    <body>

        <h1>Cifrado de Desplazamiento Palabra Clave</h1>


        Operacion a realizar
        <form action="resultado.php" method="post">
        <select name="cifrado">

            <option value="cifrar">Cifrar</option>
            <option value="descifrar">Descifrar</option>
        </select>   
        </select>
            <br/>
           <!–  Introducimos el texto ->

            <label for="texto">Ingresar el texto.</label>
            <input type="text" name="texto"><br />

            <label for="palabra">Palabra clave.</label>
            <input type="text" name="palabra"><br />

            <label for="desplazamiento">Nº Desplazamiento</label>
            <input type="number" name="desplazamiento"><br />


            <!–  Borrar los valores ->
            <label for="Borrar">¿Quieres resetear?</label>    
            <input type="reset" value="Borrar">

            <!–  Recoger los datos ->
            <label for="Enviar">Ejecutar</label>
            <input type="submit" name="Enviar">

        </form>

    </body>

</html>
