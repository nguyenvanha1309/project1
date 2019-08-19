<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Campatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ttcn.css')}}">

</head>

<body>
   
    <div class="header">
        <div class="header-top">
            <div class="row">
                <div class="header-left col-md-8 col-sm-6">
                    <a href="#">
                        <div class="logo">
                            <img src="img/logo.png" alt="">
                        </div>

                    </a>
                </div>
                 <div class="header-right col-md-4">
                    <p class="login"><a href="{{url('log')}}">Đăng xuất</a></p>
                </div>
            </div>
        </div>
        <!--End header-top-->

        <div class="header-bottom">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><span><i class="fas fa-car"></i></span>&ensp;diễn đàn</a>
                </li>
            </ul>
        </div>
        <!--End header-bottom-->
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 ct-left ">
                <div class="avatar">
                    <Form action="" method="post" style="padding: 10px">
                    <p class="name" style="color: whitesmoke">
                 </Form>
                </div>
                <div class="under-avt">
                    <div class="btn-group-vertical">
                        <a href="{{('listsv')}}"><button type="button" class="btn btn-primary accc"><span><i class="fas fa-coffee"></i></span>&ensp;Quản Lý Sinh Viên</button></a>
                         <a href="{{('danhsachmh')}}"><button type="button" class="btn btn-primary accc"><span><i class="fas fa-car"></i></span>&ensp;Quản Lý Môn Học -Điểm</button></a>
                        <a href="{{('monhoclichthi')}}"><button type="button" class="btn btn-primary accc"><span><i class="fas fa-car"></i></span>&ensp;
                        Quản Lý Lịch Thi</button></a>

                    </div>
                </div>
            </div>
            <div class="col col-xs-12 col-sm-6 col-md-10 col-lg-10 ct-right" style="background:white">
        </div>
    </div>
    @yield('nd')
    

    <div class="footer">
        <div class="row">
            <div class="col-md-4 footer-left">
                <img src="img/unisoft.PNG" alt="">
            </div>
            <div class="col-md-4 footer-center">
                <p>Copyright ©2017 Trường Đại học Sư phạm Hà Nội Phần mềm Quản lý đào tạo UniSoft 6.0 phát triển bởi <a href="">Thiên An</a></p>
            </div>
        </div>
    </div>
   
</body>

</html>