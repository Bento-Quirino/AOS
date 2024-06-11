# Arrays associativas

1. Crie uma função que receba uma array associativa como a abaixo, e se a data de pagamento for menor que `02/02/2024`, mude o campo `pago` para `true`, senão, mude para `false`. **MOSTRE NO TERMINAL O ARRAY COM AS ALTERAÇÕES**.:

```php
    [
        "produto" => "Camisa DnD - Tamanho M",
        "data_pagamento" => "01/02/2024",
        "pago" => false
    ]
```

2. Crie uma função que recebe uma array associativa como a abaixo e faça a **MÉDIA** das notas e mostre no terminal.

```php
    [
        "nome" => "João",
        "notas" => [
            "prova1" => 8,
            "prova2" => 7,
            "prova3" => 6
            "prova4" => 9
        ]
    ]
```

3. Crie uma função que receba uma array de arrays associativos, e mostre, o nome e a idade de cada aluno
```php
    [
        [
            "nome" => "João",
            "idade" => 20
        ],
        [
            "nome" => "Maria",
            "idade" => 22
        ],
        [
            "nome" => "José",
            "idade" => 21
        ]
    ]
```

4. Crie uma função que verifique um cadastro de usuário onde você deve verificar:
- Se o nome do usuário é maior que 3 caracteres
- Se a idade é maior que 18
- Se o email tem mais que 10 caracteres
- Se a senha tem mais que 8 caracteres
- Se ele já não está cadastrado (se o email existe na array de usuários)
E se a validação estiver correta, insira na array de usuários, senão, mostre no terminal com erro.

```php
    [
        [
            "nome" => "João",
            "idade" => 20,
            "email" => "email@email.com",
            "senha" => "12345678"
        ],
        [
            "nome" => "Guilherme",
            "idade" => 17,
            "email" => "meu.email@email.com",
            "senha" => "abc12312312"
        ]
    ]
