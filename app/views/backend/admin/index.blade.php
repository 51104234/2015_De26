@extends('backend.theme')

@section('head.title')
Home Admin
@endsection

@section('contentData')
  <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <label>Điều khoản sử dụng</label>
          <ol>
              <li>Admin có thể quản lý bài đăng, bình luận của người dùng</li>
              <li>Admin có thể quản lý tài khoản của người dùng</li>
          </ol>
           
  </div>
@endsection