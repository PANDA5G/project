<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Products_lists;

use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{


    public function welcome()
    {
        return view('welcome');
    }

    public function register()
    {
        return view('register');

    }

    public function profileview()
    {
        return view('profile');
    }

    public function createProduct()
    {
        return view('createProduct');
    }


    public function productslist()
    {
        $productslist = Products_lists::orderBy('id', 'desc')->paginate(10);
        return view('listProducts')->with('product', $productslist);

    }

    public function updateproducts(Request $reuqest)
    {
        // dd($reuqest->id, $reuqest);

        // $data = products_lists::where('id', $id)->update([
        //     'ProductsName' => $reuqest->ProductsName,
        //     'BrandName' => $reuqest->BrandName,
        //     'Quantity' => $reuqest->Quantity,
        //     'Price' => $reuqest->Price
        // ]);
    }

    public function update(Request $reuqest)
    {

        $products = new Products_lists;
        $products->ProductsName = $reuqest->ProductsName;
        $products->BrandName = $reuqest->BrandName;
        $products->Quantity = $reuqest->Quantity;
        $products->Price = $reuqest->Price;
        $products->save();


        $data = Products_lists::select("*")->get();

        return view("listProducts")->with('products_lists', $data);

        // return redirect('products/show');
        // dd($reuqest);
        // $data = products_lists::where('id', $id)->update([
        //     'ProductsName' => $reuqest->ProductsName,
        //     'BrandName' => $reuqest->BrandName,
        //     'Quantity' => $reuqest->Quantity,
        //     'Price' => $reuqest->Price
        // ]);


        // return view('products/update')->with('product', $data);
    }

    public function listproducts(Request $request)
    {
        $data = Products_lists::select("*")->get();        //user data select function
        return view("listProducts")->with('products_lists', $data);
    }

    public function productsstore(Request $request)            //user data store
    {

        dd('hello');
        // $products = products_lists::where('id', $request->id)->first();
        // $products = new Products_lists;
        // $products->ProductsName = $request->ProductsName;
        // $products->BrandName = $request->BrandName;
        // $products->Quantity = $request->Quantity;
        // $products->Price = $request->Price;
        // $products->save();

        // return redirect('products/show');
    }

    public function registerstore(Request $request)
    {
        $products = new Register;
        $products->FullName = $request->FullName;
        $products->Email = $request->Email;
        $products->Password = $request->Password;
        $products->phonenumber = $request->phonenumber;
        $products->Address = $request->Address;
        $products->pincode = $request->pincode;
        $products->save();

        return redirect('register/view');

    }
    public function login(Request $request)
    {
        $Register = Register::where('Email', '=', $request->Email)->first();

        if ($Register) {
            if ($request->pass === $Register->password) {
                $request->session()->put('loginId', $Register->id);
                return redirect('profile/view');
            } else {
                return back()->with('fail', 'password not matches');
            }
        } else {
            return back()->with('fail', 'this email is not registered');
        }
    }
    public function profile()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = Register::where('id', '=', Session::get('loginId'))->first();
        }

        return view('profile', compact('data'));

    }
    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');

        }
    }
}





