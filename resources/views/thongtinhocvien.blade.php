@extends('head')
<?php

 $user = DB::table('user')->where('username','=',Session::get('name'))->value('user_id');  
 $user1 = DB::table('hocvien')->get();  ?>
 
    <div class="dangki dangnhap" style="height: 50px;background-color: #f2f2f2;padding-left:50px ;">
        <ul style="line-height: 50px;">
            <li ><a href="{{url('trangchu')}}"><i class="fas fa-folder-open"></i> Trang chủ</a><span style="margin-left:10px">>> Thay đổi tông tin cá nhân</span></li>
        </ul>
    </div>
    </br>
<div class="frm-dn">
        <div class="dk_news">
           
	        <h2>Đăng ký tài khoản mới</h2>
	        @foreach($errors->all() as $message)
	        	<div class="alert alert-danger">{{$message}}</div>
	        @endforeach

	        @if(Session::has('flag'))
	        	<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
	      	@endif
	      	<?php 
	       			foreach ($user1 as $kq1 ):
	                $dx=$kq1->user_id;
	                if ($user != $dx){
                	continue;
                }?>
            <form id="register_form" action="{{url('thaydoithongtin')}}" method="post">
                <div class="form-group">
                   <input type="hidden" class="form-control" name="mahocvien" value="{{$a=$kq1->maHV}}" readonly></i>
                </div>	
                <div class="form-group">
                   <label class="control-label">Họ và tên:</label>
                   <input type="text" class="form-control" name="fullname" value="{{$kq1->tenHV}}"  required></i>
                </div>
                <div class="form-group">
                	<label class="control-label">Ngày Sinh:</label>
                    <input type="date" class="form-control" value="{{$kq1->ngaySinh}}" name="ngaysinh" required></i>
                </div>
                <?php $a=$kq1->gioiTinh ?>
                 	 @if($a=="Nam")
                	<div class="form-group">
                		<label class="control-label">Giới tính:</label>
    				Nam <input type="radio" name="gender" value="{{$kq1->gioiTinh}}" checked>
    				Nữ <input type="radio" name="gender" value="Nữ">
    				</div>
    				 @else($a=="Nữ")
    				 <div class="form-group">
    				 <label class="control-label">Giới tính:</label>
    				Nam <input type="radio" name="gender" value="Nam">
    				Nữ <input type="radio" name="gender" value="{{$kq1->gioiTinh}}" checked>
    				</div>
    				@endif
                </div>
                <div class="form-group">
                	<label class="control-label">Địa chỉ:</label>
                    <input type="text" class="form-control" value="{{$kq1->diaChi}}" name="diachi"required></i>
                </div>
                <div class="form-group">
                	<label class="control-label">Số điện thoai:</label>
                    <input type="text" class="form-control" value="{{$b=$kq1->SDT}}" name="phone" required></i>
                </div>
                <div class="form-group">
                	<label class="control-label" value="">Email:</label>
                    <input type="text" class="form-control" value="{{$kq1->email}}"  name="email" required>
                </div>
                 
                {!! csrf_field() !!}
        			<button type="submit" class="btn btn-primary" id="btn-them">Sửa thông tin</button>
            </form>
             <?php endforeach ?> 
        </div>
    </div>
    </br>
@extends('foot')