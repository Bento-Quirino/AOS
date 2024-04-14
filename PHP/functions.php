<?php

// Funções em php
// Funções são blocos de código que podem ser chamados e executados em qualquer parte do código
// Funções são muito úteis para reutilização de código
// Funções são definidas com a palavra reservada "function" seguida do nome da função e dos parênteses
// Funções podem receber parâmetros e retornar valores com a palavra reservada "return"

// Criando uma função chamada "hello" que imprime "hello world"
function hello() {
    echo 'hello world';
}
hello(); // Chamando a função hello que imprime "hello world"

// Função separadora de linhas
function separador() {
    echo "\n-------------------------\n";
    // Imprime uma linha de separação
    // E pula uma linha
}

// Criando uma função chamada "soma" que recebe dois parâmetros e retorna a soma dos dois
function soma($a, $b) {
    return $a + $b; // Retornando a soma dos dois parâmetros
}

// Chamando a função soma e passando dois parâmetros
separador();
echo soma(2, 3); // Imprime 5 pois o return substitui a chamada da função no local onde ela foi chamada

// Funções podem ter valores padrão para os parâmetros
// Se um valor padrão for definido para um parâmetro, ele não precisa ser passado ao chamar a função
function subtracao($a, $b = 1) {
    return $a - $b;
}
separador();
echo subtracao(1,2); // Imprime -1 pois 1 - 2 = -1
separador();
echo subtracao(5); // Imprime 4 pois 5 - 1 = 4, sendo que 1 é o valor padrão do parâmetro $b ja que ele não foi passado
separador();

// Vamos trabalhar com parametros mais complexos
// Criando uma função chamada "media" que recebe um array de números e retorna a média deles
function media($numeros) {
    $soma = 0; // Inicializando a variável $soma com 0

    foreach($numeros as $numero) { // Percorrendo o array $numeros
        $soma += $numero; // Somando o valor de $numero a $soma
    }

    return $soma / count($numeros); // Retornando a média dos números (soma dos números dividido pela quantidade de números)
}

// Chamando a função media e passando um array de números
echo media([1,2,3,4,5]); // Imprime 3 pois (1+2+3+4+5)/5 = 3
separador();
// Seria o mesmo que criar uma variável $numeros = [1,2,3,4,5]; e passar ela como parametro media($numeros);

// Funções podem retornar qualquer tipo de dado
// Criando uma função chamada "ehPar" que recebe um número e retorna true se ele for par e false se ele for ímpar
function ehPar($numero) {
    if ($numero % 2 == 0) { // Se o resto da divisão de $numero por 2 for 0, é par
        return true; // Retorna true
    }

    // Senão por padrão retorna false, por não ser par
    return false; // Retorna false
}
separador();

// Chamando a função ehPar e passando um número 
echo ehPar(2) ? 'É par' : 'É ímpar'; // Imprime "É par" pois 2 é par usando operador ternário

separador();

// Passando uma array de pessoas
$pessoas = [
    ['nome' => 'João', 'idade' => 20],
    ['nome' => 'Maria', 'idade' => 30],
    ['nome' => 'José', 'idade' => 40],
    ['nome' => 'Ana', 'idade' => 50],
];

// Criando uma função chamada procuraNome que busca o nome numa array de pessoas
function procuraNome($nome, $pessoas) {
    foreach($pessoas as $pessoa) { // Percorrendo a array de pessoas
        if ($pessoa['nome'] == $nome) { // Se o nome da pessoa for igual ao nome passado
            return $pessoa; // Retorna a pessoa
        }
    }

    return null; // Se não encontrar ninguém, retorna null
}

// Chamando a função procuraNome e passando um nome
var_dump(procuraNome('Maria', $pessoas)); // Imprime o array da pessoa Maria