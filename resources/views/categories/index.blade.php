@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 style="text-align: center; color:aliceblue; font-family: serif;" class="fs-1">Categories</h1>
            <div class="col">
                <a href="{{ route('items.show', ['itemtype' => 'bread']) }}">
                <img src="pics/bread.jpg" alt="bread" width="100%" height="200px">
                </a>
                <h2 style="text-align: center; color:aliceblue; font-family: serif; font-size: 30px; ">Bread</h2>
            </div>
            <div class="col">
                <a href="{{ route('items.show', ['itemtype' => 'cake']) }}">
                <img src="pics/cake.jpg" alt="cake" width="100%" height="200px">
                </a>
                <h2 style="text-align: center; color:aliceblue; font-family: serif; font-size: 30px;">Cake</h2>
            </div>
            <div class="col">
                <a href="{{ route('items.show', ['itemtype' => 'pie']) }}">
                <img src="pics/pie.jpg" alt="pies" width="100%" height="200px">
                </a>
                <h2 style="text-align: center; color:aliceblue; font-family: serif; font-size: 30px;">Pie</h2>
            </div>
        </div>
    </div>
@endsection