<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Items;
use Illuminate\Http\Request;
use App\Models\Transactions;
use App\Models\User;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }
    public function index()
    {
        $item = Items::get();
        $transaction = Transactions::paginate(20);

        $restock = 0;
        $sales = 0;


        foreach ($transaction as $trans) {
            if ($trans->type == "sales") {
                $sales += $trans->amount;
            }else {
                $restock += $trans->amount;
            }
        }

        $transaction_array = [
            [
                "x" => 'Restock',
                "value" => $restock
            ],
            [
                "x" => "Sales",
                "value" => $sales
            ]
        ];

        // dd(json_encode($transaction_array));

        return view('transactions.index', [
            'transactions' => $transaction,
            'transaction_array' => $transaction_array,
            'items' => $item
        ]);
    }
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'body' => 'required'
        // ]);

        // $request->user()->posts()->create($request->only('body'));
        //$User = User::find();
        $transaction = new Transactions();
        $transaction->amount = $request->input('amount');
        $transaction->type = $request->input('type');
        $transaction->item = $request->input('item');
        $transaction->save();
        
        return back();
    }

    public function destroy(Transactions $transaction)
    {
        // $this->authoriza('delete', $transaction);
        
        $transaction->delete();

        return redirect()->route('transactions')->with('success', 'Transaction deleted');
    }
}
