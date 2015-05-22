@extends('backend.theme')

@section('head.title')
Quản trị categories
@endsection

@section('contentData')
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            Quản trị Thành viên
	        </h1>
	        <ol>
	            <a href="{{route('users.create')}}"><button>Thêm thành viên</button></a>
	        </ol>
	    </div>
	</div>
	<div class="row">
		<div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($users as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->username}}</td>
                        <td>{{$row->usermail}}</td>
                        <td>
                        {{Form::open([
                            'route' => ['users.destroy', $row->id],
                            'method' => 'delete',
                            'class' => ''
                        ])}}
                        <button class="btn btn-danger">Remove</button>
                        {{Form::close()}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-xs-6">
                {{$users->links()}}
            </div>
        </div>
	</div>
@endsection