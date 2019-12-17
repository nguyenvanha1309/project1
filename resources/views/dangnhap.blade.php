
@extends('head')

   <div class="dangnhap" style="height: 50px;background-color: #f2f2f2;padding-left:50px ;">
        <ul style="line-height: 50px;">
            <li><a href="{{url('trangchu')}}"><i class="fas fa-folder-open"></i> Trang chủ</a><span style="margin-left:10px">>> Đăng nhập</span></li>
        </ul>
    </div>
    </br>
    <div class="frm-dn">
        <form method="post" action="{{url('trangchu')}}">
            <div class="form-group">
                @if(Session::has('flag'))
                    <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                @endif
                    <label for="exampleInputEmail1">Tài khoản</label>
                    <input type="username" name="username" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập Tài Khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mật khẩu</label>
                <input type="password" name="password"  value="" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
            </div>
            <div class="form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lưu đăng nhập</label>
            </div>
                {!! csrf_field() !!}
                </br>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
    </div>
    </br>
@extends('foot')