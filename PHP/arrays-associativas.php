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

// Vejamos a principal diferença entre arrays comuns e arrays associativas
// Arrays comuns são indexadas por números, enquanto arrays associativas são indexadas por strings
// As vezes precisamos guardar informações de um aluno, como nome, idade, peso, altura, etc
// Para isso podemos usamos arrays associativas

// Arrays associativas
$pessoa = [
    "nome" => "Alan",
    "idade" => 20,
    "peso" => 70.5,
    "casado" => false,
    "filhos" => ["Filho 1", "Filho 2"]
];

// Perceba que ao invés de usarmos números como índices, usamos strings
// Além disso, antes guardavamos VÁRIOS nomes em um array, agora guardamos VÁRIOS dados de uma pessoa em um array
// Trazendo usablidades diferentes para cada tipo de array

// Exibindo texto com variáveis no terminal
echo 'Meu nome é ' . $pessoa["nome"] . ' e tenho ' . $pessoa["idade"] . ' anos.\n'; // Meu nome é Alan e tenho 20 anos, CONCATENAÇÃO
echo "Meu nome é {$pessoa["nome"]} e tenho {$pessoa["idade"]} anos.\n"; // Meu nome é Alan e tenho 20 anos, INTERPOLAÇÃO

// Vejamos como podemos acessar os filhos de nossa variável
echo "Meus filhos são " . $pessoa["filhos"][0] . " e " . $pessoa["filhos"][1] . "\n"; // Meus filhos são Filho 1 e Filho 2, CONCATENAÇÃO
echo "Meus filhos são {$pessoa["filhos"][0]} e {$pessoa["filhos"][1]}\n"; // Meus filhos são Filho 1 e Filho 2, INTERPOLAÇÃO

// Mas e se quisessemos guardar várias informações de vários alunos?
// Podemos fazer isso com arrays de arrays associativas

// Arrays de arrays associativas
$alunos = [
    [
        "nome" => "Alan",
        "idade" => 20,
        "peso" => 70.5,
        "casado" => false,
        "filhos" => ["Filho 1", "Filho 2"]
    ],
    [
        "nome" => "João",
        "idade" => 25,
        "peso" => 80.5,
        "casado" => true,
        "filhos" => ["Filho 3", "Filho 4"]
    ],
    [
        "nome" => "Maria",
        "idade" => 30,
        "peso" => 60.5,
        "casado" => true,
        "filhos" => ["Filho 5", "Filho 6"]
    ]
];

// Exibindo texto com variáveis no terminal
echo 'Meu nome é ' . $alunos[0]["nome"] . '\n'; // Meu nome é Alan e tenho 20 anos, CONCATENAÇÃO

// Listando todos os alunos
foreach ($alunos as $aluno) {
    echo "Nome: {$aluno["nome"]}, Idade: {$aluno["idade"]}, Peso: {$aluno["peso"]}, Casado: {$aluno["casado"]}, Filhos: {$aluno["filhos"][0]} e {$aluno["filhos"][1]}\n";
}