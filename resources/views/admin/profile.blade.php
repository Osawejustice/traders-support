@extends('layouts.admin_dashboard')
{{-- @section('title')
    Home
@endsection --}}
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Your Profile</h3>
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
                                    Email
                                </p>
                                <p class="mt-0">{{ $user->email }}</p>
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
                                    <button type="submit" class="btn btn-primary disabled">Update profile</button>
                                </div>
                                <hr/>
                                <div>
                                    {{-- <a href="">Update your password</a> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
