@extends('layouts.app')

@section('content')
    <div class="container" style="text-align: center;">
        <h1 style="margin-top:50px; color: white; font-size:80px; font-family: 'Krub', sans-serif;">WELCOME {{ auth()->user()->name }}</h1>
        <h2 style="color: white; font-size:30px;">Here is the company's overview</h2>
        <div class="row">
            <div class="col" style="padding-top:10px; background-color: white; width: 350px;">
                <i class="fa-solid fa-user fa-2xl"></i>
                <h3>Customers</h3>
                The total number of customers: 
                <p>{{ $count }}</p>
            </div>
            <div class="col" style="padding-top:10px; background-color: white; width: 350px;">
                <i class="fa-solid fa-money-bill-wave fa-2xl"></i>
                <h3>Sales</h3>
                The total number of sales: 
                <p>{{ $sales }}</p>
            </div>
            <div class="col" style="padding-top:10px; background-color: white; width: 350px;">
                <i class="fa-solid fa-box fa-2xl"></i>
                <h3>Items</h3>
                The total number of items: 
                <p>{{ $items }}</p>
            </div>
        </div>
    </div>
@endsection