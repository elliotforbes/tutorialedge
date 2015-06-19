@extends('admin.admin')

@section('content')
     <div class="latest-posts">
         <h2>Admin Stuff</h2>  
         
         <a href="/admin/articles/create"><button class="btn btn-default">New Article</button></a>
         
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Title</th>
                     <th>Date Published</th>
                     <th>excerpt</th>
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
                     <td>{{ $article->excerpt }}</td>
                     <td>{{ $article->slug }}</td>
                     <td>{{ $article->cat_id }}</td>
                     <td><a href="/{{ $article->slug }}"><button class="btn btn-default">View</button></a></td>
                     <td><a href="/admin/articles/{{ $article->slug }}/edit"><button class="btn btn-default">Edit</button></a></td>
                     <td>{!! Form::open(['method' => 'DELETE', 'url' => 'admin/' . $article->slug .'/edit' , 'onsubmit' => 'return ConfirmDelete()']) !!}
                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger', ]) !!}
                                </div>
                         {!! Form::close() !!}
                     </td>
                 </tr>
             @endforeach
             </tbody>
         </table>
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
