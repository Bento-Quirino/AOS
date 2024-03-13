## RESUMO HTTP

### HTTP (Hypertext Transfer Protocol)

**HTTP (Hypertext Transfer Protocol)** é o protocolo usado para enviar e receber informações na web. Ele define a estrutura de mensagens e como os clientes (como navegadores) e servidores se comunicam.

### Métodos HTTP

Existem vários ***MÉTODOS*** HTTP que especificam a ação a ser realizada em um recurso identificado. Alguns dos métodos mais comuns são:

- **GET**: solicita a representação de um recurso específico. É usado para recuperar dados.
- **POST**: envia dados para o servidor para processamento. É usado para enviar dados para um recurso, como enviar um formulário online.
- **PUT**: atualiza um recurso específico com os dados fornecidos. É usado para atualizar informações existentes.
- **DELETE**: remove um recurso específico. É usado para excluir dados.

##

### Exemplo de Pedido HTTP

#### GET
> Método: `GET`
> 
> URL: https://exemplo.com/pedido
> 
> Corpo da Mensagem: {}

#### POST
> Método: `POST`
> 
> URL: https://exemplo.com/pedido
> 
> Corpo da Mensagem: 
> {
> 
>   "comprador": "Jorge",
> 
>   "pedido": "Chaveiro",
> 
>   "preco": 1000,
> 
>   "detalhes": {}
> 
> }
>

## Termos Técnicos em Requisições HTTP

### Request

Uma **requisição (request)** é uma mensagem enviada por um cliente para solicitar a execução de uma operação em um servidor. Ela contém informações como o método HTTP a ser usado, a URL do recurso e, opcionalmente, dados adicionais no corpo da requisição.

### Base URL

A **base URL** é a parte fixa de uma URL que é comum a várias requisições. Ela geralmente inclui o protocolo (como "https://") e o nome do host (como "example.com"). A base URL é combinada com o endpoint específico para formar a URL completa de uma requisição.

### Endpoint

Um **endpoint** é um ponto de acesso em um servidor, geralmente representado por uma URL específica, que aceita requisições e fornece uma resposta(https://example.com/teste, sendo o ``/teste`` o endpoint). Cada endpoint em um servidor pode corresponder a uma operação específica, como a recuperação de dados de um banco de dados ou a atualização de um recurso.

### Body

O **corpo (body)** de uma requisição é a parte que contém os dados a serem enviados para o servidor. É comumente usado em requisições POST, PUT e PATCH para enviar informações como formulários ou dados estruturados no formato JSON ou XML.

### Header

O **cabeçalho (header)** de uma requisição é a parte que contém informações adicionais sobre a requisição, como o tipo de conteúdo, o tamanho dos dados, informações de autenticação e outras metainformações. Os cabeçalhos são usados pelo cliente e pelo servidor para processar a requisição corretamente.

### Autenticação

A **autenticação** é o processo de verificar a identidade de um usuário ou sistema. Em requisições HTTP, a autenticação é frequentemente usada para proteger endpoints restritos, garantindo que apenas usuários autorizados possam acessá-los. Existem vários métodos de autenticação, como o uso de tokens ou credenciais de usuário.

### Payload

O **payload** é o conteúdo útil de uma mensagem, excluindo cabeçalhos, metainformações e outros dados adicionais. Em uma requisição HTTP, o payload é o **CORPO** (body) da requisição, que contém os dados a serem processados pelo servidor.

