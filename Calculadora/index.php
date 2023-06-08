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
        <form action="./php/calculadora.php" method="get" id="form1">
            <div class="formulario">
                <label for="num1">Número 1</label>
                <input type="text" name="num1" id="num1" value="0">
                <label for="num2">Número 2</label>
                <input type="text" name="num2" id="num2" value="0">
            </div>
            <div class="botao">
                <input type="submit" value="+" name="somar" id="ad">
                <input type="submit" value="-" name="subtrair" id="sub">
                <input type="submit" value="×" name="multiplicar" id="multi">
                <input type="submit" value="/" name="dividir" id="div">
                <input type="submit" value="×^" name="elevar" id="exp">
                <input type="submit" value="√" name="acharRaiz" id="raz">
            </div>
        </form>
    </div>
</body>
</html>