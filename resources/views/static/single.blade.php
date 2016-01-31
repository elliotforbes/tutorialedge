@extends('app')

@section('title')
{{ $article->title }}
@endsection

@section('meta')
<meta name="description" content="{{ $article->excerpt }}">
@endsection

@section('content')
<div class="post-container">
  <div class="post-content">
			<div class="row">
				<div class="col-lg-9">
					<div class="post">
						<div class="post-header">
                            <div class="post-image">
                                <img src="{{ url('/uploads/articles/')}}/{{ $article->image_url }}" alt="{{ $article->excerpt }}"/>
                            </div>                            
							<h2>{{$article->title}}</h2>
							<div class="post-info">
								<p>Author: Elliot Forbes</p>
								<p>{{ date("d M, Y",strtotime($article->published_at)) }}
								</p>
							</div>
							<div class="post-share">
								<!-- Accent-colored raised button -->
								<!-- Facebook -->
								<a href="http://www.facebook.com/sharer/sharer.php?u=http://tutorialedge.net/{{ $article->slug }}" target="_blank" > 
									<button class="facebook mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
									Facebook
									</button>
								</a>
								<!-- Accent-colored raised button -->
								<a href="http://twitter.com/share?url=http://tutorialedge.net/{{ $article->slug }}&via=@tutorialedge" target="_blank">
									<button class="twitter mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
									Twitter
									</button>
								</a>
								<!-- Accent-colored raised button -->
								<!-- Google Plus -->
                            	<a href="https://plus.google.com/share?url=http://tutorialedge.net/{{ $article->slug }}" target="_blank">
									<button class="google-plus mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
									Google+
									</button>
								</a>
							</div>
						</div>
						
                        <div class="clear"></div>
                        
						<div class="post-content">
                             {!! $article->body !!}
                        </div>
                        
                        <div class="related-posts">
                            <h4>Related Posts</h4>
                            <div class="row">
                                @foreach($related as $post)
                                <div class="col-lg-4">
                                    <div class="demo-card-square mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title mdl-card--expand" style="background-image: url('{{url('/uploads/articles/') }}/background-template.jpg')">
                                        <h2 class="mdl-card__title-text">{{ $post->title }}</h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        {{ $post->excerpt }}
                                    </div>
                                    <div class="mdl-card__actions mdl-card--border">
                                        <a href="{{ url('/') }}/{{$post->slug}}"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        Read Now
                                        </a>
                                    </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
						
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
					<div id="disqus_thread"></div>
					<script type="text/javascript">
						/* * * CONFIGURATION VARIABLES * * */
						var disqus_shortname = 'tutsdeve';
						/* * * DON'T EDIT BELOW THIS LINE * * */
						(function() {
							var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
							dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
							(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
						})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
				
						
					</div>
				    
               
                    			
				</div>
				<div class="col-lg-3">
					<div class="sidebar">
                        <div class="social-sidebar-share">
                             <div class="row">
                                 <div class="col-lg-6 twitter-share">
                                    <a href="http://twitter.com/share?url=http://tutorialedge.net/{{ $article->slug }}&via=tutorialedge" target="_blank">
                                    <div class="twitter">
                                         <i class="fa fa-twitter"></i>
                                     </div>
                                    <p class="counter">
                                        0
                                    </p>
                                    <p class="share-button">
                                        Tweet
                                    </p>
                                    </a>
                                 </div>
                                 <div class="col-lg-6 facebook-share">
                                     <a href="http://www.facebook.com/sharer/sharer.php?u=http://tutorialedge.net/{{ $article->slug }}" target="_blank" > 
								    <div class="facebook">
                                         <i class="fa fa-facebook"></i>
                                     </div>
                                    <p class="counter">
                                        0
                                    </p>
                                    <p class="share-button">
                                        Share
                                    </p>
                                    </a>
                                 </div>
                                  <div class="col-lg-6 google-share">
                                     <a href="https://plus.google.com/share?url=http://tutorialedge.net/{{ $article->slug }}" target="_blank">
                                     <div class="google">
                                         <i class="fa fa-google-plus"></i>
                                     </div>
                                    <p class="counter">
                                        0
                                    </p>
                                    <p class="share-button">
                                        Share
                                    </p>
                                    </a>
                                 </div>
                                 <div class="col-lg-6 email-share">
                                     <a href="mailto:?subject={{ $article->title }} by TutorialEdge.net&amp;body=Check out this article,{{ url('/') }}/{{ $article->slug }}"
                                       title="Share by Email">
                                     <div class="email">
                                         <i class="fa fa-envelope"></i>
                                     </div>
                                    <p class="counter">
                                        0
                                    </p>
                                    <p class="share-button">
                                        Share
                                    </p>
                                    </a>
                                 </div>
                             </div>
                        </div>
                        
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
@endsection
