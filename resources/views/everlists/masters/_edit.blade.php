@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Edit EverList Master
                    </div>
                    <div class="card-body">
                        <form action="{{ route('everlistmasters.update', $everlistmaster->id) }}" method="POST">
                            @method('PUT')
                            @include('everlists.masters._form', ['buttonText' => "Update"])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection