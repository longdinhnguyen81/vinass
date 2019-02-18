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
		        <li class="bg_lr"> <a href=""> <i class="icon-dashboard"></i> Danh mục</a> </li>
		        <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i>Câu chuyện</a> </li>
		        <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i>Admin</a> </li>
		        <li class="bg_lb"> <a href="form-common.html"> <i class="icon-th-list"></i>Liên hệ</a> </li>
		        <li class="bg_dg"> <a href="buttons.html"> <i class="icon-tint"></i>Phản hồi</a> </li>
		        <li class="bg_lh span5"> <a href="charts.html"> <i class="icon-signal"></i>Tin tức</a> </li>
		        <li class="bg_lv span5"> <a href="tables.html"> <i class="icon-th"></i><span class="label label-important">10</span>Đặt lịch hẹn</a> </li>
	        </ul>
	    </div>
	<!--End-Action boxes-->    

	<!--End-Chart-box--> 
	    
	        
	  </div>
	</div>
@stop