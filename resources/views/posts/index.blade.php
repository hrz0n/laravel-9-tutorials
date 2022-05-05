@extends('templates.master')
@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">All Posts</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="javascript:void(0)" id="createNewPost" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                <i data-feather="plus"></i> Add New Posts
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-hover mb-0 data-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Post Title</th>
                        <th>Post Description</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal bd-example-modal-lg" id="postmodal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <form id="postForm" name="postForm" method="POST" enctype="multipart/form-data">
                        <div id="error"></div>
                        <input type="hidden" name="id" id="id">
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title <span class="text-danger">*</span></label>
                            <input id="title" name="title" type="text" class="form-control" placeholder="Post Title">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Post Description</label>
                            <textarea class="form-control" placeholder="Post description" name="description" id="description" cols="12" rows="3"></textarea>
                        </div>

                        <div>
                            <button id="savedata" name="savedata" type="button" class="btn btn-success btn-icon-text mb-2 mb-md-0">
                                Save Post Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('user-script')
    <script type="text/javascript">
        $(document).ready(function($){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }


            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                select: true,
                info: false,
                paging: false,
                filter:false,
                ajax: "{{ url('posts/index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', class:'text-center'},
                    {data: 'title', name: 'title'},
                    {data: 'description', name: 'description'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, class:'text-center'},
                ]
            });

            $('#createNewPost').click(function () {
                $('#savedata').html('Save Post Data');
                $('#id').val('');
                $('#postForm').trigger("reset");
                $('#modelHeading').html("Create New Post");
                $('#postmodal').modal('show');
                $('#error').html('');
            });

            $('body').on('click', '.editPost', function () {
                $('#savedata').html('Save Post Data');
                var id = $(this).data('id');

                $.ajax({
                    type:"POST",
                    url: "{{ url('posts/edit') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function(data){
                        $('#modelHeading').html("Edit Post");
                        $('#postmodal').modal('show');
                        $('#id').val(data.id);
                        $('#title').val(data.title);
                        $('#description').val(data.description);
                        $('#error').html('');
                    }
                });

            });

            $('#savedata').click(function (e) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#postForm').serialize(),
                    url: "{{ url('posts/store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#postForm').trigger("reset");
                        $('#postmodal').modal('hide');
                        table.draw();
                        toastr.success('Data saved successfully','Success');

                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#error').html("<div class='alert alert-danger'>"+data['responseJSON']['message'] + "</div>");
                        $('#savedata').html('Save Post Data');
                    }
                });
            });

            $('body').on('click', '.deletePost', function () {
                var id = $(this).data("id");
                if (confirm("Are You sure want to delete this Post!") === true) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ url('posts/destroy')}}",
                        data:{
                            id:id
                        },
                        success: function (data) {
                            table.draw();
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                }

            });
        });
    </script>
@endsection
