<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //include("libreria.php");
        require_once("libreria.php");
        echo "<h2>Estructuras de control</h2>";
        function manejador(){
            echo "<h2>llamando a manejador</h2>";
        }
        manejador();//llamada a la función

        $a=1;
        if($a>=0){
            manejador();
        }

        echo register_tick_function("manejador");

        function sumar($n1,$n2){
            $suma=$n1+$n2;
            echo "<h2>la suma es ".$suma."</h2>";
        }
        sumar(5,6);
        echo "<br>"
        function restar($n1,$n2){
            $resta=$n1-$n2;
            return $resta;
        }
        echo "la resta es ".restar(10,9);
        echo "<h3>Paso de parámetros<h3>";
        function saludar($nombre){//paso por valor
            //function saludar(&$nombre){//paso por referencia
            $nombre="cliente 1 ".$nombre;//modificando al variable
            echo "<h3>hola, ".$nombre."</h3>";
        }

        //saludar("juan");
        $cliente="maría";
        saludar($cliente);
        echo $cliente;
    ?>
</body>
</html>