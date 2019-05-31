@extends('master')
@section('content')
<div class="container-fluid" style="max-width: 1140px">
  <h3 style="margin-bottom: 20px">Tìm kiếm giảng viên</h3>
  <div class="row">
    <div class="col-sm-5">
      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'dvct')" id="defaultOpen">Đơn vị công tác</button>
        <button class="tablinks" onclick="openCity(event, 'lvqt')">Lĩnh vực quan tâm</button>
      </div>

      <div id="dvct" class="tabcontent">
        <ul style="list-style-type:none; padding-left: 2%">
          @foreach($department as $d)
          <li style="border-bottom: 1px solid #333333; padding-top: 20px;" class="department" data-iddep="{{$d->id}}"><p>{{$d->department_name}}</p></li>
          @endforeach
        </ul>  
      </div>

      <div id="lvqt" class="tabcontent">
        <ul id="tree1" class="tree"> 
          @foreach($research_field as $r)
          <li class="branch"><a>{{$r->research_field}}</a>
            <ul>
              @foreach($r->lecturer_relation as $l)
              <li style="font-weight: normal !important;" class="lecturer_relation" data-idlec="{{$l->id}}">{{$l->name}}</li>
              @endforeach
            </ul> 
          </li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="col-sm-7 ttgv">
      <p>Danh sách giảng viên</p>            
      <table class="table">
        <thead>
          <tr>
            <th>Học vị</th>
            <th>Họ và tên</th>
            <th>Đơn vị</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>
</div>
<input type="hidden" value="{{csrf_token()}}" id="token"/>

<style type="text/css">
  .department, .infoteacher, .lecturer_relation, .branch {
    cursor: pointer;

  }

</style>

<script type="text/javascript">
  document.getElementsByClassName(department)[].focus();
</script>

<script type="text/javascript" src="source/js/searchteacher.js"></script>

<script type="text/javascript">
  $(document).ready(function() {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    //ajax search by department
    $('.department').click(function(e) {
      e.preventDefault();
      var id = ($(this).attr("data-iddep"));
      var token = $('#token').val();
      $.ajax({
        type : 'POST',
        url : '/searchbydep',
        data: {'id':id, '_token': token},
        dataType: 'json',
        success: function (data) {
          $(".table tbody").html("");
          $.each(data, function (i) {                
           $(".table tbody").append("<tr " + "class=" +'"infoteacher"' + 'data-iduser=' +  data[i].id + ">" +
            "<td>" + data[i].degree + "</td>" +
            "<td>" + data[i].fullname + "</td>" +
            "<td>" + data[i].department_name + "</td>" +
            "</tr>");
         })  
        },
        error: function (data) {
         console.log('Error:', data);
       }
     });
    });

    //ajax search by lecture_qt
    $('.lecturer_relation').click(function(e) {
      e.preventDefault();
      var idlec = ($(this).attr("data-idlec"));
      var token = $('#token').val();
      $.ajax({
        type : 'POST',
        url : '/searchbylec',
        data: {'idlec':idlec, '_token': token},
        dataType: 'json',
        success: function (data) {
          $(".table tbody").html("");
          $.each(data, function (i) {                
           $(".table tbody").append("<tr " + "class=" +'"infoteacher"' + 'data-iduser=' +  data[i].id + ">" +
            "<td>" + data[i].degree + "</td>" +
            "<td>" + data[i].fullname + "</td>" +
            "<td>" + data[i].department_name + "</td>" +
            "</tr>");
         })  
        },
        error: function (data) {
         console.log('Error:', data);
       }
     });
    });

   // click to detals
   $(document).on("click", ".infoteacher", function() {
    var iduser = ($(this).attr("data-iduser"));
    var url = '/teacher/info/' + iduser
    window.location.href = url;
  });
 });  
</script>

@endsection