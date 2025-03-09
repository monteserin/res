<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Preguntas Javascript</title>
    <meta name="robots" content="noindex, nofollow">
    <style>
        li {
            margin: 30px 15px 30px 15px;
        }
    </style>
</head>
<body>
<?php
$password = "oropuro";
if (!isset($_POST['enviar']) || (isset($_POST['enviar']) && $_POST['clave'] != $password)) {
    ?>
    <form method="post">
        <label for="clave">Introduce la clave secreta, por favor</label> <br>
        <input type="text" name="clave"> <br>
        <input type="submit" name="enviar">
    </form>
<?php } else { ?>


    <ol>
        <li>Dados dos circulos de radio 5.5 metros y 3.5 metros. Calcular la diferencia entre sus superficies. Mediante
            un alert, mostrar el resultado. La solución es 56.54
        </li>
        <li>Calcular (y mostrar) la superficie y el volumen de una esfera de 1,24 m de radio. Solución: superficie:
            19,31, volumen: 7.98
        </li>

        <li>Calcular (y mostrar) la superficie de dos círculos de radios introducidos por teclado y la diferencia entre
            sus superficies.
        </li>

        <li>Calcular (y mostrar) la superficie y el volumen de una esfera cuyo radio se introduce por teclado.</li>

        <li>
            <hr>
            A partir de aquí, 0.4 cada pregunta
        </li>
        <li>Escribir un algoritmo que permita la entrada por teclado de un numero y que muestre el número de dígitos
        </li>

        <li>Escribir un algoritmo que permitirá le extracción de las iniciales de una persona cuyo nombre y apellidos
            son introducidos de forma independiente por teclado (ejemplo CV para Christian VIGOUROUX)
        </li>

        <li>Escribir le algoritmo que permita la entrada de la respuesta a la pregunta "¿Le gusta la informática(S/N)?"
            mostrando un mensaje de error en caso de otra respuesta (volver a mostrar la pregunta mientras que la
            respuesta sea diferente de "S" y de "N").
            Use para este procesamiento la estructura iterativa while.
        </li>

        <li>Contar las ocurrencias de una letra en una palabra (la letra y la palabra deben ser introducidas por
            teclado)
            <p>Ejemplo: <br>
                Palabra a analizar: AMORCITO<br>
                Letra a buscar: O<br>
                Respuesta: La letra O está presenta 2 veces en la palabra AMORCITO</p></li>

        <li>Contar el número de vocales de un palabra introducida por teclado</li>


        <li>Ir leyendo los números introducidos en sucesivos cuadros prompt hasta que el usuario introduzca un 0.
            Mostrar la cantidad de números positivos y negativos de la serie. <br>
            Ejemplo: <br>
            Serie de cifras: 5 6 3 -5 4 -6 13 0 <br>
            Respuesta: 5 cifras positivas y 2 cifras negativas
        </li>

        <li>Cálcular el mínimo y el máximo de una sucesión de enteros, leídos del teclado (sucesión termina por un cero)
            <br>
            Ejemplo: 5 7 -1 -3 17 12 4 -6 0 -> Maxi=17 Mini=-6
        </li>

        <li>Determinar la existencia o no de un número (leído del teclado) en una lista de números
            leída del teclado (la recogida de números finalizará cuando el usuario introduzca un 0) <br><br>
            Ejemplos: <br>
            (Número buscado) + Lista <br>
            (2) 3 5 6 7 8 0 fuera de lista<br>
            (8) 1 3 5 7 0 fuera de lista<br>
            (4) 1 3 4 6 8 0 apilado en la lista <br></li>


        <li>Mostrar la tabla de multiplicar de los números que van del 1 al 9. Utilizaremos dos bucles for anidados.
        </li>
        <li>Recoger 5 números por teclado y ordenarlos de menor a mayor.</li>

        <li>Dado un array de 5 apellidos harcodeados
            Escribir un algoritmo que solicite la entrada de un apellido por teclado y si coincide con alguno de los
            almacenados en el array, los elimine.
        </li>


        </li>

    </ol>
    <?php
}
?>


</body>
</html>