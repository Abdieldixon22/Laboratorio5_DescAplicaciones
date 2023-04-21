<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicio 01 - Operaciones con PHP</title>
</head>
<body>
    <form action="" method="post">
        Ingresar valor 1: <br> <input type="text" name="valor1">
        Ingresar valor 2: <br> <input type="text" name="valor2">
        Resultado: <br>
        <input type="submit" name="suma" value="suma">
    </form>
<?php
// Declaracion de variables
    $num1 = $_POST['valor1'];
    $num2 = $_POST['valor2'];
    $sum = $num1 + $num2;
    echo "El resultado de la suma es: " . $sum;
?>
</body>
</html>