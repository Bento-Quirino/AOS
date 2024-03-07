## Simulado insomnia

Imagine que você está estagiando em uma empresa, e precisa documentar a API que estão criando.
Usando o insomnia você deve:

- Criar um Projeto com o nome da API que está usando
- Criar uma pasta com o nome da API
- Documentar os endpoints dessa API através do uso de `Markdown` usando um **PADRÃO DA EMPRESA** (veja abaixo)
- Criar os requests e testá-los
- Criar uma variável de ambiente para a `baseUrl`
- Usaremos a [Pagarme API](https://docs.pagar.me/reference/introdu%C3%A7%C3%A3o-1)

### Padrão de documentação (exemplo)

##

#### Criar um usuário

Para se criar um usuário deve ser acessado o endpoint `/users` usando uma requisição `POST`

Caso haja sucesso:
```javascript
{
  "status": "Success",
  "data": {
    "name": "Usuário 1",
    "email": "usuario1@email.com"
  }
}
```

Caso haja sucesso:
```javascript
{
  "status": "Failed",
  "data": {
    "name": "Usuário 1",
    "email": "usuario1email.com"
  },
  "errors": {
    "message": "needs '@' in email field."
  }
}
```

## VOCÊ DEVE

- Documentar usando insmonia (DOCUMENTAR e CRIAR OS REQUESTS)
- **CRIAR PEDIDO COM MEIO DE PAGAMENTO CASH**
- **OBTER PEDIDO**
- **LISTAR PEDIDO**
