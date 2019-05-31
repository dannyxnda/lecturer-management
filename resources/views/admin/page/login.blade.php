@extends('master')
@section('content')

<style type="text/css">
    html {
      overflow-x: hidden;

  }
  body {
      font-family: 'Arial', sans-serif;
      background: #FFFFFF;
      width: 100%;
      overflow-x: hidden;
      margin: 0;
      padding: 0;
      display: block;
  }

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

  .menu li {
      position: relative;
      float: left;
  }

  .menu > li a {
      color: #555;
      font-size: 13px;
      font-weight: normal;
      padding: 18px 15px;
      display: inline-block;
      border-top: 4px solid transparent;
      box-sizing: border-box;
      transition: all 0.6s ease-in-out;

  }

  .menu > li > a:hover, .menu > li > a.current,
  .menu > li:hover > a {
      border-top-color: #015198;
      background: #F2F2F2;
      color: #015198;
  }

  main {
      background: #EEEEEE;
      padding-top: 12px;
  }

  main .main-top .container {
      background: #FFFFFF;
      padding-bottom: 20px;
  }






  footer {
      background: #333333;
      display: block;
      margin: 0;
      padding: 0;
  }

  .
  .info {
      display: inline-block;
      float: right;
      max-width: 66.67%;
  }

  .info p {
      margin: 0px;
      font-size: 13px;
      padding: 40px 0;
      color: #999999;
      line-height: 25px;
  }

  .my-but {
      background-color: #333333;
  }

  .my-but:hover {
      background-color: #5b5b5b;
  }

  .loginpannel {
      color: #333;
  }

  .loginpannel h2 {
      margin: 30px auto;
      padding: 10px;
      text-align: center;
      font-weight: 400;
      font-size: 30px;
      cursor: default;
  }

  .log-line {
      margin-bottom: 10px;
  }

  .loginpannel .form-label {
      text-align: right;
      font-size: 18px;
      width: 33%;
      float: left;
      box-sizing: border-box;
      display: inline-block;
      padding-top: 14px;
  }

  .loginpannel .log-input {
      float: right;
      //box-sizing: border-box;
      width: 66%;
      //padding-left: 20px;
      line-height: 20px;
      display: inline-block;
  }

  .log-input input {
      box-shadow: none;
      width: 50%;
      display: inline-block;
      height: 20px;
      padding: 4px 6px;
      font-size: 14px;
      line-height: 20px;
      border-radius: 4px;
      border: 1px solid #729eea;
      height: 30px;
      background-color: #E8F0FE;
  }

  .empty-log {
      display: inline-block;
  }

  .pass-saving {
      text-align: center;
  }

  .login-btn {
      text-shadow: none;
  }

  input[type="submit"] {
      display: block;
      text-align: center;
      margin: 10px auto;
      background-color: #51666C;
      padding: 8px 15px;
      border: 1px solid transparent;
      border-radius: 5px;
      font-size: 14px;
      line-height: 20px;
      vertical-align: middle;
      box-shadow: none;
  }

  input[type="submit"]:hover {
      background-color: #5b5b5b;
      color: #FFFFFF
  }


</style>
<!--   <link rel="stylesheet" type="text/css" href="Source/css/mystyle.css" /> -->



<div  class="loginpannel" style="margin-top: 50px">
    <div "container clearfix">
        <h2>Đăng nhập quản trị</h2>
        @if(count($errors)>0)
        <div class="alert alert-danger" style="margin-left: 30px;">
          @foreach($errors->all() as $err)
          {{$err}}!<br>

          @endforeach
      </div>
      @endif
      @if(Session::has('message'))
      <div class="alert alert-danger">{{Session::get('message')}}</div>
      @endif
      <div class="sublogin clearfix">
        <form role="form" action="/admin/login" method="POST">
            {!!csrf_field()!!}
            <input id="role" name="role" value="1" type="hidden">
            <div class="log-line clearfix">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <div class="log-input">
                    <input class="user-input" type="text" name="username" id="username" placeholder="Tên đăng nhập" autofocus />
                </div>
            </div>

            <div class="log-line clearfix">
                <label for="password" class="form-label">Mật khẩu</label>
                <div class="log-input">
                    <input class="user-input" type="password" name="password" id="password" placeholder="Mật khẩu" value="" />
                    <p class="empty-log" id="empty-pw"></p>
                </div>

            </div>

            <input type="submit" id="login-btn" class="login-btn" name="login-btn" value="Đăng nhập" />
        </form>
        <div style="margin: 100px 0 0 200px">
            <div><a href="/"><< Quay về trang chủ</a></div>
            <div><a href="/teacher/login">Đăng nhập giảng viên >></a></div>
        </div>
    </div>
</div> <!--end of container-->
</div> <!--end of login pannel-->


<!-- jQuery -->
<script src="../source/admin/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../source/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../source/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../source/admin/dist/js/sb-admin-2.js"></script>

@endsection