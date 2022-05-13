@extends('layouts.user_dashboard')
{{-- @section('title')
    Home
@endsection --}}
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Welcome back, {{ $user->name }}</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard Overview</li>
            </ol>
            <div class="row">
                {{-- <div class="col-md-4">
                    <div class="card bg-primary text-white mb-2">
                        <div class="card-body">Referral Commission</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h6 class="text-white stretched-link pb-0"><small>USD</small> {{ number_format($sum) }}</h6>
                                <div class="small text-white">
                                <a href="ffff" style="color: wheat">Withdraw</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Warning Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div> --}}
                <div class="col-md-4">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body pb-3">Referral Commission <br />
                            <small>USD</small> <strong>{{ number_format($sum) }}</strong>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between pt-2">
                            <small>Total referral earnings</small>
                            {{-- <a class="small text-white stretched-link" href="#">View Details</a> --}}
                            <div class="small text-white" style="padding-bottom: 5px">
                                <a href="{{ url('account/withdrawals') }}"
                                    style="color: white; font-weight: bold">Withdraw</a>
                                {{-- <i class="fas fa-angle-right"></i> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body pb-3">Referrals <br /> <strong>{{ count($user->referrals) }}</strong>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between pt-2">
                            <small>Your referral signees</small>
                            {{-- <a class="small text-white stretched-link" href="#">View Details</a> --}}
                            <div class="small text-white" style="padding-bottom: 5px">
                                <a href="{{ url('account/referrals') }}" style="color: white">View all</a>
                                {{-- <i class="fas fa-angle-right"></i> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-body pb-3">Active subscriptions <br />
                            <strong>{{ $plans }}</strong>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between pt-2">
                            <small>Your active subscriptions</small>
                            {{-- <a class="small text-white stretched-link" href="#">View Details</a> --}}
                            <div class="small text-white" style="padding-bottom: 5px">
                                <a href="{{ url('account/plans') }}" style="color: white">View all</a>
                                {{-- <i class="fas fa-angle-right"></i> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Danger Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div> --}}
            </div>
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
            <div class="card mb-4">
                <div class="card-header">
                    {{-- <i class="fas fa-table me-1"></i> --}}
                    <h6>Recent referrals</h6>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                {{-- <th>Commision</th> --}}
                                <th>Username</th>
                                <th>Date joined</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                {{-- <th>Commision</th> --}}
                                <th>Date joined</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($user->referrals->take(8) as $ref)
                                <tr>
                                    <td>{{ $ref->name }}</td>
                                    <td>{{ $ref->username }}</td>
                                    <td>{{ date_format($ref->created_at, 'Y/m/d') }}</td>
                                    {{-- <td>2011/04/25</td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
