<?php

// Crie uma função que verifica se a pessoa passou ou não de ano
// Se a pessoa tiver passado de ano, a função deve retornar "Passou de ano!"
// Se a pessoa não tiver passado de ano, a função deve retornar "Não passou de ano!"
// SE HOUVER 3 OU MAIS NOTAS ABAIXO DE 6, A PESSOA NÃO PASSOU DE ANO

// Use a array associativa abaixo para testar a função:
$pessoa = [
    'nome' => 'João',
    'notas' => [
        'matematica' => 5,
        'portugues' => 6,
        'historia' => 7,
        'filosofia' => 10,
        'sociologia' => 9,
        'fisica' => 5,
        'quimica' => 1
    ]
];


// Crie uma função que recebe um array de pessoas e retorna a média de idade delas
// A função deve receber um array de arrays associativos com o nome e a idade de cada pessoa
// A função deve retornar a média de idade das pessoas
// Use o array de pessoas abaixo para testar a função:
$pessoas = [
    ['nome' => 'João', 'idade' => 20],
    ['nome' => 'Maria', 'idade' => 30],
    ['nome' => 'José', 'idade' => 40],
    ['nome' => 'Ana', 'idade' => 50],
];
// A saída deve ser 35, pois (20+30+40+50)/4 = 35


// Crie uma função que recebe um array de pessoas e retorna a pessoa mais velha
// A função deve receber um array de arrays associativos com o nome e a idade de cada pessoa, use o array de pessoas acima


// Crie uma função que verifica se uma senha é forte ou não
// A função deve receber uma senha e retornar true se ela for forte e false se ela for fraca
// Uma senha é forte se tiver pelo menos 8 caracteres, uma letra maiúscula, uma letra minúscula e um número
// Use a senha abaixo para testar a função:
$senha = 'SenhaForte123';


// Crie uma função que recebe uma array de posts e retorna a quantidade de posts de cada autor
// A função deve receber um array de arrays associativos com o post e o autor de cada post
// A função deve retornar um array associativo com a quantidade de posts de cada autor
// Use o array de posts abaixo para testar a função:
$posts = [
    [
        'post' => 'Estou aprendendo PHP', 
        'autor' => 'João'
    ],
    [
        'post' => 'Aprendi HTML, CSS e JavaScript', 
        'autor' => 'João'
    ],
    [
        'post' => 'Estou trabalhando em um projeto', 
        'autor' => 'Maria'
    ],
    [
        'post' => 'Estou estudando para o ENEM', 
        'autor' => 'José'
    ],
    [
        'post' => 'Fiz um curso de PHP', 
        'autor' => 'Maria'
    ],
    [
        'post' => 'Aprendi PHP', 
        'autor' => 'João'
    ],
    [
        'post' => 'Estou trabalhando em um site', 
        'autor' => 'João'
    ],
    [
        'post' => 'Terminei o curso de PHP', 
        'autor' => 'Maria'
    ]
];

// A saída deve ser:
// [
//     'João' => 4,
//     'Maria' => 3,
//     'José' => 1
// ]