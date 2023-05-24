<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora2</title>
</head>
<body>
    <div class="cabecalho">
        <h1>Calculadora</h1>
        <h3>William Cellegin</h3>
    </div>
    <div class="resultado">
        <?php
         require_once "./Calc.php";
         $calculadora = new Calc($_GET['num1'],$_GET['num2']);
         
         print("O Valor de a é {$calculadora->getA()}<br>");
         print("O Valor de b é {$calculadora->getB()}<br>");
         $calculadora->somar($calculadora->getA(), $calculadora->getB());
        ?>
    </div>
</body>
</html>