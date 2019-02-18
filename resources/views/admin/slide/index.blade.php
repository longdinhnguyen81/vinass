@extends('templates.admin.master')
@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="" class="current">Quản lý slide</a> </div>
    <h1>Quản lý slide</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
@if(Session::has('msg'))
<div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
      <div class="span12">
        	<a href="{{route('admin.slide.add')}}" class="btn btn-success">Thêm</a>
        <div class="widget-box">
          <div class="widget-title text-center"> 
            <h5>Quản lý slide</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Slide</th>
                  <th>Trạng thái</th>
                  <th style="text-align:center;width:140px">Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach($slides as $slide)
                  @php
                      $id = $slide->id;
                      $picture = '/upload/' . $slide->picture;
                      $active = $slide->active;
                      $urlEdit = route('admin.slide.edit',$id);
                      $urlDel = route('admin.slide.delete',$id);
                  @endphp
                <tr class="even gradeA">
                  <td>{{$id}}</td>
                  <td><img src="{{$picture}}" alt="{{$slide->name}}" width="200px" /></td>
                  <td id="result-{{$id}}"><a href="javascript:void(0)" onclick="return getActive({{$id}})" style="cursor:pointer"><img src="/templates/admin/img/icons/{{$active == 0?'deactive.png':'active.png'}}" /></a></td>
                  <td class="text-center">
                  	<a href="{{$urlEdit}}" class="btn btn-primary">Sửa</a>
                  	<a onclick="return confirm('Do you want to delete this slide?')" href="{{$urlDel}}" class="btn btn-danger">Xóa</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
</div>
</div>
@stop
<script type="text/javascript">
    function getActive(id){
        $.ajax({
          url: "{{route('ajax.admin.activeSlide')}}",
          type: 'GET',
          cache: false,
          data: {
                id: id,
            },
          success: function(data){

            $('#result-'+id).html(data);
          }, 
          error: function() {
           alert("Có lỗi");
         }
       }); 
        return false;
      }
</script>