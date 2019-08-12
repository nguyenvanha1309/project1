<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Campatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/ttcn.css">

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
                <div class="header-right col-md-4 col-sm-6">
                    <p class="login"><a href="log">Đăng xuất</a></p>
                </div>
            </div>
        </div>
        <!--End header-top-->

        <div class="header-bottom">
            <ul class="nav">
                <li class="nav-item">

                    <a class="nav-link" href="trangchu"><span><i class="fas fa-coffee"></i></span>&ensp;Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="huongdandangki"><span><i class="fas fa-car"></i></span>&ensp;hướng dẫn đăng ký</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span><i class="fas fa-car"></i></span>&ensp;diễn đàn</a>
                </li>
            </ul>
        </div>
        <!--End header-bottom-->
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 ct-left ">
                <div class="avatar">
                    <img src="img/avt.jpg" width="80px" height="auto" alt="">
                    <p></p>
                    <Form action="{{url('trgchu')}}" method="post" style="padding: 10px">
                    <p class="name">
                        @foreach($postname as $value){{$value}}<br>
                        @endforeach
                               
                    <p class="id"></p>
                    {!! csrf_field() !!}

                 </Form>
                </div>
                <div class="under-avt">
                    <div class="btn-group-vertical">
                        <button type="button" class="btn btn-primary accc"><span><i class="fas fa-coffee"></i></span>&ensp;sơ yếu lý lịch</button>
                        <button type="button" class="btn btn-primary accc"><span><i class="fas fa-car"></i></span>&ensp;chương trình đào tạo</button>
                        <button type="button" class="btn btn-primary accc"><span><i class="fas fa-car"></i></span>&ensp;cảnh báo học vụ</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle accc" data-toggle="dropdown"><span><i class="fas fa-coffee" data-toggle="dropdown"></i></span>&ensp;đăng ký học 
						    </button>
                        </div>
                        <button type="button" class="btn btn-primary  list-item"><span><i class="fas fa-car"></i></span>&ensp;Đăng ký lớp học tín chỉ</button>
                        <button type="button" class="btn btn-primary list-item"><span><i class="fas fa-car"></i></span>&ensp;Đăng ký học lại & cải thiện điểm</button>
                        <button type="button" class="btn btn-primary list-item"><span><i class="fas fa-car"></i></span>&ensp;Đăng ký học lại & cải thiện</button>
                        <button type="button" class="btn btn-primary list-item"><span><i class="fas fa-car"></i></span>&ensp;Lớp học phần đã đăng ký</button>
                        <button type="button" class="btn btn-primary list-item"><span><i class="fas fa-car"></i></span>&ensp;Đăng ký học ngành 2</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle accc" data-toggle="dropdown"><span><i class="fas fa-coffee" data-toggle="dropdown"></i></span>&ensp;
						       thanh toán học phí
						    </button>

                        </div>
                        <button type="button" class="btn btn-primary list-item"><span><i class="fas fa-coffee"></i></span>&ensp;Thanh toán Online</button>
                        <button type="button" class="btn btn-primary list-item"><span><i class="fas fa-car"></i></span>&ensp;Lịch sử giao dịch</button>
                        <button type="button" class="btn btn-primary accc"><span><i class="fas fa-coffee"></i></span>&ensp;xem học phí</button>
                        <button type="button" class="btn btn-primary accc"><span><i class="fas fa-car"></i></span>&ensp;xem lịch học</button>
                        <button type="button" class="btn btn-primary accc"><span><i class="fas fa-coffee"></i></span>&ensp;xem lịch thi</button>
                        <button type="button" class="btn btn-primary accc"><span><i class="fas fa-car"></i></span>&ensp;xem điểm học tập</button>
                        <button type="button" class="btn btn-primary accc"><span><i class="fas fa-car"></i></span>&ensp;xem xem điểm rèn luyện</button>
                        <button type="button" class="btn btn-primary accc"><span><i class="fas fa-coffee"></i></span>&ensp;đánh giá giảng viên</button>
                        <button type="button" class="btn btn-primary accc"><span><i class="fas fa-car"></i></span>&ensp;gửi ý kiến</button>
                        <button type="button" class="btn btn-primary accc"><span><i class="fas fa-car"></i></span>&ensp;sửa tt cá nhân</button>

                    </div>
                </div>
            </div>




            <div class="col-md-10 ct-right">
                <div class="list-tittle">
                    <div class="btn-group .dropdown-menu">
                        <button onclick="myFunction()" type="button" class="btn btn-primary dropdown-toggle abccc" data-toggle="dropdown"><span><i class="fas fa-car"></i></span>&ensp;Thông tin cá nhân </button>

                        <button onclick="myFunction1()" type="button" class="btn btn-primary dropdown-toggle abccc" data-toggle="dropdown"><span><i class="fas fa-car"></i></span>&ensp;Kết quả học tập</button>

                    </div>
                </div>
                <div class="more-list">
                    <div id="myDIV">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="form-group">
                                            <label for="usr">Mã sinh viên:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-group">
                                            <label for="usr">Họ và tên:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-group">
                                            <label for="usr">Ngày sinh:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-group">
                                            <label for="usr">Giới tính:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group">
                                            <label for="usr">Nơi sinh:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group">
                                            <label for="usr">Quê quán:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="usr">Quốc tịch:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="usr">Dân tộc:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group">
                                            <label for="usr">Tôn giáo:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group">
                                            <label for="usr">TP xuất thân:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="usr">Ngày vào đoàn:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="usr">Ngày vào Đảng:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group">
                                            <label for="usr">Nơi thường trú:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group">
                                            <label for="usr">ĐT di động:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="usr">Email:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="usr">Số CMTND/CCCD:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end mydiv-->

                    <div id="myDIV1" style="display: none;">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="form-group">
                                            <label for="usr">Xếp loại học tập:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-group">
                                            <label for="usr">Xếp loại hạnh kiểm:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-group">
                                            <label for="usr">Xếp loại tốt nghiệp:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-group">
                                            <label for="usr">Năm tốt nghiệp:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group">
                                            <label for="usr">Điểm thưởng:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>
                                    <td colspan="3">
                                        <div class="form-group">
                                            <label for="usr">Lý do thưởng:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <th colspan="4" scope="row">
                                        <div class="form-group">
                                            <label for="usr">Khen thưởng, kỷ luật:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>

                                </tr>
                                <tr>
                                    <th colspan="4" scope="row">
                                        <div class="form-group">
                                            <label for="usr">Thông tin quá trình học tập, lao động:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </th>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End container-->


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
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            var y = document.getElementById("myDIV1");
            var z = document.getElementById("myDIV2");
            var t = document.getElementById("myDIV3");
            var f = document.getElementById("myDIV4");
            if (x.style.display === "none") {
                x.style.display = "block";
                y.style.display = "none";
                z.style.display = "none";
                t.style.display = "none";
                f.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

        function myFunction1() {
            var x = document.getElementById("myDIV");
            var y = document.getElementById("myDIV1");
            var z = document.getElementById("myDIV2");
            var t = document.getElementById("myDIV3");
            var f = document.getElementById("myDIV4");
            if (y.style.display === "none") {
                y.style.display = "block";
                x.style.display = "none";
                z.style.display = "none";
                t.style.display = "none";
                f.style.display = "none";
            } else {
                y.style.display = "block";
            }
        }
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</body>

</html>