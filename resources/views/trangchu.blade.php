<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
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
                        <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Khóa học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tài liệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Test</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
           <!--      <form class="form-inline my-2 my-lg-0 justify-content-end" method="post"> -->
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button style="border: 1px solid #1387b4;" class="btn  my-1 my-sm-0" type="submit">Search</button>
                   
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @if(Session::has('name')) 
                    <a class="nav-link" href="#">Chào Bạn {{Session::get('name')}}</a>
                    <a href="{{url('logout')}}"><button style="border: 1px solid #1387b4;" class="btn  my-3 my-sm-0" type="submit">Đăng Xuất</button></a>
                    @else
                    <a href="{{url('dangnhap')}}"><button style="border: 1px solid #1387b4;" class="btn  my-2 my-sm-0" type="submit">Đăng nhập</button></a>
                    <button style="border: 1px solid #1387b4;" class="btn  my-3 my-sm-0" type="submit">Đăng kí</button>
                    @endif
                <!-- </form> -->
            </div>
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{url('slide_bar/1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('slide_bar/2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('slide_bar/3.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <div class="inf-web">
        <div class="content">
            <h1 style="color:#1387b4">Về chúng tôi</h1>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="card">
                        <img class="card-img-top" src="{{url('img/gioithieu.jpg')}}" alt="Card image cap">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="card" style="background-color:#f2f2f2;border: none;text-align: justify">
                        <div>
                            <p class="card-text">Lacinia hendrerit nunc! Vero. Duis donec? Ex excepturi! Id hendrerit necessitatibus cumque, at. Justo nostrud nostrum, natoque reiciendis, quo neque vehicula, sit occaecati magnis. Corporis tenetur? Sagittis proident nonummy
                                turpis sit interdum, porro, sociosqu fringilla, harum, ducimus laborum quibusdam sociosqu, adipiscing beatae. Autem rem blanditiis! Interdum quos facere? Deleniti ab semper? Diamlorem, ornare risus atque similique cumque,
                                maecenas rhoncus felis hac bibendum quasi, tortor justo distinctio harum, rerum netus occaecat?</p>
                            <a href="#" class="btn btn-primary">Xem thêm >></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="video">
        <div class="content">
            <h1>Bài tham khảo</h1>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                
                        
                        <iframe width="289px" height=auto src="https://www.youtube.com/embed/XtsuosHlriM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div> 
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                         
                         <iframe width="289px" height=auto src="https://www.youtube.com/embed/z3qOnZIqRVs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

   
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                         <iframe width="289px" height=auto src="https://www.youtube.com/embed/lUrmyU1cnxU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                         <iframe width="289px" height=auto src="https://www.youtube.com/embed/XtsuosHlriM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="content">
            <h1 style="color:#1387b4 ;">Tin tức</h1>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{url('img/new.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{url('img/new.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{url('img/new.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{url('img/new.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{url('img/new.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{url('img/new.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{url('img/new.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{url('img/new.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>
    <footer>
        <div class="footer_content news">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="{{url('logo/logopoki2.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <ul>
                                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                    <li>
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fab fa-google"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <h2>Về chúng tôi</h2>
                            <div class="reset card-body">
                                <ul>
                                    <li><i class="fas fa-map-marker"></i><span> Phòng 807 tòa HH2 Bắc Hà - Nhân Chính - Thanh Xuân - Hà Nội</span></li>
                                    <li><i class="fas fa-phone-alt"></i><span> 0397093636</span></li>
                                    <li><i class="fas fa-envelope"></i><span> Thuongphv2312@gmail.com</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <h2>Tin mới nhất</h2>
                            <div class="tinmoi card-body">
                                <li><a href="">Những dấu hiệu nhận biết kẻ bắt cóc trẻ em</a></li>
                                <li>
                                    <a href="">Phòng tránh nguy cơ bị bắt cóc</a>
                                </li>
                                <li>
                                    <a href="">Cuộc phưu lưu của muỗi vằn</a>
                                </li>
                                <li>
                                    <a href="">Làm gì khi trẻ bị lạc</a>
                                </li>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="facebook card">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCacKyNangSong%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500"
                                style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>