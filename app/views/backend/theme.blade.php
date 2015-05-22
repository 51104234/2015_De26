<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('head.title')</title>
	{{ HTML::style('includes/css/bootstrap.min.css') }}
	{{ HTML::style('includes/css/font-awesome.min.css') }}
	{{ HTML::style('includes/css/morris.css') }}
	{{ HTML::style('includes/css/sb-admin.css') }}
	{{ HTML::script('includes/js/jquery.min.js') }}
	{{ HTML::script('includes/js/styles.min.js') }}
	{{ HTML::script('includes/js/plugin.min.js') }}
	{{ HTML::script('includes/js/custom.min.js') }}
	
</head>
<body>
	<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-book"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-log-out"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{route('categories.index')}}"><i class="glyphicon glyphicon-pencil"></i> Quản trị categories</a>
                    </li>
                    <li>
                        <a href="{{route('users.index')}}"><i class="glyphicon glyphicon-user"></i> Quản trị thành viên</a>
                    </li>
                    <li>
                        <a href="{{route('posts.index')}}"><i class="glyphicon glyphicon-fire"></i> Quản trị bài viết</a>
                    </li>
                    <li>
                        <a href="{{route('comments.index')}}"><i class="glyphicon glyphicon-comment"></i> Quản trị comment</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                @yield('contentData')
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>
</html>