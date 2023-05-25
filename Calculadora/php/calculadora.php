<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculadora2</title>
</head>
<body>
    <div class="cabecalho">
        <h1>Calculadora</h1>
        <h1>William Cellegin</h1>
    </div>
    <div class="resultado">
        <?php
         require_once "./Calc.php";
         $calculadora = new Calc($_GET['num1'],$_GET['num2']);
         $soma = $_GET['somar'];
         $sub = $_GET['subtrair'];
         $mult = $_GET['multiplicar'];
         $div = $_GET['dividir'];
         
         print("O Valor de a é {$calculadora->getA()}<br>");
         print("O Valor de b é {$calculadora->getB()}<br>");
         if ($soma){
         $calculadora->somar($calculadora->getA(), $calculadora->getB());
         } else if{
         $calculadora->subtrair($calculadora->getA(), $calculadora->getB());
         } 
         $calculadora->multiplicar($calculadora->getA(), $calculadora->getB());
         $calculadora->dividir($calculadora->getA(), $calculadora->getB());
        ?>
    </div>
</body>
</html>