@extends('layouts.app')

@section('content')
    <div class="container">
        @auth
        <h1 style="text-align:center; color:white; margin-top:30px">Users</h1>
        <div role="alert">
            @if(session('success')) 
                <p class="alert alert-info" style="text-align: center; font-size: 20px;">User deleted</p>
            @endif
        </div>
            <div class="d-flex justify-content-center">
                <table class="table datatable" style="color: black; border:black; background-color:white;">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Staff Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->count())
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->staff }}</td>
                                    <td>
                                        <form action="{{ route('users.destroy', $user) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-blue-500">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $users->links() }}
                        @else
                            <p style="text-align: center; font-size: 20px; color:aliceblue">There are no users</p>
                        @endif
                    </tbody>
                </table>
            </div>
        @endauth
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add User
        </button>
    </div>
    
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                   <style>
                        label{
                            font-size: 20px;
                        }
                    </style>
                    <div class="flex justify-center">
                        <div class="container" style="text-align: center; max-width:800px; color: black;">
                            <form style="margin-top:30px;" action="{{ route('users') }}" method="post">
                                @csrf
                                <h1 style="color: black; font-size:50px;">Register</h1>
                                <div class="col-auto" style="margin-top: 50px">
                                    <div class="input-group mb-3">
                                        <label for="name">Name</label>
                                        <input name="name" id="name" style="margin-left: 20px" placeholder="Your name" type="text" class="form-control @error('name') border-red-500
                                        @enderror" value="{{ old('name') }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                
                                    @error('name')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <div class="input-group mb-3">
                                        <label for="username">Username     </label>
                                        <input name="username" id="username" style="margin-left: 20px" placeholder="Your username" type="text" class="form-control @error('name') border-red-500
                                        @enderror" value="{{ old('username') }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>

                                    @error('username')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <div class="input-group mb-3">
                                        <label for="email">Email    </label>
                                        <input name="email" id="email" style="margin-left: 20px" placeholder="Your email" type="email" class="form-control @error('name') border-red-500
                                        @enderror" value="{{ old('email') }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>

                                    @error('email')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <div class="input-group mb-3">
                                        <label for="password">Password     </label>
                                        <input id="password" name="password" style="margin-left: 20px" placeholder="Your password" type="password" class="form-control @error('name') border-red-500
                                        @enderror" value="{{ old('name') }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>

                                    @error('password')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <div class="input-group mb-3">
                                        <label for="password_confirmation" >Confirm Password     </label>
                                        <input name="password_confirmation" style="margin-left: 20px" placeholder="Confirm password " type="password" class="form-control @error('name') border-red-500
                                        @enderror" value="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>

                                    @error('password_confirmation')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                        <label for="staff" >Staff Type</label>
                                        <select name="staff" id="staff" required>
                                            <option value="employee">Employee</option>
                                            <option value="admin">Admin</option>
                                        </select>

                                    @error('staff')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-outline-primary">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection