@extends('trgchu')
@section('noidung')
<?php  
                 $sv=DB::select('select sinhvien_MaSv,HoTen,MaKhoa from sinhvien ');
                  foreach ($sv as $kq1 ){
                    $dx=$kq1->sinhvien_MaSv;
                    if ($postname == $dx){
                    $fx=$kq1->HoTen;
                    break;}}
                ?>  
       <?php 
     $result =DB::select('select MaMon,TenMon,SoTinChi,SoTiet,KieuMonHoc,MaKhoa from monhoc ');
     $result1 =DB::select('select MaKhoa,sinhvien_MaSv from sinhvien ');
       ?>
     </div>
     <br>
    <a href="http://localhost/MyLaravel/public/createsv" class="btn btn-outline-success" style="margin-left: 110px; ">Chương Trình Đào Tạo</a>
    <br>
    <br>
    <table class="table table-bordered">
    <thead>

      <tr>
        <th>Mã Môn</th>
        <th>Tên Môn</th>
        <th>Số Tín</th>
        <th>Số Tiết</th>
        <th>Kiểu Môn học</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        $ex='0';
        foreach ($result1 as $kq2) {
          $cx=$kq2->MaKhoa;
          $kx=$kq2->sinhvien_MaSv;
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
        <td>{{$kq1->SoTiet}}</td>
        <td>{{$kq1->KieuMonHoc}}</td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>


                </div>
            </div>
        </div>
    </div>
    <!--End container-->
@endsection