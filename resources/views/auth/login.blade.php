@extends('layouts.app')

@section('content')
    <style>
        label{
            font-size: 20px;
        }
    </style>
    <div class="flex justify-center">
        <div class="container" style="text-align: center; max-width:800px">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif
            <form style="margin-top:80px;" action="{{ route('login') }}" method="post">
                @csrf
                <h1 style="color: white; font-size:50px;">Login</h1>
                <div class="mb-4">
                    <div class="input-group mb-3">
                        <label for="email" class="sr-only">Email</label>
                        <input style="margin-left: 20px" type="email" name="email" id="email" placeholder="Your email"
                        class="form-control @error('email') border-red-500
                        @enderror" value="{{ old('email') }}">
                    </div>

                     @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="input-group mb-3">
                        <label for="password" class="sr-only">Password</label>
                        <input style="margin-left: 20px" type="password" name="password" id="password" placeholder="Type a password"
                        class="form-control @error('password') border-red-500
                        @enderror" value="">
                    </div>

                     @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember" style="color: white;">Remember me</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-outline-primary">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection