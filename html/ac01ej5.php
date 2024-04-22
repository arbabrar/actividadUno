<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 | Actividad Nro 1</title>
</head>
<body>
    <?php
        //Inicializamos el array nombres
        $nombres = array(
            "sofía", "alejandro", "valentina", "sebastián", "camila",
            "martín", "isabella", "mateo", "luciana", "nicolás",
            "emma", "juan", "valeria", "santiago", "ana",
            "diego", "mariana", "lucas", "gabriela", "andrés"
        );
        
         //Inicializamos el array apellidos
        $apellidos = array(
            "garcía", "rodríguez", "martínez", "lópez", "gonzález",
            "hernández", "pérez", "sánchez", "ramírez", "torres",
            "flores", "gómez", "díaz", "vasquez", "romero",
            "suárez", "castro", "morales", "ortega", "ruiz"
        );
        //llamamos a la funcion combinarNombres y el resultado lo guardamos en la variable resultado 
        $resultado=combinarNombres();
        //recorremos el array que es el resultado de la combinacion de nombres y apellidos
        for ($i=0; $i < sizeof($resultado) ; $i++) { 
            echo $resultado[$i]."<br>"; 
        }

        function combinarNombres(){
            //inidcamos que la variable $apellido y $nombre deben ser tratados como variables globales dentro
            //el ambito de la funcion
            global $nombres, $apellidos;
            //declaramos un nuevo array
            $nuevo_arr =[];
            //tomamos la longitud del array nombres 
            $tamano= sizeof($nombres);
            //realizamos un bucle que forme el nuevo arreglo
            for ($i = 0; $i < $tamano; $i++){
                //formamos un numero aleatorio desde 0 hasta el tamano del array nombre
                $pocision = rand(0,$tamano -1);
                //definimos el nuevo array y con la funcion ucfirst convertimos en mayuscula la primera letra
                $nuevo_arr[$i] = ucfirst($nombres[$pocision])." ".ucfirst($apellidos[$pocision]);
            }

            return $nuevo_arr;
        }
    ?>
    
</body>
</html>