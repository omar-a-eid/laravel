<div class="navbar navbar-light bg-light d-flex justify-content-around">
  <a class="navbar-brand" href="{{ route('posts.index') }}">
      Home
  </a>
  <a class="navbar-brand" href="{{ route('users.index') }}">
    Users
</a>
<div class="dropdown">
    <a class="navbar-brand dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Posts
    </a>
    
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item {{ Route::is('posts.create') ? 'active' : '' }}" href="{{ route('posts.create') }}">Create</a>
        <a class="dropdown-item {{ Route::is('posts.trash') ? 'active' : '' }}" href="{{ route('posts.trash') }}">Trash</a>
    </div>
</div>
@if(!Auth::check())
<a class="navbar-brand" href="{{ route('login') }}">
    login
</a>
<a class="navbar-brand" href="{{ route('register') }}">
    Signup
</a>
@else
<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">
        logout
    </button>
</form>
@endif
</div>
