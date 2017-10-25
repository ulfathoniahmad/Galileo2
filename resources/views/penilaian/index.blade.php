@extends('layouts.master')

@section('title','blog lalala')

@section('content')
<script type="text/javascript">
// attach kendoAlert to the window
window.kendoAlert = function(msg) {

  // create modal window on the fly
  var win = $("<div>").kendoWindow({
    modal: true 
  }).getKendoWindow();

  // set the content
  win.content(msg);

  // center it and open it
  win.center().open();
};

$(function() {
  // call the alert on button click
  $("#open").on("click", function() {
    kendoAlert("Hey Now!");
  });
});
</script>
<div class="alert alert-success">
  <strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
</div>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel-heading" style="background-color: azure">
				<div class="panel-body">
					<h1 >index loh ya</h1>
					@for($i=1; $i<=10; $i++)
					<div class="row">	
						@for($j=0; $j<=20;$j+=10)
						<div class="col-sm-4">
							<label for="1">{{$i+$j}}</label>
							<label class="radio-inline required" required=""><input type="radio" name={{$i+$j}} value="A">A</label>
							<label class="radio-inline required" required=""><input type="radio" name={{$i+$j}} value="B">B</label>
							<label class="radio-inline required" required=""><input type="radio" name={{$i+$j}} value="C">C</label> 
							<label class="radio-inline required" required=""><input type="radio" name={{$i+$j}} value="D">D</label> 
						</div>
						@endfor
					</div>

					@endfor
				</div>    
			</div>

		</div>
	</div>
</div>
@endsection
