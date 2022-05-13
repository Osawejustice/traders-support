@extends('layouts.admin_dashboard')
{{-- @section('title')
    Home
@endsection --}}
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Withdrawal Overview</h3>
            {{-- <ol class="breadcrumb m2-4">
                <li class="breadcrumb-item active">Total of {{ count($user->referrals) }} referral(s)</li>
            </ol> --}}
            <hr />
            <div class="row mb-2">
                <div class="col-md-12">
                    <a href="?type=pending" class="btn btn-warning btn-sm mr-2">Pending</a>
                    <a href="?type=sent" class="btn btn-primary btn-sm mr-2">Successful</a>
                    <a href="?type=rejected" class="btn btn-info btn-sm">Rejected</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6>All <strong>{{ $type }}</strong> withdrawals</h6>
                </div>
                <div class="card-body">
                    @if ($sMessage = session()->get('success'))
                        <h6 style="background-color: #e3f1e4; margin: 8px 0px; padding: 12px; color: #17a747">
                            {{ $sMessage }}</h6>
                    @endif
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Amount</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th>Date requested</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Amount</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th>Date requested</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($withdrawals as $withdrawal)
                                <tr>
                                    <td>{{ $withdrawal->amount }}</td>
                                    <td>{{ $withdrawal->user->username }}</td>
                                    <td>{{ $withdrawal->status }}</td>
                                    <td>{{ date_format($withdrawal->created_at, 'Y/m/d') }}</td>
                                    <td>
                                        <a href="{{ url('/admin/user/' . $withdrawal->user->id) }}"
                                            class="btn btn-sm btn-info">user details</a>
                                        <form action="{{ route('admin.withdrawal.action') }}" style="display: inline"
                                            method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="rejected" />
                                            <input type="hidden" name="w_id" value="{{ $withdrawal->id }}" />
                                            <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                                        </form>
                                        <form action="{{ route('admin.withdrawal.action') }}" style="display: inline"
                                            method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="sent" />
                                            <input type="hidden" name="w_id" value="{{ $withdrawal->id }}" />
                                            <button type="submit" class="btn btn-sm btn-success">Sent</button>
                                        </form>

                                    </td>
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
