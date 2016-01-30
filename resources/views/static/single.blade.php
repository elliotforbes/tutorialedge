@extends('app')

@section('title')
{{ $article->title }}
@endsection

@section('meta')
<meta name="description" content="{{ $article->excerpt }}">
<link rel="canonical" href="<?php echo $_GET['page']; ?>" />
@endsection

@section('content')
<div class="post-container">
  <div class="post-content">
			<div class="row">
				<div class="col-lg-9">
					<div class="post">
						<div class="post-header">
                            <div class="post-image">
                                <img src="{{ url('/uploads/articles')}}/{{ $article->image_url }}" />
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
