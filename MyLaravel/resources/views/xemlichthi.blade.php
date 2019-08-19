@extends('trgchu')
@section('noidung')
<?php  
                 $sv=DB::select('select MaSv,HoTen,MaKhoa from sinhvien ');
                  foreach ($sv as $kq1 ){
                    $dx=$kq1->MaSv;
                    if ($postname == $dx){
                    $fx=$kq1->HoTen;
                    break;}}
                ?> 
<?php  
                 $sv=DB::select('select MaMon,GioThi,NgayThi,BuoiThi,PhongThi,SBD from lichthi');
    
                ?>  
<form action="" method="post" style="padding: 10px">
    <table class="table table-bordered">
    <thead>

      <tr>
        <th>Mã Môn</th>
        <th>Giờ Thi</th>
        <th>Ngày Thi</th>
        <th>Buổi Thi</th>
        <th>Phòng Thi</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($sv as $kq1 ):
                $dx=$kq1->SBD;
                if ($postname != $dx){
                continue;}?>
                 <tr>
        <td>{{$kq1->MaMon}}</td>
        <td>{{$kq1->GioThi}}</td>
        <td>{{$kq1->NgayThi}}</td>
        <td>{{$kq1->BuoiThi}}</td> 
        <td>{{$kq1->PhongThi}}</td>
      </tr>
    <?php endforeach ?> 
   
    </tbody>
  </table>
</form>
@endsection