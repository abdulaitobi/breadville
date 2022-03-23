<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Items;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function index()
    {
        $item = Items::paginate(20);

        return view('items.index', [
            'items' => $item
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:items|max:255',
        ]);

        // $request->user()->posts()->create($request->only('body'));
        
        $item = new Items();
        $item->name = $request->input('name');
        $item->category = $request->input('category');
        $item->amount = $request->input('amount');
        $item->save();

        return back();
    }

    public function show($itemtype)
    {
        $item = Items::where('category', $itemtype)->paginate(20);

        return view('items.show', [
            'items' => $item
        ]);
    }

    public function destroy(Items $item)
    {
        //$this->authoriza('delete', $item);
        
        $item->delete();

        return redirect()->route('items')->with('success', 'Item deleted');
    }
}
