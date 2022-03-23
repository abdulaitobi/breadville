<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Transactions;
use App\Models\Items;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $customer = Customers::get()->count();

        $item = Items::get()->count();

        $transaction = Transactions::where('type', 'sales')->get()->count();

        return view('welcome', ['count'=> $customer,'sales'=> $transaction, 'items'=>$item]);
    }
}
