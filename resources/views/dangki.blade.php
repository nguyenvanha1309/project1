@extends('head')

    </header>
    <div class="dangki dangnhap" style="height: 50px;background-color: #f2f2f2;padding-left:50px ;">
        <ul style="line-height: 50px;">
            <li ><a href="{{url('trangchu')}}"><i class="fas fa-folder-open"></i> Trang chủ</a><span style="margin-left:10px">>> Đăng kí</span></li>
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
            <form id="register_form" action="{{url('dangki')}}" method="post">
                <div class="form-group">
                   <label class="control-label">Họ và tên:</label>
                   <input type="text" class="form-control"name="fullname" placeholder="Họ và tên" required></i>
                </div>
                <div class="form-group">
                	<label class="control-label">Số điện thoại:</label>
                    <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" required></i>
                </div>
                <div class="form-group">
                    <label class="control-label">Giới tính:</label>
                    Nam <input type="radio" name="gender" value="Nam" checked>
                    Nữ <input type="radio" name="gender" value="Nữ">
                </div>
                <div class="form-group">
                	<label class="control-label">Tài khoản:</label>
                    <input type="text" class="form-control"  name="taikhoan" placeholder="Tài khoản" required></i>
                </div>
                <div class="form-group">
                	<label class="control-label">Mật khẩu:</label>
                    <input type="password" class="form-control"  name="matkhau" placeholder="Mật khẩu" required></i>
                </div>
                <div class="form-group">
                	<label class="control-label">Nhập lại mật khẩu:</label>
                    <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Nhập lại mật khẩu" required></i>
                </div>
                {!! csrf_field() !!}
        			<button type="submit" class="btn btn-primary">Đăng kí</button>
            </form>
        </div>
    </div>
    </br>
    
@extends('foot')