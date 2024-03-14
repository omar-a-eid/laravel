<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post Details</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <h1>{{ $post->title }}</h1>
      <p>{{ $post->body }}</p>
      <p><strong>Enabled:</strong> {{ $post->enabled ? 'Yes' : 'No' }}</p>
      <p><strong>Published At:</strong> {{ $post->published_at }}</p>
    </div>
  </div>
</div>
</body>
</html>
