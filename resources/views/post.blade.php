<x-layout>

    <article>

        <h1> {!! $post->title !!}</h1>
        <div>
            {!! $post->body !!}
        </div>
    </article>


    By<a href="/authors/{{$post->author->username}}" >  {{$post->author->name}}  </a>  In: <a href="/categories/{{ $post->category->slug }}"> {{$post->category->name}}</a>

    <br>
    <a href="/">Go Back</a>

</x-layout>

