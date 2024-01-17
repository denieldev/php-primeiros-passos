<?php

$idade = 17;
$numeroDePessoas = 3;
$idadeAcompanhante = 14;

echo "Você só pode entrar se tiver a partir de 18 anos." .PHP_EOL;

if ($idade >= 18) {
  echo "Você tem $idade anos. Pode entrar sozinho" .PHP_EOL;
  echo 'pode entrar' .PHP_EOL;
} 
elseif ($numeroDePessoas > 1 && $idadeAcompanhante >= 18) {
      echo "você só tem $idade anos." .PHP_EOL;
      echo "Você está acompanhado por algum responsável?" .PHP_EOL;
      echo "você só pode entrar com um acompanhante maior de idade!" .PHP_EOL;
      echo 'pode entrar' .PHP_EOL;
      echo 'aproveitem o ambiente!';
     } 
else {
  echo "infelizmente não poderá entrar sem acompanhante maior de idade!";
}




 

