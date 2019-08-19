<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class giaovuController extends Controller
{
    
    //MaSv,HoTen,NgaySinh,GioiTinh,SDT,CMND,Email,MaKhoa,MaK

    public function index()
    {

        //Lấy danh sách sinh viên từ database
        return view('sinhvien.list');
    }
    public function create()
    {
        //Hiển thị trang thêm học sinh
        return view('sinhvien.create');
    }
    public function store(Request $request)
    {
        $allRequest  = $request->all();
        // var_dump($allRequest);
        $masv = $allRequest['masv'];
        $ten = $allRequest['hoten'];
        $ns = $allRequest['ngaysinh'];
        $gioitinh = $allRequest['gioitinh'];
        $quoctich = $allRequest['quoctich'];
        $sdt = $allRequest['sdt'];
        $cmnd = $allRequest['cmnd'];
        $email = $allRequest['email'];
        $khoa = $allRequest['Khoa'];
        $k = $allRequest['K'];
        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'MaSv'  => $masv,
            'HoTen' => $ten,
            'NgaySinh' => $ns,
            'GioiTinh' => $gioitinh,
            'QuocTich' =>$quoctich,
            'SDT' => $sdt,
            'CMND' => $cmnd,
            'Email' => $email,
            'MaKhoa' => $khoa,
            'MaK' => $k,
        );
        $datausers = array(
            'KieuUser' => 'SV',
            'UserName' => $masv,
            'PassWord' => $masv,
            'MaSv'=> $masv
        );
        $msv = DB::select('select MaSv,HoTen from sinhvien ­­­­­­­­');
             $ac = $allRequest['masv'];
             echo "$ac<br>";

             foreach ($msv as $kq ) {
                $ex=$kq->MaSv;
                $b = 2;
                 if ($ac == $ex) {
                    $b = 1;
                echo "<br>Sinh vien da ton tai!<br>";
                break;
                } 
             }
            $pattern = '/@gmail.com/';
            $pattern1 = '/@yahoo.com/';
            if (preg_match($pattern, $email) || preg_match($pattern1, $email)){
                if ($b ==1) {
                    echo "";
                    echo "them ko thanh cong! <br>";
                    echo "<a href='http://localhost:8080/MyLaravel/public/createsv'>Quay lai</a>";
                }else{
                     //$insertData = DB::table('sinhvien')->insert($dataInsertToDatabase);
                    $insertData = DB::table('sinhvien')->insert($dataInsertToDatabase);
                    $insertUser = DB::table('users')->insert($datausers);
                    echo "them thanh cong! <br>"; 
                    echo $ten; 
                    echo "<br><a href='http://localhost:8080/MyLaravel/public/listsv'>Quay lai trang sinh vien</a>";
                }
            }else{
                echo "email ko dung dinh dang!";
                echo "<a href='http://localhost:8080/MyLaravel/public/createsv'>Quay lai</a>";
            }
        //Thực hiện chuyển trang
        //return redirect('sinhvien/create');

        //     'KieuUser' => 'SV',
        //     'UserName' => $masv,
        //     'PassWord' => $masv,
        // );
          //    $msv = DB::select('select MaSv from sinhvien ­­­­­­­­');
          //    $ac = $allRequest['masv'];
          //    echo "$ac<br> ";
 
        

          // foreach ($msv as $kq ) {
          //    $ex=$kq->sinhvien_MaSv;

          //     if ($ac == $ex) {
          //        echo "<br>Sinh vien da ton tai!";
          //        echo "<a href='http://localhost/MyLaravel/public/createsv'>Quay lai</a>";
          //        return $bb;
          //    }else{

          //            $pattern = '/@gmail.com/';
          //        $pattern1 = '/@yahoo.com/';
          //           if (preg_match($pattern, $email) || preg_match($pattern1, $email)){

          //               //$insertData = DB::table('sinhvien')->insert($dataInsertToDatabase);
          //               //$insertUser = DB::table('users')->insert($datausers);
          //               echo "them thanh cong! <br>"; 
          //               echo $ten; 
          //               echo "<a href='http://localhost/MyLaravel/public/listsv'>Quay lai trang sinh vien</a>";
          //           }else{
          //            echo "email ko dung dinh dang!";
          //            echo "<a href='http://localhost/MyLaravel/public/createsv'>Quay lai</a>";
          //           }
          //    }
          // }
        // $result =DB::select('select MaSv,HoTen,NgaySinh,GioiTinh,QuocTich,SDT,CMND,Email,MaKhoa,MaK from sinhvien ');
        // MaSv,HoTen,NgaySinh,GioiTinh,SDT,CMND,Email,MaKhoa,MaK
        // Insert vào bảng tbl_hocsinh
        // Kiểm tra Insert để trả về một thông báo
        // if ($request->masv!=$result->MaSv) {
        //     Session::flash('success', 'Thêm mới học sinh thành công!');
        //     $insertData = DB::table('sinhvien')->insert($dataInsertToDatabase);
        // }else {                        
        //     Session::flash('error', 'Thêm thất bại!');
        // }
        
        // Thực hiện chuyển trang
        // return redirect('sinhvien/create');
    }
    public function edit(Request $request, $MaSv)
    {
        return view('sinhvien.sua');
    } 
    public function update(Request $request)
    {
        $new = $request->masv;
        $updateData = DB::table('sinhvien')->where('MaSv', $request->masv)->update([
            'MaSv' => $request->masv,
            'HoTen' => $request->hoten,
            'NgaySinh' => $request->ngaysinh,
            'GioiTinh' => $request->gioitinh,
            'QuocTich' => $request->quoctich,
            'SDT' => $request->sdt,
            'CMND' => $request->cmnd,
            'Email' => $request->email,
            'MaKhoa' => $request->Khoa,
            'MaK' => $request->K,
        ]);
        echo "update thành công!<br>";
        echo "<a href='http://localhost:8080/MyLaravel/public/listsv'>Xem danh sách sinh viên</a>";
        // return view('sinhvien.list');
    }
    public function destroy($MaSv)
    {
         
        

        $deleteData1 = DB::table('users')->where('MaSv','=', $MaSv)->delete();
        $deleteData2 = DB::table('vanbang')->where('MaSv','=', $MaSv)->delete();
        $deleteData3 = DB::table('num')->where('MaSv','=', $MaSv)->delete();
        $deleteData4 = DB::table('sinhvien')->where('MaSv','=', $MaSv)->delete();

        echo "xóa thành công!<br>";
        echo "<a href='http://localhost:8080/MyLaravel/public/listsv''>Xem danh sách sinh viên</a>";
        // return view('sinhvien.list');
        
    }


    //xulydiem /////////////////////////

    public function indexdiem($MaMon)
    {
        
        return view('monhoc.listdiem');
    }

   
   public function creatediem()
    {
        //Hiển thị trang thêm học sinh
        return view('monhoc.creatediem');
    }

    
    public function storediem(Request $request)
    {
        $allRequest  = $request->all();
        // var_dump($allRequest);
        $mamon = $allRequest['mamon'];
        $masv = $allRequest['masv'];
        $ky = $allRequest['ky'];
        $diemcc = $allRequest['diemcc'];
        $diemgk = $allRequest['diemgk'];
        $diemck = $allRequest['diemck'];
        
        if (is_numeric($diemcc)&&is_numeric($diemgk)&&is_numeric($diemck)) {
            $diemtb = $diemcc*0.1 +$diemgk*0.3+$diemck*0.6;
            if ($diemtb>=8.5 ) {
                $diemchu = 'A';
            }
            elseif ($diemtb>=7.8) {
                $diemchu = 'B+';
            }elseif ($diemtb>=7.0) {
                $diemchu = 'B';
            }elseif ($diemtb>=6.3) {
                $diemchu = 'C+';
            }elseif ($diemtb>=5.6) {
                $diemchu = 'C';
            }elseif ($diemtb>=4.8) {
                $diemchu = 'D+';
            }elseif ($diemtb>=4.0) {
                $diemchu = 'D';
            }else{
                $diemchu = 'F';
            }
          
            //Gán giá trị vào array
            $dataInsertToDatabase2 = array(
                'MaMon'  => $mamon,
                'MaSv' => $masv,
                'Ky' => $ky,
                'DiemCC' => $diemcc,
                'DiemGK' =>$diemgk,
                'DiemCK' => $diemck,
                'DiemTB' => $diemtb,
                'DiemChu' => $diemchu,
                
            );
            // var_dump($dataInsertToDatabase2);

        $msv2 = DB::select('select MaSv,MaMon from num ­­­­­­­­');
            $ac2 = $allRequest['masv'];
            $ac3 = $allRequest['mamon'];

             foreach ($msv2 as $kq2 ) {
                $ex2=$kq2->MaSv;$ex3=$kq2->MaMon;
                $c = 2;
                 if ($ac2 == $ex2 && $ac3 == $ex3) {
                    $c = 1;
                    echo "<br>Sinh viên này đã có điểm!<br>";
             
                    break;
                }     

             }
                    if ($c ==1) {
                        echo "";
                        echo "Thêm không thành công! <br>";
                        echo "<a href='http://localhost:8080/MyLaravel/public/creatediem'>Quay lai</a>";
                    }else{

                        $insertData = DB::table('num')->insert($dataInsertToDatabase2);
                       
                        echo "Thêm thành công! <br>"; 
                        echo $masv; 
                        echo "<br><a href='http://localhost:8080/MyLaravel/public/danhsachmh'>Quay lai trang môn học</a>";
                    }
        }else{
            echo "Bạn hãy kiểm tra lại! Điểm phải là số!";
        }

    }public function editdiem()
    {
        //Hiển thị trang thêm học sinh
        return view('monhoc.suadiem');
    }

    
    public function updatediem(Request $request)
    {
        $allRequest  = $request->all();
        // var_dump($allRequest);
        $mamon = $allRequest['mamon'];
        $masv = $allRequest['masv'];
        $ky = $allRequest['ky'];
        $diemcc = $allRequest['diemcc'];
        $diemgk = $allRequest['diemgk'];
        $diemck = $allRequest['diemck'];
        
        if (is_numeric($diemcc)&&is_numeric($diemgk)&&is_numeric($diemck)) {
            $diemtb = $diemcc*0.1 +$diemgk*0.3+$diemck*0.6;
            if ($diemtb>=8.5 ) {
                $diemchu = 'A';
            }
            elseif ($diemtb>=7.8) {
                $diemchu = 'B+';
            }elseif ($diemtb>=7.0) {
                $diemchu = 'B';
            }elseif ($diemtb>=6.3) {
                $diemchu = 'C+';
            }elseif ($diemtb>=5.6) {
                $diemchu = 'C';
            }elseif ($diemtb>=4.8) {
                $diemchu = 'D+';
            }elseif ($diemtb>=4.0) {
                $diemchu = 'D';
            }else{
                $diemchu = 'F';
            }
          
            //Gán giá trị vào array
            $dataInsertToDatabase2 = array(
                'MaMon'  => $mamon,
                'MaSv' => $masv,
                'Ky' => $ky,
                'DiemCC' => $diemcc,
                'DiemGK' =>$diemgk,
                'DiemCK' => $diemck,
                'DiemTB' => $diemtb,
                'DiemChu' => $diemchu,
                
            );
            //var_dump($dataInsertToDatabase2);
                        echo "Sửa thành công! <br>"; 
                        echo $masv; 
                        echo "<br><a href='http://localhost:8080/MyLaravel/public/danhsachmh'>Quay lai trang môn học</a>";
                    // }
        }else{
            echo "Bạn hãy kiểm tra lại! Điểm phải là số!";
        }
    }
    public function destroydiem($MaSv,$MaMon)
    {
         // echo $MaMon;
         // echo $MaSv;
        $deleteData3 = DB::table('num')->where([['MaSv','=', $MaSv ],['MaMon','=',$MaMon]])->delete();
        

        echo "Xóa thành công môn $MaMon với hs $MaSv!<br>";
        echo "<br><a href='http://localhost:8080/MyLaravel/public/danhsachmh'>Quay lại danh sách </a>";
        // return view('sinhvien.list');
    }


    //////////////////////////////////////////////monhoc: MaMon,TenMon, SoTinChi,SoTiet, KieuMonHoc, ky, MaKhoa

    public function indexmh()
    {
        
        return view('monhoc.danhsachmh');
    }

   public function createmh()
    {
        //Hiển thị trang thêm môn học
        return view('monhoc.themmh');
    }
    public function storemh(Request $request)
    {
        $allRequest  = $request->all();
        // var_dump($allRequest);
        $mamh = $allRequest['mamh'];
        $tenmh = $allRequest['tenmh'];
        $stc = $allRequest['stc'];
        $sotiet = $allRequest['sotiet'];
        $kieumh = $allRequest['type1'];
        if ($kieumh == 'Bắt buộc') {
            $batbuoc = 'x';
            $tuchon = '';
        }
        else{
            $batbuoc = '';
            $tuchon = 'x';
        }
        $ky = $allRequest['ky'];
        $khoa = $allRequest['Khoa'];
        //Gán giá trị vào array
        $dataInsertToDatabase1 = array(
            'MaMon'  => $mamh,
            'TenMon' => $tenmh,
            'SoTinChi' => $stc,
            'SoTiet' => $sotiet,
            'tuchon' =>$tuchon,
            'batbuoc' =>$batbuoc,
            'Ky' => $ky,
            'MaKhoa' => $khoa
            
        );
        $islichthi = array(
            'MaMon' => $mamh,
            'TenMon' => $tenmh,
            'SoTinChi' => $stc,
            'SoTiet' => $sotiet,
            'tuchon' => $tuchon,
            'batbuoc' => $batbuoc 
        );

 $mmh = DB::select('select MaMon,TenMon from monhoc ­­­­­­­­');
             $ac1 = $allRequest['mamh'];
             echo "$ac1<br>";

             foreach ($mmh as $kq1 ) {
                $ex1=$kq1->MaMon;
                $b1 = 2;
                 if ($ac1 == $ex1) {
                    $b1 = 1;
                echo "<br>Môn học đã tồn tại!<br>";
             
                break;
                }     

             }
            
                $pattern = '//';
            
                if (preg_match($pattern, $mamh) ){

                   
                    if ($b1 ==1) {
                        echo "";
                        echo "Thêm không thành công! <br>";
                        echo "<a href='http://localhost:8080/MyLaravel/public/themmh'>Quay lai</a>";
                    }else{
                         //$insertData = DB::table('sinhvien')->insert($dataInsertToDatabase);

                        $insertData1 = DB::table('monhoc')->insert($dataInsertToDatabase1);
                        $iinsert = DB::table('dangky')->insert($islichthi);
                        
                        echo "them thanh cong! <br>"; 
                        echo $tenmh; 
                        echo "<br><a href='http://localhost:8080/MyLaravel/public/danhsachmh'>Quay lai trang danh sach mh</a>";
                    }
                }else{
                    echo "Mã môn ko đúng định dạng!";
                    echo "<a href='http://localhost:8080/MyLaravel/public/themmh'>Quay lai</a>";
                }
    
            
        //Thực hiện chuyển trang
        //return redirect('sinhvien/create');

    }


    // public function editmh(Request $request)
    // {
         
        
    //     //Thực hiện câu lệnh update với các giá trị $request trả về
    //     // $updateData = DB::table('sinhvien')->where('MaSv', $request->id)->update([
    //     //   'MaSv' => $request->id,
    //     //     'HoTen' => $request->hoten,
    //     //     'NgaySinh' => $request->ngaysinh,
    //     //     'GioiTinh' => $request->gioitinh,
    //     //     'QuocTich' => $request->quoctich,
    //     //     'SDT' => $request->sdt,
    //     //     'CMND' => $request->cmnd,
    //     //     'Email' => $request->email,
    //     //     'MaKhoa' => $request->khoa,
    //     //     'MaK' => $request->k,
            
    //     // ]);
      
            
    //     return view('monhoc.sua');
        
    // } 
    // public function update(Request $request)
    // {
         

    //      $new = $request->masv;

    //     $updateData = DB::table('sinhvien')->where('MaSv', $request->masv)->update([
    //      'MaSv' => $request->masv,
    //         'HoTen' => $request->hoten,
    //         'NgaySinh' => $request->ngaysinh,
    //         'GioiTinh' => $request->gioitinh,
    //         'QuocTich' => $request->quoctich,
    //         'SDT' => $request->sdt,
    //         'CMND' => $request->cmnd,
    //         'Email' => $request->email,
    //         'MaKhoa' => $request->Khoa,
    //         'MaK' => $request->K,
            
    //     ]);
    //     echo "update thành công!<br>";
    //     echo "<a href='http://localhost/MyLaravel/public/danhsachmh'>Xem danh sách sinh viên</a>";
    //     // return view('sinhvien.list');
        
    // }
    public function destroymh($MaMon)
    {
         
        

       
      
        $deleteData = DB::table('lichthi')->where('MaMon','=', $MaMon)->delete();
        $deleteData1 = DB::table('dangky')->where('MaMon','=', $MaMon)->delete();
        $deleteData2 = DB::table('monhoc')->where('MaMon','=', $MaMon)->delete();

        echo "xóa thành công!<br>";
        echo "<a href='http://localhost:8080/MyLaravel/public/danhsachmh'>Xem danh sách môn học</a>";
        // return view('sinhvien.list');
        
    }

    //////////////////////////////////////////////lichthi(dangky):MaMon,GioThi,BuoiThi,NgayThi,PhongThi,SBD

    public function indexlichthi()
    {
        
        return view('lichthi.showmh');
    }
    public function showlichthi()
    {
        
        return view('lichthi.showlichthi');
    }

   public function createlichthi()
    {
        //Hiển thị trang thêm môn học
        return view('lichthi.themlichthi');
    }
    public function storelichthi(Request $request)
    {
        $allRequest  = $request->all();
        // var_dump($allRequest);
        $mamon = $allRequest['mamon'];
        $giothi = $allRequest['giothi'];
        $buoithi = $allRequest['buoithi'];
        $ngaythi = $allRequest['ngaythi'];
        $phongthi = $allRequest['phongthi'];
        //Gán giá trị vào array
        $dataInsertToDatabase5 = array(
            'MaMon'  => $mamon,
            'GioThi' => $giothi,
            'BuoiThi' => $buoithi,
            'NgayThi' => $ngaythi,
            'PhongThi' =>$phongthi,
       
        );

        $mmh5 = DB::select('select MaMon from lichthi ­­­­­­­­');
             $ac5 = $allRequest['mamon'];
             echo "$ac5<br>";

             foreach ($mmh5 as $kq5) {
                $ex5=$kq5->MaMon;
                $b5 = 2;
                 if ($ac5 == $ex5) {
                    $b5 = 1;
                echo "<br>Môn học đã có lịch thi!<br>";
             
                break;
                }     

             }
        
                   
                if ($b5 ==1) {
                    echo "";
                    echo "Thêm không thành công! <br>";
                    echo "<a href='http://localhost:8080/MyLaravel/public/lichthi'>Xem Lịch Thi</a>";
                }else{
                     //$insertData = DB::table('sinhvien')->insert($dataInsertToDatabase);
                    // var_dump($dataInsertToDatabase5);
                    $insertData5 = DB::table('lichthi')->insert($dataInsertToDatabase5);
                    
                    echo "them thanh cong! <br>"; 
                    echo $mamon; 
                    echo "<br><a href='http://localhost:8080/MyLaravel/public/lichthi'>Xem Lịch Thi</a>";
                }
               
    
            
        //Thực hiện chuyển trang
        //return redirect('sinhvien/create');

    }


    // public function editmh(Request $request)
    // {
         
        
    //     //Thực hiện câu lệnh update với các giá trị $request trả về
    //     // $updateData = DB::table('sinhvien')->where('MaSv', $request->id)->update([
    //     //   'MaSv' => $request->id,
    //     //     'HoTen' => $request->hoten,
    //     //     'NgaySinh' => $request->ngaysinh,
    //     //     'GioiTinh' => $request->gioitinh,
    //     //     'QuocTich' => $request->quoctich,
    //     //     'SDT' => $request->sdt,
    //     //     'CMND' => $request->cmnd,
    //     //     'Email' => $request->email,
    //     //     'MaKhoa' => $request->khoa,
    //     //     'MaK' => $request->k,
            
    //     // ]);
      
            
    //     return view('monhoc.sua');
        
    // } 
    // public function update(Request $request)
    // {
         

    //      $new = $request->masv;

    //     $updateData = DB::table('sinhvien')->where('MaSv', $request->masv)->update([
    //      'MaSv' => $request->masv,
    //         'HoTen' => $request->hoten,
    //         'NgaySinh' => $request->ngaysinh,
    //         'GioiTinh' => $request->gioitinh,
    //         'QuocTich' => $request->quoctich,
    //         'SDT' => $request->sdt,
    //         'CMND' => $request->cmnd,
    //         'Email' => $request->email,
    //         'MaKhoa' => $request->Khoa,
    //         'MaK' => $request->K,
            
    //     ]);
    //     echo "update thành công!<br>";
    //     echo "<a href='http://localhost/MyLaravel/public/danhsachmh'>Xem danh sách sinh viên</a>";
    //     // return view('sinhvien.list');
        
    // }
    public function destroylichthi($MaMon)
    {
         
        

       
      
        $deleteData = DB::table('monhoc')->where('MaMon','=', $MaMon)->delete();

        echo "xóa thành công!<br>";
        echo "<a href='http://localhost:8080/MyLaravel/public/danhsachmh'>Xem danh sách môn học</a>";
        // return view('sinhvien.list');
        
    }



 
}
