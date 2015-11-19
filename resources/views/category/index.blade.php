@extends('app')

@section('featured-top')
<div class="gray-padding">
    
</div>
@endsection

@section('content')
   <div class="gray-bg">
    <div class="container">
     <div class="latest-posts">
       <h2>{{ $category->title }}</h2>
        
          <div class="row">
            @foreach($articles as $article)
             <!-- Story -->
            <div class="col-md-4">
                <a class="block block-link-hover2" href="{{ url('/') }}/{{ $article->slug }}">
                    <img class="img-responsive" src="/uploads/articles/{{ $article->image_url }}" alt="{{ $article->title }}">
                    <div class="block-content">
                        <div class="push">
                            <span class="text-primary">{{ date("d M, Y",strtotime($article->published_at)) }}</span>
                        </div>
                        <h4>{{ $article->title }}</h4>
                    </div>
                </a>
            </div>
            @endforeach
         </div>
         <div class="pagination">
         </div>
    </div>
    </div>
    </div>
@endsection
