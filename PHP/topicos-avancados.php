<?php
// Tópicos avançados em PHP
// PHP é uma linguagem de programação muito poderosa e versátil
// Neste arquivo vamos ver alguns tópicos avançados em PHP

// Operadores ternários
// Operadores ternários são uma forma simplificada de escrever um if/else
// Eles são muito úteis para simplificar o código
// Sintaxe: $variavel = (condição) ? valor_se_verdadeiro : valor_se_falso;
// Se a condição for verdadeira, a variável recebe o valor_se_verdadeiro
// Se a condição for falsa, a variável recebe o valor_se_falso
$idade = 18;
$maioridade = ($idade >= 18) ? 'Maior de idade' : 'Menor de idade';
echo $maioridade; // Imprime "Maior de idade" pois $idade é 18

// Null coalescing operator
// O null coalescing operator é um operador que permite verificar se uma variável é nula
// Se a variável for nula, ele retorna um valor padrão
// Sintaxe: $variavel = $valor ?? valor_padrao;
// Se $valor for nulo, $variavel recebe valor_padrao
// Se $valor não for nulo, $variavel recebe $valor
$nome = 'João';
$sobrenome = null;
$nome_completo = $nome . ' ' . ($sobrenome ?? 'Sem sobrenome');
echo $nome_completo; // Imprime "João Sem sobrenome" pois $sobrenome é nulo, teste trocando para $sobrenome = 'Silva';

// Funções como parâmetros
// Em PHP, funções podem ser passadas como parâmetros para outras funções
// Isso é muito útil para criar funções mais genéricas e reutilizáveis
// Vamos criar uma função chamada "operacao" que recebe dois números e uma função como parâmetro
// A função "operacao" chama a função passada como parâmetro com os dois números
function operacao($a, $b, $funcao) {
    // Pulando uma linha
    echo "\n";
    echo 'Operação:';
    echo "\n";
    echo $a . ' ' . $funcao . ' ' . $b . ' = '; // Imprime a operação a ser realizada
    return $funcao($a, $b); // Realiza a operação chamando a função passada como parâmetro com os dois números
}
function soma($a, $b) {
    return $a + $b; // Retorna a soma dos dois números
}
function subtracao($a, $b) {
    return $a - $b; // Retorna a subtração dos dois números
}
function divisao($a, $b) {
    return $a / $b; // Retorna a divisão dos dois números
}
function multiplicacao($a, $b) {
    return $a * $b; // Retorna a multiplicação dos dois números
}

// Chamando a função "operacao" com os números 10 e 5 e a função "soma"
echo operacao(10, 5, 'soma') . "\n"; // Imprime 15 pois 10 + 5 = 15
echo operacao(10, 5, 'subtracao') . "\n"; // Imprime 5 pois 10 - 5 = 5
echo operacao(10, 5, 'divisao') . "\n"; // Imprime 2 pois 10 / 5 = 2
echo operacao(10, 5, 'multiplicacao') . "\n"; // Imprime 50 pois 10 * 5 = 50



// Diferença entre aspas simples e duplas
// Em PHP, aspas simples e duplas são usadas para delimitar strings
// Aspas simples: o conteúdo é impresso literalmente, sem interpolação de variáveis
// Aspas duplas: o conteúdo é interpretado, permitindo interpolação de variáveis
$nome = 'João';
echo 'Olá, $nome!'; // Imprime "Olá, $nome!" pois aspas simples não interpretam variáveis
echo "\n"; // Pula uma linha, pois aspas duplas interpretam caracteres de escape
echo "Olá, $nome!"; // Imprime "Olá, João!" pois aspas duplas interpretam variáveis
echo '\n'; // Imprime '\n' pois aspas simples não interpretam caracteres de escape