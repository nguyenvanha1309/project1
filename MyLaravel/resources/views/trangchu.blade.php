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
<<<<<<< HEAD
@include('admin.layout.header')
=======
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
                    <p class="login"><a href="log">Đăng nhập</a></p>
                </div>
            </div>
        </div>
        <!--End header-top-->
        <div class="header-bottom ">
            <nav class="navbar navbar-expand-lg navbar-light " style="padding:0">
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
>>>>>>> 73123e2108342dd366e2bee7b2cee3133fb832b9
    </div>
    <div class="container-fluid">
        <div class="row">
            <div style="padding:5px " class="col col-xs-12 col-md-6 col-lg-4">
                <div class="card" style="margin-bottom:10px">
                    <div class="icon" style="background-color: white;">
                        <i class="fas fa-user"></i> <b> ĐĂNG NHẬP</b>
                    </div>
                    <Form action="{{url('trangchu')}}" method="post" style="padding: 10px">
                        <div class="user">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" class="form-control" placeholder="Tên đăng nhập">
                        </div>
                        <div class="password">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input  type="checkbox" >Ghi nhớ mật khẩu
                            </label>
                        </div>
                        {!! csrf_field() !!}
                        <input type="submit"  value="Đăng nhập"  class="btn btn-success">
                        <a href="#">Bạn quên mật khẩu của mình?</a>
                    </Form>

                </div>
                <div class="card" style="margin-bottom:10px">
                    <div class="icon" style="background-color: white;border-bottom:none">
                        <i class="fas fa-calendar-alt"></i> <b>SỰ KIỆN</b>
                    </div>
                    <div class="list-group-item">
                        <div class="date">
                            <span class="field-content-day">26</span><br>
                            <span class="field-content-month">4/2019</span>
                        </div>
                        <a href="#">Xử lý trùng lịch thi</a>
                    </div>
                    <div class="list-group-item">
                        <div class="date">
                            <span class="field-content-day">23</span><br>
                            <span class="field-content-month">8/2019</span>
                        </div>
                        <a href="#">Một số thông tin về đào tạo chương trình 2</a>
                    </div>
                    <div class="list-group-item">
                        <div class="date">
                            <span class="field-content-day">10</span><br>
                            <span class="field-content-month">8/2018</span>
                        </div>
                        <a href="#">Trắc nghiệm phong cách của bạn</a>
                    </div>
                    <div class="list-group-item">
                        <div class="date">
                            <span class="field-content-day">25</span><br>
                            <span class="field-content-month">7/2018</span>
                        </div>
                        <a href="#">Quy chế đào tạo ĐH, CĐ hệ chính quy theo HTTC</a>
                    </div>
                    <div class="list-group-item">
                        <div class="date">
                            <span class="field-content-day">25</span><br>
                            <span class="field-content-month">4/2018</span>
                        </div>
                        <a href="#">Quy định Chuyển đổi điểm/miễn học, miễn thi NN, quy đổi NN tương đương</a>
                    </div>
                    <div class="list-group-item" align="right" style="display:block">
                        <a href="#">
                                  Xem tất cả </a>
                    </div>
                </div>
            </div>
            <div style="padding: 5px" class=" col-xs-12 col-md-6 col-lg-4">
                <div class="card" style="margin-bottom:10px">
                    <div class="icon" style="background-color: white; border-bottom:none">
                        <i class="fas fa-bars"></i> <b> TIN TỨC</b>
                    </div>
                    <div class="list-group-item ">
                        <div class="feature">
                            <img align="" src="img\cap-nhat-hoc-phi-hoc-lai-hoc-cai-thien-hk-1-nam-hoc-2018-2019-2019-1-17-9-53-653.jpg">
                            <div class="title">
                                <a class="title" href="#">Đối chiếu đăng ký tín chỉ - học phí học kỳ 3 năm học 2018-2019</a>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="date icon-news">
                            <img align="" src="img\danh-sach-sinh-vien-con-no-hp-hk2-2018-2019-2019-4-3-9-11-23.jpg">
                        </div>
                        <div>
                            <a href="#">Danh sách sinh viên còn nợ HP HK2 2018-2019</a>
                            <p>04/03/2019</p>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="date icon-news">
                            <img align="" src="img\doi-chieu-hoc-phi-hk1-nam-hoc-2018-2019-2019-3-12-16-51-60.jpg">
                        </div>
                        <div>
                            <a href="#">Đối chiếu học phí HK2 năm học 2018-2019</a><br>
                            <p>02/22/2019</p>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="date icon-news">
                            <img align="" src="img\tuyen-dung-giao-vien-va-cong-tac-vien-2019-2-22-15-47-763.jpg">
                        </div>
                        <div>
                            <a href="#">Tuyển dụng giáo viên và cộng tác viên</a>
                            <p>02/18/2019</p>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="date icon-news">
                            <img align="" src="img\thong-bao-doi-chieu-du-lieu-hoc-phi-hk2-nam-hoc-2018-2019-2019-2-18-9-24-426.jpg">
                        </div>
                        <div>
                            <a href="#">Thông báo đối chiếu dữ liệu học phí HK2 năm học 2018-2019</a>
                            <p>02/18/2019</p>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="date icon-news">
                            <img align="" src="img\cap-nhat-hoc-phi-hoc-lai-hoc-cai-thien-hk-1-nam-hoc-2018-2019-2019-1-17-9-53-653.jpg">
                        </div>
                        <div>
                            <a href="#">Cập nhật học phí học lại, học cải thiện HK 1 năm học 2018-2019</a>
                            <p>01/17/2019</p>
                        </div>
                    </div>
                    <div class="list-group-item" align="right" style="display:block">
                        <a href="#">
                                  Xem tất cả </a>
                    </div>
                </div>
            </div>
            <div style="padding: 5px" class=" col-xs-12 col-md-6 col-lg-4">
                <div class="card" style="margin-bottom:10px">
                    <div class="icon" style="background-color: white;border-bottom:none">
                        <i class="fas fa-bell"></i> <b>THÔNG BÁO</b>
                    </div>
                    <div class="list-group-item">
                        <a href="#">Mức thu và thời gian thu học phí học kỳ 3 năm học 2018-2019 </a>
                    </div>
                    <div class="list-group-item set-size">
                        <a href="#">Mức thu học phí các bậc đào tạo hệ chính quy năm học 2019-2020</a>
                    </div>
                    <div class="list-group-item set-size">
                        <a href="#">Hủy lớp tín chỉ kỳ HK3 năm học 2018 - 2019</a>
                    </div>
                    <div class="list-group-item set-size">
                        <a href="#">Kết quả phúc khảo các môn chung HK2 năm học 2018-2019</a>
                    </div>
                    <div class="list-group-item set-size">
                        <a href="#">Thời gian phúc khảo các môn chung HK2 năm học 2018-2019</a>
                    </div>
                    <div class="list-group-item set-size">
                        <a href="#">ĐĂNG KÝ TÍN CHỈ HỌC KỲ III Năm học (2018 - 2019)</a>
                    </div>
                    <div class="list-group-item set-size">
                        <a href="#">Danh sách sinh viên không đủ điều kiện thi HK2 2018-2019 do nợ học phí</a>
                    </div>
                    <div class="list-group-item set-size">
                        <a href="#">Lịch thi các môn chung HK2 2018-2019</a>
                    </div>
                    <div class="list-group-item set-size">
                        <a href="#">Lịch thi Quản lý Hành chính Nhà nước và Quản lý ngành GD&ĐT</a>
                    </div>
                    <div class="list-group-item set-size">
                        <a href="#">Lịch thi đánh giá năng lực Tiếng Anh ngày 20-4-2019</a>
                    </div>
                    <div class="list-group-item set-size">
                        <a href="#">Lịch học QLHCNN & QL ngành GD&ĐT</a>
                    </div>
                    <div class="list-group-item set-size">
                        <a href="#">THÔNG BÁO THU HỌC PHÍ BỔ SUNG HK2 NĂM HỌC 2018-2019</a>
                    </div>
                    <div class="list-group-item set-size">
                        <a href="#">Cập nhật học phí học ngoại ngữ 1,2 cho sinh viên học CT2</a>
                    </div>
                    <div class="list-group-item set-size">
                        <a href="#">Kết quả phúc khảo các môn chung HK1 năm học 2018-2019</a>
                    </div>
                    <div class="list-group-item" align="right" style="display:block">
                        <a href="#">
                                  Xem tất cả </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('admin.layout.footer')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>