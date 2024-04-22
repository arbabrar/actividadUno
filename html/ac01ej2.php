<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 | Actividad Nro 1</title>
</head>
<body>
    <?php
        //inicializamos la variables con los usuarios
        $usuarios = array("juan","pedro","maria","raul");
        //inicializamos la contrasena
        $password = "D153n0W3b2";
        //verificamos si hay alguna peticion por el metodo post
        if ($_SERVER['REQUEST_METHOD']=="POST")
        {
            /*asignamos a la variable usuario el nombre de usuario introducido
            en el formulario y con la funcion strtolower lo convertimos a minuscula*/
            $usuario = strtolower($_POST["usuario"]);
            /*
                asignamos a la variable contrasena el password introducido en el formulario
            */ 
            $contasena = $_POST["password"];
            /*
                usamos la funcion in_array para verificar si un valor especifico existe
                en un array y utilizamos el operador === para verificar la identidad entre la contrasena
                la contrasena por defecto y los adatos introdicidos en el formulario y por ultimo devolvemos un mensaje de bienvenida o de error 
            */
            if (in_array($usuario, $usuarios) && $password === $contasena){
                echo "Bienvenido $usuario !!!!!";
            }
            else
            {
                echo "Usuario o contrasena incorrecto.";
            }
        }
    ?>

    <!-- 
        utilizaremos htmlspecialchars para convertir caractereres especiales en entidades HTML
        su proposito es evitar que ciertos caracteres especiales sean interpretados como elementos HTML
    -->
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <label for="usuario">Usuario : </label>
        <input type="text" id="usuario" name="usuario" required>
        <label for="password">Contrasena : </label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>