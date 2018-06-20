<div class="wrapper container-fluid">
	{!! Form::open(['url'=>route('serviceAdd'),'class'=>'form-horizontal','method'=>'post','enctype'=>'multipart/form-data']) !!}

		<div class="form-group">
			{!! Form::label('name','Name',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Enter service title']) !!}				
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('text','Text',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::textarea('text',old('text'),['class'=>'form-control','id'=>'editor','placeholder'=>'Enter service text']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('icon','Icon',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('icon',old('icon'),['class'=>'form-control','placeholder'=>'Enter service icon']) !!}				
			</div>
		</div>

		<div class="form-group">
			<div class="col-xs-8">
				{!! Form::button('Save',[
					'class'=>'btn btn-primary',
					'type'=>'submit'
					]) !!}				
			</div>
		</div>

	{!! Form::close() !!}

</div>