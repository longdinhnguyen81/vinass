
<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2019 &copy; VinaSS Admin. Brought to you by Vinasofts </div>
</div>

<!--end-Footer-part-->
@yield('js')
<script src="/templates/admin/js/excanvas.min.js"></script> 
<script src="/templates/admin/js/jquery.min.js"></script> 
<script src="/templates/admin/js/jquery.ui.custom.js"></script> 
<script src="/templates/admin/js/bootstrap.min.js"></script> 
<script src="/templates/admin/js/jquery.flot.min.js"></script> 
<script src="/templates/admin/js/jquery.flot.resize.min.js"></script> 
<script src="/templates/admin/js/jquery.peity.min.js"></script> 
<script src="/templates/admin/js/fullcalendar.min.js"></script> 
<script src="/templates/admin/js/matrix.js"></script> 
<script src="/templates/admin/js/matrix.dashboard.js"></script> 
<script src="/templates/admin/js/matrix.interface.js"></script> 
<script src="/templates/admin/js/matrix.chat.js"></script> 
<script src="/templates/admin/js/jquery.validate.js"></script> 
<script src="/templates/admin/js/matrix.form_validation.js"></script> 
<script src="/templates/admin/js/jquery.wizard.js"></script> 
<script src="/templates/admin/js/jquery.uniform.js"></script> 
<script src="/templates/admin/js/select2.min.js"></script> 
<script src="/templates/admin/js/matrix.popover.js"></script> 
<script src="/templates/admin/ckeditor/ckeditor.js"></script>
<script src="/templates/admin/js/jquery.dataTables.min.js"></script> 
<script src="/templates/admin/js/matrix.tables.js"></script> 

<script>
     CKEDITOR.replace( 'editor1',
{
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
});

</script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
