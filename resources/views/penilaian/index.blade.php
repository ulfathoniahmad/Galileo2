@extends('layouts.master')

@section('title','blog lalala')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel-heading" style="background-color: red">
				<div class="panel-body">
					<h1 style="background-color: blue">index loh ya</h1>
					@for($i=1; $i<=10; $i++)
					<div class="row">	
						<div class="col-sm-4">
							<label for="1">{{$i}}</label>
							<label class="radio-inline required" required=""><input type="radio" name={{$i}} value="A">A</label>
							<label class="radio-inline required" required=""><input type="radio" name={{$i}} value="B">B</label>
							<label class="radio-inline required" required=""><input type="radio" name={{$i}} value="C">C</label> 
							<label class="radio-inline required" required=""><input type="radio" name={{$i}} value="D">D</label> 
						</div>
					</div>
					@endfor
				</div>    
			</div>

		</div>
	</div>
</div>
@endsection
