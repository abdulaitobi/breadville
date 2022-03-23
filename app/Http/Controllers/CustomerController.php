<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }
    public function index()
    {
        $customers = Customers::latest()->paginate(20);

        return view('customers.index', [
            'customers' => $customers
        ]);
    }

    public function show(Customers $customer)
    {
        return view('customer.show', [
            'customer' => $customer
        ]);
    }
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'body' => 'required'
        // ]);

        // Customer::create($request->only('body'));
        $customer = new Customers();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
        $customer->save();
        
        return back();
    }

    public function destroy(Customers $customer)
    {
        // $this->authoriza('delete', $customer);
        
        $customer->delete();

        return redirect()->route('customers')->with('success', 'Customer details deleted');
    }
}
