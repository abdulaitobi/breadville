@extends('layouts.app')

@section('content')
    <style>
        label{
            font-size: 20px;
        }
    </style>
    <div class="flex justify-center">
        <div class="container" style="text-align: center; max-width:800px; color:white;">
            <form style="margin-top:80px;" action="{{ route('profile') }}" method="post">
                @csrf
                <h1 style="color: white;" class="fs-1">Edit Profile</h1>
                <div role="alert">
                    @if(session('success')) 
                        <p class="alert alert-info" style="text-align: center; font-size: 20px;">update successful</p>
                    @endif
                </div>
                <div class="col-auto" style="margin-top: 50px">
                     <div class="input-group mb-3">
                        <label for="name">New Name</label>
                        <input style="width:80%" name="name" id="name" style="margin-left: 20px" placeholder="New name" type="text" class="form-control @error('name') border-red-500
                        @enderror" value="{{ auth()->user()->name }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      </div>
                
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="input-group mb-3">
                        <label for="username">New Username</label>
                        <input style="width:80%" name="username" id="username" style="margin-left: 20px" placeholder="New username" type="text" class="form-control @error('name') border-red-500
                        @enderror" value="{{ auth()->user()->username }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      </div>

                     @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="input-group mb-3">
                        <label for="email">New Email</label>
                        <input style="width:80%" name="email" id="email" style="margin-left: 20px" placeholder="New email" type="email" class="form-control @error('name') border-red-500
                        @enderror" value="{{ auth()->user()->email }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      </div>

                     @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="input-group mb-3">
                        <label for="password">New Password</label>
                        <input style="width:80%" id="password" name="password" style="margin-left: 20px" placeholder="New password" type="password" class="form-control @error('name') border-red-500
                        @enderror" value="{{ old('password') }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      </div>

                     @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="input-group mb-3">
                        <label for="password_confirmation">Confirm new Password</label>
                        <input style="width:80%" name="password_confirmation" style="margin-left: 20px" placeholder="Confirm New password " type="password" class="form-control @error('name') border-red-500
                        @enderror" value="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      </div>

                     @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-outline-primary">
                        Confirm
                    </button>
                </div>
                
            </form>
        </div>
    </div>
@endsection