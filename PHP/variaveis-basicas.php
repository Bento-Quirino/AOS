<?php

// Crianção de variáveis

$nome = "Alan"; // String
$idade = 20; // Inteiro
$peso = 70.5; // Float
$casado = false; // Boolean
$filhos = ["Filho 1", "Filho 2"]; // Array de strings

// Exibindo texto com variáveis no terminal
echo 'Meu nome é ' . $nome . ' e tenho ' . $idade . ' anos.\n'; // Meu nome é Alan e tenho 20 anos, CONCATENAÇÃO
echo "Meu nome é $nome e tenho $idade anos.\n"; // Meu nome é Alan e tenho 20 anos, INTERPOLAÇÃO

// Pulando linha
echo "\n";