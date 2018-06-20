<div style="0px 50px;">
	@if($portfolios)
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>№ n/o</th>
				<th>Name</th>
				<th>Images_name</th>
				<th>Filter</th>
				<th>Create date</th>
				<th>Update date</th>
			</tr>
		</thead>
		<tbody>
			@foreach($portfolios as $k => $portfolio)
				<tr>
					<th>{{ $portfolio->id }}</th>
					<td>{!! Html::link(route('portfolioEdit',['portfolio'=>$portfolio->id]), $portfolio->name,['alt'=>$portfolio->name]) !!}</td>
					<td>{{ $portfolio->images }}</td>
					<td>{{ $portfolio->filter }}</td>
					<td>{{ $portfolio->created_at }}</td>
					<td>{{ $portfolio->updated_at }}</td>
					<td>						
						{!! Form::open([
							'url'=>route('portfolioEdit',['portfolio'=>$portfolio->id]),//action
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
	{!! Html::link(route('portfolioAdd'),'New Portfolio') !!}
</div>