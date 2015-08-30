@extends('app')


@section('content')
<div class="gray-padding"></div>
<div class="container">
    <div class="course-content">
       <div class="row">
           <div class="col-lg-8">
                <h2>{{ $course->title }}<small><br/>{{ $course->tagline }}</small></h2>
                <div class="course-ratings">
                    <p>
                        <span class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>
                         58 ratings
                    </p>
                </div>
                <div class="course-image">
                    <img src="/uploads/courses/{{ $course->image_url }}" alt="{{ $course->tagline }}">
                </div>
                
                
                <div class="course-info">
                    {!! $course->body !!}
                </div>
                <div class="course-tutorial-list">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="centered">#</td>
                                <td>Title</td>
                                <td class="centered">Link</td>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $iterator=0; ?>
                           @foreach($articles as $article)
                            <?php $iterator++; ?>
                            <tr>
                                <td class="centered"><?php echo $iterator; ?></td>
                                 <td>{{ $article->title }}</td>
                                <td class="centered"><a href="/{{ $article->slug }}">Read</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="course-sidebar">                   
                    <h3 class="register-header">Course Details</h3>
                    <p class="register-text">Gain access to this course and join the growing number of people enjoying courses like this one everyday.</p>
                    <a href="/auth/register"><button class="btn btn-primary register-btn">Register Now!</button></a>
                    
                   
                   <div class="ad-block">
                       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Tutorial-Edge-Sidebar -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-6782067367590597"
                     data-ad-slot="6639668084"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                   </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection