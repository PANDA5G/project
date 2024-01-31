@extends('layouts.createProductlayout')
@section('content')
    <section class="wrapper">
        <header>Create Product (update)</header>
        <form method="POST" action="/products/store" class="form" name="productscreate">
            @csrf

            <div class="input-field">
                <input type="text" required name="ProductsName">
                <label>Products Name </label>
            </div>

            <div class="input-field">
                <input type="text" required name="BrandName">
                <label>Brand Name</label>
            </div>

            <div class="input-field">
                <input type="text" required name="Quantity">
                <label>Quantity</label>
            </div>

            <div class="input-field">
                <input type="text" required name="Price">
                <label>Price</label>
            </div>

            </div>
            <button>Submit</button>
        </form>
    </section>
@stop
