<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Provider;

class ProductController extends Controller
{

    private $product;

    public function __construct(Product $product){
        $this->product = $product;
    }

    public function index()
    {
        $products = Product::all();


        return view('products.index', compact('products'));
    }

    
    public function create()
    {

        $providers = \App\Provider::all(['id','name']);

        return view('products.create', compact('providers'));
    }

    
    public function store(Request $request)
    {
        $data = $request->all();
        
        $provider = $request->get('providers');
        $data['provider_id'] = $provider[0];

        $product = $this->product->create($data);

        return redirect()->route('products.index');

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $product = $this->product->findOrFail($id);
        $providers = \App\Provider::all(['id','name']);

        return view('products.edit', compact('product','providers'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        
        $provider = $request->get('providers');
        $data['provider_id'] = $provider[0];

        $product = $this->product->find($id);
        $product->update($data);


        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = $this->product->find($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
