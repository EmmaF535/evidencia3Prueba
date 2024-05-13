<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
    
    $products = Product::todos_los_productos();
    
    return view('products.index',compact('products'));

    }

    public function create()
    {
        return view('products.create');    
    }

    public function store(Request $request)
    {
        Product::create([
            'supplier_id'=>$request->supplier_id,
            'product_name'=>$request->product_name,
            'available_quantity'=>$request->available_quantity
        ]);

        return redirect()->route('suppliers.index')
            ->with('success', 'Supplier creado exitosamente');
    }

    public function show($id)
    {
        return view('products.show')
            ->with('products', Product::producto_por_id($id));
    }
}
