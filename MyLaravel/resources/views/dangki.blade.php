<?php $result =DB::select('select MaMon,TenMon,SoTinChi,SoTiet,KieuMonHoc,MaKhoa from monhoc '); 
       ?>
<?php  
                 $sv=DB::select('select sinhvien_MaSv,HoTen,MaKhoa from sinhvien ');
                  foreach ($sv as $kq1 ){
                    $dx=$kq1->sinhvien_MaSv;
                    if ($postname == $dx){
                    $fx=$kq1->HoTen;
                    break;}}
                ?>  
@extends('trgchu')
@section('noidung')

     <form action="" method="post" style="padding: 10px">
    <a href="" class="btn btn-outline-success" style="margin-left: 110px; ">Đăng Kí Học</a>
    <br>
    <br>
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
        foreach ($result as $kq1 ):?>
                 <tr>
        <td>{{$kq1->MaMon}}</td>
        <td>{{$kq1->TenMon}}</td>
        <td>{{$kq1->SoTinChi}}</td>
        <td>{{$kq1->KieuMonHoc}}</td>
       <td><input type="checkbox" name="chonmon[]" value="{{$kq1->MaMon}}"</td>  
      </tr>
    <?php endforeach ?> 
   
    </tbody>
  </table>

        <input type="submit"  value="ĐĂng Kí"  class="btn btn-success">


                </div>
            </div>
        </div>
    </div>
        {!! csrf_field() !!}
</form>
@endsection
