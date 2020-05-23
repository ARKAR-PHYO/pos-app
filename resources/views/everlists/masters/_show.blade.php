@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    {{ __('EverList Master') }}
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Everlist Type</th>
                                <th scope="col">Owner Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $everlistmaster->id }}</th>
                                <td>{{ $everlistmaster->name }}</td>
                                <td>{{ $everlistmaster->everlisttype->everlisttypenames }}</td>
                                <td>{{ $everlistmaster->ownername }}</td>
                                <td>{{ $everlistmaster->phno }}</td>
                                <td>{{ $everlistmaster->address }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="float-left">
                        <a href="{{ route('everlistmasters.index') }}" class="btn btn-primary btn-md"><i class="cil-arrow-left btn-icon mr-2"></i>{{ __('Go Back') }}</a>
                    </div>

                    <div class="float-right">
                        <p><small>Created date:: <strong class="text-muted">{{ $everlistmaster->created_date }}</strong></small></p>
                        <p><small>Updated date:: <strong class="text-muted">{{ $everlistmaster->updated_date }}</strong></small></p>
                        <p><small>By:: <a href="{{ $everlistmaster->user->url }}">{{ $everlistmaster->user->name }}</a></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection