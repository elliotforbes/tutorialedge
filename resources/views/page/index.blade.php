@extends('app')

@section('content')
     <div class="latest-posts">
       <h2>Category Homepage</h2>
        <div class="row">
           @foreach ($articles as $article)
            <div class="col-md-3">
                <img class="img-responsive image-responsive-centered" alt="Woman writing in a notebook" title="Woman writing in a notebook" src="/uploads/articles/{{ $article->image_url') }}">
                <h3><a href="/{{ $article->slug }}">{{ $article->title }}</a></h3>
                <div>
                    {{ $article->excerpt }}
                </div>
            </div>
            @endforeach
            <div class="col-md-3">

            </div>

        </div>
    </div>
@endsection
