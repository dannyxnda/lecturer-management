@extends('admin.master')
@section('content')


<div class="main">
	<!-- MAIN CONTENT -->
	<div class=" container">
		<div class="">

			<div class="row">
				<div class="col-md-12">
					<!-- BASIC TABLE -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Quản lí lĩnh vực nghiên cứu</h3>
							@if(count($errors) > 0)
							<div class="alert alert-danger">
								<ul>
									@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif

							@if($message = Session::get('success'))
							<div class="alert alert-success alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<strong>{{ $message }}</strong>
							</div>
							@endif
							@if(Session::has('message'))
							<div class="alert alert-success">{{Session::get('message')}}</div>
							@endif
						</div>
						<div>

							<div class="form-group">
								<table class="table">
									<tr>
										<td width="10%">
											<button class="btn my-but"><a href="addres" style="color: white">Thêm Lĩnh vực nghiên cứu</a></button>
										</td>
										<td width="10%">
											<button class="btn my-but"><a href="addlectres" style="color: white">Thêm Chủ Đề nghiên cứu</a></button>
										</td>
										<td width="80%">

										</td>
									</tr>
								</table>
							</div>

						</div>
						<div class="panel-body">
				
							<div id="lvqt" class="tabcontent">
								<ul style="list-style-type: none;" id="tree1" class="tree"> 
									@foreach($res_f as $r)
									<li class="branch">
										<a style="margin-left: 5px">{{$r->research_field}}</a>
										<ul style="list-style-type: none;">
											@foreach($r->lecturer_research as $l)
											<li class="lecturer_relation" data-idlec="{{$l->id}}">
												{{$l->name}}
												<a href="/deletelectres/{{$l->id}}" class="w3-right" style="margin-right: 60%;">
													<span class="glyphicon glyphicon-remove" style="color: red"></span>
												</a>
											</li>
											@endforeach
										</ul> 
									</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>      
				</div>
			</div>   
		</div>
	</div>   </div>     
	<!-- /.container-fluid -->

<link rel="stylesheet" type="text/css" href="source/css/tree.css"> 
<script type="text/javascript" src="source/js/searchteacher.js"></script>
<style type="text/css">
	.tabcontent {
		padding: 6px 12px;
		border: 1px solid #ccc;
	}
	.tree li {
		margin: 0;
		padding: 0 1em;
		line-height: 2em;
		color: #369;
		font-weight: 700;
		position: relative;
	}

	.tree li {
		cursor: pointer;
	}
	li {
		display: list-item;
		text-align: -webkit-match-parent;
	}

	.my-but {
		background-color: #5b5b5b;
		border-radius: 5px;
	}

	.my-but:hover {
		background-color: #333333;
	}
</style>
@endsection