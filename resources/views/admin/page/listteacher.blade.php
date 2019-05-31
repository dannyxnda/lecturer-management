@extends('admin.master')
@section('content')
    <title>Quản lí giảng viên</title>
    <div class="main">
            <!-- MAIN CONTENT -->
            <div class=" container">
                <div class="">
                
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BASIC TABLE -->
                            <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Danh sách giảng viên</h3>
                                        @if(count($errors) > 0)
									    <div class="alert alert-danger">
									     <ul>
									      @foreach($errors->all() as $error)
									      <li>{{ $error }}</li>
									      @endforeach
									     </ul>
									    </div>
									   @endif

									   @if($message = Session::get('success'))
									   <div class="alert alert-success alert-block">
									    <button type="button" class="close" data-dismiss="alert">×</button>
									           <strong>{{ $message }}</strong>
									   </div>
									   @endif
                                        @if(Session::has('message'))
                                            <div class="alert alert-success">{{Session::get('message')}}</div>
                                        @endif
                                    </div>
                                    <div>
                                    	<form method="post" enctype="multipart/form-data" action="{{ url('importexcel') }}">
									    {{ csrf_field() }}
									    <div class="form-group">
									     <table class="table">
									      <tr>
									       <td width="30%">
									        <input type="file" name="select_file" value="Tải lên danh sách" required />
									       </td>
									       <td width="30%" align="left">
									        <input type="submit" name="upload" class="my-but" value="Tải lên" style="margin: 0px 0px; border-color: transparent;">
									       </td>
									        <td width="40%" align="right">
									       		<button class="btn my-but" ><a href="addteacher" style="color: white">Thêm mới</a></button>
									       </td>
									      </tr>
									     </table>
									    </div>
									   </form>
                                    </div>
                <div class="panel-body">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Họ Tên</th>
                                <th>Tên Tài Khoản</th>
                                <th>Email</th>
                                <th>Học Vị</th>
                                <th>Đơn Vị Công Tác</th>
                                <th>Hành động </th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($users as $u)
                            <tr class="odd gradeX" align="center">
                                <td style="width: 10px">{{$u->id}}</td>
                                <td>{{$u->fullname}}</td>
                                <td>{{$u->username}}</td>
                                <td>{{$u->email}}</td>
                                <td>{{$u->degree}}</td>
                                <td>{{$u->department->department_name}}</td>
                                <td class="center">
							        <a href="editteacher/{{$u->id}}" title="Sửa"> Sửa</a> |
							         <a href="deleteteacher/{{$u->id}}" title="Xóa"> Xóa</a> 
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>      
        </div>
    </div>   
</div>
</div>         
            <!-- /.container-fluid -->
</div>

<style type="text/css">
    
.my-but {
  background-color: #5b5b5b !important;
}

.my-but:hover {
  background-color: #333333 !important;
}

th {
    text-align: center;
    vertical-align: middle;
}
</style>


@endsection