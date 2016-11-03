<?php
//define("IVA", "21");
function calculoIva ($cantidad,$tipo){
    $iva = $cantidad * $tipo;
    return $iva;
}

function calculoIvaCompleto ($cantidad,$tipo=0.21){
    $iva = $cantidad * $tipo;
    return $iva;
}
?>