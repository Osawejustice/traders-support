@extends('layouts.admin_dashboard')
{{-- @section('title')
    Home
@endsection --}}
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4">{{ $user->name }} active subscriptions</h4>
            {{-- <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard Overview</li>
            </ol> --}}
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            {{-- <i class="fas fa-table me-1"></i> --}}
                            <h6>All subscriptions</h6>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Targeted at</th>
                                        <th>Amount paid</th>
                                        {{-- <th></th> --}}
                                        <th>Payment status</th>
                                        <th>Payment reference</th>
                                        <th>Created on</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Type</th>
                                        <th>Targetted at</th>
                                        <th>Amount paid</th>
                                        {{-- <th></th> --}}
                                        <th>Payment status</th>
                                        <th>Payment reference</th>
                                        <th>Created on</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($plans as $plan)
                                        <tr>
                                            <td>{{ ucfirst($plan->package->name) }}</td>
                                            <td>${{ number_format($plan->target_amount) }}</td>
                                            <td>${{ number_format($plan->amount) }}</td>
                                            <td>{{ $plan->status }}</td>
                                            <td>{{ $plan->reference }}</td>
                                            <td>{{ date_format($plan->created_at, 'Y/m/d') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
