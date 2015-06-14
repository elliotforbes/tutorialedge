@extends('app')

@section('title')
{{ $article->title }}
@endsection

@section('meta')
<meta name="description" content="{{ $article->excerpt }}">
@endsection

@section('content')
    <div class="post-cont">
        <div class="row">
            <div class="col-md-9">
               <div class="post-image">
                   
               </div>
                <div class="post-title">
                   <h2>{{ $article->title }}</h2>
                   <p class="author-bar"><img alt="" src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/3/005/061/3bf/0bc92cc.jpg" srcset="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/3/005/061/3bf/0bc92cc.jpg" class="avatar avatar-32 photo" height="32" width="32"> 
                   By Elliot Forbes  <span class="separator">•</span>   On {{ date("d M, Y",strtotime($article->published_at)) }}  <span class="separator">•</span>   In Programming Design Patterns</p>
                </div>
                
                <div class="post-social">
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_sharing_toolbox"></div>
                </div>
                
                <div class="post-content">
                    {!! nl2br($article->body) !!}
                </div>
            
                
                <div class="back-forward">
                    <div class="row">
                        <div class="col-lg-6">
                            @if (count($prevArt))
                            @foreach($prevArt as $prev)
                            <div class="back-article">
                                <h3><i class="fa fa-chevron-left"></i>  Previous Tutorial</h3>
                                <img class="img-responsive image-responsive-centered" alt="Woman writing in a notebook" title="Woman writing in a notebook" src="/uploads/articles/woman.jpg">
                                {{ $prev }}
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <div class="col-lg-6">
                            @if (count($nextArt))
                            @foreach($nextArt as $next)
                            <div class="forward-article">
                               <h3>Next Tutorial  <i class="fa fa-chevron-right"></i></h3>
                               <div class="clear"></div>
                                <img class="img-responsive image-responsive-centered" alt="Woman writing in a notebook" title="Woman writing in a notebook" src="/uploads/articles/woman.jpg">
                                {{ $next }} 
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>    
                
            </div>
            
            
            
            
            <div class="col-md-3">
                <div class="sidebar">
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
                </div>
            </div>
        </div>
        
        <div class="padding-top"></div>
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
@endsection
