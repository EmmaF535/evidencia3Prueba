<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show supplier</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <header class="bg-danger py-3 text-center">
                    <h1 class="mb-0 text-white">{{ $suppliers->company_name }}</h1>
                </header>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6">
                <table class="table mb-4">
                    <tbody>
                        <tr>
                            <td><b>Created at:</b> {{ $supplier->created_at->diffForHumans() }}</td>
                            <td><b>Updated at:</b> {{ $supplier->updated_at->diffForHumans()}}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="title" class="form-control" value="{{ $suppliers->address }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="address" class="form-label">Phone</label>
                        <input type="text" name="title" class="form-control" value="{{ $suppliers->phone }}">
                    </div>

                <div class="text-end">
                    <a href="{{ route('suppliers.edit', $suppliers->id) }}" class="btn btn-warning">Edit supplier</a>

                    <form action="{{ route('suppliers.destroy', $suppliers->id) }}" method="post">
                        @csrf
                        @method('delete')

                        <input type="submit" value="Eliminate Supplier" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>