@extends('layouts.admin_dashboard')
{{-- @section('title')
    Home
@endsection --}}
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">User Information</h3>
            <hr />
            <div class="row">
                <div class="col-md-5">
                    <div class="card mb-4">
                        <div class="card-header">
                            {{-- <i class="fas fa-table me-1"></i> --}}
                            Profile details
                        </div>
                        <div class="card-body">
                            <div class="item-profile">
                                <p class="mb-0"
                                    style="color: #3f3f3f;font-size:14px;font-weight:bold;margin-bottom:0px;padding-bottom:0px;">
                                    Fullname</p>
                                <p class="mt-0">{{ $user->name }}</p>
                            </div>

                            <div class="item-profile">
                                <p class="mb-0"
                                    style="color: #3f3f3f;font-size:14px;font-weight:bold;margin-bottom:0px;padding-bottom:0px;">
                                    Username
                                </p>
                                <p class="mt-0">{{ $user->username }}</p>
                            </div>

                            <div class="item-profile">
                                <p class="mb-0"
                                    style="color: #3f3f3f;font-size:14px;font-weight:bold;margin-bottom:0px;padding-bottom:0px;">
                                    Available balance
                                </p>
                                <p class="mt-0"><small>USD</small> <strong>{{ $balance}}</strong></p>
                            </div>

                            <div class="item-profile">
                                <p class="mb-0"
                                    style="color: #3f3f3f;font-size:14px;font-weight:bold;margin-bottom:0px;padding-bottom:0px;">
                                    Wallet address (USDT)
                                </p>
                                <p class="mt-0">{{ $user->wallet_address ?? 'nil' }}</p>
                            </div>

                            <div class="item-profile">
                                <p class="mb-0"
                                    style="color: #3f3f3f;font-size:14px;font-weight:bold;margin-bottom:0px;padding-bottom:0px;">
                                    Email
                                </p>
                                <p class="mt-0">{{ $user->email }}</p>
                            </div>

                            <div class="item-profile">
                                <p class="mb-0"
                                    style="color: #3f3f3f;font-size:14px;font-weight:bold;margin-bottom:0px;padding-bottom:0px;">
                                    Referral link</p>
                                <p class="mt-0">{{ $user->referral_link }}</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card mb-4">
                        <div class="card-header">
                            {{-- <i class="fas fa-table me-1"></i> --}}
                            Recent withdrawals
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Date requested</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Date requested</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($withdrawals->take(100) as $withdrawal)
                                        <tr>
                                            <td>{{ $withdrawal->amount }}</td>
                                            <td>{{ $withdrawal->status }}</td>
                                            <td>{{ date_format($withdrawal->created_at, 'Y/m/d') }}</td>
                                            {{-- <td>2011/04/25</td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
