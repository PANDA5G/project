@extends('layouts.registerlayout')
@section('content')
    <section class="wrapper">
        <header>Registration Form</header>
        <form method="POST" action="/register/store" class="form">
            @csrf


            <div class="input-box">
                <label> Full Name </label>
                <input class="input-field" type="text" placeholder="Full Name"name="FullName" required />
            </div>

            <div class="input-box">
                <label>Email </label>
                <input class="input-field" type="text" placeholder="Email address"name="Email" required />
            </div>

            <div class="input-box">
                <label>Password</label>
                <input class="input-field" type="text" placeholder="Password"name="Password" required />
            </div>

            <div class="column">
                <div class="input-box">
                    <label> Phone Number </label>
                    <input class="input-field" type="text" placeholder="Phone Number"name="phonenumber" required />
                </div>

                <div class="input-box">
                    <label> Address </label>
                    <input class="input-field" type="text" placeholder="Address"name="Address" required />
                </div>

                <div class="input-box">
                    <label> Pin Code </label>
                    <input class="input-field" type="text" placeholder="Pin Code"name="pincode" required />
                </div>
            </div>
            <button>Submit</button>
        </form>
        </button>
    </section>
@stop
