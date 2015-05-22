@extends('frontend.theme')

@section('head.title')
List post
@endsection

@section('contentData')
<div class="container">
<div class="row">
<div class="col-md-8">
<div id='content-wrapper'>
<div id='mywrapper'>
<!-- post wrapper start -->
<div id='post-wrapper'>
<div class='post-container'>
          <div class="row">
              <!-- First Blog Post -->
              <article class='post hentry' itemprop='blogPost' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>
                <h1 class='post-title entry-title' itemprop='name'>
                {{$post->title}}
                </h1>
              <div class='post-info'>
              <span class='author-info'>
              <span class='vcard'>
                <span itemprop='name'>
                {{$post->author}}
                </span>
              </span>
              </span>
              <span class='time-info'>
              <l></l> Posted on {{$post->created_at}}
              </span>
              <span class='comment-info'>
              <a href='#comment-form' onclick=''>
              <l></l>
                                                    Add Comment                        
              </a>
              </span>
              <span class='label-info'>
              <i class='fa fa-tags'></i>
              <?php 
                $categories = Categories::where('id',$post->categories_id)->first();
              ?>
              <l></l> <a href="{{ route('post.categories',$categories->id)}}"> {{$categories->categories}}</a>
              </span>
              </div>
              <div dir="ltr" style="text-align: left;" trbidi="on"><div style="text-align: justify;"><div class="separator" style="clear: both; text-align: center;">
              <img border="0" height="207" src="<?php echo asset("includes/images/{$post->image}") ?>" width="400" /></div>
              <div class='post-body entry-content' id='post-body-2114992320157077955' itemprop='description articleBody'>
              <div dir="ltr" style="text-align: left;" trbidi="on">
              <div style="text-align: justify;">
              <div class="separator" style="clear: both; text-align: center;">
              </div><br />{{$post->content}}</div></div>
            <div style='clear: both;'></div>
          </div><!--/row-->
          </div>
          </div>
      </article>
</div>
      <hr>

      <!-- Blog Comments -->

      <!-- Comments Form -->
      <div class="well">
          <h4>Leave a Comment:</h4>
          <a name='comment-form'></a>
          <form role="form" action="{{ route('post.comment')}}" method="POST">
              @if(Session::has('errorComment'))
              <div class='alert alert-danger'>
                  <ul>
                      <li>{{Session::get('errorComment')}}</li>
                  </ul>    
                  </div>  
              {{Session::forget('errorComment')}}
              @endif
              <div class="form-group">
                  <input  type="hidden" id="post_id" name="post_id" value="{{$post->id}}">
                  <textarea class="form-control" rows="3" name="comment" id="comment"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

      <hr>

      <!-- Posted Comments -->

      <!-- Comment -->
      <?php 
        $comment = Comment::where('post_id',$post->id)->get();
      ?>
      <div class="form-group media-body"><span class="glyphicon glyphicon-comment"></span> {{$post->comment_count}} Comments
      </div>
      @foreach($comment as $row)
      <div class="media">
          <a class="pull-left" href="#">
              <img class="media-object" src="http://placehold.it/64x64" alt="">
          </a>
          <div class="media-body">
              <h4 class="media-heading">{{$row->commenter}}
                  <small>comment on {{$row->created_at}}</small>
              </h4>
              {{$row->comment}}
          </div>
      </div>
      @endforeach

      <!-- Comment -->
      
      </div>
</div>
</div>
</div>
</div>
<div class="col-md-4" id="sidebar">
<aside id='sidebar-wrapper'>
<div class='sidebar-container'>
  <div id='sidebartab'>
  <div id='tab'>
  <!--Sidebar Tabs Widgets Started-->
  <div class='tab-widget-menu clear'>
  <ul>
  <li class='tab1'>
  <i class='fa fa-star-o'></i>
  </li>
  <li class='tab2'>
  <i class='fa fa-tags'></i>
  </li>
  </ul>
  <div class='clear'></div>
  </div>
        <div class='widget1' id='tab1'>
        <div class='sidebar section' id='tab1-popular-posts'><div class='widget PopularPosts' id='PopularPosts1'>
        <h2>
        Popular Posts
        </h2>
        <div class='widget-content popular-posts'>
        <ul>
        <?php 
          $posts = Post::orderBy('id','desc')->take(6)->get();
        ?>
        @foreach ($posts as $row)
        <li>
        <div class='item-content'>
        <div class='item-thumbnail'>
        <a href="{{ route('post.show',$row->id)}}">
        <img alt='' border='0' height='72' src='<?php echo asset("includes/images/{$row->image}") ?>' width='72'/>
        </a>
        </div>
        <div class='item-title'>
        <a href="{{ route('post.show',$row->id)}}">
          <b>{{$row->title}}</b>
          </a>
        </div>
        <div class='item-snippet'>
                {{$row->read_more}}
        </div>
        </div>
        <div style='clear: both;'></div>
        </li>
        @endforeach
        </ul>
        <div class='clear'></div>


        </div>
        </div>
        </div>
        </div>
                <div class='widget1 tagcloud' id='tab2'>
                <div class='sidebar section' id='tab3-comments'><div class='widget Label' id='Label1'>
                <h2>
                Labels
                </h2>
                <div class='widget-content list-label-widget-content'>
                    <ul>
                    <li><?php 
                          $categories=Categories::all();
                        ?>
                        @foreach ($categories as $rowC)
                          <a href="{{ route('post.categories',$rowC->id)}}">{{$rowC->categories}}</a>
                        @endforeach
                        </li>
                    </ul>
                <div class='clear'></div>

                </div>
                </div>
                </div>
                </div>
  </div>
  <div style='clear: both;'></div>
  <script type='text/javascript'>
                  //<![CDATA[
                  $(document).ready(function(){
                    $('#tab .widget1').hide();
                    $('#tab .widget1:first').show();
                    $('.tab-widget-menu ul li:first').addClass('selected');
                    $('.tab-widget-menu ul li').click(function(){ 
                      $('.tab-widget-menu ul li').removeClass('selected');
                      $(this).addClass('selected');
                      $('#tab .widget1').hide();
                      $('#tab .widget1').eq($('.tab-widget-menu ul li').index(this)).slideDown()(500);
                    });
                  });
                  //]]>
  </script>
  <!--Sidebar Tabs Widgets End-->
  </div>
</div>
</aside>
</div>
</div>
<!-- sidebar wrapper end -->
</div>
</div>
@endsection