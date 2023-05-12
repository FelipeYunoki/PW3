<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>
    
    <p><strong>Nome:</strong> {{ $product->name }}</p>
    <p><strong>Preço:</strong> {{ $product->price }}</p>
    <p><strong>Descrição:</strong> {{ $product->description }}</p>

    <a href="{{ route('products.edit', $product->id) }}">Editar</a>

    <form method="POST" action="{{ route('products.destroy', $product->id) }}">
        @csrf
        @method('DELETE')

        <button type="submit">Apagar</button>
    </form>
</body>
</html>