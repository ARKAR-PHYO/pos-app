@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    {{ __('EverList Type') }}
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">EverList Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $everlisttypes->id }}</th>
                                <td>{{ $everlisttypes->everlisttypenames }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p><small>Created date:: <strong class="text-muted">{{ $everlisttypes->created_date }}</strong></small></p>
                        <p><small>Updated date:: <strong class="text-muted">{{ $everlisttypes->updated_date }}</strong></small></p>
                        <p><small>By:: <a href="{{ $everlisttypes->user->url }}">{{ $everlisttypes->user->name }}</a></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection