<html> 

<head>

<body>
<?php
    //TIPOS DE VARIABLES
    $var1 = "Valor de variable 1"; //Variable String
    $var2 = 62; // Variable entera
    
    $var3 = 7.843; //Variable double 
    $var4 = false;  //variable boolean
    $var5 = "2019-03-15"; //variable Date

    echo "<h1>$var1 USANDO EL H1</h1>"; // punto 7 del taller
    echo "<br> <h2>$var2 USANDO EL H2</h2>"; // punto 8 del taller
    

?>

<?php // punto 9 del taller
    $miarray = [
        "Posición 0",
        "Posición 1",
        "Posición 2",
        "Posición 3",
        "Posición 4"
    ];

    echo "<br> Mi array tiene " .count ($miarray). " posiciones <br>";

            for ($j= 0; $j< count($miarray); $j++){
                echo "<br>";
                echo $miarray[$j]. "  ---> Que sería el Número ".($j+1). "<br>";


            }


?>




</body>

</head>


</html>