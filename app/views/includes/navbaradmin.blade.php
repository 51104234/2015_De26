
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