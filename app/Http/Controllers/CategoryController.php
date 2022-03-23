<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function index(Category $category)
    {
        return view('categories.index', [
            'category' => $category
        ]);
    }
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'body' => 'required'
        // ]);

        // $request->user()->posts()->create($request->only('body'));


        
        return back();
    }

    public function destroy(Category $category)
    {
        $this->authoriza('delete', $category);
        
        $category->delete();

        return back();
    }
}
