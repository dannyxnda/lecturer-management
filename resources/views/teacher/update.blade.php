@extends('master')
@section('content')
<div class="container-fluid">
	<section class="courses">
		<!-- .courses -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-8">	
					<!-- .student-info -->
					<div class="student-info">
						@if(Session::has('message'))
						<div class="alert alert-success">{{Session::get('message')}}</div>
						@endif
						@if(Session::has('loi'))
						<div class="alert alert-danger">{{Session::get('loi')}}</div>
						@endif
						<form action="updateinfo/{{$user->id}}" method="Post" enctype="multipart/form-data">
							{!!csrf_field()!!}
							<h2>Cập nhật thông tin giảng viên</h2>
							<div class="input-container">
								<p style="width: 200px; padding-top: 10px">Họ và tên: </p>
								<input class="input-field" type="text" value="{{$user->fullname}}" name="fullname">
							</div>

							<div class="input-container">
								<p style="width: 200px; padding-top: 10px">Email: </p>
								<input class="input-field" type="text" placeholder="Email" name="email" readonly value="{{$user->email}}">
							</div>

							<div class="input-container">
								<p style="width: 200px; padding-top: 10px">Số điện thoại:</p>
								<input class="input-field" type="text" value="{{$user->phone_number}}" name="phone_number" >
							</div>

							<div class="input-container">
								<p style="width: 200px; padding-top: 10px">Học vị: </p>
								<input class="input-field" type="text" value="{{$user->degree}}" name="degree" >
							</div>

							<div class="input-container">
								<p style="width: 200px; padding-top: 10px">Website:</p>
								<input class="input-field" type="text" value="{{$user->website}}" name="website">

							</div>


							<div class="input-container">
								<p style="width: 200px; padding-top: 10px">Ảnh đại diện:</p>
								<input class="input-field" type="file" name="profile_picture" placeholder="Chọn ảnh đại diện">
							</div>
							<button type="submit" class="btn">Cập nhật</button>
							<p style="margin-top: 10px"; ><a href="/update/teacher"><< Trở lại</a></p>
						</form>
					</div>
					<!-- .student-info -->
				</div>				
				
			</div>
		</div>
		<!-- /.courses -->
	</section>

	<style type="text/css">
		* {box-sizing: border-box;}

		/* Style the input container */
		.input-container {
			display: flex;
			width: 100%;
			margin-bottom: 15px;
		}

		/* Style the form icons */
		.icon {
			padding: 10px;
			background: #333333;
			color: white;
			min-width: 50px;
			text-align: center;
		}

		/* Style the input fields */
		.input-field {
			width: 100%;
			padding: 10px;
			outline: none;
			border-radius: 10px;
		}

		.input-field:focus {
			border: 2px solid #333333;
		}

		/* Set a style for the submit button */
		.btn {
			background-color: #333333;
			color: white;
			padding: 15px 20px;
			border: none;
			cursor: pointer;
			width: 100%;
			opacity: 0.9;
			border-radius: 10px;
		}

		.btn:hover {
			background: #5b5b5b;
		}
	</style>
</div>
@endsection
