@extends('backend.layouts.app')


@section('content')
<!-- Control Sidebar -->
   <!-- Content Wrapper. Contains page content -->
 
@endsection
@section('script')
 <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

@endsection
