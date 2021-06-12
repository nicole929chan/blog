<x-layout>
    @include('_posts-header')
    
    @foreach ($posts as $post)
    <article>
        <h1>{!! $post->title !!}</h1>
        <small>created at: {{ $post->created_at }}</small>
        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name  }}</a> in <a href="#">{{ $post->category->name }}</a>
        </p>
        <div>
            {!! $post->body !!}
        </div>
    </article>
    <hr>
    @endforeach
</x-layout>