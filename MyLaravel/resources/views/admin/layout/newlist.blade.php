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
<div class="row">
                 <div class="container">
                    <div class="list-group">
                        <div class="list-group-item info">Danh sách tin tức</div>
                        <div class="list-group-item">
                            <div class="list-group-item">
  <article class="clearfix m_bottom_15 m_xs_bottom_20">
    <div class="views-field views-field-created">
      <span class="field-content-day">23</span>
      <span class="field-content-month">8/2018</span>
    </div>
    <a href="/forum/newscontent.aspx?id=329">Một số thông tin về đào tạo chương trình 2</a>
  </article>
</div>
<div class="list-group-item">
  <article class="clearfix m_bottom_15 m_xs_bottom_20">
    <div class="views-field views-field-created">
      <span class="field-content-day">10</span>
      <span class="field-content-month">8/2018</span>
    </div>
    <a href="/forum/newscontent.aspx?id=325">Trắc nghiệm phong cách học của bạn</a>
  </article>
</div>
<div class="list-group-item">
  <article class="clearfix m_bottom_15 m_xs_bottom_20">
    <div class="views-field views-field-created">
      <span class="field-content-day">25</span>
      <span class="field-content-month">7/2018</span>
    </div>
    <a href="/forum/newscontent.aspx?id=322">Quy chế đào tạo ĐH, CĐ hệ chính quy theo HTTC</a>
  </article>
</div>
<div class="list-group-item">
  <article class="clearfix m_bottom_15 m_xs_bottom_20">
    <div class="views-field views-field-created">
      <span class="field-content-day">25</span>
      <span class="field-content-month">4/2017</span>
    </div>
    <a href="/forum/newscontent.aspx?id=260">Quy định Chuyển đổi điểm/miễn học, miễn thi NN, quy đổi NN tương đương</a>
  </article>
</div>
                            
                        </div>
                    </div>
             </div>
            <div>
                
<div class="pageFooter">
    <div class="row">
        <div class="col-md-2" style="vertical-align:middle">
            <a href="http://thienan.vn" style="border-style:none;"><img src="/images/logo_thienan.jpg" border="0"></a>
        </div>
        <div class="col-md-8">
            <div class="col-xs-12 hidden visible-md visible-lg visible-xl">
                Copyright ©2017 Trường Đại học Sư phạm Hà Nội<br>
                Phần mềm Quản lý đào tạo UniSoft 6.0 phát triển bởi <a href="http://thienan.vn" style=" border-style:none">Thiên An</a> 
            </div>
        </div>
         <div class="col-md-2">
             <div class="col-xs-12 hidden visible-md visible-lg visible-xl">
                 Sinh viên Online: 5<br>
                Khách Online: 6
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
        @include('admin.layout.footer')