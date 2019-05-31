<head>
	<title>Quản lí thông tin</title>
	<base href="{{asset('')}}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="Source/img/uet-logo.jpg">
	

</head>
<body>
	@include('admin.header1')

    @yield('content')
    <!-- @include('footer') -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="source/admin/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<!-- DataTables JavaScript -->
    <script src="source/admin/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="source/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
            "order":[[0, "desc"]],
            "language": {
                "decimal": "-",
                "thousands": ".",
                "search": "Tìm kiếm:",
                "info": "",
                "lengthMenu": "Xem _MENU_ Hàng",
                "zeroRecords":    "Không tìm thấy",
                "infoEmpty":      "",
                "infoFiltered": "",
                "paginate": {
                    "first": "Đầu ",
                    "last":  "Cuối",
                    "next":  "Tiếp",
                    "previous": "Trước"
                },

            }
        });
    });
</script>
</body>

<style>
    .my-but {
        background-color: #5b5b5b;
        border-radius: 5px;
        color: white;
    }

    .my-but:hover {
        background-color: #333333;
        color: white;
    }
</style>