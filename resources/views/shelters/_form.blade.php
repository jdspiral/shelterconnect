<div class="form-group">
    {{ Form::label('shelter_name', 'Shelter Name') }}
    {{ Form::text('shelter_name', '', ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('shelter_address', 'Shelter Address') }}
    {{ Form::text('shelter_address', '', ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('shelter_phone', 'Shelter Phone') }}
    {{ Form::text('shelter_phone', '', ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>