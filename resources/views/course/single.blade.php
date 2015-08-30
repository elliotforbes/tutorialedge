@extends('app')


@section('content')
<div class="gray-padding"></div>
<div class="container">
    <div class="course-content">
       <div class="row">
           <div class="col-lg-8">
                <h2>Programming 2D Pong with LWJGL 3<small><br/>A Complete HTML5 Programming Course for Beginners</small></h2>
                <div class="course-ratings">
                    <p>
                        <span class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>
                         58 ratings , 12 Users
                    </p>
                </div>
                <div class="course-image">
                    <img src="http://tutorialedge.net/uploads/courses/lwjgl3-2d-pong-course.png" alt="">
                </div>
                
                
                <div class="course-info">
                    <h3>About This Course:</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex omnis, animi blanditiis quasi hic delectus suscipit, cupiditate optio eveniet dicta dolorum illum sequi accusamus non veniam deserunt nesciunt ducimus laboriosam.</p>
                    <h4>Prerequisites</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat doloremque, architecto ullam laudantium labore iste minima eos voluptatem, corporis voluptatum aspernatur nostrum reprehenderit doloribus cumque. Commodi quidem, eum officiis quas.</p>
                    <ul>
                        <li>Requisite 1</li>
                        <li>Requisite 2</li>
                        <li>Requisite 3</li>
                    </ul>
                    <h4>Subheading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis ipsa quaerat laborum, repellendus, iure modi, neque, nihil numquam molestiae ipsam ducimus placeat reiciendis facilis. Ex soluta beatae voluptates quod fugit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis ipsa quaerat laborum, repellendus, iure modi, neque, nihil numquam molestiae ipsam ducimus placeat reiciendis facilis. Ex soluta beatae voluptates quod fugit.</p>
                    <ul>
                        <li>Java Frameworks</li>
                        <li>OpenGL</li>
                        <li>Git Version Control</li>
                        <li>OpenAL</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique voluptatem, commodi cum cupiditate rerum laboriosam quas, quia dicta tempora culpa magni quibusdam delectus unde maiores officiis necessitatibus explicabo earum ab.</p>
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
                            <tr class='clickable-row' data-href='url://'>
                                <td class="centered">1</td>
                                <td>Setting up Eclipse and LWJGL 3</td>
                                <td class="centered">Read</td>
                            </tr>
                            <tr class='clickable-row' data-href='url://'>
                                <td class="centered">2</td>
                                <td>Creating our Game Window</td>
                                <td class="centered">Read</td>
                            </tr>
                            <tr class='clickable-row' data-href='url://'>
                                <td class="centered">3</td>
                                <td>Making our Paddle Classes</td>
                                <td class="centered">Read</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="course-sidebar">                   
                    <h3 class="register-header">Course Details</h3>
                    <p class="register-text">Gain access to this course and join the growing number of people enjoying courses like this one everyday.</p>
                    <button class="btn btn-primary register-btn">Register Now!</button>
                    
                   
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

<script>
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });

</script>

@endsection