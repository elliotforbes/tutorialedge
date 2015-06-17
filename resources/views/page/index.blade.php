@extends('app')

@section('featured-top')
<div class="gray-padding">
    
</div>
@endsection

@section('content')
     <div class="latest-posts">
       <h2>{{ $page->title }}</h2>
        <div class="row equal-height">
           @foreach ($articles as $article)
           <div class="article-box">
                <div class="col-sm-6 col-xs-12 col-lg-3 col-md-4">
                    <img class="img-responsive image-responsive-centered" alt="Woman writing in a notebook" title="Woman writing in a notebook" src="/uploads/articles/{{ $article->image_url }}">
                    <h3><a href="/{{ $article->slug }}">{{ $article->title }}</a></h3>
    <!--
                    <div class="article-info">
                       <p>

                        </p>
                    </div>
    -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
