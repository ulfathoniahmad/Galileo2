<div class="form-group {{ $errors->has('Nama') ? 'has-error' : ''}}">
    {!! Form::label('Nama', 'Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('SekolahAsal') ? 'has-error' : ''}}">
    {!! Form::label('SekolahAsal', 'Sekolah Asal', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('SekolahAsal', null, ['class' => 'form-control']) !!}
        {!! $errors->first('SekolahAsal', '<p class="help-block">:message</p>') !!}
    </div>
</div>



<div class="form-group {{ $errors->has('Kelas') ? 'has-error' : ''}}">
    {!! Form::label('Kelas', 'Kelas', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Kelas', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Kelas', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Alamat') ? 'has-error' : ''}}">
    {!! Form::label('Alamat', 'Alamat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Alamat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Prestasi') ? 'has-error' : ''}}">
    {!! Form::label('Prestasi', 'Prestasi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Prestasi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Prestasi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('OrangTua') ? 'has-error' : ''}}">
    {!! Form::label('OrangTua', 'Orang Tua', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('OrangTua', null, ['class' => 'form-control']) !!}
        {!! $errors->first('OrangTua', '<p class="help-block">:message</p>') !!}
    </div>
</div>

{{-- 
<div class="form-group {{ $errors->has('Contact') ? 'has-error' : ''}}">
    {!! Form::label('Contact', 'Contact', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Contact', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Contact', '<p class="help-block">:message</p>') !!}
    </div>
</div>
 --}}















<div class="form-group {{ $errors->has('kelamin') ? 'has-error' : ''}}">
    {!! Form::label('kelamin', 'kelamin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::Radio('makanan', null, ['class' => 'form-control']) !!}
        {!! Form::Radio('makanun', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kelamin', '<p class="help-block">:message</p>') !!}
    </div>
</div>













<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
