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

$notasAlunos = [
    10,
    6,
    8,
    7,
    9,
    5,
    1,
    3,
    4
];

// Exibe DE TODOS ALUNOS com foreach
foreach ($alunos as $aluno) { // Para cada aluno em $alunos, faça
    echo "$aluno\n"; // $aluno é a variável que representa o valor atual do array
}

// Exibe DE TODOS ALUNOS com for (utlizando o índice/posição/contador)
for ($i = 0; $i < count($alunos); $i++) { // Para $i com valor inicial 0, enquanto $i for menor que tamanho do array $alunos, faça
    echo "$alunos[$i]\n"; // $alunos[$i] é o valor do array na posição $i, se $i for 0, exibe o $alunos[0]
}

// For com um if para exibir apenas os alunos com nota maior ou igual a 7
for ($i = 0; $i < count($alunos); $i++) { // Para $i com valor inicial 0, enquanto $i for menor que tamanho do array $alunos, faça
    if ($notasAlunos[$i] >= 7) { // Se a nota do aluno na posição $i for maior ou igual a 7
        echo "$alunos[$i]\n"; // Exibe o nome do aluno
    }
}

// EXPLICANDO O COUNT()
// count() é uma função que retorna a quantidade de elementos de um array
// Exemplo:
// $alunos = ["Alan", "João", "Maria"];
// echo count($alunos); // Exibe 3
