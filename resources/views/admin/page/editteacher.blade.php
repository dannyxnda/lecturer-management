@extends('admin.master')
@section('content')
<!-- Page Content -->
    <div class="main">
            <!-- MAIN CONTENT -->
            <div class=" container">
                <div class="">
                				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Sửa Giáo Viên
						</h1>
						@if(Session::has('message'))
						<div class="alert alert-danger">{{Session::get('message')}}</div>
						@endif
					</div>
					<!-- /.col-lg-12 -->
					<div class="col-lg-7" style="padding-bottom:120px">

						<form name="ajax-form" id="contact-form2" action="editteacher/{{$user->id}}" method="post" >
							{!!csrf_field()!!}

							<div class="form-group">
								<label>UserName</label>
								<input class="form-control" name="username" value="{{$user->username}}" readonly />
							</div>

							<div class="form-group">
								<label>Họ và tên</label>
								<input class="form-control" name="fullname" value="{{$user->fullname}}" required />
							</div>
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" name="email" value="{{$user->email}}" required type="email" />
							</div>
							
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" id="password" name="password" value="{{$user->pasword}}" readonly type="password">							
							</div>

							<div class="form-group">
								<label>Phòng Ban</label>
								<select class="form-control" name="id_department" id="category">
									@foreach($dep as $c)
									<option value="{{$c->id}}">{{$c->department_name}}</option>
									@endforeach    
								</select>
							</div>

							<div class="form-group">
								<label>Học Vị</label>
								<input class="form-control" name="degree" value="{{$user->degree}}" required />
							</div>
							<div class="form-group">
								<label>Số Điện Thoại</label>
								<input class="form-control" name="phone_number" value="{{$user->phone_number}}" required />
							</div>
							
							<div class="form-group">
								<input name="submit" class="btn my-but" value="Câp nhật" id="send" type="submit">
							</div>
							
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