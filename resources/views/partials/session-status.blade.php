

@if(session('status'))
  <div class="mx-auto col-lg-8 my-4 col-sm-10 alert alert-success alert-dismissible fade show" role="alert">
    <strong><p>{{ session('status') }}</p></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

@endif
