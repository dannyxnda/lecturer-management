
<header>
	<div class="header-top" style="border-bottom: 1px solid #333333">
		<div class="container clearfix">
			<div class="logo">
				<a href="/"><img src="Source/img/uet-logo.jpg" alt="UET logo" title="Trang chủ thông tin giảng viên" /></a>
			</div>

			<div class="web-title">
				<h1>THÔNG TIN GIẢNG VIÊN</h1>
				<h3>Trường Đại học Công nghệ - Đại học Quốc gia Hà Nội</h3>
			</div>
<!--
				<div class="uni-logo">
					<a href="https://www.vnu.edu.vn" target="_blank"><img src="images/vnu-logo.png" /></a>
				</div>
			-->

			@if(Auth::check())
			<span class="w3-bar-item w3-right"> <a href="update/teacher">Cập nhật thông tin</a> | <a href="/teacher/logout">Đăng xuất</a></span>
			@else
			<span class="w3-bar-item w3-right" style="margin-top: 25px;"> <a class="lgbtn" href="teacher/login">Đăng nhập</a></span>
			@endif
		</div> <!--end of container top header-->

	</div><!--end of top header-->
	
	<div class="header-bot"></div>
</header>


<style type="text/css">
	.lgbtn {
		color: #FFFFFF;
		border-radius: 5px;
		padding: 9px;
		background-color: #5b5b5b;
		//text-transform: none;
	}

	.lgbtn:hover {
		text-decoration: none;
		background-color: #333333;
	}
</style>