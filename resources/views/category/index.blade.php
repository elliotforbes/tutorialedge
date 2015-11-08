@extends('app')

@section('featured-top')
<div class="gray-padding">
    
</div>
@endsection

@section('content')
    <div class="container">
     <div class="latest-posts">
       <h2>{{ $category->title }}</h2>
        
          <div class="row">
            @foreach($articles as $article)
            <div class="article-box">
                <div class="col-sm-6 col-xs-12 col-lg-4 col-md-4">
                    <img class="img-responsive image-responsive-centered article-image" alt="{{ $article->excerpt }}" title="{{ $article->excerpt }}" src="/uploads/articles/{{ $article->image_url }}">
                    <div class="article-info">
                        <h3><a href="{{ url('/') }}/{{ $article->slug }}">{{ $article->title }}</a></h3>
<!--                        <p> </p>-->
                    </div>
                </div>
            </div>
            @endforeach
         </div>
         <div class="pagination">
         </div>
    </div>
    </div>
@endsection
