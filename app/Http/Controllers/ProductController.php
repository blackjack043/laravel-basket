<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function tovar() {
      
        return view('tovar', ['Products' => Product::all()]);
    }

    public function createpage(Request $r)
    {
        return view('tovaradd');
    }

    public function create(Request $r)
    {

        $product = new Product();
        $product->name = $r->input('name');
        $product->price = $r->input('price');
        
        $validation = $this->validate($r, [
            'name' => 'required|min:2|max:10|unique:Products,name',
            'price' => 'required|numeric|between:0.1,1200',
        ]);
        $product->save();
        $products = \DB::table('Products')->get();
        return redirect()->route('tovar',  ['Product' => $products]);;
    }
}
