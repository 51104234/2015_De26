@extends('backend.theme')

@section('head.title')
Thêm thành viên
@endsection

@section('contentData')
<div class="accounts account-signup">
<div class="account-content">
      {{ Form::open(array('route' => 'users.postCreate', 'method' => 'post', 'class' => 'signup')) }}
        <div {{ $errors->has('usermail') ? 'class="form-group form-field has-error"' : 'class="form-group form-field"' }}>
          {{ $errors->first('usermail','<label class="control-label account-error">:message</label>') }}
          <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
            {{ Form::text('usermail', Input::old('usermail'), array('class' => 'form-control', 'placeholder' => 'Địa chỉ Email')) }}
          </div>
        </div>
        <div {{ $errors->has('username') ? 'class="form-group form-field has-error"' : 'class="form-group form-field"' }}>
          {{ $errors->first('username','<label class="control-label account-error">:message</label>') }}
          <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
            {{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'Tên đăng nhập')) }}
          </div>
        </div>
        <div {{ $errors->has('password') ? 'class="form-group form-field has-error"' : 'class="form-group form-field"' }}>
          {{ $errors->first('password','<label class="control-label account-error">:message</label>') }}
          <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Nhập mật khẩu')) }}
          </div>
        </div>
        <div {{ $errors->has('passgain') ? 'class="form-group has-error"' : 'class="form-group"' }}>
          {{ $errors->first('passgain','<label class="control-label account-error">:message</label>') }}
          <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-repeat"></span></div>
            {{ Form::password('passgain', array('class' => 'form-control', 'placeholder' => 'Xác nhận mật khẩu')) }}
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit"></span> Xác nhận</button>
      {{ Form::close()}}
    </div>
    </div>
@endsection