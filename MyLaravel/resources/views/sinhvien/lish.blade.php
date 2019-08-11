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
	    $result =DB::select('select sinhvien_MaSv,HoTen,NgaySinh,GioiTinh,QuocTich,SDT,CMND,Email,MaKhoa,MaK from sinhvien ');
	 ?>
	 </div>
	 <br>
	<a href="http://localhost/MyLaravel/public/createsv" class="btn btn-outline-success" style="margin-left: 110px; ">Thêm sinh viên</a>
	<br>
	<br>
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
        <td>{{$value->sinhvien_MaSv}}</td>
        <td>{{$value->HoTen}}</td>
        <td>{{$value->NgaySinh}}</td>
        <td>{{$value->GioiTinh}}</td>
        <td>{{$value->QuocTich}}</td>
        <td>{{$value->SDT}}</td>
        <td>{{$value->CMND}}</td>
        <td>{{$value->Email}}</td>
        <td>{{$value->MaKhoa}}</td>
        <td>{{$value->MaK}}</td>
        <td><button type="button" class="btn btn-outline-warning">Sửa</button> 
         <button type="button" class="btn btn-outline-danger">Xóa</button> </td>

      </tr>
    <?php endforeach ?>
    
    </tbody>
  </table>



	@extends('giaodienGV.footer');
</body>
</html>