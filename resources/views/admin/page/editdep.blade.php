@extends('admin.master')
@section('content')
<!-- Page Content -->
    <div class="main">
            <!-- MAIN CONTENT -->
            <div class=" container">
                <div class="">
                				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Sửa Bộ Môn
						</h1>
						@if(Session::has('message'))
						<div class="alert alert-danger">{{Session::get('message')}}</div>
						@endif
					</div>
					<!-- /.col-lg-12 -->
					<div class="col-lg-7" style="padding-bottom:120px">

						<form name="ajax-form" id="contact-form2" action="editdep/{{$dep->id}}" method="post" >
							{!!csrf_field()!!}

							<div class="form-group">
								<label>Tên Bộ Môn</label>
								<input class="form-control" value="{{$dep->department_name}}" name="department_name" required />
							</div>

							<div class="form-group">
								<label>Địa Chỉ</label>
								<input class="form-control" value="{{$dep->address}}" name="address" required />
							</div>
							<div class="form-group">
								<label>Loại</label>
								<input class="form-control" value="{{$dep->type}}" name="type" required  />
							</div>
							
							<div class="form-group">
								<label>Số Điện Thoại</label>
								<input class="form-control"  value="{{$dep->phone_number}}" name="phone_number" required />							
							</div>

							<div class="form-group">
								<label>Website</label>
								<input class="form-control" value="{{$dep->website}}" name="website" required />
							</div>
							
							<div class="form-group">
								<input name="submit" class="btn my-but" value="Cập Nhật" id="send" type="submit">
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