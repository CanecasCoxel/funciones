<html> 
<head>

<body>

<?php

    function nombreDeLaFuncion(){
        $var1 = "Mensaje 1";
        $var2 = "Mensaje 2";
        $var3 = $var1." ".$var2;
        echo $var3;
    }
    
    nombreDeLaFuncion();

    
    echo "<br> Funciones de Operaciones";

    function sumarNumeros($valor1, $valor2, $valor3, $valor4, $valor5){  //PUNTO A DEL EJERCICIO
        $suma_total= ($valor1+ $valor2+ $valor3+ $valor4+ $valor5);
        
        echo "<br><h1> La suma de los número es: ".$suma_total. "   (PUNTO A DEL EJERCICIO)";

    }

    sumarNumeros(1,2,3,4,5);
?>

<?php   //PUNTO B DEL EJERCICIO

    function sumarNumerosDevuelto($valor11, $valor22, $valor33, $valor44, $valor55){
        $temp= ($valor11+ $valor22+ $valor33+ $valor44+ $valor55);
        return $temp;
    }

    $tempRespuesta = sumarNumerosDevuelto(2,5,1,8,10);
    echo "<br> <br>Suma total función con Return = ". $tempRespuesta. "   (PUNTO B DEL EJERCICIO)";
?>

<?php   //PUNTO C DEL EJERCICIO

function volumenCilindro($radio_base, $altura, $pi){
    
    $volumen= ($pi*$radio_base*$radio_base*$altura);
    echo "<br><br> (Impresión desde la Función) Volumen del Cilindro es: ".$volumen. "   (PUNTO C DEL EJERCICIO)";
    return $volumen;

}

//DATOS INGRESADOS PARA CALCULAR EL VOLUMEN, INCLUYENDO A PI
$radio_base= 6;
$altura= 5;
$pi= 3.1416;

//LLAMADO A LA FUNCION PARA CALCULAR EL VOLUMEN  DEL CILINDRO
$volumen_respuesta= volumenCilindro($radio_base, $altura, $pi);
echo "<br> El volumen del cilindro es: ".$volumen_respuesta. "   (PUNTO C DEL EJERCICIO)";

?>

</body>
</head>
</html>