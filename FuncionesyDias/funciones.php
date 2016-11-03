<?php
function dameMes ($mes){
    switch ($mes){
                case 1: $mes = "Enero";
                                    break;
                case 2: $mes = "Febrero";
                                    break;
                case 3: $mes = "Marzo";
                                    break;
                case 4: $mes = "Abril";
                                    break;
                case 5: $mes = "Mayo";
                                    break;
                case 6: $mes = "Junio";
                                    break;
                case 7: $mes = "Julio";
                                    break;
                case 8: $mes = "Agosto";
                                    break;
                case 9: $mes = "Septiembre";
                                    break;
                case 10: $mes = "Octubre";
                                    break;
                case 11: $mes = "Noviembre";
                                    break;
                case 12: $mes = "Diciembre";
                                    break;                
                }
                return $mes;
}

function dameDia ($diatexto){
    switch ($diatexto){
            case 1: $diatexto = "Lunes";
                                break;
            case 2: $diatexto = "Martes";
                                break;
            case 3: $diatexto = "Miercoles";
                                break;
            case 4: $diatexto = "Jueves";
                                break;
            case 5: $diatexto = "Viernes";
                                break;
            case 6: $diatexto = "Sabado";
                                break;                
            case 7: $diatexto = "Domingo";
                                break;
            }
            return $diatexto;
}
?>



