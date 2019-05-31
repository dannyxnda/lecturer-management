@extends('admin.master')
@section('content')
    <div class="main">
            <!-- MAIN CONTENT -->
            <div class=" container">
                <div class="">
                
                <div class="row">
                    <div class="col-md-12">
                        <!-- BASIC TABLE -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Đơn Vị</h3>
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

                            <div class="form-group">
                               <table class="table">
                                  <tr>
                                    <td width="40%" align="right">
                                        <button class="btn my-but"><a href="adddep" style="color: white">Thêm mới</a></button>
                                        
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                    <div class="panel-body">
                        <!-- /.col-lg-12 -->
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Tên Đơn Vị</th>
                                    <th>Loại Đơn Vị</th>
                                    <th>Địa Chỉ</th>
                                    <th>Số Điện Thoại </th>
                                    <th>Website </th>
                                    <th>Hành Động </th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($dep as $d)
                               <tr class="odd gradeX" align="center">
                                <td>{{$d->id}}</td>
                                <td>{{$d->department_name}}</td>
                                <td>{{$d->type}}</td>
                                <td>{{$d->address}}</td>
                                <td>{{$d->phone_number}}</td>
                                <td>{{$d->website}}</td>
                                <td class="center">
                                    <a href="editdep/{{$d->id}}" title="Sửa"> Sửa</a> |
                                    <a href="deletedep/{{$d->id}}" title="Xóa"> Xóa</a> 
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
</div>    

<style>
    .my-but {
        background-color: #5b5b5b;
        border-radius: 5px;
    }

    .my-but:hover {
        background-color: #333333;
    }

    th {
        text-align: center;
        vertical-align: middle;
    }
</style>
@endsection