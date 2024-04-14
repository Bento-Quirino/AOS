<?php

// Define variaveis
$alunos = [
    "Alan",
    "João",
    "Maria",
    "José",
    "Pedro",
    "Ana",
    "Carlos",
    "Mariana",
    "Fernanda",
    "Ricardo"
];

// Exibe um aluno específico
echo $alunos[0] . "\n"; // Alan

// Exibe todos os alunos
for ($i = 0; $i < count($alunos); $i++) {
    echo $alunos[$i] . "\n";
}

// Agora vamos ver sobre arrays de arrays (matrizes)
$jogoDaVelha = [
    ["X", "O", "X"], // Primeiro item da array maior
    ["O", "X", "O"], // Segundo item da array maior
    ["X", "O", "X"]  // Terceiro item da array maior
];

// Se eu quiser mostrar uma linha
echo $jogoDaVelha[0] . "\n"; // Array

// Se eu quiser mostrar um item específico de uma linha específica
echo $jogoDaVelha[0][0] . "\n"; // X, pois é a primeira linha e o primeiro item dela

// Vejamos outro exemplo
echo $jogoDaVelha[1][2] . "\n"; // O, pois é a segunda linha e o terceiro item dela