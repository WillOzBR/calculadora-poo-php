<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="cabecalho">
        <h1>Calculadora</h1>
        <h1>William Cellegin</h1>
    </div>
    <div class="formulario">
        <form action="./php/calculadora.php" method="get">
            <label for="num1">Número 1</label>
            <input type="text" name="num1" id="num1">
            <label for="num2">Número 2</label>
            <input type="text" name="num2" id="num2">
            <input type="submit" value="+" name="somar">
            <input type="submit" value="-" name="subtrair">
            <input type="submit" value="*" name="multiplicar">
            <input type="submit" value="/" name="dividir">
        </form>
    </div>
</body>
</html>