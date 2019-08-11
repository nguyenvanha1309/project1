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
		    $result =DB::select('select sinhvien_MaSv,HoTen,NgaySinh,GioiTinh,SDT,CMND,Email,MaKhoa,MaK from sinhvien ');
		  	$khoa = DB::select('select MaKhoa,TenKhoa from khoa');
		  	$k = DB::select('select MaK,TenK from k');
		 ?>
		 </div>

	
		<div class="form-group col-md-6 col-xs-6 col-sm-6">

		 <form class="" action="{{Route('store')}}" method="post">
		 	<h3>Thêm sinh viên mới</h3>
		 	{{csrf_field()}}
		 	Mã SV:  <input type="text" name="masv" required><br><br>
		 	Họ tên :  <input type="text" name="hoten" required><br><br>
		 	Ngày sinh :  <input type="text" name="ngaysinh" required><br><br>
		 	Giới tính : <select name="gioitinh" id=""><option >Nam</option><option >Nữ</option></select><br><br>
		 	Quốc tịch: <input type="text" name="quoctich" required><br><br>
		 	SĐT:  <input type="text" name="sdt" required><br><br>
		 	CMND:  <input type="text" name="cmnd" required><br><br>
		 	Email:  <input type="text" name="email" required><br><br>
		 	Khoa:  <select name="Khoa" id="Khoa">
						<?php foreach ($khoa as $key1 ) : ?>
					 		<option value="{{$key1->TenKhoa}}">{{$key1->TenKhoa}}</option>
						<?php endforeach ?>
					 	</select><br><br>
		 	Khóa:  <select name="K" id="K">
		 				<?php foreach ($k as $key2 ) : ?>
					 		<option value="{{$key2->MaK}}">{{$key2->MaK}}</option>
						<?php endforeach ?>	
		 				</select><br><br>
		 	<button type="submit" class="btn btn-primary">Submit</button>
		 </form>
		</div>
	@extends('giaodienGV.footer');
	<style>	
		body{
			text-align: center;
			margin: 0 auto;
		}
		form{
			padding: 10px 10px;
			border: 2px solid #999;
			width: 100%;
			text-align: center;
		}
		input{
			border-radius: 10;
		}
	</style>
</body>
</html>