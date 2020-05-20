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
                                <th scope="col">EverList Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $everlisttype->id }}</th>
                                <td>{{ $everlisttype->everlisttype }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="info">
                        <p><small>Created date:: <strong class="text-muted">{{ $everlisttype->created_date }}</strong></small></p>
                        <p><small>Updated date:: <strong class="text-muted">{{ $everlisttype->updated_date }}</strong></small></p>
                        <p><small>By:: <a href="{{ $everlisttype->user->url }}">{{ $everlisttype->user->name }}</a></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection