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
                                <th scope="row">{{ $everlisttype->id }}</th>
                                <td>{{ $everlisttype->everlisttype }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <User-Info :model="{{ $everlisttype }}" created="Created Date:" updated="Updated Date:"></User-Info>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection