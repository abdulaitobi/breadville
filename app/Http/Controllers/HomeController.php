<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Transactions;
use App\Models\Messages;
use App\Mail\Messages as Emessage;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function index()
    {
        $message = Messages::paginate(10);

        $customer = Customers::get()->count();

        $transaction = Transactions::where('type', 'sales')->get()->count();

        return view('home', ['count'=> $customer, 'sales'=> $transaction, 'messages' => $message]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:items|max:255',
        ]);

        // $request->user()->posts()->create($request->only('body'));
        
        $message = new Messages();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();

        $data = array(
            'name' => $message->name,
            'email' => $message->email,
            'subject' => $message->subject,
            'message' => $message->message
        );

        $msg = new Emessage($data);

        Mail::to(['email' => 'abdulaitobi14@gmail.com'])->send($msg);

        return back();
    }
}
