@extends('layouts.admin_dashboard')
{{-- @section('title')
    Home
@endsection --}}
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Package plans for {{ $package->name }}</h3>
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
                    <form action="{{ route('admin.package', $package->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="mb-1">Enter target amount</label>
                            <input type="text" class="form-control" name="target" placeholder="Enter target amount" />
                            @error('target')
                                <h6 style="color: tomato; margin-top: 8px;">{{ $message }}</h6>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="title" class="mb-1">Enter price</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" />
                            @error('price')
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
                                        <th>Target amount (USD)</th>
                                        <th>price (USD)</th>
                                        <th>Created on</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Target amount</th>
                                        <th>price</th>
                                        <th>Created on</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($packagePlans as $packagePlan)
                                        <tr>
                                            <td>{{ $packagePlan->target }}</td>
                                            <td>{{ $packagePlan->amount }}</td>
                                            <td>{{ date_format($packagePlan->created_at, 'Y/m/d') }}</td>
                                            <td>
                                                <form action="{{ route('admin.package.delete') }}"
                                                    style="display: inline;" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="package_id" value="{{ $packagePlan->id }}">
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