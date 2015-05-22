@extends('backend.theme')

@section('head.title')
Quản trị categories
@endsection

@section('contentData')
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            Quản trị Bình luận
	        </h1>
	        <ol>
	            <button>Thêm bình luận</button>
	        </ol>
	    </div>
	</div>
	<div class="row">
		<div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Post_Title</th>
                        <th>Commenter</th>
                        <th>Comment</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($comments as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td><?php 
                        $title = Post::where('id',$row->post_id)->first();
                        ?>{{$title->title}}</td>
                        <td>{{$row->commenter}}</td>
                        <td>{{$row->comment}}</td>
                        <td>{{Form::open([
                            'route' => ['comments.destroy', $row->id],
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
                    {{$comments->links()}}
                </div>
        </div>
	</div>
@endsection