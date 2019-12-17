@extends('head')
<div id="fb-root" class="dangnhap"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script>

<body>
    <div class="test" style="height: 50px;background-color: #e9ecef;padding-left:50px ;width: 100%;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-folder-open"></i>Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
            </ol>
        </nav>
    </div>
    <div class="color-text">
        <h2>Tin tức</h2>
    </div>

    <div class="row" style="margin:10px 50px">
        <div class="col-sm-12 col-md-6 col-lg-3">
            <a href="#">
                <div class="card">
                    <img class="set" src="https://i.pinimg.com/originals/bd/3a/e6/bd3ae6631ba8ad26802a9284886a4fa6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Tiêu Đề 7</p>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <a href="#">
                <div class="card">
                    <img class="set" src="https://zicxa.com/hinh-anh/wp-content/uploads/2019/10/T%E1%BB%95ng-h%E1%BB%A3p-h%C3%ACnh-%E1%BA%A3nh-g%C3%A1i-xinh-%C4%91eo-m%E1%BA%AFt-k%C3%ADnh-c%E1%BB%B1c-cute-10.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Tiêu Đề 8</p>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <a href="">
                <div class="card">
                    <img class="set" src="http://vietup.net/files/23521b29c1f2f6a2e8c2ca1907dd17cd/49e2f54c6a0b2633f9aa11e42c87e4cd/H%C3%ACnh-%E1%BA%A3nh-g%C3%A1i-xinh-m%E1%BB%99c-m%E1%BA%A1c-khi%E1%BA%BFn-d%C3%A2n-m%E1%BA%A1ng-chao-%C4%91%E1%BA%A3o-con-tim-16.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Tiêu Đề 2</p>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <a href="">
                <div class="card">
                    <img class="set" src="https://thuthuatnhanh.com/wp-content/uploads/2019/07/anh-girl-xinh-facebook.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Tiêu Đề 6</p>
                    </div>
                </div>
            </a>

        </div>
    </div>
</body>

@extends('foot')