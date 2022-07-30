@extends('layout.main_tables')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Department</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    DataTable
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                January 2018
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->


            <div class="row">
                {{-- kiri --}}
                <div class="col-6">
                    {{-- Departement Table --}}
                    <div class="card-box mb-30">
                        <div class="pd-20">

                            <div class="row">
                                <div class="col-6">
                                    <h4 class="text-blue h4">List Department</h4>
                                </div>
                                <div class="col">
                                    <button type="button" onclick="addDepartment()"
                                        class="btn float-right btn-outline-primary">
                                        <i class="icon-copy bi bi-plus-square-fill pr-30"></i>Add
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="pd-20 card-box mb-20">
                            <div class="pb-20">
                                <table id="departmentTable" class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th width="80%" class="table-plus datatable">Name</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                </table>

                            </div>
                        </div>
                    </div>
                    {{-- Departement Table Ende --}}

                    {{-- vihicle Table --}}
                    <div class="card-box mb-30">
                        <div class="pd-20">

                            <div class="row">
                                <div class="col-6">
                                    <h4 class="text-blue h4">List Vehicle</h4>
                                </div>
                                <div class="col">
                                    <button type="button" onclick="addVehicle()"
                                        class="btn float-right btn-outline-primary">
                                        <i class="icon-copy bi bi-plus-square-fill pr-30"></i>Add
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="pd-20 card-box mb-20">
                            <div class="pb-20">
                                <table id="vehicleTable" class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th width="80%" class="table-plus datatable">Name</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- vihicle Table End --}}

                    {{-- unit group Table --}}
                    <div class="card-box mb-30">
                        <div class="pd-20">

                            <div class="row">
                                <div class="col-6">
                                    <h4 class="text-blue h4">List Unit Group</h4>
                                </div>
                                <div class="col">
                                    <button type="button" onclick="addVehicle()"
                                        class="btn float-right btn-outline-primary">
                                        <i class="icon-copy bi bi-plus-square-fill pr-30"></i>Add
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="pd-20 card-box mb-20">
                            <div class="pb-20">
                                <table id="vehicleTable" class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th width="80%" class="table-plus datatable">Name</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- unit group Table End --}}
                    {{-- unit Table --}}
                    <div class="card-box mb-30">
                        <div class="pd-20">

                            <div class="row">
                                <div class="col-6">
                                    <h4 class="text-blue h4">List Unit</h4>
                                </div>
                                <div class="col">
                                    <button type="button" onclick="addVehicle()"
                                        class="btn float-right btn-outline-primary">
                                        <i class="icon-copy bi bi-plus-square-fill pr-30"></i>Add
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="pd-20 card-box mb-20">
                            <div class="pb-20">
                                <table id="vehicleTable" class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th width="80%" class="table-plus datatable">Name</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- unit Table End --}}
                </div>
                {{-- end kiri --}}

                {{-- kanan --}}
                <div class="col-6">
                    {{-- tabel Position --}}
                    <div class="card-box mb-30">
                        <div class="pd-20">

                            <div class="row">
                                <div class="col-6">
                                    <h4 class="text-blue h4">List Positions</h4>
                                </div>
                                <div class="col">
                                    <button type="button" onclick="addPosition()"
                                        class="btn float-right btn-outline-primary">
                                        <i class="icon-copy bi bi-plus-square-fill pr-30"></i>Add
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="pd-20 card-box mb-20">
                            <div class="pb-20">
                                <table id="positionsTable" class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th class="table-plus datatable">Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- end tabel Position --}}
                    {{-- tabel religion --}}
                    <div class="card-box mb-30">
                        <div class="pd-20">

                            <div class="row">
                                <div class="col-6">
                                    <h4 class="text-blue h4">List Religion</h4>
                                </div>
                                <div class="col">
                                    <button disabled="disabled" type="button" onclick="addPosition()"
                                        class="btn float-right btn-outline-primary">
                                        <i class="icon-copy bi bi-plus-square-fill pr-30"></i>Add
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="pd-20 card-box mb-20">
                            <div class="pb-20">
                                <table id="religionTable" class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th width="80%" class="table-plus datatable">Name</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- end tabel religion --}}
                </div>
                {{-- end kanan --}}
            </div>
        </div>
        <!-- Simple Datatable End -->
    </div>



    <div class="footer-wrap pd-20 mb-20 card-box">
        DeskApp - Bootstrap 4 Admin Template By
        <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
    </div>
</div>
</div>


@include('admin.position.modal')




{{-- modal add department --}}
<div class="modal fade" data-backdrop="false" id="add_department_modal" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content shadow-lg p-3 mb-5 bg-white rounded">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Department
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>

            <div class="modal-body">
                <form name="userForm">

                    <div class="form-group">
                        {{-- hidden --}}
                        <input type="hidden" name="id" id="id">
                        <label id="label_department" for="department">Department name</label>
                        <input type="text" class="form-control" name="department" id="department"
                            aria-describedby="emailHelp" placeholder="Enter departmen name">
                        <span id="departmentError" class="alert-message"></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="button" onclick="createPost('/admin/department/')" class="btn btn-primary">
                    Save changes
                </button>
            </div>

        </div>
    </div>
