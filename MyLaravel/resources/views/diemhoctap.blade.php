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
                 $sv=DB::select('select MaSv,MaMon,Ky,DiemCC,DiemCK,DiemGK,DiemTB,DiemChu from num');
    
                ?>  
<form action="" method="post" style="padding: 10px">
    <table class="table table-bordered">
    <thead>

      <tr>
        <th>Mã Môn</th>
        <th>Kỳ</th>
        <th>Điểm chuyên cần</th>
        <th>Điểm giữa kì</th>
        <th>Điểm cuối kì</th>
        <th>Điểm trung bình</th>
        <th>Điểm chữ</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($sv as $kq1 ):
                $dx=$kq1->MaSv;
                if ($postname != $dx){
                continue;}?>
                 <tr>
        <td>{{$kq1->MaMon}}</td>
        <td>{{$kq1->Ky}}</td>
        <td>{{$kq1->DiemCC}}</td>
        <td>{{$kq1->DiemGK}}</td>
        <td>{{$kq1->DiemCK}}</td> 
        <td>{{$kq1->DiemTB}}</td>
        <td>{{$kq1->DiemChu}}</td>
        
      </tr>
    <?php endforeach ?> 
   
    </tbody>
  </table>
</form>
@endsection