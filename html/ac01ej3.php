<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 | Actividad Nro 1</title>
</head>
<body>
    <?
        //FUNCION PARA VERIFICAR SI UN NUMERO ES PRIMO
        function esPrimo( $n ){
            //EN CASO DE QUE EL NUMERO SEA MENOR O IGUAL A UNO DEVOLVEMOS FALSE
            if ($n <= 1){
                return false;
            }
            //DE LO CONTRARIO INICAMOS UN CICLO DESDE LA POCISION 2 HASTA LA RAIZ CUADRADA DEL
            // DEL NUMERO     
            for ($i=2; $i <= sqrt($n) ; $i++) { 
                if ($n % $i == 0){
                    return false;
                }                
            }
            return true;
        }
        //definimos un arreglo vacio
        $num_primos = array();
        // d=efinimos el total de numeros que deseamos
        $total = 10;
        //definimos el limite del rango de numeros que deseamos buscar
        $limite = 110;
        // definimos un variable auxiliar de tipo booleana
        $aux = true;
        // definimos un variable auxiliar de tipo entero
        $i=0;
        //creamos un cicle hasta que nuestra variable sea false
        while ($aux === true)
        {
            //creamos un numero aleatorio que inicie entre el numero 2 y el limite
            $aleatorio = rand(2, $limite);
            // verficamos si el numero es primo y con la funcion in_array verificamos si ese numero ya ah sido consultado
            if(esPrimo($aleatorio) && !in_array($aleatorio, $num_primos))
            {
                //agregamos el nuevo numero primo
                $num_primos[$i] = $aleatorio;
                //aumentamos en uno el indice del arreglo
                $i++;
                //verificamos si hemos llegado al total de numeros requeridos
                //con sizeof obtenemos la cantidad de elementos del array y si este es igual o 
                //mayor al total requerdo volcamos la variable auxiliar a false para q se detenga el bucle
                if(sizeof($num_primos) >=$total){
                    $aux = false;
                }
            }

            
        }
        //IMPRIMIMOS LOS NUMEROS PRIMOS EN PANTALLA
        echo "Los $total numeros primos y menores de $limite generados aleatoriamente son: ";
        //CON LA FUNCION INPLODE SEPARAMOS CADA ELEMENTO DEL ARREGLO CON EL CARACTER (,) 
        echo implode(", ", $num_primos);


    ?>
</body>
</html>