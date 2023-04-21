<?php
    $sueldo_Base = 600;
    $pComision = 0.075;
    $pDescuento = 0.11;

    $nroHijos = $_POST['nroHijos'];
    $importe = $_POST['importe'];

    $comision = $importe * $pComision;
    $bonificacion = 50 * $nroHijos;

    $sueldoBruto = $sueldo_Base + $comision + $bonificacion;
    $descuento = $sueldoBruto * $pDescuento;
    $sueldoNeto = $sueldoBruto - $descuento;

    echo "Comision: " . $comision . '<br>';
    echo "Bonificacion: " . $bonificacion . '<br>';
    echo "Sueldo Bruto: " . $sueldoBruto . '<br>';
    echo "Descuento: " . $descuento . '<br>';
    echo "Sueldo Neto: " . $sueldoNeto . '<br>';
?>