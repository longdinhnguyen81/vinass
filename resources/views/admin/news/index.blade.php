@extends('templates.admin.master')
@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="" class="current">Quản lý tin tức</a> </div>
    <h1>Quản lý tin tức</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
@if(Session::has('msg'))
<div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
      <div class="span12">
        	<a href="{{route('admin.news.add')}}" class="btn btn-success">Thêm</a>
        <div class="widget-box">
          <div class="widget-title text-center"> 
            <h5>Quản lý tin tức</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tiêu đề</th>
                  <th>Mô tả</th>
                  <th>Danh mục</th>
                  <th>Hình ảnh</th>
                  <th>Trạng thái</th>
                  <th style="text-align:center;width:140px">Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach($news as $new)
                  @php
                      $id = $new->id;
                      $title = $new->title;
                      $description = $new->description;
                      $cat = $new->cats->name;
                      $picture = '/upload/' . $new->picture;
                      $active = $new->active;
                      $urlEdit = route('admin.news.edit',$id);
                      $urlDel = route('admin.news.delete',$id);
                  @endphp
                <tr class="even gradeA">
                  <td>{{$id}}</td>
                  <td>{{$title}}</td>
                  <td>{{$description}}</td>
                  <td>{{$cat}}</td>
                  <td><img src="{{$picture}}" alt="{{$new->description}}" width="200px" /></td>
                  <td id="result-{{$id}}"><a href="javascript:void(0)" onclick="return getActive({{$id}})" style="cursor:pointer"><img src="/templates/admin/img/icons/{{$active == 0?'deactive.png':'active.png'}}" /></a></td>
                  <td class="text-center">
                  	<a href="{{$urlEdit}}" class="btn btn-primary">Sửa</a>
                  	<a onclick="return confirm('Do you want to delete this new?')" href="{{$urlDel}}" class="btn btn-danger">Xóa</a>
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
          url: "{{route('ajax.admin.activeNews')}}",
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