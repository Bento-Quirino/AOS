
## Prova mensal de PHP - Segundo Bimestre

O foco dessa prova é testar os conhecimentos adquiridos durante o segundo bimestre da disciplina de AOS. A prova é composta por 3 questões, e o aluno deve responder todas elas, sendo o conteúdo:

- Lógica de programação
- PHP
- Arrays
- Funções
- Estruturas de controle
- Estruturas de repetição
- Arrays associativos
- Arrays de arrays associativos (matrizes)

### Questão 1

Com base em uma array de alunos, crie uma função `calculateFinalScore()` que recebe uma array associativo e que retorne a média final de um aluno. A média final é a média da escola, sendo 10% de cada atitudinal, 30% da mensal e 50% da bimestral.

```php
$alunos = [
    [
        'nome' => 'João',
        'atitudinal' => 7.0,
        'mensal' => 8.0,
        'bimestral' => 9.0
    ],
    [
        'nome' => 'Maria',
        'atitudinal' => 8.0,
        'mensal' => 9.0,
        'bimestral' => 10.0
    ],
    [
        'nome' => 'José',
        'atitudinal' => 6.0,
        'mensal' => 7.0,
        'bimestral' => 8.0
    ]
];
```

### Questão 2

Com base na mesma array de alunos, crie uma função `findTopFiveStudents()` que retorne uma array de arrays associativos com os 5 alunos com maior média final.

### Questão 3

Um usuário tenta realizar um cadastro em seu sistema, mas o sistema deve validar os campos que foram enviados a função deve retornar `TRUE` caso o cadastro seja válido e `FALSE` caso contrário. CRIE UMA FUNÇÃO `validarCadastro` que receba um array associativo com os seguintes campos e que faça as seguintes validações:

- Nome: Deve conter no mínimo 5 caracteres e não pode conter números;
- Email: Deve ser um email válido, contendo `@` e `.`, e **NÃO PODE ESTAR NA ARRAY ACIMA**;
- Senha: Deve conter no mínimo 8 caracteres e no máximo 16 caracteres;
- Confirmação de senha: Deve ser igual a senha.

```php
$usuario = [
    'nome' => 'João',
    'email' => 'joaoemail.com',
    'senha' => '12345678',
    'confirmacao_senha' => '12345111'
];
```
