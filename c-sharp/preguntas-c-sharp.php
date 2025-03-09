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
            <li>Utilizando la instrucción "Console.WriteLine" mostrar en pantalla el texto "hola mundo!".</li>
            <li>Definir una variable que almacene una cadena de texto que será el nombre de una persona e imprimir el valor de dicha variable.</li>
            <li>Utilizando la variable que almacenaba el nombre de una persona, imprimir en pantalla el texto "Hola [valor de la variable]"</li>
            <li>Hacer un programa que recoja, utilizando ReadLine, el nombre de una persona y lo imprima en pantalla </li>
            <li>El programa debe imprimir la suma de dos números introducidos</li>
            <li>Encapsular el código anterior en un método que recibirá dos parámetros</li>
            <li>Hacer una función que imprima la superficie de un rectángulo (lado1 x lado2) </li>
            <li>Hacer una función que imprima el volumen de un prisma rectangular (largo x ancho x alto) </li>
            <li>La función debe devolver el volumen del prisma (usar return)</li>
            <li>Hacer una función que recoge 2 números e imprime el mayor de ellos</li>
            <li>Hacer un bucle "for" que imprima diez veces la frase "Puxe Asturies!".</li>
            <li>Hacer un bucle "for" que imprima los números que hay del que hay entre 0 y 9 , ambos incluídos</li>
            <li>Repetir el bucle anterior, pero imprimir los números de dos en dos. No puedes usar la estructura de control if.</li>
            <li>Repetir el ejercicio anterior, pero el bucle debe avanzar de uno en uno y utilizaremos el operador de resto para evaluar si el número es par o impar. <br>
                Debemos imprimir sólo los números pares. </li>
            <li>Repetir el ejercicio anterior, pero ahora el bucle debe imprimir los números que tienen división exácta entre 3.</li>
            <li>Hacer una función que recoja un parámetro numérico e imprima todos los números por debajo de él que son divisibles por 3. </li>
            <li>Repetir el ejercicio anterior utilizando el bucle while. </li>
            <li>Hacer una función que reciba un parámetro numérico e imprima todos los números por los que tiene división exacta. Utilizar un bucle for.</li>
            <li>Utilizar el bucle while para realizar el ejercicio anterior.</li>
            <li>Utilizar un bucle for para calcular la potencia enésima de un número introducido. Necesitaremos dos parámetros; el número del que quiero calcular la potencia y el exponente.</li>
            <li>Utilizar el bucle while para realizar el ejercicio anterior.</li>
            <li>Hacer una función que reciba una cadena de texto compuesta por números separados por guiones bajos, la convierta en un array
                de números y los vaya imprimiendo sucedidos por un signo de admiración utilizando un bucle for </li>
            <li>Hacer una función que reciba una cadena de texto compuesta por números separados por guiones bajos, la convierta en un array de números y los vaya imprimiendo sucedidos por un signo de admiración utilizando un bucle while.</li>
            <li>Hacer una función que reciba una cadena de texto compuesta por números separados por guiones bajos, la convierta en un array de números e imprima del mayor de ellos. Utiliza un bucle while.</li>
            <li>Hacer una función que reciba una cadena de texto compuesta por números separados por guiones bajos, la convierta en un array de números e imprima del mayor de ellos. Utiliza un bucle for.</li>
            <li>Desarrollar una funcion que reciba un valor y devuelva true si es primo o false si no lo es.</li>
            <li>Hacer una función que reciba una cadena de texto compuesta por números separados por guiones bajos, la convierta en un array de números e indique cuales de ellos son primos.</li>
            <li>Hacer una función que reciba un valor y calcule su factorial utilizando el bucle while.</li>
        </ol>
    <?php
    }
    ?>

</body>

</html>