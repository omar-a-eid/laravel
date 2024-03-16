@extends("layouts.main")

@section('title', "Posts Lists")
@section('content')
  <h1>Posts List</h1>
  <h2>

</h2>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number of Posts</th>
      </tr>
    </thead>
    <tbody>
      @if(count($users) > 0)
      @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->posts_count }}</td>
      </tr>
      @endforeach
      @else
        <p>There is no posts found</p>
      @endif
    </tbody>
  </table>
@endsection