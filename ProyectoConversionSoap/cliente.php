<?php
//Sin wsdl


//Con wsdl
$cliente = new SoapClient("http://www.webservicex.net/CurrencyConvertor.asmx?WSDL");

$parametros = array("FromCurrency"=>"EUR","ToCurrency"=>"USD");
$tasa = $cliente->ConversionRate($parametros);

echo "La conversion de euros a dolares esta en: $tasa->ConversionRateResult";


//funciones con wsdl

//nos devuelve todos los tipos
var_dump($cliente->__getTypes());

echo "<hr/>";
//nos devuele todas las funciones.
var_dump($cliente->__getFunctions());

?>


