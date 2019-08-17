<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Campatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            </div>
        </div>
        <!--End header-top-->

        <div class="header-bottom">
            <ul class="nav">
                <li class="nav-item">

                    <a class="nav-link" href="#"><span><i class="fas fa-coffee"></i></span>&ensp;Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span><i class="fas fa-car"></i></span>&ensp;chương trình đào tạo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span><i class="fas fa-car"></i></span>&ensp;hướng dẫn đăng ký</a>
                </li>
            </ul>
        </div>
        <!--End header-bottom-->
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col col-xs-12 col-sm-6 col-md-2 col-lg-2  ct-left ">
                <div class="avatar">
                    <img src="img/avt.jpg" width="80px" height="auto" alt="">
                    <p></p>
                    <Form action="" method="post" style="padding: 10px">
                    <p class="name" style="color: whitesmoke">
                <?php  
                 $sv=DB::select('select MaSv,HoTen,MaKhoa from sinhvien ');
                  foreach ($sv as $kq1 ){
                    $dx=$kq1->MaSv;
                    if ($postname == $dx){
                    $fx=$kq1->HoTen;
                    break;}}
                ?>  
                   <?php
                    echo "$fx<br>";
                    echo "$postname";
                     ?>
                 </Form>
                </div>
                <div class="under-avt">
                    <div class="btn-group-vertical">
                        <a href="{{url('thongtinsinhvien',$postname)}}"><button type="button" class="btn btn-primary accc"><span><i class="fas fa-coffee"></i></span>&ensp; Sơ yếu lý lịch</button></a>
                         <a href="{{url('chuongtrinhdaotao',$postname)}}"><button type="button" class="btn btn-primary accc"><span><i class="fas fa-car"></i></span>&ensp;chương trình đào tạo</button></a>
                        <a href="{{url('dangki',$postname)}}"><button type="button" class="btn btn-primary accc"><span><i class="fas fa-car"></i></span>&ensp;Đăng kí học</button></a>
                        <button type="button" class="btn btn-primary accc"><span><i class="fas fa-car"></i></span>&ensp;xem lịch học</button>
                        <button type="button" class="btn btn-primary accc"><span><i class="fas fa-coffee"></i></span>&ensp;xem lịch thi</button>
                        <a href="{{url('diemhoctap',$postname)}}"><button type="button" class="btn btn-primary accc"><span><i class="fas fa-car"></i></span>&ensp;xem điểm học tập</button></a>

                    </div>
                </div>
            </div>
            <div class="col col-xs-12 col-sm-6 col-md-10 col-lg-10  ct-right" style="backgourd-color:white">
            @yield('noidung')         
            </div>
        </div>

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