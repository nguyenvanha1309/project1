@extends('head')
    <div class="dangki dangnhap" style="height: 50px;background-color: #f2f2f2;padding-left:50px ;">
        <ul style="line-height: 50px;">
            <li ><a href="{{url('trangchu')}}"><i class="fas fa-folder-open"></i> Trang chủ</a><span style="margin-left:10px">>> Thay đổi mật khẩu</span></li>
        </ul>
    </div>
    </br>
<div class="frm-dn">
        <div class="dk_news">
           
	        <h2>Thay đổi mật khẩu</h2>
	        @foreach($errors->all() as $message)
	        	<div class="alert alert-danger">{{$message}}</div>
	        @endforeach

	        @if(Session::has('flag'))
	        	<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
	      	@endif
            <form id="register_form" action="{{url('thaydoimatkhau')}}" method="post">
                 <div class="form-group">
                   <input type="hidden" class="form-control" value="{{Session::get('name')}}" name="user" required></i>
                </div>  
                <div class="form-group">
                   <label class="control-label">mật khẩu cũ:</label>
                   <input type="text" class="form-control" value="{{Session::get('pass')}}" name="password" required></i>
                </div>	
                <div class="form-group">
                   <label class="control-label">Mật khẩu mới:</label>
                   <input type="password" class="form-control" name="passnew" required></i>
                </div>
                <div class="form-group">
                	<label class="control-label">Xác nhận mật khẩu:</label>
                    <input type="password" class="form-control" name="xacnhan" required></i>
                </div>
                {!! csrf_field() !!}
        			<button type="submit" class="btn btn-primary">Thay đổi mật khẩu</button>
            </form>
        </div>
    </div>
    </br>
@extends('foot')