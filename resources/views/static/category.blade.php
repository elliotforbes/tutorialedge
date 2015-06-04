@extends('app')

@section('title')
Course Homepage
@endsection

@section('content')
     <div class="latest-posts">
       <h2>Category Homepage</h2>
        <div class="row">
           @foreach ($articles as $article)
            <div class="col-sx-12 col-sm-6s col-md-3">
                <img class="img-responsive image-responsive-centered" alt="Woman writing in a notebook" title="Woman writing in a notebook" src="{{ asset('/uploads/articles/$article->image_url') }}">
                <h3><a href="/{{ $article->slug }}">{{ $article->title }}</a></h3>
                <div>
                    {{ $article->excerpt }}
                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection
