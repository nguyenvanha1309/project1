<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit SV</title>
</head>
<body>
	@extends('giaodienGV.index');
	

	<div><h1>trang edit sinh viên</h1>
	<?php 
	    $result =DB::select('select MaSv,HoTen,NgaySinh,GioiTinh,SDT,CMND,Email,MaKhoa,MaK from sinhvien ');
	    var_dump($result);
	 ?>
	 </div>
	@extends('giaodienGV.footer');
</body>
</html>