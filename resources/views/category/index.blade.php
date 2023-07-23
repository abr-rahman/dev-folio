@extends('layouts.master')
@section('pageTitle')
    {{ __('Category') }}
@endsection
@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">Category</h4>
                <p class="mb-30">Category form</p>
            </div>
        </div>
        <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Category Name <span class="text-danger">*</span></label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Category Name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="file">
                </div>
            </div>
            <button type="submit" class="btn btn-sm btn-success float-end">Submit</button>
        </form>
    </div>
    <div class="min-height-200px">
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="">Category Table</h4>
            </div>
            <div class="pb-20">
                <div class="">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table category_table">
                                <thead>
                                    <tr role="row">
                                        {{-- <th>S/L</th> --}}
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->image }}</td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
     <script>
        $(function(){
            $.ajaxSetup({
                headers: { 'X-CSRF-Token' : '{{ csrf_token() }}'}
            });
            // recycle
            // $(document).on('click', '#recycle', function(e) {
            //     e.preventDefault();
            //     var url = $(this).attr('href');
            //     $.ajax({
            //         url: url
            //         , type: 'get'
            //         , success: function(data) {
            //             $('#recycle_modal_body').html(data);
            //             $('.recycle').modal('show');
            //         }
            //         , error: function(err) {
            //             $('.data_preloader').hide();
            //             if (err.status == 0) {

            //                 toastr.error('Net Connetion Error. Reload This Page.');
            //             } else if (err.status == 500) {

            //                 toastr.error('Server Error, Please contact to the support team.');
            //             }
            //         }
            //     });
            // });
            // //  restore
            // $(document).on('click', '#restore', function(e) {
            //     e.preventDefault();
            //     var id = $(this).attr('href');
            //     $.ajax(
            //     {
            //         url: id,
            //         type: 'get',
            //         data: {
            //             "id": id,
            //         },
            //         success: function (data){
            //             if (!$.isEmptyObject(data.errorMsg)) {
            //                 toastr.error(data.errorMsg);
            //                 return;
            //             }
            //             toastr.success(data);
            //             table.ajax.reload();
            //             tableDetails.ajax.reload();
            //             meals_datatable.ajax.reload();
            //             mealMarketStore.ajax.reload();
            //             deposite.ajax.reload();
            //             $('.recycle').modal('hide');
            //             $('#recycle_modal_body')[0].reset();
            //         }
            //     });

            // });
            // //  force Delete
            // $(document).on('click', '#forceDelete', function(e) {
            //     e.preventDefault();
            //     // alert('ji');
            //     var id = $(this).attr('href');
            //     $.ajax(
            //     {
            //         url: id,
            //         type: 'DELETE',
            //         data: {
            //             "id": id,
            //         },
            //         success: function (data){
            //             if (!$.isEmptyObject(data.errorMsg)) {
            //                 toastr.error(data.errorMsg);
            //                 return;
            //             }
            //             toastr.error(data);
            //             table.ajax.reload();
            //             $('.recycle').modal('hide');
            //             $('#recycle_modal_body')[0].reset();
            //         }
            //     });

            // });

            // // edit Deposite
            // $(document).on('click', '#editDeposite', function(e) {
            //     e.preventDefault();
            //     var url = $(this).attr('href');
            //     $.ajax({
            //         url: url
            //         , type: 'get'
            //         , success: function(data) {
            //             $('#deposite_edit_modal_body').html(data);
            //             $('.editDeposite').modal('show');
            //         }
            //         , error: function(err) {
            //             $('.data_preloader').hide();
            //             if (err.status == 0) {

            //                 toastr.error('Net Connetion Error. Reload This Page.');
            //             } else if (err.status == 500) {

            //                 toastr.error('Server Error, Please contact to the support team.');
            //             }
            //         }
            //     });
            // });


            // // update meal
            // $(document).on('submit', '#mealFormUpdate', function(e) {
            //     e.preventDefault();
            //     var data = $(this).serialize();
            //     var url = $(this).attr('action');

            //     $.ajax({
            //         url:url,
            //         method:'POST',
            //         data:data,
            //         success:function(data){
            //             // if(data.success){
            //             //     console.log(data);
            //             // }
            //             toastr.success(data);
            //             $('.editMeal').modal('hide');
            //             $('#mealFormUpdate')[0].reset();
            //             meals_datatable.ajax.reload();
            //         },
            //         error:function(error){
            //             console.log(error);
            //         }
            //     })
            // });
            // //  member delete -- second section
            // $(document).on('click', '#delete', function(e) {
            //     e.preventDefault();
            //     var id = $(this).attr('href');
            //     $.ajax(
            //     {
            //         url: id,
            //         type: 'DELETE',
            //         data: {
            //             "id": id,
            //         },
            //         success: function (data){

            //             if (!$.isEmptyObject(data.errorMsg)) {
            //                 toastr.error(data.errorMsg);
            //                 return;
            //             }
            //             toastr.error(data);
            //             table.ajax.reload();
            //             tableDetails.ajax.reload();
            //             meals_datatable.ajax.reload();
            //             mealMarketStore.ajax.reload();
            //             deposite.ajax.reload();
            //         }
            //     });

            // });


            // $('#mealMarketStore').submit(function(e){
            //     e.preventDefault();

            //     var data = $(this).serialize();
            //     var url = $(this).attr('action');
            //     $.ajax({
            //         url:url,
            //         method:'POST',
            //         data:data,
            //         success:function(data){
            //             toastr.success(data);
            //             $('#mealMarketStore')[0].reset();
            //             mealMarketStore.ajax.reload();
            //         },
            //         error:function(error){
            //             console.log(error);
            //         }
            //     })
            // });

            // deposite add store -- second section
            var table = $('.category_table').DataTable({
                dom: "lBfrtip",
                buttons: [
                    {extend: 'excel',text: 'Excel',className: 'btn btn-primary',exportOptions: {columns: 'th:not(:last-child)'}},
                    {extend: 'pdf',text: 'Pdf',className: 'btn btn-primary',exportOptions: {columns: 'th:not(:last-child)'}},
                    {extend: 'print',text: 'Print',className: 'btn btn-primary',exportOptions: {columns: 'th:not(:last-child)'}},
                ],
                "processing": true,
                "serverSide": true,
                "lengthMenu": [[50, 100, 500, 1000, -1], [50, 100, 500, 1000, "All"]],
                ajax: "{{ route('categories.index') }}",
                columnDefs: [{"targets": [2, 3, 4, 7],"orderable": false,"searchable": false}],
                columns: [
                    {data: 'DT_RowIndex', name: 'Serial No.'},
                    {data: 'name', name: 'name'},
                    {data: 'image', name: 'image'},
                    {data: 'action', name: 'action'},
                ],
            });
            // $(document).ready(function() {
            //     var deposite = $('.category_table').DataTable({
            //         processing: false,
            //         serverSide: true,
            //         dom: 'Bfrtip',
            //         pageLength: 4,
            //         ajax: "{{ route('categories.index') }}",
            //         columns: [
            //             {data: 'DT_RowIndex', name: 'Serial No.'},
            //             {data: 'name', name: 'name'},
            //             {data: 'image', name: 'image'},
            //             {data: 'action', name: 'action'},
            //         ],

            //     });
            // });
            // $('#depositeStore').submit(function(e){
            //     e.preventDefault();

            //     var data = $(this).serialize();
            //     var url = $(this).attr('action');
            //     $.ajax({
            //         url:url,
            //         method:'POST',
            //         data:data,
            //         success:function(data){
            //             toastr.success(data);
            //             $('#depositeStore')[0].reset();
            //             $('#newDeposite').modal('hide');
            //             deposite.ajax.reload();
            //         },
            //         error:function(error){
            //             console.log(error);
            //         }
            //     })
            // });

            // $("#checkAll").click(function () {
            //     $(".check").prop('checked', $(this).prop('checked'));
            // });
            // $("#name_check").click(function () {
            //     $(".name_check").prop('checked', $(this).prop('checked'));
            // });
        });
    </script>
@endpush
