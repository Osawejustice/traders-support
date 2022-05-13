@extends('layouts.user_dashboard')
{{-- @section('title')
    Home
@endsection --}}
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Withdrawals Overview</h3>
            <ol class="breadcrumb m2-4">
                <li class="breadcrumb-item active">Available balance and withdrwal history</li>
            </ol>
            <hr />
            <div class="row">
                <div class="col-md-4">
                    <h4>Available Commission</h4>
                    <h5><small style="font-size: 16px;">USD</small> <span style="font-weight: 700">500.00</span></h5>
                </div>
                <div class="col-md-5 offset-md-2">
                    <form action="" method="POST">
                        @csrf
                        <label for="amount">Amount to withdraw</label>
                        <div class="input-group mb-3 mt-1">
                            <input type="number" class="form-control" placeholder="Enter amount to withdraw"
                                aria-label="withdrawal amount" aria-describedby="amount-to-withdraw" name="amount" />
                            <div class="input-group-append">
                                {{-- <span class="input-group-text">$</span> --}}
                                <button class="btn btn-outline-secondary" type="button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr />
            <div class="card mb-4">
                <div class="card-header">
                    <h6>All withdrawal requests</h6>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Date joined</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Date joined</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($user->referrals as $ref)
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
