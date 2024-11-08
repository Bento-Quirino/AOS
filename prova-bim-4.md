# Ideias de Temas para Projeto de Arquitetura Orientada a Serviços

Escolha um dos temas abaixo para o desenvolvimento do backend em Laravel, implementando as relações, sistema de storage e autenticação conforme os requisitos.

---

## 1. Livros e Autores
   - **Tabelas**: `authors` e `books`
   - **Descrição**: Cada autor pode ter vários livros associados. Ao fazer um `GET` em um autor, retorna informações sobre o autor e todos os livros dele.
   - **Storage**: Cada livro armazena a imagem de sua capa no storage.

## 2. Produtos e Categorias
   - **Tabelas**: `categories` e `products`
   - **Descrição**: Cada produto pertence a uma categoria específica. Ao fazer um `GET` em uma categoria, retorna informações da categoria e os produtos relacionados.
   - **Storage**: Cada produto armazena a imagem do produto no storage.

## 3. Professores e Cursos
   - **Tabelas**: `teachers` e `courses`
   - **Descrição**: Cada professor pode ministrar vários cursos. Ao fazer um `GET` em um professor, retornam todos os cursos que ele ministra.
   - **Storage**: Cada curso armazena uma imagem ilustrativa no storage.

## 4. Clientes e Pedidos
   - **Tabelas**: `customers` e `orders`
   - **Descrição**: Cada cliente pode fazer vários pedidos. Ao fazer um `GET` em um cliente, retorna o clinete histórico de pedidos feitos por ele.
   - **Storage**: Cada pedido pode conter uma imagem da nota fiscal no storage.

## 5. Hospitais e Pacientes
   - **Tabelas**: `hospitals` e `patients`
   - **Descrição**: Cada hospital possui vários pacientes. Ao fazer um `GET` em um hospital, retorna o hospital e todos os pacientes relacionados.
   - **Storage**: Cada paciente pode ter uma imagem do prontuário médico no storage.

## 6. Eventos e Participantes
   - **Tabelas**: `events` e `participants`
   - **Descrição**: Cada evento pode ter vários participantes. Ao fazer um `GET` em um evento, retorna o evento todos os participantes inscritos.
   - **Storage**: Cada participante pode ter uma imagem de seu crachá no storage.

## 7. Projetos e Tarefas
   - **Tabelas**: `projects` e `tasks`
   - **Descrição**: Cada projeto possui várias tarefas. Ao fazer um `GET` em um projeto, retorna o projeto e todas as tarefas associadas.
   - **Storage**: Cada tarefa pode armazenar uma imagem ou diagrama no storage.

## 8. Autores e Artigos
   - **Tabelas**: `authors` e `articles`
   - **Descrição**: Cada autor pode ter vários artigos publicados. Ao fazer um `GET` em um autor, retorna o autor e todos os artigos escritos por ele.
   - **Storage**: Cada artigo pode ter uma imagem de destaque no storage.

---

# Prova Prática de Arquitetura Orientada a Serviços

# GRUPOS DE ATÉ 6 PESSOAS

# ENVIAR O LINK DO GITHUB COM PROJETO NO TEAMS PARA O PROFESSOR

---

## Objetivo

Criar um backend em Laravel que demonstre o uso de Arquitetura Orientada a Serviços (SOA) com os seguintes requisitos:

- Uso de no mínimo duas tabelas com relacionamento
- Implementação de sistema de storage para armazenamento de arquivos
- Uma das tabelas deve armazenar o link de uma imagem salva no storage
- Autenticação completa nas rotas
- Implementação das rotas de autenticação: login, cadastro e logout
- Configuração de um ambiente de testes com Insomnia para todas as rotas

---

## Requisitos do Projeto

1. **Estrutura de Banco de Dados**
   - Crie no mínimo duas tabelas que possuam relacionamento (por exemplo, `users` e `posts`).
   - Defina uma relação entre essas tabelas (ex: `User` pode ter vários `Posts`).
   - Garanta que uma das tabelas armazene o link de uma imagem no campo `image_url` ou similar.

2. **Sistema de Storage**
   - Configure o sistema de storage no Laravel para que permita salvar e recuperar arquivos.
   - Ao criar um novo registro na tabela com o campo de `image_url`, faça o upload de uma imagem para o storage e salve o link de acesso ao arquivo.

3. **Autenticação**
   - Configure a autenticação no Laravel usando `sanctum` ou `passport` para proteger as rotas.
   - Adicione rotas autenticadas para `login`, `cadastro` e `logout`.
   - Exija autenticação para todas as rotas exceto `login` e `cadastro`.

4. **Rotas e Funcionalidades**
   - **Login**: Crie uma rota `POST /login` que autentique o usuário e retorne um token de acesso.
   - **Cadastro**: Crie uma rota `POST /register` que registre um novo usuário.
   - **Logout**: Crie uma rota `POST /logout` que invalide o token de acesso do usuário autenticado.
   - **CRUD**: Implemente rotas para criação, leitura, atualização e exclusão (CRUD) dos registros das tabelas principais. Garanta que apenas usuários autenticados possam acessar essas rotas.

5. **Testes com Insomnia**
   - Importe todas as rotas no Insomnia e configure chamadas para todas as operações do sistema.
   - Para cada rota, configure um teste de requisição e autenticação, verificando os dados esperados.

---

## Critérios de Avaliação

- **Estrutura do Banco de Dados**: Implementação correta das tabelas e relacionamentos.
- **Sistema de Storage**: Configuração correta do sistema de storage e do campo de link de imagem.
- **Autenticação**: Implementação correta das rotas de autenticação e proteção das rotas privadas.
- **Rotas e Funcionalidades**: Funcionamento das rotas de login, cadastro, logout e CRUD.
- **Testes com Insomnia**: Testes completos e funcionais no Insomnia para todas as rotas.
  
---

Boa sorte e bom trabalho!


Escolha um desses temas e desenvolva o backend com as funcionalidades e requisitos especificados.
