ssss
<div class="wrapper container-fluid">
	{!! Form::open(['url'=>route('pagesEdit',array('page'=>$data['id'])),'class'=>'form-horizontal','method'=>'post','enctype'=>'multipart/form-data']) !!}

		<div class="form-group">
			{!! Form::hidden('id',$data['id']) !!}
			{!! Form::label('name','Name',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('name',$data['name'],['class'=>'form-control','placeholder'=>'Enter page title']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alias','Alias',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('alias',$data['alias'],['class'=>'form-control','placeholder'=>'Enter page alias']) !!}				
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('text','Text',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::textarea('text',$data['text'],['class'=>'form-control','id'=>'editor','placeholder'=>'Enter page text']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('old_images','Image:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-2">
				{!! Html::image('assets/img/'.$data['images'],'',['class'=>'img-circle delay-03s animated wow zoomIn animated']) !!}
				{!! Form::hidden('old_images',$data['images']) !!}				
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('images','Image:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::file('images',[
					'class'=>'filestyle ',
					'data-buttonText'=>'Enter the image',
					'data-buttonName'=>'btn-primary',
					'data-placeholder'=>'File havnt'
					]) !!}				
			</div>
		</div>

		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				{!! Form::button('Save',[
					'class'=>'btn btn-primary',
					'type'=>'submit'
					]) !!}				
			</div>
		</div>
	{!! Form::close() !!}

	<script>
		CKEDITOR.replace('editor');
	</script>
</div>