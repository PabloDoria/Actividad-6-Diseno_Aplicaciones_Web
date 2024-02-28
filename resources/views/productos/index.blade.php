<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del producto</title>
</head>
<body>
    <h1>Vista del producto</h1>

    <!-- Agregar producto -->
    <a href="{{ route('productos.create-view') }}" style="text-decoration: none;">
        <button style="padding: 10px; background-color: #4caf50; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Agregar producto
        </button>
    </a>

    <!-- Mostrar la lista de productos o cualquier otra información que necesites -->
    @foreach($productos as $producto)
        <!-- Mostrar información del producto -->
    @endforeach
</body>
</html>
