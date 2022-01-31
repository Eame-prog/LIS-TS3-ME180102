<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso a juegos mecanicos</title>
</head>
<body>
    <form method="post">
        <input  type="text" name="nombre">
        <br><br>
        <input type="date" name="fechanac">

        <br><br><P>
            El juego mecanico, asi como todas las maquinas posee <br>
            un posible riesgo a la segurad de los usuarios, y <br>
            el uso del juego mecanico es bajo responsabilidad de cada usuario;<br>
            <br>
            Acepta el uso de este juego mecanico, bajo su propia responsabilidad?
        </P>




        <input type="submit" name="Si" value="Si">
        <input type="submit" name="No" value="No">
    </form>
</body>
</html>
<?php

if(isset($_POST["Si"]) && !empty($_POST["Si"])){
        $fechaN=$_POST["fechanac"];
        $hoy =date("Y-m-d");
        $edad = date_diff(date_create($fechaN), date_create($hoy));
        $can=$edad->format('%y');
        
        $Nombre= $_POST["nombre"];

        if(($can>=0)&&($can<16)){
            echo $Nombre. ", <br> es menor de edad, no puede ingresar al juego mecanico";
        }else if(($can>=16)&&($can<65)){
            echo "Bienvenido, cumple con la edad para ingresar al juego mecanico...<br><br>"; 
            echo "Nombre del usuario: " .$Nombre. "<br>
                    Ticket N.: " .rand(0001,9999);
        }else{
            echo $Nombre. ", <br>es demasiado mayor para ingresar a este juego mecanico";
        }
    }
    else  if(isset($_POST["No"]) && !empty($_POST["No"])){
        echo "<br><br>Gracias por su comprension, que tenga un feliz dia";
    }
?>