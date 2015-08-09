@extends('app')


@section('meta')
<meta name="description" content="Test Video page">
@endsection


@section('video-content')

<div class="video-cont">
   <div class="container">
        <div class="row">
            <div class="col-lg-9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/_rjSel-6K38" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <div class="video-playlist">
                    <ul class="list-group">
                        <li class="list-group-item">#1 Getting The Environment Setup</li>
                        <li class="list-group-item">#2 Creating our Game Window</li>
                        <li class="list-group-item">#3 Creating a Square</li>
                        <li class="list-group-item">#4 Initializing OpenGL</li>
                        <li class="list-group-item">#5 Creating our Paddles</li>
                    </ul>
                </div>
            </div>
        </div>
        <h2>Hello World <small><br>Published on July 13th, 2015</small></h2>
    </div>
</div>

@endsection


@section('content')

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
@endsection