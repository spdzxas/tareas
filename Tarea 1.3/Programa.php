<html>
    <body>
        <h2>ESTRUCTURA DE CONTROL (IF)</h2>
        <?php
        $a=35;
        $b=30;
        //IF SIMPLE ******
        if($a>$b)
        {
        echo "El mayor es ", $a, "<br>";
        }
        //IF ELSE *****
        echo"<hr><h2>RESULTADO DEL IF ELSE</h2><br>";
        if($a>$b)
        {
            echo"El mayor es ", $a, "<br>";
        }
        else
        {
            echo"El mayor es ", $b, "<br>"; 
        }
        //IF ELSE IF *******
        echo"<hr><h2>ESTACIONES DEL AÑO</h2><br>";
        $estacion="primavera";
        if($estacion="invierno")
        {
        echo "Invierno, del 21 de diciembre al 20 de marzo";
        }
        else if($estacion="primavera")
        {
        echo"Primavera, del 21 de marzo al 20 de junio";
        }
        else if($estacion="verano")
        {
        echo"Verano, del 20 de junio al 21 de septiembre";
        }
        else if($estacion="Otoño")
        {
        echo"Otoño, del 21 de septiembre al 20 de diciembre";
        }
         ?>
    </body>
</html>