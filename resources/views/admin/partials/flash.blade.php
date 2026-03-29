@if (session('status'))
  <div class="admin-alert admin-alert-success">{{ session('status') }}</div>
@endif

@if ($errors->any())
  <div class="admin-alert admin-alert-error">
    @foreach($errors->all() as $error)
      <div>{{ $error }}</div>
    @endforeach
  </div>
@endif
