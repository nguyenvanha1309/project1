<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm lịch thi</title>
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
		  		$link= URL::current();
			$length = strlen($link);
			$num2 = substr($link, $length-5,5);
			// echo $num2;
			$buoithi  = array('Sáng','Chiều');
	    	$result2 =DB::select('select * from dangky where MaMon = :ma2',['ma2'=>$num2]);
	    	// var_dump($result2);
	    	$phongthi = array('C-408','C-409','C-410','C-308','C309','C310','K-504','K-505'  );
		 ?>
		 </div>

	
		<div class="form-group col-md-6 col-xs-6 col-sm-6">

		 <form class="" action="{{Route('storelichthi')}}" method="post">
		 	<h3>Thêm lịch thi</h3>
		 	{{csrf_field()}}
		 	Mã môn:  <select name="mamon" id="">
		 		<option value="<?php echo $num2 ?>"><?php echo $num2; ?></option>
		 	</select><br><br>
		 	Giờ thi: <input type="time" name="giothi" required><br><br>
		 	Buổi thi:  <select name="buoithi" id="">
		 		<?php foreach ($buoithi as $keyb ): ?>
		 		<option value="{{$keyb}}">{{$keyb}}</option>
		 		<?php endforeach ?>
		 	</select><br><br>
		 	Ngày thi: <input type="date" name="ngaythi"><br><br>
		 	Phòng thi:  <select name="phongthi" id="">
		 		<?php foreach ($phongthi as $keyp ): ?>
		 		<option value="{{$keyp}}">{{$keyp}}</option>
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