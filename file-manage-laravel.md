# Laravel: Armazenamento de Imagens e Geração de URL Pública

Este guia aborda como salvar uma imagem no sistema de arquivos com Laravel, gerar um link simbólico para o diretório `storage` e retornar a URL da imagem para acesso público.

## 1. Criar Link Simbólico para Armazenamento Público

Para que arquivos armazenados no diretório `storage/app/public` possam ser acessados publicamente, é necessário criar um link simbólico para o diretório `public/storage`. Execute o seguinte comando:

```bash
php artisan storage:link
```

Este comando cria um link simbólico (storage) no diretório public, apontando para storage/app/public. Assim, qualquer arquivo salvo em storage/app/public pode ser acessado publicamente com uma URL que inicia em public/storage/....

## 2. Armazenando Imagens no Storage

Abaixo está uma função de exemplo que recebe uma imagem, a armazena no diretório storage/app/public/images, e retorna o caminho do arquivo.

```php
<?php
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

public function storeImage(Request $request)
{
    try {
        // Valida o arquivo de imagem
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Armazena a imagem na pasta 'images' dentro de 'storage/app/public'
        $path = $request->file('image')->store('images', 'public');

        return response()->json([
            'message' => 'Imagem armazenada com sucesso!',
            'path' => $path,
        ], 200);

    } catch (ValidationException $e) {
        // Retorna os erros de validação, caso a imagem seja inválida
        return response()->json([
            'message' => 'Erro na validação',
            'errors' => $e->errors(),
        ], 422);
    }
}
```

## 3. Retornando a URL Pública da Imagem

```php
<?php
use App\Models\Post;

public function showImageUrl(Post $post)
{
    // Retorna a URL completa para a imagem armazenada
    return response()->json([
        'image_url' => asset('storage/' . $post->image_path),
    ]);
}
```

### Conclusão e passo a passo
- Configurar o Laravel para tornar arquivos do storage acessíveis publicamente.
- Salvar imagens e retornar o caminho relativo.
- Gerar URLs públicas para exibir as imagens salvas.
