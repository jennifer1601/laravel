@extends('admin.layouts.master')

@section('title','Roles Management Page')

@section('head')
    <style>  
        /* The switch - the box around the slider */
       .switch {
       position: relative;
       display: inline-block;
       width: 30px;
       height: 17px;
       }
       
       /* Hide default HTML checkbox */
       .switch input {display:none;}
       
       /* The slider */
       .slider {
       position: absolute;
       cursor: pointer;
       top: 0;
       left: 0;
       right: 0;
       bottom: 0;
       background-color: #ccc;
       -webkit-transition: .4s;
       transition: .4s;
       }
       
       .slider:before {
       position: absolute;
       content: "";
       height: 13px;
       width: 13px;
       left: 2px;
       bottom: 2px;
       background-color: white;
       -webkit-transition: .4s;
       transition: .4s;
       }
       
       input:checked + .slider {
       background-color: #2196F3;
       }
       
       input:focus + .slider {
       box-shadow: 0 0 1px #2196F3;
       }
       
       input:checked + .slider:before {
       -webkit-transform: translateX(13px);
       -ms-transform: translateX(13px);
       transform: translateX(13px);
       }
       
       /* Rounded sliders */
       .slider.round {
       border-radius: 17px;
       }
       
       .slider.round:before {
       border-radius: 50%;
       }
    </style>
@endsection

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Access Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Access Management
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user['name']}}</td>
                                                <td>{{$user['email']}}</td>
                                                <td>   
                                                    <form method="post" action="{{route('setAccess',['accountid'=>$user['id']])}}">
                                                    {{csrf_field()}}
                                                    <select class="form-control" name="rolesid">
                                                    @foreach($roles as $role)
                                                        <option value="{{$role['id']}}" @if($role['id']==$user['rolesid']) selected @endif>{{$role['rolesname']}}</option>
                                                    @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <button class="btn btn-default" type="submit">Set Access</button>
                                                </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            

        </div>
        <!-- /#page-wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>


    <!-- DataTables JavaScript -->
    <script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
    
@endsection
