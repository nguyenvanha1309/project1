@extends('viewall')
@section('allview')
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
                <a href="{{url('loaitinTT',$value->id)}}">{{$value ->tieude}}</a>
                <p>{{$value ->date}}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection