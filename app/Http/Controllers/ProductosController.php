<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductosController extends Controller
{
    public function index(Products $products)
    {
        $products = Products::all();
        return view('dashboard.Products.Products', ['products' => $products]);
    }

    public function create(Products $product)
    {
        return view('dashboard.products.create', ['product' => $product]);
    }

    public function store(Request $request)
    {



        $request->validate([
            'name' => 'required|unique:products,name',
            'details' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpg,jpeg,png,bmp,gif,svg|required|max:10240',
        ]);


        $product = $request->user()->Products()->create([
            'name' => $name = $request->name,
            'details' => $request->details,
            'price' => $request->price,
            'slug' => Str::slug($name),
        ]);

        if ($request->hasFile("image")) {
            $image = $request->file('image');
            $imageName = Str::slug($request->name) . "." . $image->guessExtension();
            $path = public_path("upload/shop/");
            $image->move($path, $imageName);
            $product->image = $imageName;
            $product->save();
        }
        return redirect()->route('products.edit', $product);
    }

    public function edit(Products $product)
    {
        return view('dashboard.Products.edit', ['product' => $product]);
    }

    public function update(Request $request, Products $product)
    {

        $request->validate([
            'name' => 'required|unique:products,name,' . $product->id,
            'details' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpg,jpeg,png,bmp,gif,svg|max:10240',
        ]);

        $product->update([
            'name' => $name = $request->name,
            'details' => $request->details,
            'price' => $request->price,
            'slug' => Str::slug($name),
        ]);

        if ($request->hasFile("image")) {
            $image = $request->file('image');
            $imageName = Str::slug($request->name) . "." . $image->guessExtension();
            $path = public_path("upload/shop/");
            $image->move($path, $imageName);
            $product->image = $imageName;
            $product->save();
        }

        return redirect()->route('products.edit', $product);
    }

    public function destroy(Products $product)
    {
        $product->delete();

        return back();
    }
}
