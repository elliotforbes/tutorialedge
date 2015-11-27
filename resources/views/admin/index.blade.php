@extends('admin.admin')


@section('stats')
<!-- Page Header -->
<div class="content bg-image overflow-hidden" style="background-image: url('../img/photos/photo3@2x.jpg');">
    <div class="push-50-t push-15">
        <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
        <h2 class="h5 text-white-op animated zoomIn">Welcome Administrator</h2>
    </div>
</div>
 
   <!-- Stats -->
<div class="content bg-white border-b">
    <div class="row items-push text-uppercase">
        <div class="col-xs-6 col-sm-4">
            <div class="font-w700 text-gray-darker animated fadeIn">New Users</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> This Week</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="{{ url('/admin/users') }}">3</a>
        </div>
        <div class="col-xs-6 col-sm-4">
            <div class="font-w700 text-gray-darker animated fadeIn">Total Users</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">133</a>
        </div>
        <div class="col-xs-6 col-sm-4">
            <div class="font-w700 text-gray-darker animated fadeIn">Total Hits</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">10,003</a>
        </div>
    </div>
</div>
<!-- END Stats -->
@endsection

@section('content')

@endsection
