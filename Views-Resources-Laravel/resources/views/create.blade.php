<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Produto</title>
</head>
<body>
    <h1>Criar Produto</h1>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>
        <br>

        <label for="price">Preço:</label>
        <input type="number" name="price" id="price" required>
        <br>
        
        <label for="description">Descrição:</label>
        <textarea name="description" id="description" required></textarea>
        <br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>