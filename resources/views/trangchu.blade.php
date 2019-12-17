@extends('head')
<div id="carouselExampleIndicators" class="carousel slide dangnhap" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{url('slide_bar\1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('slide_bar\1.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('slide_bar\1.jpg')}}" alt="Third slide">
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
<div class="video" style="background-image: url('background/bg_video.jpg')">
        <div class="content">
            <!-- Sửa thành 2 hàng thêm 1 video mới khi click >> -->
            <h1>Bài tham khảo</h1>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a href="#">
                        <div class="card">
                            <img class="set" src=" <?php echo($anhvd[0]);?>"  alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"><?php echo($motavd[0]);?></p>
                            </div> 
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="set" src="<?php echo($anhvd[1]);?>"  alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><?php echo($motavd[1]);?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="set" src="<?php echo($anhvd[2]);?>"  alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><?php echo($motavd[2]);?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="set" src="<?php echo($anhvd[3]);?>"  alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><?php echo($motavd[3]);?></p>
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
                        <img class="set" src="<?php echo($anhtintuc[0]);?>" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><?php echo($motatintuc[0]);?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="set" src="<?php echo($anhtintuc[1]);?>" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><?php echo($motatintuc[1]);?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="set" src="<?php echo($anhtintuc[2]);?>" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><?php echo($motatintuc[2]);?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="set" src="<?php echo($anhtintuc[3]);?>" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><?php echo($motatintuc[3]);?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>
@extends('foot')