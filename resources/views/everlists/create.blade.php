@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Create EverList Type
                    </div>
                    <div class="card-body">
                        <form action="{{ route('everlisttype.store') }}" method="POST">
                            @include('everlists._form', ['buttonText' => "Save"])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection