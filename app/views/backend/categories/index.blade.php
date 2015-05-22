@extends('backend.theme')

@section('head.title')
Quản trị categories
@endsection

@section('contentData')
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            Quản trị Danh mục
	        </h1>
	        <ol>
	            <a href="{{route('categories.create')}}"><button>Thêm danh mục</button></a>
	        </ol>
	    </div>
	</div>
	<div class="row">
		<div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Categories</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($categories as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->categories}}</td>
                        <td><a href="{{route('categories.edit',$row->id)}}"><button class="btn btn-primary">Edit</button></a> </td>
                        <td>
                        {{Form::open([
                            'route' => ['categories.destroy', $row->id],
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
                {{$categories->links()}}
            </div>
        </div>
	</div>
@endsection