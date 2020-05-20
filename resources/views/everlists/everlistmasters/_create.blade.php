@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">{{ __('Create EverList Type') }}</div>
                    <div class="card-body">
                        <form action="{{ route('everlistmasters.store') }}" method="POST">
                            @include('everlists.everlistmasters._form', ['buttonText' => "Save"])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection