@extends('layouts.admin_dashboard')
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
                <div class="col-md-4">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body pb-3">Users <br />
                         <strong>{{ number_format($users) }}</strong>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between pt-2">
                            <small>Total users available</small>
                            {{-- <a class="small text-white stretched-link" href="#">View Details</a> --}}
                            <div class="small text-white" style="padding-bottom: 5px">
                                <a href="{{ route('admin.users') }}" style="color: white; font-weight: bold">View
                                    all</a>
                                {{-- <i class="fas fa-angle-right"></i> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body pb-3">Withdrawal requests <br />
                            <strong>{{ count($withdrawals) }}</strong>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between pt-2">
                            <small>Pending withdrawal requests</small>
                            {{-- <a class="small text-white stretched-link" href="#">View Details</a> --}}
                            <div class="small text-white" style="padding-bottom: 5px">
                                <a href="{{ route('admin.withdrawals') }}" style="color: white">View all</a>
                                {{-- <i class="fas fa-angle-right"></i> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-body pb-3">All packages <br />
                            <strong>{{ $packages }}</strong>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between pt-2">
                            <small>Available packages</small>
                            {{-- <a class="small text-white stretched-link" href="#">View Details</a> --}}
                            <div class="small text-white" style="padding-bottom: 5px">
                                <a href="{{ route('admin.packages') }}" style="color: white">View all</a>
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

            <div class="card mb-4">
                <div class="card-header">
                    {{-- <i class="fas fa-table me-1"></i> --}}
                    <h6>Recent withdrawal requests</h6>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Amount</th>
                                <th>Username</th>
                                <th>Date requested</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Amount</th>
                                <th>Username</th>
                                <th>Date requested</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($withdrawals->take(8) as $withdrawal)
                                <tr>
                                    <td>{{ $withdrawal->amount }}</td>
                                    <td>{{ $withdrawal->user->username }}</td>
                                    <td>{{ date_format($withdrawal->created_at, 'Y/m/d') }}</td>
                                    <td>
                                        <a href="{{ url('/admin/user/' . $withdrawal->user->id) }}"
                                            class="btn btn-sm btn-info">user details</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
