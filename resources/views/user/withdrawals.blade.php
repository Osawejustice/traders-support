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
                    <h5><small style="font-size: 16px;">USD</small> <span
                            style="font-weight: 700">{{ $balance }}</span></h5>
                </div>
                <div class="col-md-5 offset-md-2">
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
                    <form action="{{ url('/account/withdrawals') }}" method="POST">
                        @csrf
                        <label for="amount">Amount to withdraw</label>
                        <div class="input-group mb-2 mt-1">
                            <input type="number" class="form-control" placeholder="Enter amount to withdraw"
                                aria-label="withdrawal amount" aria-describedby="amount-to-withdraw" name="amount" />
                            <div class="input-group-append">
                                {{-- <span class="input-group-text">$</span> --}}
                                <button class="btn btn-outline-secondary" type="submit">Submit</button>
                            </div>
                        </div>
                        @error('amount')
                            <h6 style="color: tomato; margin-top: 8px;">{{ $message }}</h6>
                        @enderror
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
                            @foreach ($withdrawals as $withdrawal)
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
    </main>
@endsection
