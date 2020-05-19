@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">{{ __('EverList Master') }}</div>
                    <div class="card-body">
                        <a href="{{ route('everlistmasters.create') }}" class="btn btn-success mr-2"><i class="cil-plus btn-icon mr-2"></i>{{ __('Create EverList Master') }}</a>
                    </div>
                    <br>
                    {{-- <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">EverList Type</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @forelse ($everlistmaster as $ever)
                            <tr>
                                <th scope="row">{{ $ever->id }}</th>
                                <td>{{ $ever->everlisttype }}</td>
                                <td>
                                    <a href="{{ route('everlisttype.show', $ever->id) }}" class="btn btn-primary btn-sm"><i class="cil-zoom-in btn-icon mr-2"></i>View</a>
                                    <a href="{{ route('everlisttype.edit', $ever->id) }}" class="btn btn-success btn-sm"><i class="cil-pencil btn-icon mr-2"></i>Edit</a>
                                    <form class="form-delete" action="{{ route('everlisttype.destroy', $ever->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure??')"><i class="cil-trash btn-icon mr-2"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <h3>You Don't Have Any Record In This.</h3>
                            @endforelse
                        </tbody>   
                    </table>
                    {{ $everlisttypes->links() }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection