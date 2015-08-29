@extends('app')


@section('content')

<div class="container">
   <h2>All Courses</h2>
    <div class="row">
        <div class="course-list">
            @foreach($courses as $course)
            <div class="col-lg-4 course-item">
                <div class="course-content">
                   <img src="/uploads/courses/{{ $course->image_url }}" title="{{ $course->title }}" alt="{{ $course->info }}">
                    <h2>{{ $course->title }}</h2>
                    <p>{{ $course->info }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection