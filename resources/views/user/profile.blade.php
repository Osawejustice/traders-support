@extends('layouts.user_dashboard')
{{-- @section('title')
    Home
@endsection --}}
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Profile</h3>
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
                                    Phone number
                                </p>
                                <p class="mt-0">{{ $user->phone ?? 'Nil' }}</p>
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
                                    Wallet address (USDT)</p>
                                <p class="mt-0">{{ $user->wallet_address ?? 'Nil' }}</p>
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
                            Edit profile
                        </div>
                        <div class="card-body">
                            @if ($errMessage = session()->get('error'))
                                <h6 style="background-color: #f8d7da; margin: 8px 0px; padding: 12px; color: #721c24">
                                    {{ $errMessage }}</h6>
                            @endif
                            @if ($sMessage = session()->get('success'))
                                <h6 style="background-color: #e3f1e4; margin: 8px 0px; padding: 12px; color: #17a747">
                                    {{ $sMessage }}</h6>
                            @endif
                            <form action="{{ route('user.update.profile') }}" method="POST">
                                @csrf
                                <div class="mb-2">
                                    <label for="name">Fullname</label>
                                    <input type="text" placeholder="Enter your name" name="name" value="{{ $user->name }}"
                                        class="form-control">
                                    @error('name')
                                        <h6 style="color: tomato; margin-top: 8px;">{{ $message }}</h6>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="name">Username</label>
                                    <input type="text" placeholder="Enter your username" value="{{ $user->username }}"
                                        class="form-control" name="username">
                                    @error('username')
                                        <h6 style="color: tomato; margin-top: 8px;">{{ $message }}</h6>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="name">Phone number</label>
                                    <input type="number" placeholder="Enter your phone number" value="{{ $user->phone }}"
                                        class="form-control" name="phone" />
                                    @error('phone')
                                        <h6 style="color: tomato; margin-top: 8px;">
                                            {{ Str::replaceFirst('phone', 'phone number', $message) }}</h6>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="name">Wallet address (USDT)</label>
                                    <input type="text" placeholder="Enter your wallet address"
                                        value="{{ $user->wallet_address }}" class="form-control" name="address">
                                    @error('address')
                                        <h6 style="color: tomato; margin-top: 8px;">
                                            {{ Str::replaceFirst('address', 'wallet address', $message) }}</h6>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Update profile</button>
                                </div>
                                <hr />
                                <div>
                                    <a href="">Update your password</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard Overview</li>
            </ol> --}}
            {{-- <div class="row">
                <div class="col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Competitions (<strong>4</strong>)</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Referrals (<strong>2</strong>)</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Area Chart Example
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Bar Chart Example
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div> --}}

        </div>
    </main>
@endsection
