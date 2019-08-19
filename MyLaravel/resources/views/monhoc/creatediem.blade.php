<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create SV</title>
</head>
<body>
	@extends('giaodienGV.index');
	
			<div>
		<?php 
		    $result =DB::select('select MaSv,HoTen,NgaySinh,GioiTinh,SDT,CMND,Email,MaKhoa,MaK from sinhvien ');
		  	$khoa = DB::select('select MaKhoa,TenKhoa from khoa');
		  	$k = DB::select('select MaK,TenK from k');
		  	$mon = DB::select('select MaMon from monhoc');
		  	$sinhvien =DB::select('select MaSv from sinhvien');
		  	$ky = array('1','2','3','4','5','6','7','8');
		 ?>
		 </div>

	
		<div class="form-group col-md-6 col-xs-6 col-sm-6">

		 <form class="" action="{{Route('storediem')}}" method="post">
		 	<h3>Thêm điểm</h3>
		 	{{csrf_field()}}
		 	Mã môn:  <select name="mamon" id="">
		 		<?php foreach ($mon as $key ) : ?>
					<option value="{{$key->MaMon}}">{{$key->MaMon}}</option>
		 		<?php endforeach ?>
		 	</select><br><br>
		 	Mã sinh viên:  <select name="masv" id="">
		 		<?php foreach ($sinhvien as $key1 ) : ?>
					<option value="{{$key1->MaSv}}">{{$key1->MaSv}}</option>
		 		<?php endforeach ?>
		 	</select><br><br>
		 	Kỳ:  <select name="ky" id="">
		 		<?php foreach ($ky as $key2 ) : ?>
					<option value="{{$key2}}">{{$key2}}</option>
		 		<?php endforeach ?>
		 	</select><br><br>
		 	Điểm chuyên cần : <input type="text" name="diemcc" required><br><br>
		 	Điểm giữa kỳ: <input type="text" name="diemgk" required><br><br>
		 	Điểm cuối kỳ:  <input type="text" name="diemck" required><br><br>
		 	<button type="submit" class="btn btn-primary">Thêm</button>
		 </form>
		</div>
	@extends('giaodienGV.footer');
	<style>	
		body{
			text-align: left;
			margin: 0px auto;
		}
		form{
			padding: 10px 50px;
			border: 4px solid green;
			border-radius: 30px;
			width: 100%;
			margin-left: 100px;

		}
		h3{
			text-align: center;
			color: green;
		}
		
	</style>
</body>
</html>