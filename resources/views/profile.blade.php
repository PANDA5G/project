@extends('layouts.profilelayout')
@section('content')

    <div class="ScriptTop">
        <div class="rt-container">
            <div class="col-rt-4" id="float-right">


            </div>
            <div class="col-rt-2">
                <ul>
                    <li><a href="{{ asset('login') }}" title="Back to page">Go To Login</a></li>
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
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Phone Number</th>
                                                    <th>Address</th>
                                                    <th>Pin Code</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $data->FullName }}</td>
                                                        <td>{{ $data->Email }}</td>
                                                        <td>{{ $data->Password }}</td>
                                                        <td>{{ $data->phonenumber }}</td>
                                                        <td>{{ $data->Address }}</td>
                                                        <td>{{ $data->pincode }}</td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                    <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        </div>
        </div>
    </section>
@stop
