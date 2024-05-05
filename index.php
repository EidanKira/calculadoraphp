<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculadora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <p>&nbsp</p>
    
    <form action="" name="form1" method="post">
    <p>
        <label for="num1"></label>
        <input type="text" name="num1" id="num1">
        <label for="num2"></label>
        <input type="text" name="num2" id="num2">
        <label for="operacion"></label>
        <select name="operacion" id="operacion">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicacion</option>
            <option>Division</option>
            <option>Modulo</option>
            <option>Incremento</option>
            <option>Decremento</option>
        </select>
    </p>

    <p>
        <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
    </p>

    </form>
    <p>&nbsp</p>


    <?php 
        if(isset($_POST["button"])) {
            $numero1 = $_POST["num1"];
            $numero2 = $_POST["num2"];
            $operacion = $_POST["operacion"];

            if(!strcmp("Suma",$operacion)) {
                echo "El resultado es: " . ($numero1 + $numero2);
            }
            if(!strcmp("Resta",$operacion)) {
                echo "El resultado es: " . ($numero1 - $numero2);
            }
            if(!strcmp("Multiplicacion",$operacion)) {
                echo "El resultado es: " . ($numero1 * $numero2);
            }
            if(!strcmp("Division",$operacion)) {
                echo "El resultado es: " . ($numero1 / $numero2);
            }
            if(!strcmp("Modulo",$operacion)) {
                echo "El resultado es: " . ($numero1 % $numero2);
            }
            if(!strcmp("Incremento",$operacion)) {
                $numero1++;
                $resultado=$numero1;
                echo "El resultado es: $resultado";
            }
            if(!strcmp("Decremento",$operacion)) {
                $numero1--;
                $resultado=$numero1;
                echo "El resultado es: $resultado";
            }

        }
    ?>

<!-- Otra forma con php -->
<?php /*
        if(isset($_POST["button"])) {
            $numero1 = $_POST["num1"];
            $numero2 = $_POST["num2"];
            $operacion = $_POST["operacion"];
        }

        calcular($operacion);

        function calcular($op) {
            if(!strcmp("Suma",$op)) {
                global $numero1;
                global $numero2;
                echo "El resultado es: " . ($numero1 + $numero2);
            }
            if(!strcmp("Resta",$op)) {
                global $numero1;
                global $numero2;

                $resultado = $numero1 - $numero2
                echo "El resultado es: $resultado");
            }
            if(!strcmp("Multiplicacion",$op)) {
                global $numero1;
                global $numero2;
                echo "El resultado es: " . ($numero1 * $numero2);
            }
            if(!strcmp("Division",$op)) {
                global $numero1;
                global $numero2;
                echo "El resultado es: " . ($numero1 / $numero2);
            }
            if(!strcmp("Modulo",$op)) {
                global $numero1;
                global $numero2;
                echo "El resultado es: " . ($numero1 % $numero2);
            }
            if(!strcmp("Incremento",$op)) {
                global $numero1;
                $numero1++;
                $resultado=$numero1;
                echo "El resultado es: $resultado";
            }
            if(!strcmp("Decremento",$op)) {
                global $numero1;
                $numero1--;
                $resultado=$numero1;
                echo "El resultado es: $resultado";
            }
        }
    */?>


</body>
</html>