@extends('backend.theme')

@section('head.title')
Cập nhật danh mục
@endsection

@section('contentData')
	<form method="POST" action="{{route('categories.postEdit',$categories->id)}}" class="container edit-category"> 
        <div class="row">
                <div class="col-xs-1">
                    <img src="{{asset('includes/images/categories/categories_edit.png')}}" width="65" alt="">          
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label class="control-label" for="id">Id</label> 
                        <input type="text" name="id" id="id" value="{{ $categories->id }}" class="form-control" disabled/>
                    </div>                
                    <div class="form-group">
                        <label class="control-label" for="name">Tên danh mục</label> 
                        <input type="text" name="categories" id="categories" value="{{ $categories->categories }}" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
        </div>
	</form>
@endsection

