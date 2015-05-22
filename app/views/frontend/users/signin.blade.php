@extends('frontend.theme')

@section('head.title')
Sign in
@endsection

@section('contentData')
	<div class="accounts account-signin">
		<div class="account-header text-center">
			<span>Đăng nhập</span>
		</div>
		<div class="account-content">
			{{ Form::open(array('route' => 'post-signin', 'method' => 'post', 'class' => 'signin')) }}
				<div {{ $errors->has('username') ? 'class="form-group form-field has-error"' : 'class="form-group form-field"' }}>
					{{ $errors->first('username','<label class="control-label account-error">:message</label>') }}
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
						{{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'Tên đăng nhập')) }}
					</div>
				</div>
				<div {{ $errors->has('password') ? 'class="form-group has-error"' : 'class="form-group"' }}>
					{{ $errors->first('password','<label class="control-label account-error">:message</label>') }}
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
						{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Nhập mật khẩu')) }}
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
						<label class="control-label">
							{{ Form::checkbox('remember', null) }}
							<span>Nhớ đăng nhập</span>
						</label>
						<a href="#" class="pull-right">Quên mật khẩu</a>
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-lock"></span> Đăng nhập</button>
			{{ Form::close()}}
		</div>
		<div class="account-footer text-center">
			<a href="{{ URL::route('get-signup') }}">Đăng ký tài khoản</a>
		</div>
	</div>
@endsection