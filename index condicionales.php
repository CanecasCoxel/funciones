<html> 
    <head>
        <title>Hola mundo</title>
    </head>
    
    
    <body>
        <h1>
            <?php 
                $var1 = "Soy un mensaje usando PHP usando variable de impresión en html";
                echo $var1;
            ?>
        </h1>

        <?php
            echo "<h3>Soy un H3</h3>";
        ?>

        <?php
            $var2 = true;
            if ($var2 == true){
                echo "La variable dos es verdadera";
            }else{
                echo "la variable dos es falsa";
            }

            for ($i = 0; $i <=3; $i++){
                echo "<p> El valor de i es = " .$i."</p>";
            }

            $var3 = false;
            $var4 = "María";
            $var5 = "Camilo";
            
            //condicional abreviado
            $var3 ? $var6 = $var4 : $var6 = $var5;
            echo $var6;


            
            $var7 = 2;
            switch($var7){
                case 1:
                    echo "SOY 1";
                    break;
                case 2:
                    echo "SOY 2";
                    break;
                case 3: 
                    echo "SOY 3";
                    break;        
            }


        ?>

        <?php 
            $miarray = [
                "Banano",
                "Pera",
                "Manzana",
                "Naranja"
            ];

            echo "<br> Mi array tiene " .count ($miarray). " frutas <br>";

            for ($j= 0; $j< count($miarray); $j++){
                echo "<br>";
                echo $miarray[$j]. "<br>";


            }

// en la listaq de array se puede poner algo mas en la lista, se cambia fresa por la variable
            array_push($miarray, "Fresa");
            echo "<br> Mi array tiene " .count ($miarray). " frutas  SEGUNDA LISTA <br>";

            for ($j= 0; $j< count($miarray); $j++){
                echo"<br>";
                echo $miarray[$j]. "<br>";


            }



        ?>

    </body>
</html>