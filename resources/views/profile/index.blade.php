@extends('app') @section('content')

<div class="gray-padding"></div>

<div class="container ">
    <div class="post-cont">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 profile-image">
                    <img src="{{ asset('images/profile-placeholder.gif') }}" alt="">
                </div>
                <div class="col-md-8">
                    <h2>{{ $user->name }}</h2>
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
                                    <div class="col-lg-6">
                                        <p><i class="fa fa-heart"></i> Likes:</p>
                                        <div class="liked-posts">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="2">
                                <p>Account Settings</p>
                            </div>
                            <div class="tab-pane" id="3">
                                <p>Settings: TO BE IMPLEMENTED</p>
                            </div>
                            <div class="tab-pane" id="4">
                                <p>Messages: TO BE IMPLEMENTED</p>
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@endsection
