@extends('master')
@section('content')
<div class="container-fluid">
<hr>
  <div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-5" >
    	<div id="info-gv" style="padding-left: 30px">
    		<p class="title-tt">{{$user->degree}}. {{$user->fullname}}</p>
	    	<p>Đơn vị: {{$user->department->department_name}}</p>
	    	<p>Học vị, hàm vị: {{$user->degree}}</p>
	    	<p>VNU email: {{$user->email}}</p>
	    	<p>Website: {{$user->website}}</p>
    	</div>
    	<hr>
    	<div id="topic" style="padding-left: 30px">
    		<p class="title-tt">Chủ đề nghiên cứu</p>
	    	<ul style="list-style-type: none; padding: 0;">
	    		@foreach($research as $r)
	    		<li>- {{$r->lecturer_research->name}}</li>
	    		@endforeach
	    	</ul>
    	</div>
    	<hr>
    	<div id="field" style="padding-left: 30px">
    		<p class="title-tt">Lĩnh vực quan tâm</p>
	    	<ul>
	    		@foreach($lecturer as $l)
	    		<li>- {{$l->lecturer_relation->name}}</li>
	    		@endforeach
	    	</ul>
    	</div>
    	<hr>
    	<div class="col-lg-12">
    		<button class="btn btn-success my-but" onclick="window.history.back();" style="margin-bottom: 20px" > << Quay Lại </button>
		  </div>
    </div>

    <div class="col-sm-5">
       <img src="source/img/{{$user->profile_picture}}" width="30%" >
    </div>
    <div class="col-sm-1"></div>
  </div>

  	
</div>

@endsection