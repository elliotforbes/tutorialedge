@extends('app')

@section('content')
     <div class="latest-posts">
       <h2>Category Homepage</h2>
        <div class="row">
           @foreach ($articles as $article)
            <div class="col-sm-3 col-xs-3 col-lg-3 col-md-3">
                <img class="img-responsive image-responsive-centered" alt="Woman writing in a notebook" title="Woman writing in a notebook" src="/uploads/articles/{{ $article->image_url }}">
                <h3><a href="/{{ $article->slug }}">{{ $article->title }}</a></h3>
                <p>
                    {{ $article->excerpt }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
@endsection
