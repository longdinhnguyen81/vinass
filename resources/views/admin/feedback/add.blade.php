@extends('templates.admin.master')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="{{route('admin.feedback.index')}}">Quản lý feedback</a> <a href="" class="current">Thêm feedback</a> </div>
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
            <h5>Thêm feedback</h5>
          </div>
	          <div class="widget-content nopadding">
	            <form class="form-horizontal" method="post" action="{{route('admin.feedback.add')}}" name="number_validate" id="number_validate" novalidate="novalidate" enctype="multipart/form-data">
	            	{{csrf_field()}}
	              <div class="control-group">
	                <label class="control-label">Họ và tên:</label>
	                <div class="controls">
	                  <input type="text" name="name" id="required" value="{{ old('name') }}" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Feedback:</label>
	                <div class="controls">
	                  <input type="text" name="description" id="required" value="{{ old('description') }}" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Công việc:</label>
	                <div class="controls">
	                  <input type="text" name="job" id="required" value="{{ old('job') }}" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Avatar:</label>
	                <div class="controls">
	                  <input type="file" name="avatar" id="required" />
	                </div>
	              </div>
	              <div class="form-actions">
	                <input type="submit" value="Thêm" class="btn btn-success">
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