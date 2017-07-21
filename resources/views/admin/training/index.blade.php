@extends('admin.layout')

@section('style')
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('content')

<div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <div class="col-lg-12">
                <h1>All Trainings</h1>
                <hr>
<table id="users" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th class="col-md-1">#</th>
            <th class="col-md-2">Name</th>
            <th class="col-md-1">Strat at</th>
            <th class="col-md-1">End at</th>
            <th class="col-md-1">Price</th>
            <th class="col-md-1">Action</th>
            
        </tr>
    </thead>
</table>


                
            </div>

        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
</div>

@endsection


@section('scripts')

<script type="text/javascript" src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
   $('#users').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('abcd.training') }}",
        "columns": [
            {data: 'DT_Row_Index', name: 'DT_Row_Index'},
            {data: 'name', name: 'name'},
            {data: 'start_at', name: 'start_at'},
            {data: 'end_at', name: 'end_at'},
            {data: 'price', name: 'price'},
            {data: 'operations', name: 'operations'},
        ]
    });

   console.log('cxc')
});
</script>
@endsection