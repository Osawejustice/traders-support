@extends('layouts.user_dashboard')
{{-- @section('title')
    Home
@endsection --}}
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Referrals Overview</h3>
            <ol class="breadcrumb m2-4">
                <li class="breadcrumb-item active">Total of {{ count($user->referrals) }} referral(s)</li>
            </ol>
            <hr />
            <div class="card mb-4">
                <div class="card-header">
                    <h6>All referrals</h6>
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
