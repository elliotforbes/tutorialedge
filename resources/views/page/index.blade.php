@extends('app')

@section('featured-top')

@endsection

@section('content')
     <div class="latest-posts">
       <h2>Category Homepage</h2>
        <div class="row">
           @foreach ($articles as $article)
            <div class="col-sm-6 col-xs-12 col-lg-3 col-md-4">
                <img class="img-responsive image-responsive-centered" alt="Woman writing in a notebook" title="Woman writing in a notebook" src="/uploads/articles/{{ $article->image_url }}">
                <h3><a href="/{{ $article->slug }}">{{ $article->title }}</a></h3>
                <div class="article-info">
                   <p>
                        {{ $article->excerpt }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
