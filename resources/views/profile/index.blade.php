@extends('app') @section('content')

<div class="gray-padding"></div>

<<<<<<< HEAD
<div class="container">
    <div class="profile post-cont">
=======
<div class="container ">
    <div class="profile-cont">
>>>>>>> cbdfe6e44787b820fffa7feb35ef4a68d68caf18
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 profile-image">
                    <img src="{{ asset('images/profile-placeholder.gif') }}" alt="">
                </div>
                <div class="col-md-8">
                    <h2>Username: {{ $user->name }}</h2>
                    <p>Joined: {{ $user->created_at }}</p>
                </div>
                <div class="col-md-12 post-title">
                    <div id="exTab2">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab"><i class="fa fa-home"></i> Overview</a>
                            </li>
                            <li><a href="#2" data-toggle="tab"><i class="fa fa-plus"></i> Account</a></li>
                            <li><a href="#3" data-toggle="tab"><i class="fa fa-cog"></i> Settings</a>
                            </li>
                            <li><a href="#4" data-toggle="tab"><i class="fa fa-envelope-o"></i> Messages</a>
                            </li>
                        </ul>

                        <div class="tab-content ">
                            <div class="tab-pane active" id="1">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p><i class="fa fa-heart"></i> Likes:</p>
                                        @if (count($likes) === 0)
                                        <p>No likes yet. Find an article you like and click on the heart in the sidebar.</p>
                                        @elseif (count($articles) >= 1)
                                            @foreach($likes as $like)
                                            <div class="liked-posts">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <img src="{{ asset('/uploads/articles/laravel5.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <h4>Creating our Game Window with LWJGL 3</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa reiciendis quis est ipsum, inventore animi cumque et excepturi laudantium quas, sed sequi adipisci expedita labore, esse nisi nihil, facere saepe.</p>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <span class="heart"><a href="#"><i class="fa fa-heart"></i></a></span>
                                                        <span class="trash"><a href="#"><i class="fa fa-trash"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="2">
                                <h3>Account Settings</h3>
                                <table class="price-tables table table-bordered">
                                    <thead>
                                        <tr>
                                            <td><b>Access</b></td>
                                            <td><b>Perks</b></td>
                                            <td><b>Pricing</b></td>
                                            <td><b>Buy Now</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                           <td>Access to Free Materials</td>
                                           <td>Adverts on site</td>
                                           <td>$0.00</td>
                                           <td>Basic Plan</td>
                                       </tr>
                                        <tr>
                                            <td>Access to Everything on the site.</td>
                                            <td>No Adverts on the Site</td>
                                            <td>$4.99/month</td>
                                            <td><button class="btn btn-subscribe">Buy Now</button></td>
                                        </tr>
                                        <tr>
                                            <td>Access to Everything on the site.</td>
                                            <td>$25 Digital Ocean Credit</td>
                                            <td>$7.99/month</td>
                                            <td><button class="btn btn-subscribe">Buy Now</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="3">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <p>Settings:</p>
                                    {!! Form::model($user, ['url' => 'users/' . $user->name, 'method' => 'PATCH', 'files'=>true, 'novalidate' => 'novalidate']) !!}
                                        
                                                
                                     {!! Form::close() !!}
                                    </div>
                                    <div class="col-lg-6">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="4">
                                <p>Messages: </p>
                            </div>
                        </div>
                    </div>

                    
                </div>

            </div>
        </div>

        <div class="padding-top"></div>
        <div class="padding-top"></div>

    </div>
</div>
@endsection
