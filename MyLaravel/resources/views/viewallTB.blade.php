@extends('viewall')
@section('allview')
    <div class="card" style="margin-bottom:10px">
        <div class="icon" style="background-color: white;border-bottom:none">
            <i class="fas fa-bell"></i> <b>THÔNG BÁO</b>
        </div>
        @foreach($thongbao as $value)
        <div class="list-group-item">
            <a href="{{url('loaitinTB',$value->id)}}">{{$value->tieude}}</a>
        </div>
        @endforeach
    </div>
@endsection