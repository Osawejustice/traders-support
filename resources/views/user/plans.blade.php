@extends('layouts.user_dashboard')
{{-- @section('title')
    Home
@endsection --}}
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Select subscription account</h3>
            <hr />
            <div class="row">
                <div class="col-md-6">
                    @if ($errMessage = session()->get('error'))
                        <h6 style="background-color: #f8d7da; margin: 8px 0px; padding: 12px; color: #721c24">
                            {{ $errMessage }}
                        </h6>
                    @endif
                    @if ($sMessage = session()->get('success'))
                        <h6 style="background-color: #e3f1e4; margin: 8px 0px; padding: 12px; color: #17a747">
                            {{ $sMessage }}
                        </h6>
                    @endif
                </div>
            </div>
            <div class="row">
                @foreach ($plans as $plan)
                    {{-- {{ json_encode($plan) }} --}}
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                {{ $plan['name'] }}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($plan['subscriptions'] as $name => $subscription)
                                        <div class="col-md-3 mt-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p>
                                                        One time payment for a
                                                        <strong>${{ number_format($name) }}</strong> account
                                                    </p>
                                                    <form action="/account/sub" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="plan_type" value="{{ $plan['type'] }}">
                                                        <input type="hidden" name="plan_name" value="{{ $name }}">
                                                        <input type="hidden" name="plan_fee" value="{{ $subscription }}">
                                                        <button class="btn btn-sm btn-secondary" type="submit">
                                                            Pay ${{ number_format($subscription) }}
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- {{ json_encode($plan) }} --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </main>
@endsection
