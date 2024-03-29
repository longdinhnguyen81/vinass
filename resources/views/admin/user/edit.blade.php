@extends('templates.admin.master')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="{{route('admin.user.index')}}">Quản lý người dùng</a> <a href="" class="current">Sửa người dùng</a> </div>
    <h1>Quản lý người dùng</h1>
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
            <h5>Sửa người dùng</h5>
          </div>
	          <div class="widget-content nopadding">
	            <form class="form-horizontal" method="post" action="{{route('admin.user.edit', $user->id)}}" name="number_validate" id="number_validate" novalidate="novalidate" enctype="multipart/form-data">
	            	{{csrf_field()}}
	              <div class="control-group">
	                <label class="control-label">Tên đăng nhập:</label>
	                <div class="controls">
	                  <input type="text" name="username" id="required" value="{{ $user->username }}" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Họ và tên:</label>
	                <div class="controls">
	                  <input type="text" name="fullname" id="required" value="{{ $user->fullname }}" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Avatar:</label>
	                <div class="controls">
	                  <input type="file" name="avatar" id="required" />
	                </div>
	              </div>
	              <img src="/upload/{{$user->avatar}}" width="300px">
	              <div class="control-group">
	                <label class="control-label">Chi tiết:</label>
	                <div class="controls">
	                  <input type="text" name="detail" id="required" value="{{ $user->detail }}" />
	                </div>
	              </div>
	              <div class="form-actions">
	                <input type="submit" value="Sửa" class="btn btn-success">
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