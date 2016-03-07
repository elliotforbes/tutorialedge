@extends('app')

@section('featured-top')
<div class="gray-padding">
    
</div>
@endsection

@section('content')
<div class="post-container" ng-app="myApp">
    <div class="post-content">
     <div class="latest-posts" ng-controller="SearchController">
       <h2>Search Results</h2>
          <div class="row">
              <form>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Search Tutorials:</label>
                        <input type="text" class="form-control" placeholder="search now..." ng-model="query" ng-change="updateValue()">
                    </div>
                </div>
              </form>
              <hr/>
              <div class="col-lg-12">
                <div class="search-results">
                    <div class="row">
                    <div class="result" ng-repeat="result in results | filter: query">
                        <div class="col-lg-2">
                            <img src="http://tutorialedge.net/uploads/articles/<%result.image_url%>" alt="<%result.excerpt%>" />
                        </div>
                        <div class="col-lg-10">
                            <a href="http://tutorialedge.net/<%result.slug%>"><h5><%result.title%></h5></a>
                            <p class="url"><%result.excerpt%></p>
                            <a href="http://tutorialedge.net/<%result.slug%>">Read Now</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                    </div>
                </div>
              </div>
              
            </div>
        </div>
    </div>
</div>
@endsection

@section('includes')
<script src="{{ secure_asset('js/angular.min.js', Request::secure()) }}"></script>
<script src="{{ secure_asset('js/components/SearchController.js', Request::secure()) }}?v=12"></script>
@endsection