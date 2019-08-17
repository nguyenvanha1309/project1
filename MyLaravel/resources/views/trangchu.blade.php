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
   <?php 
    $tintuc=DB::select('select tieude, date, anh, id from tintuc');
   ?>
    @include('admin.layout.header')
    </div>
    <div class="container-fluid">
        <div class="row">
            <div style="padding:5px " class="col col-xs-12 col-md-6 col-lg-4">
                <div class="card" style="margin-bottom:10px">
                    <div class="icon" style="background-color: white;">
                        <i class="fas fa-user"></i> <b> ĐĂNG NHẬP</b>
                    </div>
                    <Form action="{{url('trgchu')}}" method="post" style="padding: 10px">
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
                        @foreach($sukien as $value)
                        <div class="list-group-item">
                            <div class="date">
                                <!-- <span class="field-content-day">26</span><br>
                                <span class="field-content-month">4/2019</span> -->
                                {{$value ->date}}
                            </div>
                            <a href="#">{{$value ->tieude}}</a>
                        </div>
                        @endforeach
                        <div class="list-group-item" align="right" style="display:block">
                            <a href="viewallSK">
                                    Xem tất cả </a>
                        </div>
                    </div>
            </div>
            <div style="padding: 5px" class=" col-xs-12 col-md-6 col-lg-4">
                <div class="card" style="margin-bottom:10px">
                    <div class="icon" style="background-color: white; border-bottom:none">
                        <i class="fas fa-bars"></i> <b> TIN TỨC</b>
                    </div>
                    <!-- <div class="list-group-item ">
                        <div class="feature">
                            <img align="" src="img\cap-nhat-hoc-phi-hoc-lai-hoc-cai-thien-hk-1-nam-hoc-2018-2019-2019-1-17-9-53-653.jpg">
                            <div class="title">
                                <a class="title" href="#">Đối chiếu đăng ký tín chỉ - học phí học kỳ 3 năm học 2018-2019</a>
                            </div>
                        </div>
                    </div> -->
                    @foreach($tintuc as $value)
                    <div class="list-group-item">
                        <div class="date icon-news">
                            <img align="" src="img\{{$value->anh}}">
                        </div>
                        <div>
                            <a href="#">{{$value ->tieude}}</a>
                            <p>{{$value ->date}}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="list-group-item" align="right" style="display:block">
                        <a href="viewallTT">
                                  Xem tất cả </a>
                    </div>
                </div>
            </div>
            <div style="padding: 5px" class=" col-xs-12 col-md-6 col-lg-4">
                <div class="card" style="margin-bottom:10px">
                    <div class="icon" style="background-color: white;border-bottom:none">
                        <i class="fas fa-bell"></i> <b>THÔNG BÁO</b>
                    </div>
                    @foreach($thongbao as $value)
                    <div class="list-group-item">
                        <a href="#">{{$value->tieude}}</a>
                    </div>
                    @endforeach
                    <div class="list-group-item" align="right" style="display:block">
                        <a href="viewallTB">
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