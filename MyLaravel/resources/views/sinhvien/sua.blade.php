<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sửa sv</title>
</head>
<body>
	@extends('giaodienGV.index');
	<div>
		<?php 
		// // $new = DB::select('select * from sinhvien where MaSv ="6603"');

		// $url=URL::current();
		// // var_dump($url);
		// // echo strlen($url);
		// $num =substr($url, 40,4);
		// $new = DB::select('select * from sinhvien where MaSv = :ma',['ma'=>$num]);
		

		$url= URL::current();
		$length = strlen($url);
		$num = substr($url, $length-4,4);
	    $new =DB::select('select * from sinhvien where MaSv = :ma',['ma'=>$num]);
		?>

	</div>
	<div class="form-group col-md-6 col-xs-6 col-sm-6">
		<form action="{{Route('update')}}" method="post">
			<h3>Sửa thông tin sv</h3>
			{{csrf_field()}}
			Mã Sv:
			
			<?php foreach ($new as $key ): ?>
			<input name="masv" value="{{$key->MaSv}}">
			<?php endforeach ?>
		
			<br><br>
			Họ tên:
			<?php foreach ($new as $key ): ?>
			<input name="hoten" value="{{$key->HoTen}}">
			<?php endforeach ?>
			<br><br>
			Ngày sinh:
			<?php foreach ($new as $key ): ?>
			<input name="ngaysinh" value="{{$key->NgaySinh}}">
			<?php endforeach ?>
		
			<br><br>
			Giới Tính: 
			<?php foreach ($new as $key ): ?>
			<input name="gioitinh" value="{{$key->GioiTinh}}">
			<?php endforeach ?>
	
			<br><br>
			Quốc Tịch: 
			<?php foreach ($new as $key ): ?>
			<input name="quoctich" value="{{$key->QuocTich}}">
			<?php endforeach ?>
			
			<br><br>
			Số điện thoại:
			<?php foreach ($new as $key ): ?>
			<input name="sdt" value="{{$key->SDT}}">
			<?php endforeach ?>
			
			<br><br>
			CMND: 
			<?php foreach ($new as $key ): ?>
			<input name="cmnd" value="{{$key->CMND}}">
			<?php endforeach ?>
			
			<br><br>
			Email: 
			<?php foreach ($new as $key ): ?>
			<input name="email" value="{{$key->Email}}">
			<?php endforeach ?>
		
			<br><br>
			Khoa: 
			<?php foreach ($new as $key ): ?>
			<input name="Khoa" value="{{$key->MaKhoa}}">
			<?php endforeach ?>
			
			<br><br>
			Khoá:
			<?php foreach ($new as $key ): ?>
			<input name="K" value="{{$key->MaK}}">
			<?php endforeach ?>
			
			<br><br>
			<!-- Họ tên: <input type="text" name="hoten" required><br><br>
			Ngày sinh: <input type="text" name="ngaysinh" required><br><br>
			Giới tính:<select name="gioitinh" id="gioitinh">
				<?php foreach ($new as $key) :?>
				<option value="{{$key -> GioiTinh}}">{{$key->GioiTinh}}</option>
				<?php endforeach ?>
			</select><br><br>
			Quốc tịch: <input type="text" name="quoctich" required><br><br>
			SĐT: <input type="text" name="sdt" required><br><br>
			CMND: <input type="text" name="cmnd" required><br><br>
			Email: <input type="text" name="email" required><br><br>
			Khoa: <input type="text" name="khoa" required><br><br>
			Khóa: <input type="text" name="" required><br><br> -->
			
			<button type="submit" class="btn btn-primary">Sửa</button>
		</form>
	</div>
	
	@extends('giaodienGV.footer');
	<style type="text/css">
		body{
			text-align: left;
			margin: 50px auto;
		}
		form{
			padding: 10px 50px;
			border: 4px solid red;
			border-radius: 30px;
			width: 100%;
			margin-left: 100px;
		}
		h3{
			text-align: center;
			color: red;
		}
	</style>
</body>
</html>

