<div style="0px 50px;">
	@if($services)
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>№ n/o</th>
				<th>Name</th>
				<th>Text</th>
				<th>Icon</th>
				<th>Create date</th>
				<th>Update date</th>
			</tr>
		</thead>
		<tbody>
			@foreach($services as $k => $service)
				<tr>
					<th>{{ $service->id }}</th>
					<td>{!! Html::link(route('serviceEdit',['service'=>$service->id]), $service->name,['alt'=>$service->name]) !!}</td>
					<td>{{ $service->text }}</td>
					<td>{{ $service->icon }}</td>
					<td>{{ $service->created_at }}</td>
					<td>{{ $service->updated_at }}</td>
					<td>						
						{!! Form::open([
							'url'=>route('serviceEdit',['service'=>$service->id]),//action
							'class'=>'form-horizontal',
							'method'=>'post'
							]) !!}  
							{{ method_field('Delete') }}{{-- <input type="hidden" name="_method" value="Delete">--}}
							{!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	@endif
	{!! Html::link(route('serviceAdd'),'New Service') !!}
</div>