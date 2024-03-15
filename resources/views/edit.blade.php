@extends("layouts.main")

@section("title", "Edit Post")

@section("content")
  <h1>Edit Post</h1>
  <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" id="body" name="body" required>{{ $post->body }}</textarea>
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="enabled" name="enabled" value="1" {{ $post->enabled ? 'checked' : '' }}>
      <label class="form-check-label" for="enabled">Enabled</label>
    </div>
    <div class="form-group">
      <label for="published_at">Published At</label>
      <input type="datetime-local" class="form-control" id="published_at" name="published_at" value="{{ $post->published_at }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
  @if(isset($success))
  <p class="text-success">{{$success}}</p>
  @endif
@endsection