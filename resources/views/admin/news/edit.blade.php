@extends('templates.admin.master')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="{{route('admin.feedback.index')}}">Quản lý feedback</a> <a href="" class="current">Sửa feedback</a> </div>
    <h1>Quản lý feedback</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span18">
      	@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Thêm người dùng</h5>
          </div>
	          <div class="widget-content nopadding">
	            <form class="form-horizontal" method="post" action="{{route('admin.feedback.edit', $feedback->id)}}" name="number_validate" id="number_validate" novalidate="novalidate" enctype="multipart/form-data">
	            	{{csrf_field()}}
	              <div class="control-group">
	                <label class="control-label">Họ và tên:</label>
	                <div class="controls">
	                  <input type="text" name="name" id="required" value="{{$feedback->name}}" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Feedback:</label>
	                <div class="controls">
	                  <input type="text" name="description" id="required" value="{{$feedback->description}}" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Công việc:</label>
	                <div class="controls">
	                  <input type="text" name="job" id="required" value="{{$feedback->job}}" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Avatar:</label>
	                <div class="controls">
	                  <input type="file" name="avatar" id="images" />
	                </div>
	              <img src="/storage/app/files/{{$feedback->avatar}}" />
	              </div>
	              <div class="form-actions">
	                <input type="submit" name="submit" value="Sửa" class="btn btn-success">
	              </div>
	            </form>
	          </div>
	        </div>
	      </div>
        </div>
      </div>
    </div>
</div>
</div>
@stop