<?php

    require_once ('par-impar/calculo-par.php');
    
    //ver se o botao foi clicado
    if(isset($_POST['btnCalcular'])){
 
    //recebendo os dados do formulario
    $par = $_POST['slcInicial'];
    $impar = $_POST ['sltFinal'];

 
    //variaveis

    $num1 = (double) null;
    $num2 = (double) null;
    $resultado = (double) 0;
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="titulo">
        Pares e Ímpares
    </div>
    <br>
    <div id="form">
        <form  name="frmpar" method="post"  action="parImpar.php">
            <div>
                <select name="slcInicial" id="">
                    <option value="selected">
                        <h1>Selecione um número inicial</h1>
                    </option>
                    <?php
                        $par = 0;
                        while($par <= 500) {
                            echo ('<option value="' . $par . '">' . $par . '</option>');      
                            $par++;
                            
                        }
                    ?>
                </select>
            </div>
            <br>    
            <div>
                <select name="sltFinal" id="">
                    <option value="selected">
                        <h1>Seleciona um número final</h1>
                    </option>
                    <?php
                        $impar = 100;
                        while($impar <= 1000) {
                            echo ('<option value="' . $impar . '">' . $impar . '</option>');      
                            $impar++;
                        }
                    ?>
                </select>
            </div>
            <div>
                <input type ="submit" name = "btnCalcular" value="Calcular">
            </div>
        </form>
 
    </div>
                      <?php  echo("$resultadoPar"); ?>
                      <?php  echo("$resultadoImpar"); ?>
                      
   
</body>
</html>
