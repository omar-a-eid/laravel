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
          <a href="{{ route('posts.show', $post->id) }}">
            {{ $post->title }}
          </a>
        </td>
        <td>{{ $post->enabled ? 'Yes' : 'No' }}</td>
        <td>{{ $post->deleted_at }}</td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
