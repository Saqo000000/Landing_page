<div style="0px 50px;">
	@if($pages)
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>№ n/o</th>
				<th>Name</th>
				<th>Alias</th>
				<th>Text</th>
				<th>Create date</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pages as $k => $page)
				<tr>
					<th>{{ $page->id }}</th>
					<td>{!! Html::link(route('pagesEdit',['page'=>$page->id]), $page->name,['alt'=>$page->name]) !!}</td>
					<td>{{ $page->alias }}</td>
					<td>{{ $page->text }}</td>
					<td>{{ $page->created_at }}</td>
					<td>						
						{!! Form::open([
							'url'=>route('pagesEdit',['page'=>$page->id]),//action
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
	{!! Html::link(route('pagesAdd'),'New Page') !!}
</div>