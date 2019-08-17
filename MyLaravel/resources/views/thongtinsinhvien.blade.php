@extends('trgchu')
@section('noidung')

<?php  
                 $sv=DB::select('select MaSv ,HoTen,NgaySinh,GioiTinh,QuocTich,SDT,CMND,Email,MaKhoa,MaK from sinhvien');
    
                ?>  
<form action="" method="post" style="padding: 10px">
    <table class="table table-bordered">
    <thead>

      <tr>
        <th>Họ Tên</th>
        <th>Ngày sinh</th>
        <th>Gioi tính </th>
        <th>Quốc tịch</th>
        <th>Số điện thoại</th>
        <th>CMND</th>
        <th>Email</th>
        <th>Mã khoa</th>
        <th>Khóa</th>

      </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($sv as $kq1 ):
                $dx=$kq1->MaSv;
                if ($postname != $dx){
                continue;}?>
                 <tr>
        <td>{{$kq1->HoTen}}</td>
        <td>{{$kq1->NgaySinh}}</td>
        <td>{{$kq1->GioiTinh}}</td>
        <td>{{$kq1->QuocTich}}</td> 
        <td>{{$kq1->SDT}}</td>
        <td>{{$kq1->CMND}}</td>
        <td>{{$kq1->Email}}</td>
        <td>{{$kq1->MaKhoa}}</td>
        <td>{{$kq1->MaK}}</td>
        
      </tr>
    <?php endforeach ?> 
   
    </tbody>
  </table>
</form>
@endsection