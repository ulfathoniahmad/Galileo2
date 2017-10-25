<div class="form-group {{ $errors->has('Nama') ? 'has-error' : ''}}">
    {!! Form::label('Nama', 'Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Alamat') ? 'has-error' : ''}}">
    {!! Form::label('Alamat', 'Alamat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Alamat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('JenisKelamin') ? 'has-error' : ''}}">
    {!! Form::label('JenisKelamin', 'Jeniskelamin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('JenisKelamin', null, ['class' => 'form-control']) !!}
        {!! $errors->first('JenisKelamin', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('TempatLahir') ? 'has-error' : ''}}">
    {!! Form::label('TempatLahir', 'Tempatlahir', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('TempatLahir', null, ['class' => 'form-control']) !!}
        {!! $errors->first('TempatLahir', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('TglLahir') ? 'has-error' : ''}}">
    {!! Form::label('TglLahir', 'Tgllahir', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('TglLahir', null, ['class' => 'form-control']) !!}
        {!! $errors->first('TglLahir', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('NoKtp') ? 'has-error' : ''}}">
    {!! Form::label('NoKtp', 'Noktp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('NoKtp', null, ['class' => 'form-control']) !!}
        {!! $errors->first('NoKtp', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
