<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style2.css">
    <title>EXERCICIO 2</title>
</head>
<body>
    <div class="container">
        <form action="exer2.php" method="POST">
            <h1>Calculadora</h1>
            <br><br>
            <label for="v1">Valor 1</label>
            <input id="v1" name="v1" type="number">
            <br><br>
            <label for="v2">Valor 2</label>
            <input id="v2" name="v2" type="number">
            <br><br>           
            <input type="radio" id="+" name="calc" value="adi">
            <label for="+">+</label>
            <br><br>
            <input type="radio" id="-" name="calc" value="sub">
            <label for="-">-</label>
            <br><br>
            <input type="radio" id="*" name="calc" value="mult">
            <label for="*">x</label>
            <br><br>
            <input type="radio" id="/" name="calc" value="div">
            <label for="/">/</label>
            <br><br>
            <input type="submit" name="checar" value="Checar">
        </form>
    </div>
    
</body>
</html>