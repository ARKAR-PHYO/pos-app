@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('EverList Masters') }}</div>
                @include('layouts._messages')
                <div class="card-body">
                    <div class="row ml-1">
                        <a href="{{ route('everlistmasters.create') }}" class="btn btn-success mr-2"><i class="cil-plus btn-icon mr-2"></i>{{ __('Create EverList Master') }}</a>
                    </div>
                    <br>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">EverList Type</th>
                                <th scope="col">Phone No</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @forelse ($master as $ever)
                            <tr>
                                <th scope="row">{{ $ever->id }}</th>
                                <td>{{ $ever->name }}</td>
                                <td>{{ $ever->everlisttype->everlisttype }}</td>
                                <td>{{ $ever->phno }}</td>
                                <td>
                                    <a href="{{ route('everlistmasters.show', $ever->id) }}" class="btn btn-primary btn-pill btn-sm"><i class="cil-zoom-in btn-icon mr-2"></i>{{ __('View') }}</a>
                                    <a href="{{ route('everlistmasters.edit', $ever->id) }}" class="btn btn-success btn-pill btn-sm"><i class="cil-pencil btn-icon mr-2"></i>{{ __('Edit') }}</a>
                                    <form class="form-delete" action="{{ route('everlistmasters.destroy', $ever->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-pill btn-sm" onclick="return confirm('Are You Sure??')"><i class="cil-trash btn-icon mr-2"></i>{{ __('Delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <h3>You Don't Have Any Record In This.</h3>
                            @endforelse
                        </tbody>   
                    </table>
                    {{ $master->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection