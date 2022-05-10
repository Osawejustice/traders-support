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
                            Edit profile
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="mb-2">
                                    <label for="name">Fullname</label>
                                    <input type="text" placeholder="Enter your name" value="{{ $user->name }}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="name">Username</label>
                                    <input type="text" placeholder="Enter your username" value="{{ $user->username }}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary disabled">Update profile</button>
                                </div>
                                <hr/>
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
