
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="{{ request()->is('admin') ? 'active' : '' }}"><a href="{{route('admin.index.index')}}"><i class="icon icon-home"></i> <span>Trang chủ</span></a> </li>
    <li class="{{ request()->is('admin/feedback*') ? 'active' : '' }}"> <a href="/admin/feedback"><i class="icon icon-inbox"></i> <span>Quản lý feedback</span></a> </li>
    <li class="{{ request()->is('admin/slide*') ? 'active' : '' }}"> <a href="/admin/slide"><i class="icon icon-inbox"></i> <span>Quản lý slide</span></a> </li>
    <li class="{{ request()->is('admin/contact*') ? 'active' : '' }}"> <a href="/admin/contact"><i class="icon icon-inbox"></i> <span>Quản lý liên hệ</span></a> </li>
    <li class="{{ request()->is('admin/cat*') ? 'active' : '' }}"> <a href="/admin/cat"><i class="icon icon-inbox"></i> <span>Quản lý danh mục</span></a> </li>
    <li class="{{ request()->is('admin/news*') ? 'active' : '' }}"> <a href="/admin/news"><i class="icon icon-inbox"></i> <span>Quản lý tin tức</span></a> </li>
    <li class="{{ request()->is('admin/email*') ? 'active' : '' }}"> <a href="/admin/email"><i class="icon icon-inbox"></i> <span>Quản lý email</span></a> </li>
    <li class="{{ request()->is('admin/user*') ? 'active' : '' }}"> <a href="/admin/user"><i class="icon icon-inbox"></i> <span>Quản lý admin</span></a> </li>
  </ul>
</div>
<!--sidebar-menu-->