@extends('templates.admin.master')
@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="" class="current">Quản lý liên hệ</a> </div>
    <h1>Quản lý liên hệ</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
@if(Session::has('msg'))
<div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title text-center"> 
            <h5>Quản lý liên hệ</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Họ và tên</th>
                  <th>Email</th>
                  <th style="width: 50%">Tiêu đề</th>
                  <th>Nội dung</th>
                  <th>Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach($contacts as $contact)
                  @php
                      $id = $contact->id;
                      $fullname = $contact->fullname;
                      $email = $contact->email;
                      $subject = $contact->subject;
                      $message = $contact->message;
                      $urlDel = route('admin.contact.delete', $id);
                  @endphp
                <tr class="even gradeA">
                  <td>{{$id}}</td>
                  <td>{{$fullname}}</td>
                  <td>{{$email}}</td>
                  <td>{{$subject}}</td>
                  <td>{{$message}}</td>
                  <td class="text-center">
                    <a onclick="return confirm('Do you want to delete this contact?')" href="{{$urlDel}}" class="btn btn-danger">Xóa</a>
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