@extends('templates.admin.master')
@section('content')
<!--main-container-part-->
	<div id="content">
	<!--breadcrumbs-->
	  <div id="content-header">
	    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Trang chủ</a></div>
	  </div>
	<!--End-breadcrumbs-->

	<!--Action boxes-->
	  <div class="container-fluid">
	    <div class="quick-actions_homepage">
	        <ul class="quick-actions">
		        <li class="bg_lr"> <a href="{{ route('admin.feedback.index') }}"> <i class="icon-dashboard"></i>Phản hồi</a> </li>
		        <li class="bg_ly"> <a href="{{ route('admin.slide.index') }}"> <i class="icon-inbox"></i>Slide</a> </li>
		        <li class="bg_ls"> <a href="{{ route('admin.contact.index') }}"> <i class="icon-fullscreen"></i><span class="label label-important">10</span>Liên hệ</a> </li>
		        <li class="bg_lb"> <a href="{{ route('admin.cat.index') }}"> <i class="icon-th-list"></i>Danh mục</a> </li>
		        <li class="bg_lh"> <a href="{{ route('admin.news.index') }}"> <i class="icon-signal"></i>Tin tức</a> </li>
		        <li class="bg_lv span5"> <a href="{{ route('admin.user.index') }}"> <i class="icon-th"></i>Admin</a> </li>
	        </ul>
	    </div>
	<!--End-Action boxes-->    

	<!--End-Chart-box--> 
	    
	        
	  </div>
	</div>
@stop