@extends('app')

@section('title')
{{ $article->title }}
@endsection

@section('meta')
<meta name="description" content="{{ $article->excerpt }}">
@endsection

@section('content')
   <div class="title-container">
      <div class="contaienr">
           <h1>{{ $article->title }}</h1>
           <p class="author-bar"><img alt="" src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/3/005/061/3bf/0bc92cc.jpg" srcset="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/3/005/061/3bf/0bc92cc.jpg" class="avatar avatar-32 photo" height="32" width="32"> 
                       By Elliot Forbes  <span class="separator">•</span>   On {{ date("d M, Y",strtotime($article->published_at)) }} <span class="separator">•</span>   In {{ $page->title }}</p>
           <div class="clear"></div>
       </div>
   </div>
   
    <div class="container">
    <div class="post-cont">
        <div class="row">
            <div class="col-md-9">             
                <div class="post-image">
                   <img src="/uploads/articles/{{ $article->image_url }}" alt="{{ $article->excerpt }}">
               </div>
                <div class="post-content">
                    <div class="share-buttons">
                       <!-- Twitter -->
                            <a href="http://twitter.com/share?url=http://tutorialedge.net/{{ $article->slug }}&via=@tutorialedge" target="_blank" class="share-btn twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <!-- Google Plus -->
                            <a href="https://plus.google.com/share?url=http://tutorialedge.net/{{ $article->slug }}" target="_blank" class="share-btn google-plus">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <!-- Facebook -->
                            <a href="http://www.facebook.com/sharer/sharer.php?u=http://tutorialedge.net/{{ $article->slug }}" target="_blank" class="share-btn facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <!-- StumbleUpon (url, title) -->
                            <a href="http://www.stumbleupon.com/submit?url=http://tutorialedge.net/{{ $article->slug }}&title={{ $article->title }}" target="_blank" class="share-btn stumbleupon">
                                <i class="fa fa-stumbleupon"></i>
                            </a>

                            <!-- Reddit (url, title) -->
                            <a href="http://reddit.com/submit?url=http://tutorialedge.net/{{ $article->slug }}&title={{ $article->title }}" target="_blank" class="share-btn reddit">
                                <i class="fa fa-reddit"></i>
                            </a>

                            <!-- LinkedIn -->
                            <a href="http://www.linkedin.com/shareArticle?url=http://tutorialedge.net/{{ $article->slug }}&title={{ $article->title }}" target="_blank" class="share-btn linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>

                            <!-- Email -->
                            <a href="mailto:?subject=<SUBJECT&body=<BODY>" target="_blank" class="share-btn email">
                                <i class="fa fa-envelope"></i>
                            </a>
                    </div>
                    {!! $article->body !!}
                    <br/>
                    <h2>Share This Tutorial:</h2>
                    <br/>
                    <div class="share-buttons">
                        <!-- Twitter -->
                            <a href="http://twitter.com/share?url=http://tutorialedge.net/{{ $article->slug }}&via=@tutorialedge" target="_blank" class="share-btn twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <!-- Google Plus -->
                            <a href="https://plus.google.com/share?url=http://tutorialedge.net/{{ $article->slug }}" target="_blank" class="share-btn google-plus">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <!-- Facebook -->
                            <a href="http://www.facebook.com/sharer/sharer.php?u=http://tutorialedge.net/{{ $article->slug }}" target="_blank" class="share-btn facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <!-- StumbleUpon (url, title) -->
                            <a href="http://www.stumbleupon.com/submit?url=http://tutorialedge.net/{{ $article->slug }}&title={{ $article->title }}" target="_blank" class="share-btn stumbleupon">
                                <i class="fa fa-stumbleupon"></i>
                            </a>

                            <!-- Reddit (url, title) -->
                            <a href="http://reddit.com/submit?url=http://tutorialedge.net/{{ $article->slug }}&title={{ $article->title }}" target="_blank" class="share-btn reddit">
                                <i class="fa fa-reddit"></i>
                            </a>

                            <!-- LinkedIn -->
                            <a href="http://www.linkedin.com/shareArticle?url=http://tutorialedge.net/{{ $article->slug }}&title={{ $article->title }}" target="_blank" class="share-btn linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>

                            <!-- Email -->
                            <a href="mailto:?subject=<SUBJECT&body=<BODY>" target="_blank" class="share-btn email">
                                <i class="fa fa-envelope"></i>
                            </a>
                    </div>
                </div>
            
            </div>
            
            <div class="col-md-3">
                <div class="sidebar">
                
                <div class="social-metro">
                    <div class="row">
                        <div class="col-lg-6 social-box facebook">
                            <a href="https://www.facebook.com/tutorialedge"><i class="fa fa-facebook fa-2x"></i></a>
                        </div>
                        <div class="col-lg-6 social-box google-plus">
                           <a href="https://plus.google.com/b/115194233692529836662/+Tutorialedge/posts"><i class="fa fa-google-plus fa-2x"></i></a>
                        </div>
                        <div class="col-lg-4 social-box twitter">
                            <a href="https://www.twitter.com/tutorialedge"><i class="fa fa-twitter fa-2x"></i></a> 
                        </div>
                        <div class="col-lg-4 social-box tumblr">
                            <a href="http://tutorialedge.tumblr.com/"><i class="fa fa-tumblr fa-2x"></i></a>
                        </div>
                        <div class="col-lg-4 social-box github">
                            <a href="https://github.com/emforce"><i class="fa fa-github fa-2x"></i></a>
                        </div>
                        <div class="col-lg-12 social-box youtube">
                            <a href="https://www.youtube.com/tutorialedge"><i class="fa fa-youtube fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                
                <h2>{{ $page->title }}</h2>
                <p>{{ $page->info }}</p>
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
        
        <div class="padding-top"></div>
        
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
@endsection
