<div class="form-group">
	{!! Form::label('parent_id','上级分类: ')!!}
	{!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => '选择一个上级分类...']) !!}
</div>

<div class="form-group">
	{!! Form::label('name', '分类名称: ')!!}
	{!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('description','描述: ')!!}
	{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('url','Url:')!!}
	{!! Form::text('url', null, ['class'=>'form-control']) !!}
</div>

<div class="form-check">
	{!! Form::hidden('display', '0', false, ['class'=>'form-check-input']) !!}
	{!! Form::checkbox('display', '1', true, ['class'=>'form-check-input']) !!}
	{!! Form::label('display','是否显示', ['class'=>'form-check-label'])!!}
</div>


{!! Form::submit('提交', ['class'=>'btn btn-primary form-control']) !!}