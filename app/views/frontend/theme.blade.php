<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('head.title')</title>
	{{ HTML::style('includes/css/bootstrap.css') }}
	{{ HTML::style('includes/css/customcss.css') }}
	{{ HTML::style('includes/css/font-awesome.min.css') }}
	{{ HTML::script('includes/js/jquery.min.js') }}
	{{ HTML::script('includes/js/styles.min.js') }}
	{{ HTML::script('includes/js/plugin.min.js') }}
	{{ HTML::script('includes/js/custom.min.js') }}
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'/>
	<link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'/>
	<link href='https://www.blogger.com/static/v1/widgets/1535467126-widget_css_2_bundle.css' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700%2C300%2C100&ver=3.9.2' id='RobotoSlab-css' media='all' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Roboto%3A400%2C100%2C100italic%2C300%2C300italic%2C500%2C400italic%2C500italic%2C700%2C700italic%2C900%2C900italic&ver=3.9.2' id='Roboto-css' media='all' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Roboto%3A400%2C100%2C100italic%2C300%2C300italic%2C500%2C400italic%2C500italic%2C700%2C700italic%2C900%2C900italic&ver=3.9.2' id='Roboto-css' media='all' rel='stylesheet' type='text/css'/>
</head>

<style type="text/css">

/* CONTENT WRAPPER */
#content-wrapper {
background-color:transparent;
margin: 0 auto;
word-wrap:break-word;
width: 1170px;
}
.largebanner {
background:#fff;
border-right:1px solid #e5e5e5;
border-bottom:1px solid #e5e5e5;
border-left:1px solid #e5e5e5;
}
.largebanner .widget {
padding:15px 14px;
overflow:hidden;
}
.largebanner img, .largebanner iframe{
display:block;
max-width:100%;
border:none;
overflow:hidden;
}
/* POST WRAPPER */
#post-wrapper {
background:transparent;
float:left;
width:780px;
max-width:780px;
margin:32px 0 10px;
}
.post-container {
padding:15px 0px 0 0;
}
.breadcrumbs {border-bottom: 1px solid #DDDDDD;border-radius: 2px 2px 2px 2px;border-top: 1px solid #DDDDDD;font-size: 90%;height: 16px;margin-bottom: 10px;margin-top: 1px;overflow: hidden;padding: 5px;display: none;}
.breadcrumbs > span {background: url("http://1.bp.blogspot.com/-VaJX0ShxH6c/TeUGQ0IGOWI/AAAAAAAAJGo/Qw7sIjc5MrQ/s200/bc_separator.png") no-repeat scroll right center transparent;padding: 10px 25px 10px 10px;}
.breadcrumbs > span:last-child {background: none repeat scroll 0 0 transparent;color: #333333;}
.breadcrumbs a {color: #333333;}
.post {
background:#ffffff;
padding:12px 0;
}
.post-body {
color: #777777;
font-family: 'Roboto', sans-serif;
font-size: 15px;
line-height: 1.86em;
font-weight: 400;
}
h2.post-title, h1.post-title {
transition: .5s;
-webkit-transition: .5s;
-moz-transition: .5s;
font-family: 'Roboto Slab', serif;
font-size: 25px;
line-height: 1.52em;
color: #000;
font-weight: 400;
text-decoration: none;
margin-top: -8px;
}
h2.post-title a, h1.post-title a, h2.post-title, h1.post-title {
color:#000;
}
h2.post-title a:hover, h1.post-title a:hover {
color:#0099FF;
}
.img-thumbnail {
background:#fbfbfb url(http://3.bp.blogspot.com/-ltyYh4ysBHI/U04MKlHc6pI/AAAAAAAADQo/PFxXaGZu9PQ/w200-h140-c/no-image.png) no-repeat center center;
position:relative;
float:left;
width:375px;
height:210px;
margin:0 20px 0 0;
}
.img-thumbnail img {
width:375px;
height:210px;
border-radius: 4px;
}
span.rollover {
}
span.rollover:before {
content:"";
position: absolute;
width:24px;
height:24px;
margin:-12px;
top:50%;
left:50%;
}
span.rollover:hover {
opacity: .7;
-o-transition:all 1s;
-moz-transition:all 1s;
-webkit-transition:all 1s;
}
.post-info {
border: 1px solid #f1f1f1;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
-ms-border-radius: 4px;
-khtml-border-radius: 4px;
border-radius: 4px;
padding: 20px 25px 20px;
margin: 0 0 20px;
background: #f1f1f1;
}
.post-info a {
display:inline-block;
color:#666666;
}
.label-info {
	background-color: none !important;
}
.author-info, .time-info, .comment-info, .label-info, .review-info {
margin-right:12px;
display:inline;
}
/* Page Navigation */
.pagenavi {
clear:both;
margin:-5px 0 10px;
text-align:center;
font-size:11px;
font-weight:bold;
text-transform:uppercase;
}
.pagenavi span,.pagenavi a {
margin-right: 3px;
display: inline-block;
color: $(readmore.color);
background-color: #F1F1F1;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
-ms-border-radius: 4px;
-khtml-border-radius: 4px;
border-radius: 4px;
padding: 11px 14px;
margin: 15px 3px 50px 0;
}
.pagenavi .current, .pagenavi .pages, .pagenavi a:hover {
background:#0088FF;
color: #fff;
}
.pagenavi .pages {
display:none;
}

/* Recent Post */
.recent-post-title {
background: url(http://2.bp.blogspot.com/-gzRaJ5AFrCo/U6V7dFE88nI/AAAAAAAAAi0/_DclnNHIuHY/s1600/dot.png);
margin:0 0 15px;
padding:0;
position:relative;
}
div.recent-post-title:after {
content: no-close-quote;
position: absolute;
width: 0px;
height: 0px;
bottom: -6px;
left: 22px;
border-left: 6px solid rgba(0, 0, 0, 0);
border-right: 6px solid rgba(0, 0, 0, 0);
border-top: 6px solid #0088C2;
}
.recent-post-title h2 {
font:normal bold 14px Arial, sans-serif;
height:26px;
line-height:26px;
margin:0 0;
padding:0 10px;
background:#0088C2;
color:#ffffff;
display:inline-block;
}
.recent-post-title h2 a {
color:#ffffff;
}
.stylebox {
float:left;
width:50%;
margin:0 0;
}
.stylebox .widget {
padding:0 15px 15px 0;
}
.stylebox .widget-content {
background:#ffffff;
}
.stylebox ul {
list-style-type:none;
margin:0 0 0 0;
padding:0 0 0 0;
}
.stylebox1 {
float:left;
width:98%;
margin:0 0;
}
.stylebox1 .widget {
padding:0 0px 15px 0;
}
.stylebox1 .widget-content {
background:#ffffff;
}
.stylebox1  ul {
list-style-type:none;
margin:0 0 0 0;
padding:0 0 0 0;
}
/* Recent Post */
ul.xpose_thumbs {
margin:0 0 0 0;
}
ul.xpose_thumbs li {
font-size:12px;
min-height:68px;
margin:0 0 8px;
padding:0 0 8px;
border-bottom:1px dotted #e5e5e5;
}
ul.xpose_thumbs .xpose_thumb {
position:relative;
background:#fbfbfb;
margin:3px 0 10px 0;
width:100%;
height:50px;
padding-bottom:46%;
overflow:hidden;
}
ul.xpose_thumbs .xpose_thumb img {
height:auto;
width:100%;
}
ul.xpose_thumbs1 {
margin:0 0 0 0;
width:49%;
float:left;
}
ul.xpose_thumbs1 li {
font-size:12px;
min-height:68px;
margin:0 0 8px;
padding:0 0 8px;
border-bottom:1px dotted #e5e5e5;
}
ul.xpose_thumbs1 .xpose_thumb {
position:relative;
background:#fbfbfb;
margin:3px 0 10px 0;
width:100%;
height:73px;
padding-bottom:46%;
overflow:hidden;
}
ul.xpose_thumbs1 .xpose_thumb img {
height:auto;
width:100%;
}
ul.xpose_thumbs2 {
font-size:13px;
}
ul.xpose_thumbs2 li {
padding:0 0;
min-height:66px;
font-size:11px;
margin: 0 0 8px;
padding: 0 0 8px;
border-bottom:1px dotted #e5e5e5;
}
ul.xpose_thumbs2 .xpose_thumb2 {
background:#fbfbfb;
float:left;
margin:3px 8px 0 0;
height:70px;
width:70px;
}
ul.xpose_thumbs2 .xpose_thumb2 img {
height:70px;
width:70px;
}
span.xpose_title {
font:normal normal 16px Fjalla One, Helvetica, Arial, sans-serif;
display:block;
margin:0 0 5px;
line-height:1.4em;
}
span.xpose_title2 {
font-size:14px;
}
span.rp_summary {
display:block;
margin:6px 0 0;
color:#666666;
}
span.xpose_meta {
background:transparent;
display:block;
font-size:11px;
color:#aaa;
}
span.xpose_meta a {
color:#aaa !important;
display:inline-block;
}
span.xpose_meta_date, span.xpose_meta_comment, span.xpose_meta_more  {
display:inline-block;
margin-right:8px;
}
span.xpose_meta_date:before {
content: "\f073";
font-family: FontAwesome;
font-style: normal;
font-weight: normal;
text-decoration: inherit;
padding-right:4px;
}
span.xpose_meta_comment:before  {
content: "\f086";
font-family: FontAwesome;
font-style: normal;
font-weight: normal;
text-decoration: inherit;
padding-right:4px;
}
span.xpose_meta_more:before {
content: "\f0a9";
font-family: FontAwesome;
font-style: normal;
font-weight: normal;
text-decoration: inherit;
padding-right:4px;
}
ul.xpose_thumbs2 li a:hover, ul.xpose_thumbs li a:hover {
color:#0072C6;
}
ul.xpose_thumbs22 {
font-size:13px;
width:49%;
float:right;
}
ul.xpose_thumbs22 li {
padding:0 0;
min-height:66px;
font-size:11px;
margin: 0 0 8px;
padding: 0 0 8px;
border-bottom:1px dotted #e5e5e5;
}
ul.xpose_thumbs22 .xpose_thumb2 {
background:#fbfbfb;
float:left;
margin:3px 8px 0 0;
height:70px;
width:70px;
}
ul.xpose_thumbs22 .xpose_thumb2 img {
height:70px;
width:70px;
}
span.xpose_title {
font:normal normal 16px Fjalla One, Helvetica, Arial, sans-serif;
display:block;
margin:0 0 5px;
line-height:1.4em;
}
span.xpose_title2 {
font-size:14px;
}
span.rp_summary {
display:block;
margin:6px 0 0;
color:#666666;
}
span.xpose_meta {
background:transparent;
display:block;
font-size:11px;
color:#aaa;
}
span.xpose_meta a {
color:#aaa !important;
display:inline-block;
}
span.xpose_meta_date, span.xpose_meta_comment, span.xpose_meta_more  {
display:inline-block;
margin-right:8px;
}
span.xpose_meta_date:before {
content: "\f073";
font-family: FontAwesome;
font-style: normal;
font-weight: normal;
text-decoration: inherit;
padding-right:4px;
}
span.xpose_meta_comment:before  {
content: "\f086";
font-family: FontAwesome;
font-style: normal;
font-weight: normal;
text-decoration: inherit;
padding-right:4px;
}
span.xpose_meta_more:before {
content: "\f0a9";
font-family: FontAwesome;
font-style: normal;
font-weight: normal;
text-decoration: inherit;
padding-right:4px;
}
ul.xpose_thumbs22 li a:hover, ul.xpose_thumbs li a:hover {
color:#0072C6;
}
/* BOTTOMBAR */
#bottombar {
background:#0088ff;
overflow:hidden;
margin:0 auto;
padding:10px 28px;
color:#dddddd;
}
#bottombar .left {
float:left;
width:34%;
}
#bottombar .center {
float:left;
width:34%;
}
#bottombar .right {
float:right;
width:32%;
}
#bottombar .left .widget, #bottombar .center .widget {
margin:0 15px 15px 0;
}
#bottombar .right .widget {
margin:0 0 15px 0;
}
#bottombar h2 {
font:normal bold 13px Arial, sans-serif;
margin:0 0 10px 0;
padding:6px 0;
text-transform:uppercase;
position:relative;
background: url(http://1.bp.blogspot.com/-MlMosFqnzNQ/U6V71fpyrHI/AAAAAAAAAi8/DroNXqPjOw0/s1600/dot-footer.png);
color:#eeeeee;
}
#bottombar ul, #bottombar ol {
list-style-type:none;
margin:0 0 0 0;
padding:0 0 0 0;
}
#bottombar li {
margin:5px 0;
padding:0 0 0 0;
}
#bottombar ul li:before {
color:#eeeeee !important;
}
#bottombar a {
color:#dddddd;
}
#bottombar a:hover {
color:#ffffff;
}
/* FOOTER */
#footer-wrapper {
background:#ffffff;
margin:0 auto;
padding:1px 20px 12px;
overflow:hidden;
color:#eeeeee;
font-size:12px;
}
.footer-left {
float: left;
margin: 40px 0 0 0;
color: #777;
font-size: 13px;
}
.footer-right {
float:right;
margin:10px;
}
#footer-wrapper a {
color:#333;
}
#footer-wrapper a:hover {
color:#555;
}
/* CUSTOM WIDGET */
.widget ul {
line-height:1.4em;
}
/* Tab Menu */
.set, .panel {
margin: 0 0;
}
.tabs .panel {
padding:0 0;
}
.tabs-menu {
border-bottom:3px solid #E73138;
padding: 0 0;
margin:0 0;
}
.tabs-menu li {
font:normal bold 12px Arial, sans-serif;
display: inline-block;
*display: inline;
zoom: 1;
margin: 0 3px 0 0;
padding:10px;
background:#fff;
border:1px solid #e5e5e5;
border-bottom:none !important;
color:#333333;
cursor:pointer;
position:relative;
}
.tabs-menu .active-tab {
background:#E73138;
border:1px solid #E73138;
border-bottom:none !important;
color:#fff;
}
.tabs-content {
padding:10px 0;
}
.tabs-content .widget li {
float:none !important;
margin:5px 0;
}
.tabs-content .widget ul {
overflow:visible;
}
/* label
.label-size-1,.label-size-2,.label-size-3,.label-size-4,.label-size-5 {
font-size:100%;
filter:alpha(100);
opacity:10
}
.cloud-label-widget-content{
text-align:left
}
.label-size {
background:#E73037;
display:block;
float:left;
margin:0 3px 3px 0;
color:#ffffff;
font-size:11px;
text-transform:uppercase;
}
.label-size a,.label-size span{
display:inline-block;
color:#ffffff !important;
padding:6px 8px;
font-weight:bold;
}
.label-size:hover {
background:#333333;
}
.label-count {
white-space:nowrap;
padding-right:3px;
margin-left:-3px;
background:#333333;
color:#fff !important;
}
.label-size {
line-height:1.2
}*/
/* Custom CSS for Blogger Popular Post Widget */
.PopularPosts ul,
.PopularPosts li,
.PopularPosts li img,
.PopularPosts li a,
.PopularPosts li a img {
margin:0 0;
padding:0 0;
list-style:none;
border:none;
background:none;
outline:none;
}
.PopularPosts ul {
margin:.5em 0;
list-style:none;
color:black;
counter-reset:num;
}
.PopularPosts ul li img {
display:block;
margin:0 .5em 0 0;
width:50px;
height:50px;
float:left;
}
.PopularPosts ul li {
background-color:#eee;
margin:0 10% .4em 0 !important;
padding:.5em 1.5em .5em .5em !important;
counter-increment:num;
position:relative;
}
/* Set color and level */
.PopularPosts ul li {margin-right:1% !important}
.PopularPosts .item-thumbnail {
margin:0 0 0 0;
}
.PopularPosts .item-snippet {
color: #777777;
font-family: 'Roboto', sans-serif;
font-size: 14px;
line-height: 1.5em;
}
.profile-img{
display:inline;
opaciry:10;
margin:0 6px 3px 0;
}
/* back to top */
#back-to-top {
background:#353738;
color:#ffffff;
padding:8px 10px;
font-size:24px;
}
.back-to-top {
position:fixed !important;
position:absolute;
bottom:20px;
right:20px;
z-index:999;
}
/* ==== Related Post Widget Start ==== */
#related-posts{
float:left;
width:auto;
margin-bottom:40px;
}
#related-posts h2{
font: normal normal 18px Oswald;
text-transform: uppercase;
font-size: 17px;
text-align: left;
color: #585858;
margin-bottom: 5px;
margin: 7px 0 33px;
background-color: #F1F1F1;
font-family: 'Roboto Slab', serif;
padding: 15px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}
#related-posts .related_img {
padding: 0px;
width: 250px;
height: 140px;
border-radius: 3%;
}
#related-posts .related_img:hover{
opacity:.7;
filter:alpha(opacity=70);
-moz-opacity:.7;
-khtml-opacity:.7;
}
/* share buttons */
.share-buttons-box {
height: 67px;
background: url(http://3.bp.blogspot.com/-moj4-jk-UB0/U1qCkCPaGQI/AAAAAAAADTY/tixmak8NHV8/s1600/share.png) no-repeat 330px 10px;
margin:20px 0 15px;
overflow:hidden;
}
.share-buttons {
margin:0 0;
height:67px;
float:left;
}
.share-buttons .share {
float:left;
margin-right:10px;
display:inline-block;
}
/* error and search */
.status-msg-wrap {
font-size:120%;
font-weight:bold;
width:100%;
margin:20px auto;
}
.status-msg-body {
padding:20px 2%;
width:96%;
}
.status-msg-border {
border:1px solid #e5e5e5;
opacity:10;
width:auto;
}
.status-msg-bg {
background-color:#ffffff;
}
.status-msg-hidden {
padding:20px 2%;
}
#ArchiveList ul li:before {
content:"" !important;
padding-right:0px !important;
}
/* facebook comments */
.fb-comments{width: 100% !important;}
.fb-comments iframe[style]{width: 100% !important;}
.fb-like-box{width: 100% !important;}
.fb-like-box iframe[style]{width: 100% !important;}
.fb-comments span{width: 100% !important;}
.fb-comments iframe span[style]{width: 100% !important;}
.fb-like-box span{width: 100% !important;}
.fb-like-box iframe span[style]{width: 100% !important;
}
.rich-snippet {
padding:10px;
margin:15px 0 0;
border:3px solid #eee;
font-size:12px;
}
/*-------sidebar----------------*/
div#main {
width: 772px;
}
div#mywrapper {
float: left;
width: 780px;
}
#sidebartab {
margin-bottom: 15px;
margin-top: -15px;
}
.tab-widget-menu {
height: 46px;
margin: 0;
padding: 20px 0 0 2px;
}
#sidebartab .widget {
margin-bottom: 0;
padding-bottom: 0;
}
#sidebartab .h2title {
display: none;
}
#sidebartab .h2titlesmall {
display: none;
}
#sidebartab .widget-content {
box-shadow: none;
-moz-box-shadow: none;
-webkit-box-shadow: none;
border: 0;
}
.tab-widget-menu ul, .tab-widget-menu li {
list-style: none;
padding: 0;
margin: 0;
}
.tab-widget-menu li {
background: #FCFCFC;
bottom: -2px;
color: #000;
cursor: pointer;
float: right;
height: 38px;
line-height: 38px;
margin: -12px 6px 0 0px;
padding: 7px 0px 2px;
position: relative;
text-align: center;
width: 17.3%;
z-index: 2;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
-ms-border-radius: 4px;
-khtml-border-radius: 4px;
border-radius: 4px;
}
.tab-widget-menu li.selected {
background: #0088C2;
border-width: 1px 1px 3px;
color: #FFF;
margin: -12px 6px 0 0px;
padding: 7px 0px 2px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
-ms-border-radius: 4px;
-khtml-border-radius: 4px;
border-radius: 4px;
}
li .fa {
font-size: 20px;
color: #777;
}
.selected .fa {
color: #fff;
}
div#tab1 ,div#tab2 ,div#tab3{
background: #fff;
padding: 14px 21px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
-ms-border-radius: 4px;
-khtml-border-radius: 4px;
border-radius: 4px;
}
#sidebartab .h2title, #sidebartab h2 {
display: none;
}
#sidebartab .h2titlesmall, #sidebartab h2 {
display: none;
}
#sidebartab .widget-content img {
padding: 2px;
width: 90px;
height: 55px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
-ms-border-radius: 4px;
-khtml-border-radius: 4px;
border-radius: 4px;
}
#sidebartab .popular-posts li {
background: none repeat scroll 0 0 transparent;
border-bottom: 1px solid #E9E9E9;
overflow: hidden;
padding: 10px 0;
}
.PopularPosts img:hover, #sidebartab .widget-content img:hover {
-khtml-opacity: 0.4;
-moz-opacity: 0.4;
opacity: 0.4;
}
#sidebarlab .sidebar li a:hover {
color: #fff;
background: #222;
}
.PopularPosts .item-title{
padding-bottom: 1.2em;
color: #000000;
font-family: 'Roboto', sans-serif;
font-size: 14px;
font-weight: 400;}
.PopularPosts a {font-weight:bold;}
.tagcloud a {
background: #e4e4e4;
color: #888;
display: block;
float: left;
font-size: 14px!important;
line-height: 12px;
margin: 0 2px 2px 0;
padding: 12px 17px;
}
.tagcloud a:link {
color: #888;
}
.tagcloud a:hover {
background: #0088C2;
color: #fff;
}
.tagcloud1 a {
background: #555555;
color: #888;
display: block;
float: left;
font-size: 14px!important;
line-height: 12px;
margin: 0 2px 2px 0;
padding: 12px 17px;
}
.tagcloud1 a:link {
color: #888;
}
.tagcloud1 a:hover {
background: #0088C2;
color: #fff;
}
.showpageArea a {
clear:both;
margin:-5px 0 10px;
text-align:center;
font-size:11px;
font-weight:bold;
text-transform:uppercase;
}
.showpageNum a {
padding:6px 10px;
margin-right:3px;
display:inline-block;
color:#333333;
background-color:#ffffff;
border: 1px solid #dddddd;
}
.showpageNum a:hover {
border: 1px solid #aaaaaa;
}
.showpagePoint {
padding:6px 10px;
margin-right:3px;
display:inline-block;
color:#333333;
background-color:#ffffff;
border: 1px solid #aaaaaa;
}
.showpageOf {
display:none;
}
.showpage a {
padding:6px 10px;
margin-right:3px;
display:inline-block;
color:#333333;
background-color:#ffffff;
border: 1px solid #dddddd;
}
.showpage a:hover {
border: 1px solid #aaaaaa;
}
.showpageNum a:link,.showpage a:link {
text-decoration:none;
color:#666;
}
.button {
text-align: center;
width: 100%;
margin: 10px 0;
padding: 0;
font-size: 14px;
font-family: 'Tahoma', Geneva, Sans-serif;
color: #fff;
margin-left: 0em !important;
}
.button ul {
margin: 0;
padding: 0;
}
.button li {
display: inline-block;
margin: 10px 0;
padding: 0;
}
.demo {
border-radius: 3px;
padding: 8px 12px;
background: #e74c3c;
color: #fff !important;
transition: background-color 1s 0s ease-out;
}
.download {
border-radius: 3px;
padding: 8px 12px;
background: #3498db;
color: #fff !important;
transition: background-color 1s 0s ease-out;
}
.buton a {
color: #fff;
}
.demo:hover {
background: #c0392b;
color: #fff;
}
.download:hover {
background: #2980b9;
color: #fff;
}
.download:before {
content: "\f019";
font-family: FontAwesome;
font-weight: normal;
padding: 8px;
background: #2980b9;
margin-left: -12px;
margin-right: 6px;
border-radius: 3px 0 0 3px;
font-size: 16px;
}
.demo:before {
content: "\f06e";
font-family: FontAwesome;
font-weight: normal;
padding: 8px;
background: #c0392b;
margin-left: -12px;
margin-right: 6px;
border-radius: 3px 0 0 3px;
font-size: 16px;
}
#Attribution1 {
height:0px;
visibility:hidden;
display:none
}
.author-avatar img{float:left;margin:0 10px 5px 0;border:50%;}
#author-box h3 {
padding-bottom: 5px;
border-bottom: 4px solid #333;
font-size: 18px;
font-family: Oswald,arial,Georgia,serif;
}
.share-post {
font-size: 13px;
margin-top: 15px;
}
.share-post li {
float: left;
}
.share-post a {
display: block;
margin-right: 10px;
text-indent: -9999px;
margin-left: 12px;
background: url(http://4.bp.blogspot.com/-M_utSb-nN04/U6V8Gut9dJI/AAAAAAAAAjE/6g1X58pjjcg/s1600/single-share.png) no-repeat;
-webkit-transition: opacity .2s;
-moz-transition: opacity .2s;
-o-transition: opacity .2s;
transition: opacity .2s;
}
.share-post a:hover {
opacity: .7;
}
.share-post
.facebook a {
width: 7px;
}
.share-post
.twitter a {
width: 18px;
background-position: -47px 0;
}
.share-post
.google a {
width: 14px;
background-position: -105px 0;
}
.share-post
.pinterest a {
width: 11px;
background-position: -159px 1px;
}
/*** Share Post Styling ***/
#share-post {
width: 100%;
overflow: hidden;
margin-top: 20px;
}
#share-post a {
display: block;
height: 32px;
line-height: 43px;
color: #fff;
float: left;
padding-right: 10px;
margin-right: 10px;
margin-bottom: 25px;
text-decoration: none;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
-ms-border-radius: 4px;
-khtml-border-radius: 4px;
border-radius: 4px;
overflow: hidden;
margin: 0 10px 10px 0;
transition: .5s;
-webkit-transition: .5s;
-moz-transition: .5s;
width: 125px;
height: 45px;
float: left;
padding: 0;
overflow: hidden;
text-align: center;
font-weight: 600;
}
#share-post
.facebook {
background-color: #6788CE;
}
#share-post
.twitter {
background-color: #29C5F6;
}
#share-post
.google {
background-color: #E75C3C;
}
#share-post
span {
display: block;
width: 32px;
height: 32px;
float: left;
padding: 6px;
background: url(http://4.bp.blogspot.com/-M_utSb-nN04/U6V8Gut9dJI/AAAAAAAAAjE/6g1X58pjjcg/s1600/single-share.png) no-repeat;
background-position-y: 6px;
background-position-x: 7px;
}
#share-post
.facebook span {
background-color: #3967C6;
}
#share-post
.twitter span {
background-color: #26B5F2;
background-position: -65px;
}
#share-post
.google span {
background-color: #E94D36;
background-position: -137px;
}
/* Search Box
----------------------------------------------- */
#searchformfix
{
float:right;
overflow:hidden;
position:relative;
}
#searchform
{
margin:25px 0 0;
padding:0;
}
#searchform fieldset
{
padding:0;
border:none;
margin:0;
}
#searchform input[type="text"]{
background: #0088FF;
border: none;
float: left;
padding: 4px 10px 0px 15px;
margin: 0px;
width: 106px;
height: 34px;
line-height: 34px;
transition: all 600ms cubic-bezier(0.215,0.61,0.355,1) 0s;
-moz-transition: all 300ms cubic-bezier(0.215,0.61,0.355,1) 0s;
-webkit-transition: all 600ms cubic-bezier(0.215,0.61,0.355,1) 0s;
-o-transition: all 600ms cubic-bezier(0.215,0.61,0.355,1) 0s;
color: #F5F3F3;}
#searchform input[type=text]:hover,#searchform input[type=text]:focus
{
width:200px;
}
#searchform input[type=submit]
{
background:url(http://4.bp.blogspot.com/-R8OKVUsis3s/UgZEksy0V1I/AAAAAAAAAT4/QtN9sBHMZis/s1600/icon-search.png) center 9px no-repeat;
cursor:pointer;
margin:0;
padding:0;
width:37px;
height:34px;
line-height:34px;
background-color:#0088FF;
}
input[type=submit]
{
padding:4px 17px;
color:#ffffcolor:#585858;
text-transform:uppercase;
border:none;
font-size:20px;
background:url(gradient.png) bottom repeat-x;
cursor:pointer;
margin-top:10px;
float:left;
overflow:visible;
transition:all .3s linear;
-moz-transition:all .3s linear;
-o-transition:all .3s linear;
-webkit-transition:all .3s linear;
}
.selectnav {
display:none;
}
/*---Flicker Image Gallery-----*/
.flickr_plugin {
width: 100%;
}
.flickr_badge_image {
float: left;
height: 80px;
margin: 10px 5px 0px 5px;
width: 80px;
}
.flickr_badge_image a {
display: block;
}
.flickr_badge_image a img {
display: block;
width: 100%;
height: auto;
-webkit-transition: opacity 100ms linear;
-moz-transition: opacity 100ms linear;
-ms-transition: opacity 100ms linear;
-o-transition: opacity 100ms linear;
transition: opacity 100ms linear;
}
.flickr_badge_image a img:hover {
opacity: .5;
}
div#act {
display: none;
}
#container{
width: 1170px;
margin:0 auto;
}
.vcard span {
color: #0088FF;
}
a.timestamp-link {
color: #0088FF;
}
span.comment-info a {
color: #aaaaaa;
}
span.comment-info l,span.time-info l {
background: url("http://3.bp.blogspot.com/-D6V8VgPZ9Is/VAii5y80N9I/AAAAAAAABjo/Out2-0og5Do/s1600/list-style.png") no-repeat center left;
padding-left: 8px;
margin-right: 6px;
margin-left: -5px;
}
/*--- SOC. IKONS ---*/
.soc-icon {
width: auto;
display: inline-block;
margin: 25px 0 0;
}
.soc-icon ul {
margin: 0;
}
.soc-icon li {
margin: 0 0 0 8px;
padding: 0;
display: inline-block;
}
.soc-icon li a {
transition: .5s;
-webkit-transition: .5s;
-moz-transition: .5s;
float: left;
width: 26px;
height: 24px;
overflow: hidden;
}
.soc-icon li a img {
transition: .5s;
-webkit-transition: .5s;
-moz-transition: .5s;
position: relative;
top: 0;
float: left;
width: 26px;
height: 49px;
}
.soc-icon li a:hover img {
top: -24px;
}
.scroll-top.cl-effect-5 {
float: right;
margin-right: 36px;}
p#back-top {
background: #fff;
padding: 10px 11px 11px;
color: #222;
border-radius: 3px;
}
p#back-top .fa {
color: #222;
}
/*----------//// AUTHORS ARCHIVE \\\\-------------*/
.author-archive {
border: 1px solid #f1f1f1;
padding: 30px 30px 20px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
-ms-border-radius: 4px;
-khtml-border-radius: 4px;
border-radius: 4px;
margin: 0 0 10px;
background: #f1f1f1;
margin-top:30px
}
.author-archive .soc-icon{margin:0}
.author-archive img {
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
-ms-border-radius: 4px;
-khtml-border-radius: 4px;
border-radius: 4px;
}
.author-archive h3 {
margin: -3px 0 15px;
font-weight: 400;
}
.author-archive p {
margin: 0 0 15px;
background: #fff;
padding: 12px;
}
div#top-comment {
margin-top: 20px;
}
.top-comment-widget-menu {
float: left;
margin: -15px 0 15px;
padding: 0;
width: 100%;
height: 40px;
background: #444444 url(http://2.bp.blogspot.com/-YxxeRcqP6UI/U6V7A_pfmnI/AAAAAAAAAik/NyzEC4z7POQ/s1600/menu-bg2.png) repeat;
}
.top-comment {
float: left;
font-size: 14px;
list-style: none outside none;
text-transform: uppercase;
width: 43%;
margin: 1px;
padding: 10px 20px !important;
font-weight: normal;
color: #fff;
cursor: pointer;
}
#relpost_img_sum .news-text {
display: none;
}
.top-comment.selected {
cursor: pointer;
padding: 11px 20px !important;
margin: 0px 0 0 -16px;
color: #FFF;
background: #0088FF;
-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
-o-transition: all .2s ease-in-out;
-ms-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
}
.top-comment.blogico:before {
content: &quot;\f0d5&quot;;
font-family: fontawesome;
margin-right: 15px;
}
.top-comment.faceico:before {
content: &quot;\f09a&quot;;
font-family: fontawesome;
margin-right: 15px;
}
#sidebar-wrapper {
	margin: 92px 17px 10px;
	width: 100%;	
}
.widget-content ul {
	list-style-type: none;
}
</style>
<style type='text/css'>


