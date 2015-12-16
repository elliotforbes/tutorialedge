@extends('admin.admin')

@section('content')
<div class="content">
	<div class="block">
		<div class="block-header">
			<h2>Hello World</h2>
		</div>
		<div class="block-content tab-content bg-white">
			{!! Form::open(array('uses' => 'MailController@send', 'class' => 'form-horizontal push-10-t push-10')) !!}
				<div class="form-group">
					<div class="col-lg-12">
					{!! Form::submit('Submit',
					array('class'=>'btn btn-primary btn-lg')) !!}
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection