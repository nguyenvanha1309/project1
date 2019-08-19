<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List MH</title>
</head>
<body>
	@extends('giaodienGV.index');
	

	<div><h1 style="text-transform: uppercase; color: green; text-align: center;">danh sách môn học</h1>
	<?php 
	    $result =DB::select('select * from monhoc ');
	 ?>
	 </div>
	 <br>
	<a href="http://localhost:8080/MyLaravel/public/themmh" class="btn btn-outline-success" style="margin-left: 110px; ">Thêm môn học</a>
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
        <th>Kỳ</th>
        <th>Mã Khoa</th>
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
        <td>{{$value->Ky}}</td>
        <td>{{$value->Makhoa}}</td>
        <td>	
        	<button type="button" class="btn btn-outline-danger" ><a href="http://localhost:8080/MyLaravel/public/xoamh/{{$value->MaMon}}" style="text-decoration: none" name="$value->MaMon">Xóa</a></button> 
          <button type="button" class="btn btn-outline-success" ><a href="http://localhost:8080/MyLaravel/public/listdiem/{{$value->MaMon}}" style="text-decoration: none" name="$value->MaMon">Xem diem</a></button> 
      </tr>
    <?php endforeach ?>
    	
    </tbody>
  </table>
<a href="{{url('giaodienGV')}}"><button type="button" class="btn btn-primary accc">Quay Lại Trang Chủ</button></a>
	</form>

	
	@extends('giaodienGV.footer');
</body>
</html>
