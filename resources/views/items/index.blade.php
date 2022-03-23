@extends('layouts.app')

@section('content')
    <div class="container">
        @auth
        <h1 style="text-align:center; color:white; margin-top:50px">Items</h1>
        <div role="alert">
            @if(session('success')) 
                <p class="alert alert-info" style="text-align: center; font-size: 20px;">Item deleted</p>
            @endif
        </div>
            <div class="d-flex justify-content-center">
                <table class="table datatable" style="color: black; border:black; background-color:white;">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($items->count())
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>
                                        <form action="{{ route('items.destroy', $item) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-blue-500">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $items->links() }}
                        @else
                            <p style="text-align: center; font-size: 20px; color:aliceblue">There are no items</p>
                        @endif
                    </tbody>
                </table>
            </div>
        @endauth
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Items
        </button>
    </div>
    
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="flex justify-center">
                        <div class="w-8/12 container p-6 rounded-lg">
                            @auth
                                <form style="text-align: center; margin-top:80px;" action="{{ route('items') }}" method="post" class="mb-4">
                                    @csrf
                                    <h1 style="color:black" class="fs-1">Items</h1>
                                    <div class="mb-4">
                                        <label style="color: black" for="name">Add Item name</label>
                                        <input name="name" id="name" class="form-control @error('name') border-red-500 @enderror" placeholder="Add item name" required/>

                                        @error('name')
                                        <div class="texr-red-500 mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label style="color: black" for="category">Add Item category</label>
                                        <select name="category" id="category" required>
                                            <option value="bread">Bread</option>
                                            <option value="cake">Cake</option>
                                            <option value="pie">Pie</option>
                                        </select>
                                        @error('name')
                                        <div class="texr-red-500 mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label style="color: black" for="amount">Add Item amount</label>
                                        <input name="amount" id="amount" class=" form-control @error('amount') border-red-500 @enderror" placeholder="Add item amount" required/>

                                        @error('amount')
                                        <div class="texr-red-500 mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary">
                                        Add
                                    </button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection