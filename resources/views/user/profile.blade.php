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
                <div class="col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Competions (<strong>4</strong>)</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Warning Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div> --}}
                <div class="col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Referrals (<strong>2</strong>)</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
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
                    Referrals Overview
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Commision</th>
                                <th>Date joined</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Commision</th>
                                <th>Date joined</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>NGN 6.78</td>
                                <td>2011/04/25</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>NGN 20.00</td>
                                <td>2011/04/25</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
