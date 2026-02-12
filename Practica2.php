<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 2 - Cálculo Decimal</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .resultado { font-weight: bold; color: navy; margin-top: 10px; }
    </style>
</head>
<body>

    <h1>Práctica 2: Cálculo de Expresiones Decimales</h1>

    <?php
        $valor = 56;
        $opcion = "cien"; 
        $divisor = 1;
        $texto_resultado = "";

        switch ($opcion) {
            case "uno":
                $divisor = 1;
                $texto_resultado = "Cincuenta y seis";
                break;
            case "cien":
                $divisor = 100;
                $texto_resultado = "cincuenta y seis centésimas";
                break;
            case "mil":
                $divisor = 1000;
                $texto_resultado = "cincuenta y seis milésimas";
                break;
            default:
                $opcion = "Error";
                $texto_resultado = "Opción no válida";
                break;
        }

        $resultado_decimal = $valor / $divisor;
    ?>
    
    <div class="resultado">
        <p>**$valor** = <?php echo $valor; ?>;</p>
        <p>**$opción** = "<?php echo $opcion; ?>"</p>
    </div>

    <p>El resultado de *<?php echo $valor; ?>* entre *<?php echo $opcion; ?>* es:</p>
    
    <p class="resultado">
        *<?php echo $resultado_decimal; ?>* (o, como lo pide el ejemplo, *<?php echo $texto_resultado; ?>*)
    </p>

</body>
</html>