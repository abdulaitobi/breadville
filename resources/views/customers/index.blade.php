@extends('layouts.app')

@section('content')
    <style>
        label{
            font-size: 20px;
        }
    </style>
    <div class="container">
        @auth
        <h1 style="text-align:center; color:white; margin-top:50px">Customers</h1>
        <div role="alert">
            @if(session('success')) 
                <p class="alert alert-info" style="text-align: center; font-size: 20px;">Customer details deleted</p>
            @endif
        </div>
        <div class="d-flex justify-content-center" style="margin-top:30px;">
            <table class="table datatable" style="color: black; border:black; background-color:white;">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Address</th>
                </tr>
                </thead>
                <tbody>
                    @if ($customers->count())
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>
                                    <form action="{{ route('customers.destroy', $customer) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-blue-500">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        {{ $customers->links() }}
                    @else
                        <p style="text-align: center; font-size: 20px; color:aliceblue">There are no customers</p>
                    @endif
                </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Customer
        </button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <form style="text-align: center; margin-top:80px; max-width:1000px;" action="{{ route('customers') }}" method="post" class="mb-4">
                        @csrf
                        <h1 class="fs-1" style=" color:black">Customers</h1>
                        <div class="mb-4">
                            <label style="color: aliceblue" for="name" class = "sr-only">Add Customer name</label>
                            <input style="margin-left: auto; margin-right:auto; width:80%" name="name" id="name" class="form-control @error('name') border-red-500 @enderror" placeholder="Add customer name"></input>

                            @error('name')
                            <div class="texr-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label style="color: aliceblue" for="email" class = "sr-only">Add Customer email</label>
                            <input style="margin-left: auto; margin-right:auto; width:80%" name="email" id="email" class="form-control @error('name') border-red-500 @enderror" placeholder="Add customer email"></input>

                            @error('email')
                            <div class="texr-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label style="color: aliceblue" for="phone" class = "sr-only">Add Customer phone number</label>
                            <input style="margin-left: auto; margin-right:auto; width:80%" name="phone" id="phone" class="form-control @error('phone') border-red-500 @enderror" placeholder="Add customer phone number"></input>

                            @error('phone')
                            <div class="texr-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label style="color: aliceblue" for="address" class = "sr-only">Add Customer address</label>
                            <input style="margin-left: auto; margin-right:auto; width:80%" name="address" id="address" class="form-control @error('address') border-red-500 @enderror" placeholder="Add customer address"></input>

                            @error('address')
                            <div class="texr-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        @endauth
    </div>
@endsection