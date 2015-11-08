@extends('admin.admin')


@section('content')
 <!-- Page Content -->
                <div class="content content-narrow" ng-app="mediaApp">
                    <div class="row" ng-controller="MediaController">
                        <div class="col-md-12">
                            <!-- Default -->
                            <h2 class="content-heading">Default</h2>
                            <div class="row items-push">
                               @foreach ($images as $image)
                                <div class="col-md-3 animated fadeIn">
                                    <div class="img-container" >
                                        <img class="img-responsive" src="{{ $image->src }}" alt="">
                                        <div class="img-options">
                                            <div class="img-options-content">
                                                <h3 class="font-w400 text-white push-5">Image Caption</h3>
                                                <h4 class="h6 font-w400 text-white-op push-15">Some Extra Info</h4>
                                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- END Default -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

        </div>
        <!-- END Page Container -->
@endsection


@section('footerlinks')
<script src="{{ asset('/js/MediaController.js') }}"></script>
@endsection