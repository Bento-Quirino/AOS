# Criando um CRUD no Laravel

Este guia descreve o processo para criar um CRUD (Create, Read, Update, Delete) básico em uma API Laravel. 

## Passo 1: Criar a Rota no `api.php`

Abra o arquivo de rotas da API localizado em routes/api.php e adicione as rotas necessárias para o CRUD:

```php

use App\Http\Controllers\ItemController;

Route::apiResource('items', ItemController::class);

```

Isso automaticamente cria as seguintes rotas para você:

- `GET /items` — `index` (listar todos os itens)
- `GET /items/{id}` — `show` (mostrar um item específico)
- `POST /items` — `store` (criar um novo item)
- `PUT /items/{id}` — `update` (atualizar um item existente)
- `DELETE /items/{id}` — `destroy` (deletar um item)

## Passo 2: php artisan make:controller ItemController --api

Crie o controller que irá lidar com a lógica do CRUD. No terminal, execute:

```bash
php artisan make:controller ItemController --api
```

Isso cria o arquivo app/Http/Controllers/ItemController.php com um esqueleto básico para uma API.

Edite o controller para adicionar os métodos CRUD:

```php
namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return Item::all();
    }

    public function show($id)
    {
        return Item::findOrFail($id);
    }

    public function store(Request $request)
    {
        $item = Item::create($request->all());
        return response()->json($item, 201);
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());
        return response()->json($item, 200);
    }

    public function destroy($id)
    {
        Item::destroy($id);
        return response()->json(null, 204);
    }
}
```

## Passo 3: Criar o Model e a Migration

Crie o model e a migration para a tabela items:

```bash
php artisan make:model Item -m
```

Isso cria dois arquivos: 
- um model (app/Models/Item.php)
- uma migration (database/migrations/xxxx_xx_xx_create_items_table.php).

Edite o arquivo de migration para definir as colunas da tabela items:

```php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
}
```

Edite o model app/Models/Item.php para definir os atributos que podem ser preenchidos:

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'description'];
}
```

## Passo 4: Rodar a Migration

Execute a migration para criar a tabela no banco de dados:

```php
php artisan migrate
```
