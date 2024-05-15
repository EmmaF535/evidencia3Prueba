<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <header class="bg-danger py-3 text-center">
                    <h1 class="mb-0 text-white">{{ $workers->product_name }}</h1>
                </header>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6">

                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="product_name">Product name:</label>
                            <p style="white-space: pre-wrap;">{{ $workers->role_id }}</p>
                        </div>

                        <div class="form-group">
                            <label for="product_name">Product name:</label>
                            <p style="white-space: pre-wrap;">{{ $workers->name }}</p>
                        </div>
                        <div class="form-group">
                            <label for="requested_quantity">Available Quantity:</label>
                            <p style="white-space: pre-wrap;">{{ $workers->username }}</p>
                        </div>
                        <div class="form-group">
                            <label for="requested_quantity">Supplier ID</label>
                            <p style="white-space: pre-wrap;">{{ $workers->password }}</p>
                        </div>
                     
                        <button type="submit" class="btn btn-primary btn-block">Buy Product</button>
                    </form>
                </div>
                
                <div class="text-end">
                    <a href="{{ route('products.edit', $products->id) }}" class="btn btn-warning">Edit product</a>

                    <form action="{{ route('products.destroy', $products->id) }}" method="post">
                        @csrf
                        @method('delete')

                        <input type="submit" value="Eliminar Producto" class="btn btn-danger" onclick="return confirm('¿Estás seguro que quieres eliminarlo?')">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>