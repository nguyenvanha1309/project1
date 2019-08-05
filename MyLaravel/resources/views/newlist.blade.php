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

@include('admin.layout.header')
<div class="container">
                    <div class="list-group">
                        <div class="list-group-item info">Danh sách tin tức</div>
                        <div class="card">
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
                  </div>
                </div>
              </div>
        @include('admin.layout.footer')