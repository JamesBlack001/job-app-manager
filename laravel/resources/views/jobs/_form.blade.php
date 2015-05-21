<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} ">
	{!! Form::label('title','Title: ') !!}
	{!! Form::text('title', null, ['class'=>'form-control']) !!}
	{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
	{!! Form::label('contactName','Contact Name:') !!}
	{!! Form::text('contactName', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('contactNumber','Contact Number') !!}
	{!! Form::text('contactNumber', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('contactEmail','Contact Email:') !!}
	{!! Form::text('contactEmail', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group {{ $errors->has('location') ? 'has-error' : '' }} ">
	{!! Form::label('location','Location:') !!}
	{!! Form::text('location', null, ['class'=>'form-control']) !!}
	{!! $errors->first('location', '<span class="help-block">:message</span>') !!}

</div>

<div class="form-group {{ $errors->has('salary') ? 'has-error' : '' }} ">
	{!! Form::label('salary','Salary:') !!}
	{!! Form::text('salary', null, ['class'=>'form-control']) !!}
	{!! $errors->first('salary', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('companyName') ? 'has-error' : '' }} ">
	{!! Form::label('companyName','Company Name:') !!}
	{!! Form::text('companyName', null, ['class'=>'form-control']) !!}
	{!! $errors->first('companyName', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('web_link') ? 'has-error' : '' }} ">
	{!! Form::label('web_link','Web Link:') !!}
	{!! Form::text('web_link', null, ['class'=>'form-control']) !!}
	{!! $errors->first('web_link', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
	{!! Form::label('notes','Notes:') !!}
	{!! Form::textarea('notes', null, ['class'=>'form-control']) !!}
</div>
	
<div class="form-group">
	{!! Form::label('status','Status:') !!}
	{!! Form::text('status', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Create Job', ['class'=>'btn btn-primary']) !!}
</div>