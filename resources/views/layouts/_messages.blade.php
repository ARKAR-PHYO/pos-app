@if (session('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>SUCCESS!!!</strong> {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif