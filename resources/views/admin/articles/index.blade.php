@extends('admin.admin')

@section('content')
  
  <!-- Page Header -->
<div class="content bg-image overflow-hidden" style="background-image: url('../img/photos/photo3@2x.jpg');">
    <div class="push-50-t push-15">
        <h1 class="h2 text-white animated zoomIn">All Posts</h1>
    </div>
</div>
   <!-- Stats -->
<div class="content bg-white border-b">
    <div class="row items-push text-uppercase">
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Articles</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> This Week</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">1</a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Comments</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> This Month</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">N/A</a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Articles</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">48</a>
        </div>
    </div>
</div>
<!-- END Stats -->


<div class="container">
     <div class="info-box"> 
         <a href="/admin/articles/create"><button class="btn btn-default btn-new">New Article</button></a>
         
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Title</th>
                     <th>Date Published</th>
                     <th>slug</th>
                     <th>cat_id</th>
                     <th>view</th>
                     <th>edit</th>
                     <th>delete</th>
                 </tr>
             </thead>
             <tbody>
             @foreach ($articles as $article)
                 <tr>
                     <td>{{ $article->id }}</td>
                     <td>{{ $article->title }}</td>
                     <td>{{ $article->published_at }}</td>
                     <td>{{ $article->slug }}</td>
                     <td>{{ $article->cat_id }}</td>
                     <td><a href="/{{ $article->slug }}"><button class="btn btn-default">View</button></a></td>
                     <td><a href="/admin/articles/{{ $article->slug }}/edit"><button class="btn btn-default">Edit</button></a></td>
                     <td>{!! Form::open(['method' => 'DELETE', 'url' => 'admin/articles/' . $article->slug .'/destroy' , 'onsubmit' => 'return ConfirmDelete()']) !!}
                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger', ]) !!}
                                </div>
                         {!! Form::close() !!}
                     </td>
                 </tr>
             @endforeach
             </tbody>
         </table>
         
         <div class="pagination"> <?php echo $articles->render(); ?> </div>
     </div>
</div>
<!--Adds confirmation popup to delete buttons so that accidental deletion doesn't take place-->
<script>
    function ConfirmDelete()
    {
        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            return false;
    }
</script>
@endsection
