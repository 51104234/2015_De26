@extends('frontend.theme')

@section('head.title')
Home
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
<div class='clear'></div>
<div class='main section' id='main'><div class='widget Blog' id='Blog1'>
<div class='blog-posts hfeed'>
<!-- google_ad_section_start(name=default) -->
@foreach ($posts as $row)
<div class="date-outer">
<div class="date-posts">
                            
<div class='post-outer'>
<article class='post hentry' itemprop='blogPost' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>

<a href='{{ route('post.show',$row->id)}}'>
<div class='img-thumbnail'>
<span class='rollover'></span>
<img src="<?php echo asset("includes/images/{$row->image}") ?>" class="img-responsive" alt="Generic placeholder thumbnail">
</div>
</a>

<h2 class='post-title entry-title' itemprop='name'>
<a href='{{ route('post.show',$row->id)}}'>
{{$row->title}}
</a>
</h2>
<div class='post-info'>
<span class='author-info'>
<span class='vcard'>
<span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
<meta content='https://plus.google.com/117087522982435008929' itemprop='url'/>

<span itemprop='name'>
{{$row->author}}
</span>

</span>
</span>
</span>
<meta content='http://blogmag-themexpose.blogspot.com/2014/07/duis-quis-erat-non-nunc-fringilla.html' itemprop='url'/>
<span class='time-info'>
<l></l>
{{$row->created_at}}
</span>
<span class='comment-info'>
<l></l>
{{$row->comment_count}} Comments 
                                    
</span>
<span class='item-control blog-admin pid-563331376'>

<b style='color:#EE3322;'>
<i class='fa fa-pencil'></i>
                              Edit
                            </b>

</span>
</div>
<div class='post-header'>
<div class='post-header-line-1'></div>
</div>
<div class='post-body entry-content' id='post-body-6244651027486854106' itemprop='articleBody description'>
<div>
        {{$row->read_more}}
        <a class="btn btn-default" href="{{ route('post.show',$row->id)}}" role="button">Readmore &raquo;</a>
</div>
<div style='clear: both;'></div>
</div>
</article>
</div>

</div>
</div>
@endforeach

</div><div class='pagenavi'>{{$posts->links()}}<div class='clear'></div></div></div></div></div>

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
          $post = Post::orderBy('id','desc')->take(6)->get(); 
        ?>
        @foreach ($post as $row)
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