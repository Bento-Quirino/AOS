<?php
// Chama a classe Pessoa
include('pessoa.php');

function separador() {
    echo "\n";
    echo "--------------------------------";
    echo "\n";
}

$pessoa = new Pessoa("Joana da Silva", "01/01/2000", 1.80);
echo $pessoa->getNome();
// Pula linha
separador();

$pessoa->setNome("João Pedro da Silva");
echo $pessoa->getNome();
separador();

$pessoa->setNome("João");