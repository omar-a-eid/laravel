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
        <th>Title</th>
        <th>Enabled</th>
        <th>Published At</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @if(count($posts) > 0)
      @foreach($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>
          <a href="{{ route('posts.show', ['id' => $post->id]) }}">
            {{ $post->title }}
          </a>
        </td>
        <td>{{ $post->enabled ? 'Yes' : 'No' }}</td>
        <td>{{ $post->published_at }}</td>
        <td>
          <a class="btn btn-primary" href="{{ route('posts.edit', ['id' => $post->id]) }}">Edit</a>
          <form style="display:inline-block;" action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
      @else
        <p>There is no posts found</p>
      @endif
    </tbody>
  </table>
@endsection