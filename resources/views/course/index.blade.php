@extends('app')


@section('content')

<div class="course-content content">
    <div class="container">
        <h2>All Courses</h2>
        <div class="row">
            @foreach($courses as $course)
            <div class="col-md-4">
                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">{{ $course->title }}</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        {{ $course->info }}
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('/course') }}/{{ $course->slug }}">
                        Get Started
                        </a>
                    </div>
                    <div class="mdl-card__menu">
                        <button id="share1" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                        <i class="material-icons">share</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="share1">
                            <li class="mdl-menu__item">Facebook</li>
                            <li class="mdl-menu__item">Twitter</li>
                            <li disabled class="mdl-menu__item">Google+ </li>
                            <li class="mdl-menu__item">Mail</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection