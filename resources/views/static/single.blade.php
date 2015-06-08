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
                
                
            </div>
            <div class="col-md-3">
                <div class="sidebar">
                <h2>Programming Design Concepts</h2>
                <p>All programmers should be trying to write beautiful code and this course is designed to give you a brief overview of most of the potential design patterns that you can utilize when building your next projects. </p>
                <h3>Table of Contents</h3>
                <ul>
                   @foreach ($articles as $single)
                    <li><a href="{{ $single->slug }}">{{ $single->title }}</a></li>
                    @endforeach
                </ul>
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
