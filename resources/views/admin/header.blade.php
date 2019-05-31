
<link rel="stylesheet" type="text/css" href="Source/css/style.css">
<div class="header-top" style="border-bottom: 1px solid #b5b5b5">
	<div class="container clearfix">
		<div class="logo">
			<a href="/"><img src="Source/img/uet-logo.jpg" alt="UET logo" title="Trang chủ thông tin giảng viên" /></a>
		</div>

		<div class="web-title">
			<h1>THÔNG TIN GIẢNG VIÊN</h1>
			<h3>Trường Đại học Công nghệ - Đại học Quốc gia Hà Nội</h3>
		</div>




		@if(Auth::check())
		<span>{{Auth::user()->name}}</span> 
		@endif 

		<a href="admin/logout" style="margin: 0px 0 0 300px"><i class="lnr lnr-exit"></i> <span>Đăng xuất</span></a>
	</li>

</ul>
</div>
</div>
<div class="option">
	<div class="container">
		<ul class="nav clearfix">

			<li>
				<a href="/listteacher" ><span>Quản Lý Cán Bộ</span></a>
			</li>
			<li>
				<a href="/listres" ><span>Lĩnh Vực Nghiên Cứu</span></a>
			</li>

			<li>
				<a href="/quanlydonvi"><span>Quản lí đơn vị</span></a>
			</li>
		</ul>
	</div>
</div>

<div class="clearfix"></div>

<style type="text/css">
	.option ul li a {
		display: inline-block;
		float: left;
		border-left: 5px solid #b5b5b5;
		color: #5b5b5b;
		
	}
	.option {
		border-bottom: 1px solid #b5b5b5;
	}
</style>

