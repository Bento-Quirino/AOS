# AOS
Aulas de AOS, links complementares e roteiro de estudos.

### Backend

1. Entre na pasta do projeto:

```bash
cd pasta projeto
```

2. Rode os containers:

```bash
./vendor/bin/sail up
```

3. Abra outro terminal e rode o backend:

```bash
./vendor/bin/sail php artisan serve
```

4. Rode as migrations:

```bash
./vendor/bin/sail php artisan migrate
```

5. Pronto, o backend estará rodando no endereço `localhost`.
6. Api está disponível em `localhost/api`.

7. Instalar módulo de api `./vendor/bin/sail artisan install:api`

#### Cheatset para laravel
- Criar ApiController `./vendor/bin/sail artisan make:controller ControllerNameController --api`
- Criar Model `./vendor/bin/sail artisan make:model ModelName`
- Criar Tabela `./vendor/bin/sail artisan make:migration create_table_name_table`
- Update tabela já existentes `./vendor/bin/sail artisan make:migration add_column_name_to_table_name_table`
- Rodar Migrations `./vendor/bin/sail artisan migrate`
- Listar rotas `./vendor/bin/sail artisan route:list`
