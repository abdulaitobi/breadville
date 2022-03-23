@extends('layouts.app')

@section('content')
    <style>
        label{
            font-size: 20px;
        }
    </style>
    <div class="flex justify-center">
        <div class="container" style="text-align: center; max-width:800px; color: white;">
            <form style="margin-top:80px;" action="{{ route('register') }}" method="post">
                @csrf
                <h1 style="color: white; font-size:50px;">Register</h1>
                <div class="col-auto" style="margin-top: 100px">
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
@endsection