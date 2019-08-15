@extends('trgchu')
@section('noidung')

<?php  
                 $sv=DB::select('select diem_MaSv,MaMon,Ky,DiemHeMuoi,DiemHeBon,DiemChu,DiemTB from diem');
    
                ?>  
<form action="" method="post" style="padding: 10px">
    <table class="table table-bordered">
    <thead>

      <tr>
        <th>Mã Môn</th>
        <th>Tên Môn</th>
        <th>Số Tín</th>
        <th>Kiểu Môn học</th>
        <th>Đăng Kí Học</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($sv as $kq1 ):
                $dx=$kq1->diem_MaSv;
                if ($postname != $dx){
                continue;}?>
                 <tr>
        <td>{{$kq1->MaMon}}</td>
        <td>{{$kq1->Ky}}</td>
        <td>{{$kq1->DiemHeMuoi}}</td>
        <td>{{$kq1->DiemHeBon}}</td>
        <td>{{$kq1->DiemChu}}</td>
        <td>{{$kq1->DiemTB}}</td>
        
      </tr>
    <?php endforeach ?> 
   
    </tbody>
  </table>
</form>
@endsection