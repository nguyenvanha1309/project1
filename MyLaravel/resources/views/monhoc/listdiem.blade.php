<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List diem</title>
</head>
<body>
	@extends('giaodienGV.index');
	

	<div><h1 style="text-transform: uppercase; color: green; text-align: center;">list diem</h1>
	<?php 
		$link= URL::current();
		$length = strlen($link);
		$num2 = substr($link, $length-5,5);
		// echo $num2;
	    $result2 =DB::select('select * from num where MaMon = :ma2',['ma2'=>$num2]);
	    // var_dump($result2);

	 ?>
	 </div>
	 <br>
	<a href="http://localhost:8080/MyLaravel/public/creatediem" class="btn btn-outline-success" style="margin-left: 110px; ">Nhập điểm</a>
	<br>
	<br>
	
	<br>
	<form action="{{Route('destroydiem')}}" method="get">
	<table class="table table-bordered">
	Mã Môn: <?php echo($num2); ?>
    <thead>
      <tr>
      	<th>STT</th>
        <th>Mã SV</th>
        <th>Kỳ</th>
        <th>Điểm chuyên cần</th>
        <th>Điểm giữa kỳ</th>
        <th>Điểm cuối kỳ</th>
        <th>Điểm trung bình</th>
        <th>Điểm chữ</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
    	$stt= 0;
    	foreach ($result2 as $value): $stt++ ?>
      <tr>
      	<td>{{$stt}}</td>
        <td>{{$value->MaSv}}</td>
        <td>{{$value->Ky}}</td>
        <td>{{$value->DiemCC}}</td>
        <td>{{$value->DiemGK}}</td>
        <td>{{$value->DiemCK}}</td>
        <td>{{$value->DiemTB}}</td>
        <td>{{$value->DiemChu}}</td>
        <td>
        	<!-- <button type="button" class="btn btn-outline-warning" ><a href="http://localhost/MyLaravel/public/suadiem/{{$value->MaSv}}" style="text-decoration: none" name="$value->MaSv">Sửa</a></button>  -->
        	<button type="button" class="btn btn-outline-danger" ><a href="http://localhost:8080/MyLaravel/public/xoadiem/{{$value->MaSv}}/{{$value->MaMon}}" style="text-decoration: none" name="$value->MaSv">Xóa</a></button> 
      

      </tr>
    <?php endforeach ?>
    	
    </tbody>
  </table>

	</form>

	

</body>
</html>