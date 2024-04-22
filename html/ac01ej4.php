<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 | Actividad Nro 1</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $palabra = $_POST["palabra"];
            //convertir la palabra en minuscula
            $palabra = strtolower($palabra);
            //inicalizamos las variables con las que mostraremos el resultado
            //contador vocal O
            $cont_O = 0;
            //contador de vocales
            $cont_vocal = 0;
            // arreglo auxiliar de las vocales
            $vocales=array("a","e","i","o","u");
            //contador individual de las vocales
            $cont_volcales_aeiou = array(
                'a' => 0,
                'e' => 0,
                'i' => 0,
                'o' => 0,
                'u' => 0
            );
            //llamamos a la funcion que nos verificara y hara el conteo de las vocales
            verificarFrase($palabra);
            echo "<h3>Resultado</h3>";
            echo "Cantidad de o: $cont_O <br>";
            echo "Cantidad de vocales: $cont_vocal <br>";
            echo "Cantidad de vocales individuales: <br>";
            foreach($cont_volcales_aeiou as $letra => $valor)
            {
                echo $letra.":".$valor."<br>";
            }
        }
        function verificarFrase($palabra){
            //definimo las variables globales ya definidas anteriormente
            global $cont_O, $cont_vocal, $vocales, $cont_volcales_aeiou;
            //recorremos la palabra letra por letra
            for ($i=0; $i < strlen($palabra); $i++) { 
                //copgemos el valor de la letra en la pocision $i
                $letra = $palabra[$i];
                //verificamos si esta letra es igual O
                if($letra == 'o'){
                    $cont_O ++;
                }
                //verificamos que la letra es una vocal
                if(in_array($letra,$vocales)){
                    //incrementamos el contador de vocales
                    $cont_vocal ++;
                    //oncrementamos el numero de vocales de forma individual
                    $cont_volcales_aeiou[$letra]++;
                }
            }

            
        }
    ?>

    <h2>Ingrese una palabra o frase</h2>
    <form method="post">
        <label for="frase">Frase</label>
        <input type="text" id="palabra" name="palabra" required>
        <input type="submit" value="Revisar">
    </form>
</body>
</html>