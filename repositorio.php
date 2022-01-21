<?php
function transformar($dato){//paso de argumento por valor
    return $dato." transformado";
}

function calcularTotal($unidades, $precio, $iva){
    $subtotal=$unidades*$precio;
    $cuotaIva=$subtotal*$iva;
    $total=$subtotal+$cuotaIva;
    return $total;
}

function calcularTotal2($unidades, $precio, $tipoOperacion){
    $subtotal=$unidades*$precio;
    $cuotaIva=0;
    if($tipoOperacion=="normal"){
        $cuotaIva=$subtotal*0.21;
    }
    elseif($tipoOperacion=="reducido"){
        $cuotaIva=$subtotal*0.1;
    }
    else{
        $cuotaIva=$subtotal*0.04;
    }
    $total=$subtotal+$cuotaIva;
    return $total;
}

function manipularString($mensaje){
    return "En mayúsculas ".strtoupper($mensaje);
}

function primeraMayuscula($dato){
    //retorna el dato con la primera letra en mayúscula
    //ucwords
    return "Primera letra en mayúsculas: ".ucwords($dato);
}

function reemplazar($valorBuscado,$valorReemplazar,$mensaje){
    //le das que buscas una a, y que muestre una e
    //str_replace
    return "Reemplazo de letras: ".str_replace($valorBuscado,$valorReemplazar,$mensaje);
}

function mostrarMes($fecha){
    //envías la fecha y me retorna el mes en castellano
    //
    setlocale(LC_TIME, "spanish");
    echo "Nombre del mes en castellano: ".strftime("%B");
}

function info(){
    //muestra la versión de php y la versión del servidor
    return "Versión php ".phpinfo();
}

function numeroPrimo($num){
    //retorna si el numero introducido es primo o no
    if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
        return "Es primo".True;
    } else {
        // comprobamos si es par
        if ($num % 2 != 0) {
            // comprobamos solo por los impares
            for ($i = 3; $i <= sqrt($num); $i += 2) {
                if ($num % $i == 0) {
                    return "No es primo".False;
                }
            }
            return "Es primo".True;
        }
    }
    return "No es primo".False;
}

function bisiesto($año){
    //retorna si el año es bisiesto o no
    echo (date('L', strtotime("$año-01-01")) ? 'Es bisiesto' : 'No es bisiesto');

}