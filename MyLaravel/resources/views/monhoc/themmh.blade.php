<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create môn học</title>
</head>
<body>
	@extends('giaodienGV.index');
	
			<div>
		<?php 
		    $result =DB::select('select * from monhoc ');
		  	$khoa = DB::select('select MaKhoa,TenKhoa from khoa');
		  	$type1 =  array('Tự chọn', 'Bắt buộc' );
		 ?>
		 </div>

	
		<div class="form-group col-md-6 col-xs-6 col-sm-6">

		 <form class="" action="{{Route('storemh')}}" method="post">
		 	<h3>Thêm môn mới</h3>
		 	{{csrf_field()}}
		 	Mã môn:  <input type="text" name="mamh" required><br><br>
		 	Tên môn:  <input type="text" name="tenmh" required><br><br>
		 	Số tín chỉ :  <input type="text" name="stc" required><br><br>
		 	Số tiết : <input type="text" name="sotiet"><br><br>
		 	Kiểu môn học: 
			<select name="type1" id="">
		 	<?php foreach ($type1 as $key5 ) : ?>
				<option value="{{$key5}}">{{$key5}}</option>
		 	<?php endforeach  ?></select><br><br>
		 	Kỳ:  <input type="text" name="ky" required><br><br>
		 	Mã khoa:  <select name="Khoa" id="Khoa">
						<?php foreach ($khoa as $key1 ) : ?>
					 		<option value="{{$key1->MaKhoa}}">{{$key1->MaKhoa}}</option>
						<?php endforeach ?>
					 	</select><br><br>
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