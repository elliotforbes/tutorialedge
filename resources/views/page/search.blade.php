@extends('app')

@section('featured-top')
<div class="gray-padding">
    
</div>
@endsection

@section('content')
    <div class="container">
     <div class="latest-posts">
       <h2>Search Results</h2>
          <div class="row">
            
            @if (count($articles) === 0)
                <div class="search-title">
                    <h3>No Tutorials Found Matching That Search Term!</h3>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                {!! Form::open(array('route' => 'queries.store', 'class' => 'form')) !!}
                    <div class="form-group">
                    {!! Form::text('search', null,
                        array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Search Again')) !!}   
                    </div>
                    <div class="row">
                       <div class="col-lg-4"></div>
                       <div class="col-lg-4">
                        <div class="form-group">
                        {!! Form::submit('Search Now',
                            array('class'=>'btn btn-primary search-btn')) !!}
                        </div>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                {!! Form::close() !!}
                </div>
                <div class="col-lg-3"></div>
            @elseif (count($articles) >= 1)
               <div class="search-title">
                    <h3>Search Results for: {{ $query }}</h3>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                {!! Form::open(array('route' => 'queries.store', 'class' => 'form')) !!}
                    <div class="form-group">
                    {!! Form::text('search', null,
                        array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Search Again')) !!}   
                    </div>
                    <div class="row">
                       <div class="col-lg-4"></div>
                       <div class="col-lg-4">
                        <div class="form-group">
                        {!! Form::submit('Search Now',
                            array('class'=>'btn btn-primary search-btn')) !!}
                        </div>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                {!! Form::close() !!}
                </div>
                <div class="col-lg-3"></div>
               
                @foreach($articles as $article)
                <div class="article-box">
                    <div class="col-sm-6 col-xs-12 col-lg-4 col-md-4">
                        <img class="img-responsive image-responsive-centered article-image" alt="{{ $article->excerpt }}" title="{{ $article->excerpt }}" src="/uploads/articles/{{ $article->image_url }}">
                        <div class="article-info">
                            <h3><a href="/{{ $article->slug }}">{{ $article->title }}</a></h3>
    <!--                        <p> </p>-->
                        </div>
                    </div>
                </div>
                @endforeach
                
                <div class="pagination"> <?php echo $articles->render(); ?> </div>
            @endif
         </div>
    </div>
    </div>
@endsection
