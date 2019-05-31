
<style type="text/css">
	h1, h3, ul, li, img, a, div {
		margin: 0;
		padding: 0;
	}

	ul, ol {
		list-style-type: none;
		padding: 0;
		margin: 0;
	}

	a {
		text-decoration: none;
		transition: all 0.6s ease-in-out;
	}
	img {
		max-width: 100%;
	}
	.clearfix:after {
		display: block;
		content: "";
		clear: both;
	}


	header {
		display: block;
	}


	.container {
		max-width: 1140px;
		margin: auto;
		display: block;
	}

	.header-top {
		padding: 18px 0px;
	}
	.logo {
		display: inline-block;
		float: left;
	}

	.logo img {
		width: 125px;
	}

	.web-title {
		display: inline-block;
		box-sizing: border-box;
		margin-top: 22px;
		margin-left: 13px;
	}

	.web-title h1 {
		font-size: 35px;
	}


	.web-title h3 {
		font-weight: normal;
		line-height: 35px;
		color: #5B5B5B;
	}

	.uni-logo {
		display: inline-block;
		float: right;
	}

	.uni-logo img {
		width: 110px;
	}

	.header-bot {
		border-top: 1px solid #e2e2e2;
		border-bottom: 0.99px solid #e2e2e2;

	}
</style>

<div style="background: #FFFFFF">
<div class="header-top" style="border-bottom: 1px solid #b5b5b5; ">
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


<!-- END WRAPPER -->
<!-- Javascript -->

