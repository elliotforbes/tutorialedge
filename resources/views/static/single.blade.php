@extends('app')

@section('content')
    <div class="post-cont">
        <div class="row">
            <div class="col-md-9">
               <div class="post-image">
                   
               </div>
                <div class="post-title">
                   <h2>{{ $article->title }}</h2>
                   <p>Author: Elliot Forbes | Views: 583 | Posted: 25th March, 2015</p>
                </div>
                
                <div class="post-content">
                   
                    <div id="code" class="java">public static void main(String args[]){
                        *tab*System.out.println("hello world");
                        *tab*int someString = 10;
                        *tab*double someDouble = 10.0;
                        *tab*boolean somebool = false;
                        *tab*// This is a comment
                        *tab*String stuff = "Hello World"; // also is also a comment
                        *tab*System.out.println(stuff);
                    }
                    </div>
                    {!! nl2br($article->body) !!}
                </div>
                
                
            </div>
            <div class="col-md-3">
                <div class="sidebar">
                <h2>Programming Design Concepts</h2>
                <p>All programmers should be trying to write beautiful code and this course is designed to give you a brief overview of most of the potential design patterns that you can utilize when building your next projects. </p>
                <h3>Table of Contents</h3>
                <ul>
                    <li>Abstract Classes and Interfaces</li>
                    <li>Factory Design Method</li>
                    <li>Singleton</li>
                    <li>State</li>
                    <li>Decorator</li>
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
