@extends('backend.theme')

@section('head.title')
Quản trị categories
@endsection

@section('contentData')
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            Quản trị Bài viết
	        </h1>
	    </div>
	</div>
	<div class="row">
		<div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Categories</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Image</th>
                        <th>Content</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($posts as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td><?php 
                            $categories_name= Categories::where('id',$row->categories_id)->first();
                        ?>{{$categories_name->categories}}</td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->author}}</td>
                        <td><img src="<?php echo asset("includes/images/{$row->image}") ?>" class="img-responsive" alt="Generic placeholder thumbnail"></td>
                        <td>{{$row->content}}</td>
                        <td>{{Form::open([
                            'route' => ['posts.destroy', $row->id],
                            'method' => 'delete',
                            'class' => ''
                        ])}}
                        <button class="btn btn-danger">Remove</button>
                        {{Form::close()}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-xs-6">
                {{$posts->links()}}
            </div>
        </div>
	</div>
@endsection