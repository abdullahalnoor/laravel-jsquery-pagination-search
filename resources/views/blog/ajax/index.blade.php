@foreach($posts as $post)

<div class="article">
  <h2>{{ $post->title }}</h2>
  {{-- {{ $post->content }} --}}
</div>

@endforeach