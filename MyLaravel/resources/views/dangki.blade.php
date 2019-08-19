<?php $result =DB::select('select MaMon,TenMon,SoTinChi,SoTiet,tuchon,batbuoc,MaKhoa from monhoc ');
       ?>
<?php  
                 $sv=DB::select('select MaSv,HoTen,MaKhoa from sinhvien ');
                  foreach ($sv as $kq1 ){
                    $dx=$kq1->MaSv;
                    if ($postname == $dx){
                    $fx=$kq1->HoTen;
                    break;}}
                ?>  
          <?php 
     $result =DB::select('select MaMon,TenMon,SoTinChi,SoTiet,tuchon,batbuoc,MaKhoa from monhoc ');
     $result1 =DB::select('select MaKhoa,MaSv from sinhvien ');
       ?>
@extends('trgchu')
@section('noidung')

     <form action="{{url('dangki',$postname)}}" method="post" style="padding: 10px">
    <table class="table table-bordered">
    <thead>

      <tr>
        <th>Mã Môn</th>
        <th>Tên Môn</th>
        <th>Số Tín</th>
        <th>Tự Chọn</th>
        <th>Bắt Buộc</th>
        <th>Đăng Kí Học</th>
      </tr>
    </thead>
    <tbody style="text-align: center;">
        <?php 
        $ex='0';
        foreach ($result1 as $kq2) {
          $cx=$kq2->MaKhoa;
          $kx=$kq2->MaSv;
          if ($postname==$kx) {
              $ex=$cx;
              break;
          }
        }


        foreach ($result as $kq1 ):{
                $dx=$kq1->MaKhoa;
                if ($ex!= $dx){
                    continue;
                }
            } ?>
                 <tr>
        <td>{{$kq1->MaMon}}</td>
        <td>{{$kq1->TenMon}}</td>
        <td>{{$kq1->SoTinChi}}</td>
        <td>{{$kq1->tuchon}}</td>
        <td>{{$kq1->batbuoc}}</td>
       <td><input type="checkbox" name="chonmon[]" value="{{$kq1->MaMon}}"</td>  
      </tr>
    <?php endforeach ?> 
   
    </tbody>
  </table>
        {!! csrf_field() !!}
        <input type="submit"  value="ĐĂng Kí"  class="btn btn-success" style="width: 85px">
</form>
@endsection
