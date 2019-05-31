@extends('admin.master')
@section('content')
<!-- Page Content -->
    <div class="main">
            <!-- MAIN CONTENT -->
            <div class=" container">
                <div class="">
                              
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Mới Giảng Viên</h1>
                        @if(Session::has('message'))
                        <div class="alert alert-danger">{{Session::get('message')}}</div>
                        @endif
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                       <form name="ajax-form" id="contact-form2" action="addteacher" method="post" >
							{!!csrf_field()!!}

							<div class="form-group">
								<label>Username</label>
                                <input class="form-control" name="username" placeholder="Tên đăng nhập" required />
							</div>

							<div class="form-group">
								<label>Họ và tên</label>
                                <input class="form-control" name="fullname" placeholder="Họ và tên" required />
							</div>
							<div class="form-group">
								 <label>Email</label>
                                <input class="form-control" name="email" placeholder="Email" required type="email" />
							</div>
							
							<div class="form-group">
								 <label>Mật khẩu</label>
								 <input class="form-control" id="password" name="password" required="" placeholder="Mật Khẩu" type="password">							
							</div>

							<div class="form-group">
                            <label>Đơn vị</label>
                            <select class="form-control" name="id_department" id="category">
                                @foreach($dep as $c)
                                <option value="{{$c->id}}">{{$c->department_name}}</option>
                                @endforeach    
                            </select>
                        	</div>

							<div class="form-group">
								 <label>Học Vị</label>
                                <input class="form-control" name="degree" placeholder="Địa chỉ" required />
							</div>
							<div class="form-group">
								 <label>Số Điện Thoại</label>
                                <input class="form-control" name="phone_number" placeholder="Số điện thoại" required />
							</div>
							
							<div class="form-group">
								<input name="submit" class="btn my-but" value="Thêm" id="send" type="submit">
							</div>
                            <a href="javascript:history.go(-1)"><< Trở lại</a>
							
						</form>
					</div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
</div>
        <!-- /#page-wrapper -->
@endsection