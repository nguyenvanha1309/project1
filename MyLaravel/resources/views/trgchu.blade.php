<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Campatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="ttcn.css">

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
                    <p class="login"><a href="#">Đăng nhập</a></p>
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
                    <a class="nav-link" href="#"><span><i class="fas fa-car"></i></span>&ensp;lịch đăng kí học</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span><i class="fas fa-car"></i></span>&ensp;tra cứu văn bằng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span><i class="fas fa-car"></i></span>&ensp;hướng dẫn đăng ký</a>
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

            <?php 
    $result =DB::select('select MaMon,TenMon,SoTinChi,SoTiet,KieuMonHoc,MaKhoa from monhoc ');
     $result1 =DB::select('select MaKhoa from sinhvien ');
     ?>
     </div>
     <br>
    <a href="http://localhost/MyLaravel/public/createsv" class="btn btn-outline-success" style="margin-left: 110px; ">Chương Trình Đào Tạo</a>
    <br>
    <br>
    <table class="table table-bordered">
    <thead>

      <tr>
        <th>Mã Môn</th>
        <th>Tên Môn</th>
        <th>Số Tín</th>
        <th>Số Tiết</th>
        <th>Kiểu Môn học</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($result as $kq1 ):{
                $dx=$kq1->MaKhoa;
                if ($postname[2]!= $dx){
                    continue;
                }
            } ?>
                 <tr>
        <td>{{$kq1->MaMon}}</td>
        <td>{{$kq1->TenMon}}</td>
        <td>{{$kq1->SoTinChi}}</td>
        <td>{{$kq1->SoTiet}}</td>
        <td>{{$kq1->KieuMonHoc}}</td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>


                </div>
            </div>
        </div>
    </div>
    <!--End container-->


</div>
     <br>
    <a href="http://localhost/MyLaravel/public/createsv" class="btn btn-outline-success" style="margin-left: 110px; ">Đăng Kí Học</a>
    <br>
    <br>
    <table class="table table-bordered">
    <thead>

      <tr>
        <th>Mã Môn</th>
        <th>Tên Môn</th>
        <th>Số Tín</th>
        <th>Kiểu Môn học</th>
        <th>Đăng Kí Học</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($result as $kq1 ):?>
                 <tr>
        <td>{{$kq1->MaMon}}</td>
        <td>{{$kq1->TenMon}}</td>
        <td>{{$kq1->SoTinChi}}</td>
        <td>{{$kq1->KieuMonHoc}}</td>
       <td><input type="checkbox" name="chonmon" value=“yes"></td>  
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>


                </div>
            </div>
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
            <div class="col-md-4 footer-right">
                <p class="footer-p">Sinh viên Online: <span id="sv-online">1</span></p>
                <p class="footer-p">Khách Online: <span id="k-online">1</span></p>
            </div>
        </div>
    </div>
   
</body>

</html>