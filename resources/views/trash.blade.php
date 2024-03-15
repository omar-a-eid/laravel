
@extends("layouts.main")

@section("title", "Trash Posts")
@section("content")
@if(count($posts) > 0)
<h1>Posts List</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Enabled</th>
      <th>Deleted At</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <td>{{ $post->id }}</td>
      <td>
        <a href="{{ route('posts.show', ['id' => $post->id]) }}">
          {{ $post->title }}
        </a>
      </td>
      <td>{{ $post->enabled ? 'Yes' : 'No' }}</td>
      <td>{{ $post->deleted_at }}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@else
  <p>There is no posts</p>
@endif
@endsection