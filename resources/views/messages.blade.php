
@if ( Session::has('errors'))
<div class="alert alert-danger" align="center">
<p>{{ $errors }}</p>
</div>
@endif
@if (session()->has('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif
