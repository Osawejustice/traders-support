@extends('layouts.admin_dashboard')
{{-- @section('title')
    Home
@endsection --}}
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">All Users</h3>
            {{-- <ol class="breadcrumb m2-4">
                <li class="breadcrumb-item active">Total of {{ count($user->referrals) }} referral(s)</li>
            </ol> --}}
            <hr />
            <div class="card mb-4">
                <div class="card-header">
                    <h6>All active users</h6>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Date joined</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Date joined</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ date_format($user->created_at, 'Y/m/d') }}</td>
                                    <td><a class="btn btn-sm btn-primary" href="{{ url('/admin/user/' . $user->id) }}">View details</a>
                                    <a class="btn btn-sm btn-success" href="{{ route('admin.user.plans', ['id' => $user->id]) }}">subscriptions</a>
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
