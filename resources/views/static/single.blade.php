@extends('app')

@section('title')
{{ $article->title }}
@endsection

@section('meta')
<meta name="description" content="{{ $article->excerpt }}">
@endsection

@section('content')
  <div class="post-content">
			<div class="row">
				<div class="col-lg-9">
					<div class="post">
						<div class="post-header">
							<h2>{{$article->title}}</h2>
							<div class="post-info">
								<p>Author: Elliot Forbes</p>
								<p>{{ date("d M, Y",strtotime($article->published_at)) }} 
								</p>
							</div>
							<div class="post-share">
								<!-- Accent-colored raised button -->
								<button class="facebook mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
								Facebook
								</button>
								<!-- Accent-colored raised button -->
								<button class="twitter mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
								Twitter
								</button>
								<!-- Accent-colored raised button -->
								<button class="google-plus mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
								Google+
								</button>
							</div>
						</div>
						
                        <div class="clear"></div>
                        
						<div class="post-content">
                             {!! $article->body !!}
                        </div>
						
						<div id="disqus_thread"></div>
						<script>
						/**
						* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
						* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
						*/
						/*
						var disqus_config = function () {
						this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
						this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
						};
						*/
						(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						
						s.src = '//tutorialedgenet.disqus.com/embed.js';
						
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

						
					</div>
									
				</div>
				<div class="col-lg-3">
					<div class="sidebar">
						<h2>{{ $category->title }}</h2>
						<p>{{ $category->info }}</p>
						<h3>Table of Contents</h3>
						<br/>
						<table class="table">
							<tbody>
								@foreach ($articles as $single)
								<tr>
									<td><a href="{{ $single->slug }}">{{ $single->title }}</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<div class="course-content content">
			<div class="container">
				<h2>Related Articles: </h2>
				<div class="row">
					<div class="col-md-4">
						<div class="demo-card-wide mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Getting Started with ExpressJs</h2>
							</div>
							<div class="mdl-card__supporting-text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Mauris sagittis pellentesque lacus eleifend lacinia...
							</div>
							<div class="mdl-card__actions mdl-card--border">
								<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
								Get Started
								</a>
							</div>
							<div class="mdl-card__menu">
								<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								<i class="material-icons">share</i>
								</button>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="demo-card-wide mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Getting Started with ExpressJs</h2>
							</div>
							<div class="mdl-card__supporting-text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Mauris sagittis pellentesque lacus eleifend lacinia...
							</div>
							<div class="mdl-card__actions mdl-card--border">
								<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
								Get Started
								</a>
							</div>
							<div class="mdl-card__menu">
								<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								<i class="material-icons">share</i>
								</button>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="demo-card-wide mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Getting Started with ExpressJs</h2>
							</div>
							<div class="mdl-card__supporting-text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Mauris sagittis pellentesque lacus eleifend lacinia...
							</div>
							<div class="mdl-card__actions mdl-card--border">
								<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
								Get Started
								</a>
							</div>
							<div class="mdl-card__menu">
								<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								<i class="material-icons">share</i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
@endsection
