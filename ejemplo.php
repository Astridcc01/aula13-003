<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejemplos con funciones y estructuras de control<h2>
    <?php
    require_once("repositorio.php");
    echo "<h3>Ejercicio 1</h3>";
    $resultado=transformar("un texto");
    echo $resultado;
    $totalFactura=calcularTotal(100,4.95,0.21);
    echo "<h4>El total de la factura es ".$totalFactura." € (iva incluido)</h4>";
    $totalFactura=calcularTotal2(100,4.95,"reducido");
    echo "<h4>El total de la factura es ".$totalFactura." € (iva en función del tipo)</h4>";
    
    $mensajeResultado=manipularString("En un lugar de la Mancha");
    echo $mensajeResultado;

    echo "<br>";
    $mensajeResultado2=primeraMayuscula("buenos días, clase");
    echo $mensajeResultado2;

    echo "<br>";
    $mensajeResultado3=reemplazar("a","e","Mi madre, Ana, es muy alta");
    echo $mensajeResultado3;

    echo "<br>";
    $mensajeResultado4=mostrarMes("2022/01/21");
    echo $mensajeResultado4;

    echo "<br>";
    $mensajeResultado5=info();
    echo $mensajeResultado5;

    echo "<br>";
    $mensajeResultado6=numeroPrimo(7);
    echo $mensajeResultado6;

    echo "<br>";
    $mensajeResultado7=bisiesto(2004);
    echo $mensajeResultado7;

    ?>
</body>
</html>