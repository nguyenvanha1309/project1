<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>List SV</title>
</head>
<body>
  @extends('giaodienGV.index');
  

  <div><h1 style="text-transform: uppercase; color: green; text-align: center;">trang list sinh viên</h1>
  <?php 
      $result =DB::select('select MaSv,HoTen,NgaySinh,GioiTinh,QuocTich,SDT,CMND,Email,MaKhoa,MaK from sinhvien ');
   ?>
   </div>
   <br>
  <a href="http://localhost:8080/MyLaravel/public/createsv" class="btn btn-outline-success" style="margin-left: 110px; ">Thêm sinh viên</a>
  <br>
  <br>
  <form action="http://localhost:8080/MyLaravel/public/suasv" method="get">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>Mã SV</th>
        <th>Họ tên</th>
        <th>Ngày sinh</th>
        <th>Giới tính</th>
        <th>Quốc Tịch</th>
        <th>SĐT</th>
        <th>CMND</th>
        <th>Email</th>
        <th>Khoa</th>
        <th>Khóa</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $stt= 0;
      foreach ($result as $value): $stt++ ?>
      <tr>
        <td>{{$stt}}</td>
        <td>{{$value->MaSv}}</td>
        <td>{{$value->HoTen}}</td>
        <td>{{$value->NgaySinh}}</td>
        <td>{{$value->GioiTinh}}</td>
        <td>{{$value->QuocTich}}</td>
        <td>{{$value->SDT}}</td>
        <td>{{$value->CMND}}</td>
        <td>{{$value->Email}}</td>
        <td>{{$value->MaKhoa}}</td>
        <td>{{$value->MaK}}</td>
        <td>
          <button type="button" class="btn btn-outline-warning" ><a href="http://localhost:8080/MyLaravel/public/suasv/{{$value->MaSv}}" style="text-decoration: none" name="$value->MaSv">Sửa</a></button> 
          <button type="button" class="btn btn-outline-danger" ><a href="http://localhost:8080/MyLaravel/public/xoasv/{{$value->MaSv}}" style="text-decoration: none" name="$value->MaSv">Xóa</a></button> 
      

      </tr>
    <?php endforeach ?>
      
    </tbody>
  </table>

<a href="{{url('giaodienGV')}}"><button type="button" class="btn btn-primary accc">Quay Lại Trang Chủ</button></a>
  </form>

  
  @extends('giaodienGV.footer');
</body>
</html>
