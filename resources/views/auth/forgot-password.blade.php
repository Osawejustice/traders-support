@extends('layouts.default')
@section('title')
    Home
@endsection
@section('content')
    <section class="pt-140 pb-80 crypto-patern">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-8">
                    <div class="section-title text-center mb-30"> <img src="img/icons/balb.svg" alt="" class="svg">
                        <h2>Recover your account</h2>
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
                        @if ($sMessage = session()->get('status'))
                            <h6 style="background-color: #e3f1e4; margin: 8px 0px; padding: 12px; color: #17a747">
                                {{ $sMessage }}</h6>
                        @endif
                        <form action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input id="email" type="email" class="form-control" placeholder="Enter your email address"
                                    name="email" value="{{ old('email') }}" />
                                @error('email')
                                    <h6 style="color: tomato; margin-top: 8px;">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-blue">SUBMIT</button>
                            </div>
                            <p>Remember password? <a style="color: white" href="{{ route('register') }}">Login here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
