@extends('viewall')
@section('allview')
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
    </div>
@endsection