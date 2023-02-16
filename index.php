<?php

// idade
// $idade = 19;
// $numeroDePessoas = 1;

// echo "Você só pode entrar se tiver a partir de 18 anos ou ";
// echo '<br>';
// echo "a partir de 16 anos acompanhado";
// echo '<br>';


// if ($idade >= 18) {
//     echo "Você tem $idade anos. Pode entrar sozinho.";
// } else if ($idade >= 16 && $numeroDePessoas > 1) {
//     echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
// } else
//     echo "Você só tem $idade anos. Você não pode entrar";
// echo '<br>';


// echo '<br>';
// echo "Adeus!";

//CONTADOR COM FOR

// for ($contador=1; $contador <=15; $contador++) {
//     echo "#$contador" . '<br>';
// }

// for ($contador=1; $contador <=100; $contador++) {
//     if ($contador %2 !=1 ) {
//     echo "$contador" . '<br>';
//     }
// }


// CALCULADORA

// $valor = 3;

// for ($i=1; $i <=10; $i++) {
//     echo "$valor x $i =" . $valor * $i . '<br>';

// }


$altura = 1.82;
$peso = 90;
$imc = $peso / ($altura ** 2);

if ($imc <= 18.5) {
    echo "Magreza";
}elseif ($imc <= 24.9) {
    echo "Normal";
}elseif ($imc <= 29.9) {
    echo "Sobre peso";
}else {
    echo "obesidade";
}