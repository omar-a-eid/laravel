
@extends("layouts.main")

@section('title', "Show Single Post")
@section('content')
  @if(! empty($post))
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <h1>{{ $post->title }}</h1>
      <h4>{{$post->user->name}}</h4>
      @isset($post->image)
          <div class='img-fluid'>
            <img width="200px" src="{{Storage::disk('public')->url($post->image) }}" alt="alt" />
          </div>
        @endisset
      <p>{{ $post->body }}</p>
      <p><strong>Enabled:</strong> {{ $post->enabled ? 'Yes' : 'No' }}</p>
      <p><strong>Published At:</strong> {{ $post->published_at }}</p>
    </div>
  </div>
  @else
    <p>There is no post</p>
  @endif
@endsection
