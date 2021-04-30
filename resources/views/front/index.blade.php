@extends('layout.master')
@section('title','Index')
@section('content')
    <h1>This is content my page index</h1>
    <form action="test" method="POST" role="form">
    	@csrf
    	<legend>Form title</legend>
        
    	<div class="form-group">
    		<label for="">label</label>
    		<input type="text" name="name" class="form-control" id="" placeholder="Input field" value="">
    	</div>
    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop