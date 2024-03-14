<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts Lists</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <h1>Posts List</h1>
  <h2>
  <a  class="link" href="{{ route('posts.trash')}}">
            Trash
          </a>
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
      @foreach($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>
          <a href="{{ route('posts.show', $post->id) }}">
            {{ $post->title }}
          </a>
        </td>
        <td>{{ $post->enabled ? 'Yes' : 'No' }}</td>
        <td>{{ $post->published_at }}</td>
        <td>
          <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
          <form style="display:inline-block;" action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
