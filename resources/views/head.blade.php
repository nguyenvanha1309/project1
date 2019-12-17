<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/01ad2f7f4c.js"></script>
    <title>Kĩ năng sống cho trẻ</title>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script>
    <header>
        <nav id="menu" class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#">
                <img src="{{url('logo/logopoki2.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                      <span class="navbar-toggler-icon"></span>
                                                    </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('trangchu')}}">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>
                    @if(Session::has('name'))
                    <li class="nav-item">
                        <a class="nav-link" href="#">Khóa học</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('dangnhap')}}" id="click-error">Khóa học</a>
                    </li>
                     <script language="javascript">
                        var button = document.getElementById("click-error");
                         
                        // Thêm sự kiện cho đối tượng
                        button.onclick = function()
                        {
                          alert("Bạn cần phải đăng nhập");
                        };
                    </script>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tài liệu</a>
                    </li>
                    @if(Session::has('name'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('chudetest')}}">Test</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('dangnhap')}}" id="click-error1">Test</a>
                    </li>
                    <script language="javascript">
                        var button = document.getElementById("click-error1");
                         
                        // Thêm sự kiện cho đối tượng
                        button.onclick = function()
                        {
                          alert("Bạn cần phải đăng nhập");
                        };
                    </script>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0 justify-content-end">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button style="border: 1px solid #1387b4;" class="btn  my-1 my-sm-0" type="submit">Search</button>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @if(Session::has('name')) 
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            <i class="fas fa-bars"></i> 
                        </button>
                        <div id="canchinh_menu" class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <span class="nav-link">Chào bạn {{Session::get('tenhocvien')}}</span>
                             <a class="nav-link" href="{{url('thaydoithongtin')}}">Thay đổi thông tin</a>
                            <a class="nav-link" href="{{url('thaydoimatkhau')}}">Thay đổi mật khẩu</a>
                            <a class="nav-link" href="{{url('logout')}}">Đăng xuất</a>
                        </div>
                    </div>

                    <!-- <a class="nav-link" href="{{url('thaydoithongtin')}}">Thay đổi thông tin</a>
                    <a class="nav-link" href="{{url('thaydoimatkhau')}}">Thay đổi mật khẩu</a>
                    <a class="nav-link" href="#">Chào Bạn {{Session::get('tenhocvien')}}</a>
                    <a href="{{url('logout')}}"><button style="border: 1px solid #1387b4;" class="btn  my-3 my-sm-0" type="submit">Đăng Xuất</button></a> -->
                    @else
                    <a href="{{url('dangnhap')}}"><button style="border: 1px solid #1387b4;" class="btn  my-2 my-sm-0" type="submit">Đăng nhập</button></a>
                    <a href="{{url('dangki')}}"><button style="border: 1px solid #1387b4;" class="btn  my-3 my-sm-0" type="submit">Đăng kí</button></a>
                    @endif
                </div>
            </div>
        </nav>
</header>