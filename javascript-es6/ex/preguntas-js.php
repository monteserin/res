<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Preguntas Javascript</title>
    <meta name="robots" content="noindex, follow">
    <style>
        li {
            margin: 30px 15px 30px 15px;
        }
    </style>
</head>
<body>
<?php
$password = "wikiwiki";
if (!isset($_POST['enviar']) || (isset($_POST['enviar']) && $_POST['clave'] != $password)) {
    ?>
    <form method="post">
        <label for="clave">Introduce la clave secreta, por favor</label> <br>
        <input type="text" name="clave"> <br>
        <input type="submit" name="enviar">
    </form>
<?php } else { ?>

    <ol>
        <li>
            Utilizando la instrucción "console.log" mostrar en pantalla el texto "hola mundo!".
        </li>


       

        <li>
            Un programa debe imprimir por pantalla "Buenos días
            [valor asignado a una variable]"
        </li>

        <li>
            El programa debe imprimir la suma de dos números asignados a dos variables diferentes
        </li>

        <li>
            Encapsular el código anterior en una función que recibirá
            dos parámetros
        </li>

        <li>
            Hacer una función que imprima la superficie de un rectángulo (lado1 x lado2)
        </li>

        <li>
            Hacer una función que imprima el volumen de un prisma rectangular (largo x ancho x alto)
        </li>

        <li>
            La función debe devolver el volumen del prisma (usar return). Debemos imprimir el valor devuelto
        </li>

        <li>
            Hacer una función que recoge 2 números e imprime el mayor de ellos
        </li>

        <li>
            Hacer un bucle "for" que imprima diez veces la frase "Puxe Asturies!".
        </li>

        <li>
            Hacer un bucle "for" que imprima los números que hay del que hay entre 0 y 9 , ambos incluídos
        </li>

        <li>
            Repetir el bucle anterior, pero imprimir los números de dos en dos. No puedes usar la estructura de control
            if.
        </li>

        <li>
            Repetir el ejercicio anterior, pero el bucle debe avanzar de uno en uno
            y utilizaremos el operador de resto para evaluar si el número es par o impar. <br>
            Debemos imprimir sólo los números pares
        </li>

        <li>
            Repetir el ejercicio anterior, pero ahora el bucle
            debe imprimir los números que tienen división exácta entre 3
        </li>

        <li>
            Hacer un programa que a partir de un valor numérico asignado a una variable imprima todos los números por
            debajo de él que son divisibles por 3. Utilizaremos un bucle for
        </li>

        <li>
            Repetir el ejercicio anterior utilizando el bucle while
        </li>

        <li>
            Hacer una función que utilizando el bucle for, imprima los números
            de tres en tres en orden decreciente a partir de un número asignado a una variable
        </li>

        <li>
            Repetir el ejercicio anterior utilizando el bucle while
        </li>

        <li>
            Desarrollar una funcion que reciba un valor y devuelva true si es primo o false si no lo es
        </li>
        <li>
            Hacer una función que reciba un parámetro numérico
            e imprima todos los números por los que tiene división exacta. Utilizar un bucle for
        </li>

        <li>
            Utilizar el bucle while para realizar el ejercicio anterior
        </li>

        <li>
            Utilizar un bucle for para calcular la potencia enésima
            de un número asignado a una variable.
            Necesitaremos dos parámetros; el número del que quiero calcular
            la potencia y el exponente
        </li>

        <li>
            Utilizar el bucle while para realizar el ejercicio anterior
        </li>

        <li>
            Hacer una función que reciba una cadena de texto compuesta
            por números separados por guiones bajos, la convierta en un array
            de números y los vaya imprimiendo sucedidos por un signo de admiración
            utilizando un bucle for
        </li>

        <li>
            hacer una función que reciba una cadena de texto compuesta por números
            separados por guiones bajos, la convierta en un array de números y los vaya
            imprimiendo sucedidos por un signo de admiración utilizando un bucle while
        </li>

        <li>
            hacer una función que reciba una cadena de texto compuesta por números separados
            por guiones bajos, la convierta en un array de números e imprima del mayor de ellos.
            Utiliza un bucle while
        </li>

        <li>
            hacer una función que reciba una cadena de texto compuesta por números separados
            por guiones bajos, la convierta en un array de números e imprima del mayor de ellos. <br>
            Utiliza un bucle for
        </li>


        <li>
            Hacer una función que reciba una cadena de texto compuesta
            por números separados por guiones bajos, la convierta en un array de números
            y te indica cuales de ellos son primos
        </li>

        <li>
            hacer una función que reciba un valor y calcule su factorial
            utilizando el bucle while
        </li>

    </ol>
    <?php
}
?>

</body>
</html>