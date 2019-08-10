<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\model_sinhvien;


use Illuminate\Support\Facades\Auth;

class giaovuController extends Controller
{
    
	//MaSv,HoTen,NgaySinh,GioiTinh,SDT,CMND,Email,MaKhoa,MaK

    public function index()
    {
        //Lấy danh sách sinh viên từ database
 		
        //Gọi đến file list.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên listhocsinh = $getData
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
            // 'MaKhoa' => $khoa,
            // 'MaK' => $k,
            
        );
        $datausers = array(
        	'KieuUser' => 'SV',
        	'UserName' => $masv,
        	'PassWord' => $masv,
        );
        	 $msv = DB::select('select MaSv from sinhvien ­­­­­­­­');
        	 $ac = $allRequest['masv'];
        	 echo "$ac<br> ";
 
        
        	 if (Auth::attempt([$kq => $ac]))
        	         {

        	            echo "đúng";
        	         } else {
        	             echo "sai";
        	         
        	         }


     //    	 foreach ($msv as $kq ) {
     //    	 	$ex=$kq->MaSv;

     //    	 	 if ($ac == $ex) {
     //    	  	 	echo "<br>Sinh vien da ton tai!";
     //    	  	 	echo "<a href='http://localhost/MyLaravel/public/createsv'>Quay lai</a>";
     //    	  	 	return $bb;
     //    	 	}else{

	    //     			$pattern = '/@gmail.com/';
		   //      	$pattern1 = '/@yahoo.com/';
					// if (preg_match($pattern, $email) || preg_match($pattern1, $email)){

					//     //$insertData = DB::table('sinhvien')->insert($dataInsertToDatabase);
					//     //$insertUser = DB::table('users')->insert($datausers);
					//     echo "them thanh cong! <br>"; 
					//     echo $ten; 
					//     echo "<a href='http://localhost/MyLaravel/public/listsv'>Quay lai trang sinh vien</a>";
					// }else{
					// 	echo "email ko dung dinh dang!";
					// 	echo "<a href='http://localhost/MyLaravel/public/createsv'>Quay lai</a>";
					// }
     //    	 	}
     //    	 }
        	
        	
        
        //$result =DB::select('select MaSv,HoTen,NgaySinh,GioiTinh,QuocTich,SDT,CMND,Email,MaKhoa,MaK from sinhvien ');
        // MaSv,HoTen,NgaySinh,GioiTinh,SDT,CMND,Email,MaKhoa,MaK
        // Insert vào bảng tbl_hocsinh
        // Kiểm tra Insert để trả về một thông báo
        // if ($request->masv!=$result->MaSv) {
        //     Session::flash('success', 'Thêm mới học sinh thành công!');
        //     $insertData = DB::table('sinhvien')->insert($dataInsertToDatabase);
        // }else {                        
        //     Session::flash('error', 'Thêm thất bại!');
        // }
        
        //Thực hiện chuyển trang
        //return redirect('sinhvien/create');

    }

   
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //Lấy dữ liệu từ Database với các trường được lấy và với điều kiện id = $id
        
        
        //Gọi đến file edit.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên getHocSinhById = $getData
        return view('sinhvien.edit')->with('getSinhVienById');
    }

  
    public function update(Request $request)
    {
        //Cap nhat sua sinhvien
        //Set timezone
        date_default_timezone_set("Asia/Ha_Noi");  
     
        //Thực hiện câu lệnh update với các giá trị $request trả về
        $updateData = DB::table('tbl_hocsinh')->where('id', $request->id)->update([
            'tenhocsinh' => $request->tenhocsinh,
            'sodienthoai' => $request->sodienthoai,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        
        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Sửa học sinh thành công!');
        }else {                        
            Session::flash('error', 'Sửa thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('hocsinh');
    }


    public function destroy($id)
    {
        //Xoa hoc sinh
        //Thực hiện câu lệnh xóa với giá trị id = $id trả về
        $deleteData = DB::table('tbl_hocsinh')->where('id', '=', $id)->delete();
        
        //Kiểm tra lệnh delete để trả về một thông báo
        if ($deleteData) {
            Session::flash('success', 'Xóa học sinh thành công!');
        }else {                        
            Session::flash('error', 'Xóa thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('hocsinh');
    }
}
