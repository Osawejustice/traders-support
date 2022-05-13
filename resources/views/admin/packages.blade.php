@extends('layouts.admin_dashboard')
{{-- @section('title')
    Home
@endsection --}}
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Packages Overview</h3>
            {{-- <ol class="breadcrumb m2-4">
                <li class="breadcrumb-item active">Total of {{ count($user->referrals) }} referral(s)</li>
            </ol> --}}
            <hr />
            <div class="row">
                <div class="col-md-4">
                    @if ($sMessage = session()->get('success'))
                        <h6 style="background-color: #e3f1e4; margin: 8px 0px; padding: 12px; color: #17a747">
                            {{ $sMessage }}</h6>
                    @endif
                    <form action="{{ route('admin.packages') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="mb-1">Enter package title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter package name" />
                            @error('title')
                                <h6 style="color: tomato; margin-top: 8px;">{{ $message }}</h6>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">SUBMIT</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>All packages available</h6>
                                </div>
                                {{-- <div class="col-md-3 offset-md-3">
                                    <a href="{{ url('package/') }}" class="btn btn-sm btn-success">Add
                                        package</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        {{-- <th>Created on</th> --}}
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        {{-- <th>Created on</th> --}}
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($packages as $package)
                                        <tr>
                                            <td>{{ $package->name }}</td>
                                            <td>{{ $package->slug }}</td>
                                            {{-- <td>{{ date_format($package->created_at, 'Y/m/d') }}</td> --}}
                                            <td>
                                                <a href="{{ url('admin/package/' . $package->id) }}"
                                                    class="btn btn-sm btn-info">view plans</a>
                                                <form action="{{ route('admin.packages.delete') }}"
                                                    style="display: inline;" method="POST" onsubmit="return confirm('Do you want to delete?')">
                                                    @csrf
                                                    <input type="hidden" name="package_id" value="{{ $package->id }}">
                                                    <button type="submit" class=" btn btn-sm btn-danger">Delete</button>
                                                </form>
                                                {{-- <form action="" style="display: inline">
                                                    <a href="{{ url('/admin/user/' . $withdrawal->user->id) }}"
                                                        class="btn btn-sm btn-success">Sent</a>
                                                </form> --}}

                                            </td>
                                            {{-- <td>2011/04/25</td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
