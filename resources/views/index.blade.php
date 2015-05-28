@extends('app')

@section('content')
     <div class="latest-posts">
       <h2>Popular Courses</h2>
        <div class="row"> 
           
           @foreach ($categories as $category)
            <div class="col-md-3">
               <div class="course-box">
                    <img class="img-responsive image-responsive-centered" alt="{{ $category->slug }}" title="{{ $category->slug }}" src="//lh5.ggpht.com/bkmfzv_U-lHdif9miQDh9bquTN-d35VM6c1TGIHJmmCr7YzFmgWB0EtawFh4zadk02BDo5VP2zmCdfOc9g=s355#w=1724&amp;h=1060" />
                    <h3><a href="/{{ $category->id }}">{{ $category->title }}</a></h3>
                    <div>
                        {{ $category->excerpt }}
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection
