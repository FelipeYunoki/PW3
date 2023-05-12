<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    @foreach ($products as $product)
    <p>{{ $product->name }}</p>
    @endforeach
    <a href="{{ route('products.create') }}">Criar novo produto</a>
</body>
</html>