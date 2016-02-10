@extends('admin.admin')


@section('content')
    <div class="content">
                    <div class="block">
                     <div class="block-content tab-content bg-white">
                      
<div class="border-b push-30">
                                    <h2 class="push-10">{{$count}} <span class="h5 font-w400 text-muted">Users Found</span></h2>
                                </div>
                                <table class="table table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 100px;"><i class="si si-user"></i></th>
                                            <th>Name</th>
                                            <th class="hidden-xs" style="width: 30%;">Email</th>
                                            <th class="hidden-xs hidden-sm" style="width: 15%;">Access</th>
                                            <th class="text-center" style="width: 80px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td class="text-center">
                                                <i class="si si-user"></i>
                                            </td>
                                            <td class="font-w600">{{$user->name}}</td>
                                            <td class="hidden-xs">{{$user->email}}</td>
                                            <td class="hidden-xs hidden-sm">
                                                <span class="label label-danger">Disabled</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="#"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button></a>
                                                    <a href="#"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                                
                                </div>
                                </div>
                                </div>
@endsection