@extends('backend.theme')

@section('head.title')
Thêm danh mục
@endsection

@section('contentData')
<div class="row">
    <form method="POST" action="{{route('categories.postCreate')}}" class="container register-category"> 
		 
                <div class="col-xs-1">
                    <img src="{{asset('includes/images/categories_create.png')}}" width="65" alt="add">          
                </div>
                <div class="col-xs-6">
                	<div class="form-group">
			            <label class="control-label" for="name">Id</label> 
			            <input type="text" name="id" id="id" class="form-control" required/>
			        </div>
			        <div class="form-group">
			            <label class="control-label" for="name">Tên danh mục</label> 
			            <input type="text" name="categories" id="categories" class="form-control" required/>
			        </div>
			        <div class="form-group">
			        	<div class="text-right">
			            	<button type="submit" class="btn btn-primary">Thêm</button>
			            	<button type="reset" class="btn btn-warning" >Tạo lại</button>
			            </div>
			        </div>
			    </div>
		

    </form>
    </div>
@endsection

@section('scripts_validator')
	<script type="text/javascript">
		$(document).ready(function() {
			$(".register-category").validate({
		        rules:{
		            name:{
		              	required:true,
		              	remote:{
			                url: "{{asset('admin/categories/check-name')}}",
			                type: "POST",
			            },
		            },
		            image:{
		              	required:true,
		            },
		        },
		        messages:{
		            name:{
		                required:"Vui lòng nhập tên danh mục phần mềm",
		                remote:"Danh mục phần mềm đã tồn tại",
		            },
		            image:{
		              	required:"Vui lòng nhập hình ảnh danh mục",
		            },
		        },
		        errorElement: 'span',
		        errorClass: 'help-block',
		        highlight: check_highlight,
                unhighlight: check_unhighlight,
		    });
		});
	</script>
@stop