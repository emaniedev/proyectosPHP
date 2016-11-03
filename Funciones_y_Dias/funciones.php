<?php
function dameMes ($mes){
    switch ($mes){
                case 1: $mesr = "Enero";
                                    break;
                case 2: $mesr = "Febrero";
                                    break;
                case 3: $mesr = "Marzo";
                                    break;
                case 4: $mesr = "Abril";
                                    break;
                case 5: $mesr = "Mayo";
                                    break;
                case 6: $mesr = "Junio";
                                    break;
                case 7: $mesr = "Julio";
                                    break;
                case 8: $mesr = "Agosto";
                                    break;
                case 9: $mesr = "Septiembre";
                                    break;
                case 10: $mesr = "Octubre";
                                    break;
                case 11: $mesr = "Noviembre";
                                    break;
                case 12: $mesr = "Diciembre";
                                    break;                
                }
                return $mesr;
}

function dameDia ($diatexto){
    switch ($diatexto){
            case 1: $diatextor = "Lunes";
                                break;
            case 2: $diatextor = "Martes";
                                break;
            case 3: $diatextor = "Miercoles";
                                break;
            case 4: $diatextor = "Jueves";
                                break;
            case 5: $diatextor = "Viernes";
                                break;
            case 6: $diatextor = "Sabado";
                                break;                
            case 7: $diatextor = "Domingo";
                                break;
            }
            return $diatextor;
}
?>



