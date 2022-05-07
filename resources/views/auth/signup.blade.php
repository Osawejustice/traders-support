@extends('layouts.default')
@section('title')
    Home
@endsection
@section('content')
    <section class="pt-140 pb-80 crypto-patern" style="margin-top: 40px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-8">
                    <div class="section-title text-center mb-30"> <img src="img/icons/balb.svg" alt="" class="svg">
                        <h2>Create new account</h2>
                    </div>
                </div>
            </div>
            <div class="service-wrap">
                <div class="row">
                    <div class="col-lg-6 col-md-6 offset-lg-3">
                        @if ($errMessage = session()->get('err'))
                            <h6 style="background-color: #f8d7da; margin: 8px 0px; padding: 12px; color: #721c24">
                                {{ $errMessage }}</h6>
                        @endif
                        <form action="{{ route('create.account') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Fullname</label>
                                <input id="name" type="text" class="form-control" placeholder="Enter your fullname"
                                    name="name" value="{{ old('name') }}" />
                                @error('name')
                                    <h6 style="color: tomato; margin-top: 8px;">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input id="email" type="email" class="form-control" placeholder="Enter your email address"
                                    name="email" value="{{ old('email') }}" />
                                @error('email')
                                    <h6 style="color: tomato; margin-top: 8px;">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input id="username" type="text" class="form-control" placeholder="Enter your username"
                                    name="username" value="{{ old('username') }}" />
                                @error('username')
                                    <h6 style="color: tomato; margin-top: 8px;">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" class="form-control" placeholder="Enter your password" name="password" type="password" />
                                @error('password')
                                    <h6 style="color: tomato; margin-top: 8px;">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_c" class="form-label">Password again</label>
                                <input id="password_c" class="form-control" placeholder="Enter your password again" name="password_confirmation" type="password" />
                                {{-- @error('password')
                                    <h6 style="color: tomato; margin-top: 8px;">{{ $message }}</h6>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <button class="btn">Create account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