@media only screen and (max-width:767px) {
#selectnav1 {background: none repeat scroll 0 0 #333333;border: 1px solid #232323;color: #FFFFFF;margin:27px 0 0 0px;padding: 5px;width: 430px;position: absolute;}
.selectnav { display: block;margin: 0 10px; padding: 7px; width: 90%;}}

@media only screen and (max-width:479px) {
#selectnav1 {width: 275px;}}
  </style>
<style type='text/css'> 

@media only screen and (max-width:1219px){

#outer-wrapper {width: 1024px;}
    #container {width: 924px;}
    #content-wrapper{width:100%}
#post-wrapper,div#mywrapper {width: 650px;}
    #sidebar-wrapper{max-width:370px;}
div#main {width: 659px;}
} 

@media only screen and (max-width:985px) and (min-width: 768px) {

#outer-wrapper {width: 772px;}
#searchformfix,.soc-icon{display:none}
#container {width: 700px;}
#content-wrapper{width:710px}
#post-wrapper,div#mywrapper {width: 710px;}
#sidebar-wrapper{width: 100%;max-width: 100%;}
.sidebar-container { width: 95%;}
div#main {width: 710px;}
} 

/* Phone : 480px */ 
@media only screen and (max-width: 767px) and (min-width: 480px){ 
#outer-wrapper {width: 490px;}
#searchformfix,.soc-icon{display:none}
.header-right {width: 100%;max-width: 432px;float:none}
#container {width: 430px;}
#content-wrapper{width:430px}
#post-wrapper,div#mywrapper {width: 430px;}
#sidebar-wrapper{width: 100%;max-width: 100%;}
.sidebar-container { width: 95%;}
div#main {width: 430px;}
#menu-main{display:none;}
.header {width: 64.7%;max-width: 257px;margin: 75px 0 50px 115px;}
.img-thumbnail img {width: 430px;height: 230px;}
.img-thumbnail {width: 430px;height: 240px;}
.top-comment-widget-menu{height: 58px;}
    .top-comment{width:41%} 
}


/* Phone : 320px */ 
@media only screen and (max-width:479px){ 
#outer-wrapper {width: 325px;}
#searchformfix,.soc-icon{display:none}
.header-right {display:none}
#container {width: 320px;}
#content-wrapper{width:300px;padding: 0px 22px 0;}
#post-wrapper,div#mywrapper {width: 300px;}
#sidebar-wrapper{width: 100%;max-width: 300px;}
    .sidebar-container {width: 300px;}
div#main {width: 300px;}
#menu-main{display:none;}
.header {width: 64.7%;max-width: 257px;margin: 75px 0 50px 33px;}
.img-thumbnail img {width: 280px;height: 180px;}
.img-thumbnail {width: 280px;height: 190px;}
.top-comment-widget-menu{height: 58px;}
    .top-comment{width:37%}
} 

</style>
<body>
	@include('includes.navbar')
	<section class="dashboard">
		<div class="container">
			@if(Session::has('messageOk')) 
			<div class="alert alert-success alert-dismissible user-message text-center" role="alert">
			  	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			  	<span>{{ Session::get('messageOk') }}</span>
			</div>
			@elseif(Session::has('messageNo'))
			<div class="alert alert-danger alert-dismissible user-message text-center" role="alert">
			  	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			  	<span>{{ Session::get('messageNo') }}</span>
			</div>
			@endif
			<div class="content">
				@yield('contentData')
			</div>	
		</div>
	</section>
	@include('includes.footer')
</body>
</html>