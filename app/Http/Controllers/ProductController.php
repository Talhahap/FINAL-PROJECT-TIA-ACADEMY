<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'expired_at' => 'required|date',
            'image' => 'required|image|max:2048', // max 2MB
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->modified_by = "admin";
        $product->category_id = $request->category_id;
        $product->expired_at = $request->expired_at;
        $product->image = $request->file('image')->store('images');

        $product->save();

        return $product;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'expired_at' => 'required|date',
            'image' => 'required|image|max:2048', // max 2MB
        ]);

        $post = Product::find($id);
        $post->update($request);

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('images');
        }


        return response()->json(['message' => 'Product Edited successfully']);
    }

    public function destroy($id){
    $post = Product::find($id);
    $post->delete();

    return response()->json(['message' => 'Producr deleted successfully']);
    }
}
