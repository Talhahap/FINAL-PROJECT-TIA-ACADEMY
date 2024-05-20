<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        return Category::create($request->only('name'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $post = Category::find($id);
        $post->update($request->all());

        return response()->json(['message' => 'Category Updated successfully']);
    }

    public function destroy($id)
    {
        $post = Category::find($id);
        $post->delete();

        return response()->json(['message' => 'Category deleted successfully']);
    }
}
