<?php

// Define variaveis
$idade = 20;
$nome = "Alan Turing";
$vacinado = true;


// Verifica se a idade é maior ou igual a 18
if ($idade >= 18) {
    echo "Maior de idade\n";
} else {
    echo "Menor de idade\n";
}

// Verifica se a pessoa é vacinada
if ($vacinado) {
    echo "Vacinado\n";
} else {
    echo "Não vacinado\n";
}
// Se $vacinado for true, exibe "Vacinado", senão exibe "Não vacinado"
// Isso seria a mesma coisa que fazer:
// if ($vacinado == true) {
//     echo "Vacinado\n";
// } else {
//     echo "Não vacinado\n";
// }

// Exemplo de uso do operador ternário  (if else em uma linha só)
echo $idade >= 18 ? "Maior de idade\n" : "Menor de idade\n";
// Se $idade for maior ou igual a 18, exibe "Maior de idade", senão exibe "Menor de idade"

// Verifica se a pessoa é vacinada e maior de idade
if ($vacinado && $idade >= 18) { // Note que usamos && para representar o operador lógico "E"
    echo "Vacinado e maior de idade\n";
} else {
    echo "Não vacinado ou menor de idade\n";
}

// Verifica se a pessoa é vacinada ou maior de idade
if ($vacinado || $idade >= 18) { // Note que usamos || para representar o operador lógico "OU"
    echo "Vacinado ou maior de idade\n";
} else {
    echo "Não vacinado e menor de idade\n";
}

// Verifica se a pessoa é vacinada e não é maior de idade
if ($vacinado && !($idade >= 18)) { // Note que usamos ! para representar o operador lógico "NÃO", para negar a condição ($idade >= 18)
    echo "Vacinado e menor de idade\n";
} else {
    echo "Não vacinado ou maior de idade\n";
}

// Métodos importantes para comparação
// == Igual
// != Difer
// > Maior
// < Menor
// >= Maior ou igual
// <= Menor ou igual
// && E
// || OU
// ! NÃO
// === Igual e do mesmo tipo
// !== Diferente ou de tipo diferente