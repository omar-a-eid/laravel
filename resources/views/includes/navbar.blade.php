<div class="navbar navbar-light bg-light d-flex justify-content-around">
  <a class="navbar-brand" href="{{ route('posts.index') }}">
      Home
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
</div>
