<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1| Actividad 1</title>
</head>
<body>
    <?php
        function getNavegador()
        {
           //return get_browser(null, true);
           /*
               utilizamos la variable global  $_SERVER["HTTP_USER_AGENT"]
               misma que contiene el encabezado del agente del usuario enviado por el navegador web
               del cliente al servidor
           */
            $usAgent = $_SERVER["HTTP_USER_AGENT"];
            //definimos una variable auxiliar en el cual almacenaremos el nombre del navegador
            $navegador= "";
            /*
                utilizaremos la funcion strpos que nos servira para encontrar la posicion 
                de la primera ocurrencia de una subcadena dentro de otra cadena
            */ 
            if (strpos($usAgent, 'Chrome') !== false){
                $navegador = 'Chrome';
            } 

            if (strpos($usAgent, 'Chrome') !== false){
                $navegador = 'Chrome';
            } 

            if (strpos($usAgent, 'Firefox') !== false){
                $navegador = 'Mozilla Firefox';
            } 

            if (strpos($usAgent, 'MSIE') !== false){
                $navegador = 'Internet Explorer';
            } 
            if (strpos($usAgent, 'Safari') !== false){
                $navegador = 'Safari';
            } 

            if (strpos($usAgent, 'Opera') !== false || strpos($usAgent, 'OPR') !== false){
                $navegador = 'Opera';
            }
            return $navegador; 
        }
        $navegador = getNavegador();
        echo "Bienvenido, te encuentras usando el navegador $navegador";
    ?>
    
</body>
</html>