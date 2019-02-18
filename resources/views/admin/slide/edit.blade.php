@extends('templates.admin.master')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="{{route('admin.slide.index')}}">Quản lý slide</a> <a href="" class="current">Thêm slide</a> </div>
    <h1>Quản lý slide</h1>
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
            <h5>Sửa Ảnh Slide</h5>
          </div>
	          <div class="widget-content nopadding">
	            <form class="form-horizontal" method="post" action="{{route('admin.slide.edit', $slide->id)}}" name="number_validate" id="number_validate" novalidate="novalidate" enctype="multipart/form-data" runat="server">
	            	{{csrf_field()}}
	              <div class="control-group">
	                <label class="control-label">Ảnh slide:</label>
	                    <input type="file" name="picture" id="required" onchange="readURL(this);" />
	              </div>
	              <div class="control-group">
        				<img id="blah" src="/upload/{{$slide->picture}}" alt="your image" />
        			</div>
	              <script type="text/javascript">
			        function readURL(input) {
			            if (input.files && input.files[0]) {
			                var reader = new FileReader();

			                reader.onload = function (e) {
			                    $('#blah').attr('src', e.target.result);
			                }

			                reader.readAsDataURL(input.files[0]);
			            }
			        }
			    </script>
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