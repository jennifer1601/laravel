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
                    <h1 class="page-header">Roles Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            New Roles
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="@if($rol){{route('setEditRole',['rolesid'=>$rol['id']])}}@else{{route('setRole')}}@endif">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label>Role Name</label>
                                            <input class="form-control" placeholder="Enter Role" name="rolesname" @if($rol)value = "{{$rol['rolesname']}}"@endif>
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="description"> @if($rol){{$rol['description']}}@endif</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Menu Access</label>
                                            <select class="form-control" name="menuid[]" multiple>
                                                @foreach($menus as $menu)
                                                            <!-- {{$check=false}} -->
                                                    @if($rol)
                                                            <!-- {{$check=false}} -->
                                                    @foreach($rolaccs as $rolacc)
                                                        @if($rolacc['menuid']==$menu['id'])
                                                            <!-- {{$check=true}} -->
                                                        @endif
                                                    @endforeach
                                                    @endif
                                                    <option value="{{$menu['id']}}" @if($check) selected="selected" @endif>{{$menu['menuname']}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Roles
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($roles as $role)
                                            <tr>
                                                <td>{{$role['rolesname']}}</td>
                                                <td>{{$role['description']}}</td>
                                                <td>
                                                    <a href="{{route('showEditRoles',['$rolesid'=>$role['id']])}}">
                                                        <button class="btn btn-warning">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{route('deleteRoles',['$rolesid'=>$role['id']])}}">
                                                        <button class="btn btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </a>
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
