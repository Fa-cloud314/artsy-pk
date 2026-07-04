<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $isAdmin = true;

        return view('products.index', compact('products', 'isAdmin'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $imagePath = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $fileName);

            $imagePath = 'uploads/' . $fileName;
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect('/');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/');
    }
}