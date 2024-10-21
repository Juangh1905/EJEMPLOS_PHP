<?
    //funcion isset
    //Comprueba si una variable esta configurada, es decir, esta declarada y no es NULL. En ese caso devuelve 1.
    $var1 = 4;
    if(isset($var1)){
        print("La variale var1 esta inicializada y no es null. Su valor es:" .$var1);
    }else{
        print("La variable var1 no esta inicializada");
    }
?>
