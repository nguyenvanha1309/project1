<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>List MH</title>
</head>
<body>
  @extends('giaodienGV.index');
  

  <div><h1 style="text-transform: uppercase; color: green; text-align: center;">show - lịch thi</h1>
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
        <th>Giờ thi</th>
        <th>Buổi thi</th>
        <th>Ngày thi</th>
        <th>Phòng thi</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $stt= 0;
      foreach ($lichthi as $value): $stt++ ?>
      <tr>
        <td>{{$stt}}</td>
        <td>{{$value->MaMon}}</td>
        <td>{{$value->GioThi}}</td>
        <td>{{$value->BuoiThi}}</td>
        <td>{{$value->NgayThi}}</td>
        <td>{{$value->PhongThi}}</td>
        
      </tr>
    <?php endforeach ?>
      
    </tbody>
  </table>

  </form>
  <a href="http://localhost:8080/MyLaravel/public/monhoclichthi">Quay lại trang!</a>

  
  @extends('giaodienGV.footer');
</body>
</html>
