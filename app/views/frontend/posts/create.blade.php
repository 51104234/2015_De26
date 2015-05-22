@extends('frontend.theme')

@section('head.title')
Create post
@endsection

@section('contentData')
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h1>Add new Post</h1>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
		<form action="{{ route('post.postAddPost')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">

			<!-- @if (count($errors) > 0)
				<div class='alert alert-danger'>
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{$errors}}</li>
						@endforeach
					</ul>
			</div>   
			@endif -->

			<!-- @if ($errors->any())
			<div class='alert alert-danger'>
				<ul>
					{{ implode('', $errors->all('<li class="error">:message</li>')) }}
				</ul>
			</div>   
			@endif -->

		    @if(Session::has('errorImage'))
		    <div class='alert alert-danger'>
		        <ul>
		            <li>{{Session::get('errorImage')}}</li>
		        </ul>    
		        </div>  
		    {{Session::forget('errorImage')}}
		    @endif


			<div class="form-group">
				<label for="title" class="control-label">Tiêu đề: </label>
				<input class="form-control" type="text" name="title" id="title" required placeholder="Title post">		
			</div>
			<!-- <div class="form-group">
				<label for="title" class="control-label">Người viết: </label>
				<input class="form-control" type="text" name="author" id="author" value="{{Auth::user()->username}}">		
			</div> -->
			<div class="form-group">
				<label for="image" class="control-label">Hình ảnh: </label>
				<input type="file" name="image" id="image" required>		
			</div>
			<div class="form-group">
				<label for="content" class="control-label">Nội dung: </label>
				<textarea class="form-control" rows="3" name="content" id="content" required placeholder="Content post"></textarea>
			</div>
			<div class="form-group">
				<label for="categories" class="control-label">Categories: </label>
				<select name="categories">
					<?php 
						$categories = Categories::all();
					?>
					@foreach ($categories as $row)
						<option value="{{$row->id}}">{{$row->categories}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Add Post</button>	
			</div>
		</form>
		</div> <!-- row -->
	</div>
</div>
@endsection