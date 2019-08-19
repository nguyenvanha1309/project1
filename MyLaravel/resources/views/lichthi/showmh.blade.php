<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>List MH</title>
</head>
<body>
  @extends('giaodienGV.index');
  

  <div><h1 style="text-transform: uppercase; color: green; text-align: center;">môn học - lịch thi</h1>
  <?php 
      $result =DB::select('select * from dangky ');
      $lichthi = DB::select('select * from lichthi');
      // var_dump($lichthi);
   ?>
   </div>
   <br>
  <br>
  <br>
  <form action="http://localhost:8080/MyLaravel/public/suamh" method="get">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>Mã môn học</th>
        <th>Tên môn học</th>
        <th>Số tín chỉ</th>
        <th>Số tiết</th>
        <th>Tự chọn</th>
        <th>Bắt buộc</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $stt= 0;
      foreach ($result as $value): $stt++ ?>
      <tr>
        <td>{{$stt}}</td>
        <td>{{$value->MaMon}}</td>
        <td>{{$value->TenMon}}</td>
        <td>{{$value->SoTinChi}}</td>
        <td>{{$value->SoTiet}}</td>
        <td>{{$value->tuchon}}</td>
        <td>{{$value->batbuoc}}</td>
        <td>  
          
          <button type="button" class="btn btn-outline-success" ><a href="http://localhost:8080/MyLaravel/public/themlichthi/{{$value->MaMon}}" style="text-decoration: none" name="$value->MaMon">Thêm lịch thi</a></button> 
      </tr>
    <?php endforeach ?>
      
    </tbody>
  </table>
<a href="{{url('giaodienGV')}}"><button type="button" class="btn btn-primary accc">Quay Lại Trang Chủ</button></a>
  </form>

  
  @extends('giaodienGV.footer');
</body>
</html>
