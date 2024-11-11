# Projetos de API em Laravel - Desenvolvimento de Sistemas

**Objetivo:** Criar uma API RESTful usando Laravel para manipulação de dados entre diferentes entidades, com autenticação e documentação completa.  
**Grupos:** Até 5 integrantes

## Instruções Gerais
- Desenvolver uma API RESTful em Laravel.
- Implementar 4 entidades com relacionamento entre elas (ao menos um relacionamento de 1:N).
- Utilizar autenticação com Sanctum.
- Uma tabela deve incluir um campo para imagem.
- Documentar completamente os endpoints no Insomnia, com todas as rotas e métodos detalhados.

## Projetos

| Projeto       | Entidade Principal | Entidade Secundária | Entidade Terciária | Quarta Entidade            | Requisitos Específicos                                           |
|---------------|--------------------|---------------------|--------------------|-----------------------------|-------------------------------------------------------------------|
| **Biblioteca** | Livros            | Autores            | Alunos            | Aluguéis                    | Alunos podem alugar livros; Livros estão associados a Autores.     |
| **E-commerce** | Produtos          | Categorias         | Vendedores        | Pedidos                     | Produtos possuem categorias; Pedidos são associados a usuários e produtos.|
| **Restaurante**| Cardápio          | Pratos             | Ingredientes      | Pedidos                     | Pratos com ingredientes; Pedidos têm pratos e clientes.             |
| **Sistema Escolar** | Alunos        | Notas              | Professores       | Disciplinas                 | Alunos têm disciplinas e notas associadas; Professores lecionam disciplinas.|
| **Blog**       | Posts             | Comentários        | Autores           | Categorias                  | Posts relacionados a autores; Categorias para classificação dos posts.|
| **Sistema Médico** | Pacientes      | Consultas          | Médicos           | Exames                      | Consultas para pacientes; Médicos podem solicitar exames.         |
| **Eventos**    | Eventos           | Participantes      | Localizações      | Ingressos                   | Eventos têm participantes e ingressos associados.                 |
| **Cinema**     | Filmes            | Sessões            | Salas             | Ingressos                   | Sessões em salas; Ingressos estão associados a filmes e sessões.   |
| **Imobiliária**| Imóveis           | Proprietários      | Clientes          | Aluguéis                    | Clientes visualizam imóveis e podem alugar; Aluguéis registram transações.|
| **Biblioteca Virtual**| E-books      | Autores           | Usuários          | Downloads                   | Usuários baixam e-books; Downloads registrados.                  |

## Estrutura do Projeto

### CRUDs
Cada grupo deve desenvolver 4 CRUDs independentes e interligados. Exemplo:
- **Biblioteca:** CRUD para Alunos, CRUD para Livros, CRUD para Autores, CRUD para Aluguéis.
- Alunos podem alugar Livros, e Livros têm relação com Autores.

### Autenticação
Implementar autenticação utilizando **Laravel Sanctum** para garantir a segurança dos endpoints.

### Imagens
Em cada projeto, ao menos uma tabela deve ter um campo para imagem. Por exemplo:
- **E-commerce:** Imagens para os produtos.
- **Cinema:** Imagens para filmes.

### Documentação no Insomnia
Todos os endpoints devem ser documentados usando Insomnia, incluindo:
- Métodos (GET, POST, PUT, DELETE)
- Parâmetros de requisição e resposta
- Descrição de cada endpoint
- Exemplos de requisição e resposta

## Critérios de Avaliação
1. **Funcionamento dos CRUDs e Relacionamentos** - 30%
2. **Implementação da Autenticação com Sanctum** - 20%
3. **Uso de Imagem na Tabela Definida** - 20%
4. **Documentação Completa no Insomnia** - 30%

**Data de Entrega:** 15/11/2024

Boa sorte a todos!
