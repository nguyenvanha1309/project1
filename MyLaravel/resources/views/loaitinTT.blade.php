@extends('viewall')
@section('allview')
    <div class="container-fluid">
        @foreach($loaitinTT as $value)
        <div class="card" style="margin-bottom:10px">
            <div class="icon" style="background-color: white;border-bottom:none">
                <i class="fas fa-calendar-alt"></i> <b>{{$value ->tieude}}</b>
            </div>
            <div class="list-group-item">
                {{$value->noidung}}
            </div>
        </div>
        @endforeach
    </div>
@endsection