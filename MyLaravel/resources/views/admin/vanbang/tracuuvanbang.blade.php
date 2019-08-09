<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Campatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/01ad2f7f4c.js"></script>


</head>

<body>
    <div class="header">
        <div class="header-top">
            <div class="row">
                <div class="header-left col-md-8">
                    <a href="#">
                        <div class="logo">
                            <img src="img/logo.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="header-right col-md-4">
                    <p class="login"><a href="Login.html">Đăng nhập</a></p>
                </div>
            </div>
        </div>
        <!--End header-top-->

        <div class="header-bottom">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item li-first">
                            <a class="nav-link" href="#"><span><i class="fas fa-coffee"></i></span>&ensp;Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Chuongtrinhdaotao.html"><span><i class="fas fa-car"></i></span>&ensp;chương trình đào tạo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="TBLDKH.html"><span><i class="fas fa-car"></i></span>&ensp;lịch đăng kí học</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Tracuuvanbang.html"><span><i class="fas fa-car"></i></span>&ensp;tra cứu văn bằng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="huongdandangki.html"><span><i class="fas fa-car"></i></span>&ensp;hướng dẫn đăng ký</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span><i class="fas fa-car"></i></span>&ensp;diễn đàn</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--End header-bottom-->
        <div style="height: auto;" class="table-search">
            <h3>TRA CỨU VĂN BẰNG TỐT NGHIỆP</h3>
            <form action="tracuuvanbang" method="post" >
            @csrf
            <ul>
                <li style="display:flex;flex-direction:row;">
                    <span style="flex: 1">Bậc đào tạo: </span>
                    <select style="flex: 2" class="">
                            <option selected>Hệ đại học</option>
                            <option value="1">Hệ đại học </option>
                            <option value="2">Hệ cao đẳng</option>
                            <option value="3">Sau đại học</option>
                            <option value="3">Văn bằng 2</option>
                </select>
                </li>
                <li>
                    <span>Mã sinh viên:</span>
                    <input style="width: 150px;" type="text" name="MSV">
                </li>
                <li>
                    <span>Họ tên:</span>
                    <input style="width: 250px" type="text" name="NAME">
                </li>
                <li>
                    <span>Ngày sinh:</span>
                    <input type="text" name="NS">
                    <span style="text-align: left">(ngày/tháng/năm)</span>
                </li>
                <li>
                    <span>Số hiệu văn bằng:</span>
                    <input type="text" name="SHVB">
                </li>
                <li>
                    <span>Năm tốt nghiệp:</span>
                    <input type="text" name="NTN">
                </li>
                <li>
                    <span></span>
                    <input style="width: 89px" type="submit" name="btnSearch" value="Tìm kiếm" id="btnSearch" class="btn btn-success ">
                </li>
            </ul>
            </form>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-md-4 footer-left">
                    <img src="img/unisoft.PNG" alt="">
                </div>
                <div class="col-md-4 footer-center">
                    <p>Copyright ©2017 Trường Đại học Sư phạm Hà Nội Phần mềm Quản lý đào tạo UniSoft 6.0 phát triển bởi <a href="">Thiên An</a></p>
                </div>
                <div class="col-md-4 footer-right">
                    <p class="footer-p">Sinh viên Online: <span id="sv-online">1</span></p>
                    <p class="footer-p">Khách Online: <span id="k-online">1</span></p>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>