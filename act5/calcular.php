<?php
    $pRebaja = 0.05;
    $pDescEsp = 0.07;
    $cantObseq = 2;

    $precioGaseosa = $_POST['precio'];
    $cantUnidades = $_POST['cantUnidades'];
    
    $rebaja = $precioGaseosa * $pRebaja;  

    $nuevoPrecio = $precioGaseosa - $rebaja;
    $importeCompra = $cantUnidades * $nuevoPrecio;
    $importeDesc = $importeCompra * $pDescEsp;
    $importePagar = $importeCompra - $importeDesc;
    $obsequios = $cantObseq * $cantUnidades;

    echo "Nuevo precio de gaseosa: " . $nuevoPrecio . "<br>";
    echo "Importe de compra: " . $importeCompra . "<br>";
    echo "Importe de descuento: " . $importeDesc . "<br>";
    echo "Importe a pagar: " . $importePagar . "<br>";
    echo "Número de caramelos: " . $obsequios . "<br>";
?>