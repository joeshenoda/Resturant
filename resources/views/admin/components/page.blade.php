@extends('layouts.dashboard')
@section('title', $title)
@section('content')
<div style="width: 100%" >


    {{$slot}}


</div>
@endsection




<script>
    /*  $(document).ready( function () {
          $('.datatable').DataTable({
              pageLength: '50'
          });
      } );*/
</script>
@stack('script')
