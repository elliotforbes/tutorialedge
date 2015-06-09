@extends('admin.admin')

@section('content')
     <div class="latest-posts">
         <h2>Admin Stuff</h2>  
         
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
                     <td><a href="/{{ $article->slug }"><button class="btn btn-default"></button></a></td>
                     <td><a href="/admin/edit/{{ $article->slug }}"><button class="btn btn-default">Edit</button></a></td>
                     <td>{!! Form::open(['method' => 'DELETE', 'url' => 'admin/edit/' . $article->slug]) !!}
                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                </div>
                         {!! Form::close() !!}
                     </td>
                 </tr>
             @endforeach
             </tbody>
         </table>
     </div>
@endsection
