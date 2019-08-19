<?php $result =DB::select('select MaMon,TenMon,SoTinChi,SoTiet,tuchon,batbuoc,MaKhoa from monhoc '); 
       ?>
<?php  
                 $sv=DB::select('select MaSv,HoTen,MaKhoa from sinhvien ');
                 $dangki=DB::select('select MaMon,TenMon,SoTinChi,SoTiet,MaSv from dangky ');
                  foreach ($sv as $kq1 ){
                    $dx=$kq1->MaSv;
                    if ($postname == $dx){
                    $fx=$kq1->HoTen;
                    break;}}
                ?>  
@extends('trgchu')
@section('noidung')
 <form action="" method="post" style="padding: 10px">
    <table class="table table-bordered">
    <thead>

      <tr>
        <th>Mã Môn</th>
        <th>Tên Môn</th>
        <th>Số Tín</th>
        <th>Số Tiết</th>

      </tr>
    </thead>
    <tbody style="text-align: center;">
        <?php 
        foreach ($dangki as $kq1 ):{
                $dx=$kq1->MaSv;
                if ($postname!=$dx){
                    continue;
                }
            } ?>
                 <tr>
        <td>{{$kq1->MaMon}}</td>
        <td>{{$kq1->TenMon}}</td>
        <td>{{$kq1->SoTinChi}}</td>
        <td>{{$kq1->SoTiet}}</td>
      </tr>
    <?php endforeach ?>
   
    </tbody>
  </table>
        {!! csrf_field() !!}
</form>
@endsection