</div>


{{-- modal hapus --}}
<div class="modal fade" data-backdrop="false" id="department_delete_modal" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow-lg p-3 mb-5 bg-white rounded">
            <div class="modal-body text-center font-18">
                <h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to Delete this data?</h4>
                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
                    <div class="col-6">
                        <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn"
                            onclick="myClose()"><i class="fa fa-times"></i></button>
                        NO
                    </div>
                    <div class="col-6">
                        <form id="form_id" action="" method="post" class="d-inline">

                            <button type="button" id="delete_this_department" onclick="deleteData()"
                                class="btn btn-primary border-radius-100 btn-block confirmation-btn"
                                data-dismiss="modal"><i class="fa fa-check"></i></button>
                            YES
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
@include('admin.department.js')
@include('admin.position.js')
<script>
    function createPost(url_create) {
        var department = $('#department').val();
        var id = $('#id').val();
        let _url = url_create;
        let _token   = $('meta[name="csrf-token"]').attr('content');
        let url_edit = "'"+_url
        let end_url = "'"
        
        $.ajax({
              url: _url,
              type: "POST",
              data: {
                id: id,
                department: department,
                _token: _token
              },
              success: function(response) {
                var url_go = "'"+_url+"delete/"+"'"
                  if(response.code == 200) {
                    if(id != ""){
                        
                        $("#departmentTable").find('input').each(function(){
                            if($(this).val() == response.data.id){
                                $(this).closest('tr').remove()
                                $('#departmentTable').prepend('<tr><td>'+response.data.department+'</td><td><input type="hidden" value="'+response.data.id+'"> <button onclick="runEdit('+response.data.id+','+url_edit+response.data.id+end_url+')" class="btn btn-warning py-1 px-2 mr-1"><i class="icon-copy dw dw-pencil"></i></button><button onclick="isDelete('+response.data.id+','+url_go+')"  type="button" class="btn btn-danger  py-1 px-2"><i class="icon-copy dw dw-trash"></i></button> </td></tr>');
                            }
                            
                        });
                    } else {
                        
                        console.log(url_go)
                        $('#departmentTable').prepend('<tr><td>'+response.data.department+'</td><td><input type="hidden" value="'+response.data.id+'"> <button onclick="runEdit('+response.data.id+','+url_edit+response.data.id+end_url+')" class="btn btn-warning py-1 px-2 mr-1"><i class="icon-copy dw dw-pencil"></i></button><button onclick="isDelete('+response.data.id+','+url_go+')"  type="button" class="btn btn-danger  py-1 px-2"><i class="icon-copy dw dw-trash"></i></button> </td></tr>');
                    }
                    $('#department').val('');
      
                    $('#add_department_modal').modal('hide');
                  }
              },
              error: function(response) {
                $('#departmentError').text(response.responseJSON.errors.description);
              }
            });
    }
    
</script>


{{-- func edit --}}
<script>
    function runEdit(id,url_edit) {
            $('#label_department').text("Edit Department");
            console.log(url_edit)
            $('.modal-backdrop').remove();
            $('#departmentError').text('');
        
            $.ajax({
                url: url_edit,
                type: "GET",
                success: function(response) {
                    if(response) {
                        $("#id").val(response.id);
                        $("#department").val(response.department);
                        $("#post_id").val(response.id);
                        $('#add_department_modal').modal('show');
                        console.log(response.department)
                    }
                }
            });
          
        }
</script>

{{-- shoe all Department --}}
<script>
    $(function() {
        $('#departmentTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('department-data') !!}',
            columns: [
                { data: 'department', name: 'department' },
                { data: 'action', name: 'action ' }
            ]
        });
    });
</script>

{{-- Show All Position --}}
<script>
    $(function() {
        $('#positionsTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('position-data') !!}',
            columns: [
                { data: 'position', name: 'position' },
                { data: 'action', name: 'action ' }
            ]
        });
    });
</script>


{{-- Show All Position --}}
<script>
    $(function() {
        $('#religionTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('religion-data') !!}',
            columns: [
                { data: 'religion', name: 'religion' },
                { data: 'action', name: 'action ' }
            ]
        });
    });
</script>


{{-- func delete --}}

<script>
    function isDelete(id, url) {
        $('.modal-backdrop').remove();
        $("#department_delete_modal").modal('show');
        var action  = url;
        document.getElementById("form_id").action = action+id;
        var element = document.getElementById("delete_this_department");
        element.onclick = function(event) {
            console.log(url+id);
            let _url = url+id;
            let _token   = $('meta[name="csrf-token"]').attr('content');
        
                $.ajax({
                url: _url,
                type: 'DELETE',
                data: {
                    _token: _token
                },
                success: function(response) {
                    console.log(response.data.department)
                    $("#departmentTable tr td:contains("+response.data.department+")").parent().remove();
                }
                });
        }
    }
    function myClose() {
        $("#department_delete_modal").modal('hide');
    }
</script>



@endsection