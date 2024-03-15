@extends("layouts.main")

@section("title", "Create Post")
@section("content")
  <h1>Create Post</h1>
  {{-- @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif --}}
  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" required value="{{old('title')}}">
      @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" id="body" name="body" required>{{old('body')}}</textarea>
      @error('body')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="enabled" name="enabled" value="1" {{ (! empty(old('enabled')) ? 'checked' : '') }}>
      <label class="form-check-label" for="enabled">Enabled</label>
      @error('enabled')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="published_at">Published At</label>
      <input type="date" class="form-control" id="published_at" name="published_at" required value="{{old('published_at')}}">
      @error('published_at')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>

  @if(isset($success))
  <p class="text-success">{{$success}}</p>
  @endif
@endsection