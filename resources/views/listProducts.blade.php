@extends('layouts.listProductlayout')
@section('content')

    <div class="ScriptTop">
        <div class="rt-container">
            <div class="col-rt-4" id="float-right">


            </div>
            <div class="col-rt-2">
                <ul>
                    <li><a href="{{ asset('products/create') }}" title="Back to page">Go To CD</a></li>
                </ul>
            </div>
        </div>
    </div>

    <header class="ScriptHeader">
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="rt-heading">
                    <h1>User Profile</h1>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">


                    <div class="User-profile py-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent text-center">
                                        </div>
                                        <div>
                                            <table>
                                                <thead>
                                                    <th>ProductsName</th>
                                                    <th>BrandName</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products_lists as $product)
                                                        <tr>
                                                            <td>{{ $product->ProductsName }}</td>
                                                            <td>{{ $product->BrandName }}</td>
                                                            <td>{{ $product->Quantity }}</td>
                                                            <td>{{ $product->Price }}</td>
                                                            <td>
                                                                {{-- href="{{ route('productsupdate') }}?id={{ $product->id }}">Update</a> --}}
                                                            </td>
                                                            <td><a href="">Delete</a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                    <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <p>Have a Nice Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        </div>
        </div>

        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </section>
@stop
