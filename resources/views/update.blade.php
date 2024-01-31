<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href={{ asset('css/createproducts.css') }}>
</head>

<body>
    <section class="wrapper">
        <header>Update</header>
        <form method="POST" action="/products/store" class="form" name="productscreate">
            <input type ="hidden" value="{{ $product->id }}" name="id">
            @csrf

            <div class="input-field">
                <input type="text" required name="ProductsName" value = "{{ $product->ProductsName }}">
                <label>Products Name </label>
            </div>

            <div class="input-field">
                <input type="text" required name="BrandName" value = "{{ $product->BrandName }}">
                <label>Brand Name</label>
            </div>

            <div class="input-field">
                <input type="text" required name="Quantity" value = "{{ $product->Quantity }}">
                <label>Quantity</label>
            </div>

            <div class="input-field">
                <input type="text" required name="Price" value = "{{ $product->Price }}">
                <label>Price</label>
            </div>

            </div>
            <button>Update</button>
        </form>
    </section>

</body>

</html>
