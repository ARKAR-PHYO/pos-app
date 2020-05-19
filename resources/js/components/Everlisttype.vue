<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('EverList Type') }}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @include('layouts._messages')
                            <a href="{{ route('everlisttype.create') }}" class="btn btn-success m-2"><i class="cil-plus btn-icon mr-2"></i>{{ __('Add EverListy Type') }}</a>
                        </div>
                        <br>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">EverList Type</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($everlisttypes as $ever)
                                <tr>
                                    <th scope="row">{{ id }}</th>
                                    <td>{{ everlisttype }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">View</a>
                                        <a href="" class="btn btn-success"><i class="cil-pencil btn-icon mr-2"></i>Edit</a>
                                        <a href="#" class="btn btn-danger"><i class="cil-trash btn-icon mr-2"></i>Del</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>   
                        </table>
                        <!-- {{-- {{ $ever->links() }} --}} -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>
        
</template>
<script>
export default {
    props: ['ever'],
    
    data() {
        return {
            id: this.ever.id,
            everlisttype: this.ever.everlisttype,
        }
    },
}
</script>