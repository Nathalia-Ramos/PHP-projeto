<?php function par($numero1, $numero2){

//declarando as variaveis
$impar = (double) 0;
$par = (double) 0;
$resultadoPar = (double) 0;




while ($par <= $impar) {
   if ($par % 2 == 0) {
       $resultadoPar = $resultadoPar . (' O resultado é par ' . $par . '' . '<br/>');
   }
    $par ++;  
}
return $resultadoPar;
}

function Impar($numero1, $numero2){

   //declarando as variaveis
  $impar = (double)$numero1;
  $par = (double) $numero2;
  $resultadoImpar = (double) 0;


  while ($impar <= $par) {
      if ($impar % 2 != 0) {
          $resultadoImpar = $resultadoImpar . (' O resultado é Impar' . $impar . '' . '<br/>');
 }
     $impar++; 
  }
  return $resultadoImpar;
}

?>