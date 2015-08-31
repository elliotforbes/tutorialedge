@extends('app') @section('content')

<div class="gray-padding"></div>

<div class="container ">
    <div class="post-cont">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 post-image">
                    <img src="{{ asset('images/profile-placeholder.gif') }}" alt="">
                </div>
                <div class="col-md-8 post-title">
                    <div id="exTab2">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">Overview</a>
                            </li>
                            <li><a href="#2" data-toggle="tab">Without clearfix</a>
                            </li>
                            <li><a href="#3" data-toggle="tab">Solution</a>
                            </li>
                        </ul>

                        <div class="tab-content ">
                            <div class="tab-pane active" id="1">
                                <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
                            </div>
                            <div class="tab-pane" id="2">
                                <h3>Notice the gap between the content and tab after applying a background color</h3>
                            </div>
                            <div class="tab-pane" id="3">
                                <h3>add clearfix to tab-content (see the css)</h3>
                            </div>
                        </div>
                    </div>

                    <h2>{{ $user->name }}</h2>
                    <p>Joined: {{ $user->created_at }}</p>
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
