@extends('admin.layouts.master')

@section('title','Post Management Page')

@section('head')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Post Management</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        New Menu
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                            <form method="post" action="@if($post) {{route('savepost',['id'=>$post['id']])}} @else {{route('savepost')}}@endif"enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    
                                    <div class="col-12">
                                        <label for="titleimage">Title Image (1024 x 512)px</label>
                                        <input type="file" name="titleimage" class="form-control" @if($post) value ="{{$post['imgurl']}}" @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" @if($post) value ="{{$post['title']}}" @endif>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="bodypost">Body</label>
                                        <textarea name="bodypost" class="form-control" id="editor">@if($post) {{$post['bodypost']}} @endif</textarea>
                                    </div>


                                    <!-- <div class="form-group">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="visible" value="Y" checked>Visible
                                        </label>
                                    </div> -->
                                                                
                                    @if($post)
                                        <input type="hidden" value="edit" name="submitype">
                                    @else
                                        <input type="hidden" value="new" name="submitype">
                                    @endif
                                    <button type="submit" class="btn btn-default">Save</button>
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
                        Menu
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <th>Created At</th>
                                    <th>Judul</th>
                                    <th>Image (256 x 128)px</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post['created_at']}}</td>
                                        <td>{{$post['title']}}</td>
                                        <td><img src="{{$post['imgurl']}}" style="object-fit:center;width:256px;height:128px;"></td>
                                        <td>
                                            <a href="{{route('showeditpost',['id'=>$post['id']])}}"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
                                            <a href="{{route('deletepost',['id'=>$post['id']])}}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
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


<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
            $("#editor").editor({
                uiLibrary: 'bootstrap4'
            });
    });
</script>

@stop

