@extends('app')


@section('content')
<div class="course-content content">
    <div class="container">
        <h2>{{ $category->title }}</h2>
        <div class="row">
            @foreach($articles as $article)
            <div class="col-md-4">
                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title" style="background-image: url('{{url('/uploads/articles/') }}/background-template.jpg')">
                        <h2 class="mdl-card__title-text">{{ $article->title }}</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        {{ $article->excerpt }}
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('/') }}/{{ $article->slug }}">
                        Get Started
                        </a>
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection