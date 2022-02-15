<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="../index.php">

    

    
    <title>Document</title>
</head>
<body>
    <div id="menu-hamburguer">
        <div id="menu" onclick= "onClickMenu()">
            <div id="menu1" class="menu"></div>
            <div id="menu2" class="menu"></div>
            <div id="menu3" class="menu"></div>

        </div>
        <ul class="nav" id="nav">
           <li><a href="../tabuada/index.php">Tabuada</a></li>
           <li><a href="../php-aula-02/media.php">Média</a></li>
           <li><a href="../function-php/calculadora_simples.php">Calculadora</a></li>
           <li><a href="../par-impar/parImpar.php">Pares e Ímpares</a></li>
        </ul>

    </div>
    <div class="menu-bg" id="menu-bg"></div>
    <script src="menu.js" defer></script>
</body>
</html>
