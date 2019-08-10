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
    <style>
        th{border-right:1px solid #c0cad6}
        td{
            text-align: center;
            border:1px solid #91a7b4 !important;}
        tbody{
            border: 1px solid #16387c !important
        }
    </style>
</head>

<body>
@include('admin.layout.header')
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
                    <a href="">
                    <input style="width: 89px" type="submit" name="btnSearch" value="Tìm kiếm" id="btnSearch" class="btn btn-success ">
                    </a>
                </li>
            </ul>
            </form>
        </div>
    <div class="container">
        


        <table class="table">
            
            <tbody style="border:1px solid #91a7b4">
                <tr style="font-size:14px;background-color:#91a7b4;color:#16387c">
                    <th>Mã Sinh viên</th>
                
                    <th>Họ Và Tên</th>
                
                    <th>Ngày sinh</th>
                
                    <th>Giới tính</th>
                
                    <th>Loại tốt nghiệp</th>
                
                    <th>Năm tốt nghiệp</th>
                </tr>
                @foreach ($masinhvien as $value)
                <tr >
                    <td >{{$value->vanbang_MaSv}} </td>
                    <td>{{$value->HoTen}} </td>
                    <td>{{$value->NgaySinh}} </td>
                    <td>{{$value->GioiTinh}} </td>
                    <td>{{$value->NamTotNghiep}} </td>
                    <td>{{$value->TypeTotNghiep}} </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
    @include('admin.layout.footer')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>