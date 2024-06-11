Filtre todos os usuários que possuem status ativo.
Após isso procure pelas encomendas que os usuários estão pesquisando:
- João quer saber o status de seu pedido com código de rastreamento ABC-ASC-123
- José quer saber o status de seu pedido com código de rastreamento GGG-CCC-980

Crie uma função `findOrderStatus()` que receba a array de usuários e o código de rastreamento e retorne a encomenda que o usuário está pesquisando, com uma mensagem parecida com a seguinte:
```
João, o status de seu pedido "Camiseta" com código de rastreamento ABC-ASC-123 é: em trânsito.
```

```php
$usuarios = [
    [
        'nome' => 'João',
        'email' => 'email@email.com',
        'status' => 'ativo',
        'encomendas' => [
            [
                'nome' => 'Camiseta',
                'codigoRastramento' => 'ABC-ASC-123',
                'status' => 'em trânsito'
            ]
        ]
    ],
    [
        'nome' => 'Maria',
        'email' => 'maria@email.com',
        'status' => 'inativo',
        'encomendas' => [
            [
                'nome' => 'Teclado',
                'codigoRastramento' => 'XYZ-ASC-111',
                'status' => 'entregue'
            ]
        ]
    ],
    [
        'nome' => 'José',
        'email' => 'jose@email.com',
        'status' => 'ativo',
        'encomendas' => [
            [
                'nome' => 'Monitor',
                'codigoRastramento' => 'GGG-CCC-980',
                'status' => 'barrado'
            ],
            [
                'nome' => 'Computador',
                'codigoRastramento' => 'GGG-CCC-981',
                'status' => 'entregue'
            ]
        ]
    ],
    [
        'nome' => 'Pedro',
        'email' => 'pedro@email.com',
        'status' => 'inativo',
        'encomendas' => [
            [
                'nome' => 'Fone de ouvido',
                'codigoRastramento' => 'KLI-CIC-981',
                'status' => 'entregue'
            ]
        ]
    ],
    [
        'nome' => 'Ana',
        'email' => 'ana@email.com',
        'status' => 'ativo',
        'encomendas' => [
            [
                'nome' => 'Lanterna',
                'codigoRastramento' => 'FFF-CCC-999',
                'status' => 'entregue'
            ]
        ]
    ]
];
```

