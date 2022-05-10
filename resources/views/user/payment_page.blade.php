@extends('layouts.user_dashboard')
{{-- @section('title')
    Home
@endsection --}}
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Payment verification</h3>
            <hr />
            <div class="row">
                {{-- {{ json_encode($plan) }} --}}
                <div class="col-md-6 offset-md-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            Please proceed to make payment
                        </div>
                        <div class="card-body">
                            {{-- <img src="https://res.cloudinary.com/lazer/image/upload/v1637512933/logo-default_ufyz0x.svg" alt="business logo" width="60"> --}}
                            <h6>Please pay {{$response['coin']}} to only the address below</h6>
                            <div class="my-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{$response['address']}}"
                                        aria-label="Payment address" aria-describedby="basic-addon2">
                                    <div class="input-group-append" aria-readonly="true" readonly="true" />
                                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-copy"
                                            style="color:grey"></i> &nbsp;<strong>copy</strong></span>
                                </div>
                            </div>
                            <div class="my-2">
                                <p>Amount to pay: <strong>{{$response['coin']}} {{$response['cryptoAmount']}}</strong></p>
                            </div>
                            <hr />
                            <div class="my-1">
                                <form action="/account/payment/verify" method="POST">
                                    @csrf
                                    <input type="hidden" name="plan_type" value="{{ $response['plan_type'] }}">
                                    <input type="hidden" name="plan_name" value="{{ $response['plan_name'] }}">
                                    <input type="hidden" name="plan_fee" value="{{ $response['plan_fee'] }}">
                                    <input type="hidden" name="reference" value="{{ $response['reference'] }}">
                                    <button class="btn btn-success">I have made payment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
    </main>
@endsection
