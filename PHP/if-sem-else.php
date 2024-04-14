<?php

// Por que usar if sem else?
// O else é opcional, você pode usar apenas o if
// Se você não precisa de um bloco de código para o caso contrário, não é necessário usar o else
// Exemplo:
$idade = 20;

if ($idade >= 18) {
    echo "Maior de idade\n";
} else if ($idade >= 0) {
    echo "Menor de idade\n";
} else {
    echo "Idade inválida\n";
}

// Nesse caso, se a idade for maior ou igual a 18, exibe "Maior de idade"
// MAS se a idade for maior ou igual a 0, exibe "Menor de idade"
// Senão, exibe "Idade inválida"

// Mas podemos usar o if com return para simplificar a lógica
// Deixando o else de lado, e melhorando a legibilidade

function verificaIdade($idade) {
    if ($idade >= 18) {
        return "Maior de idade\n";
    }

    if ($idade >= 0) {
        return "Menor de idade\n";
    }

    return "Idade inválida\n";
}

echo verificaIdade(20);