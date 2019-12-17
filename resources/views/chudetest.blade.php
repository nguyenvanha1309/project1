@extends('head')
    <div class="test dangnhap" style="height: 50px;background-color: #f2f2f2;padding-left:50px ;">
        <ul style="line-height: 50px;">
            <li><a href=""><i class="fas fa-folder-open"></i> Trang chủ</a><span style="margin-left:10px">>> Test</span></li>
        </ul>
    </div>
    <div class="main-test">
        <div style="text-align: center;"><img src="img/txt-kynangsong.png"></div>
        <div class="test-title">SỐNG TỐT HƠN KHI CÓ KĨ NĂNG SỐNG</div>
        <div class="test-title-img">
            <ul class="main-ul">
                <li class="li-one">
                    <span>Có kĩ năng sẽ giúp mình rất nhiều trong cuộc sống. Mỗi tuổi mình lại cần nhiều những kĩ năng khác nhau</span>
                </li>
                <li class="giaovien li-two">
                    <img src="img/giaovien.png ">
                </li>
                <li class="li-three">
                    <span>Nếu bạn phân vân không biết mình cần những gì để trở nên mạnh hơn, thì hãy cũng POKI luyện tập kĩ năng phù hợp với độ tuổi của mình nhé
                    </span>
                </li>
            </ul>
        </div>
        <div class="test-title-img">
            <ul class="main-ul-2">

                @foreach($chude as $cd)
                                  <?php $dem=0; ?>
                 <li>
                     <span>{{$cd->tenChuDe}}</span>
                     
                        @foreach($baihoc as $bh)
                        @if($cd->maCD==$bh->maCD)
                            <a href=""><p>{{$bh->tenBH}}</p></a>
                            <?php 
                            $dem=$dem+1; 
                            if ($dem==5) { 
                                break;
                            }
                             ?>
                        @endif
                        @endforeach
                    <div style="text-align: right;float:right;"><img src="img/lop1.png" alt=""></div>
                </li>
                 @endforeach

            </ul>
        </div>
        <br>
              <br>
    </div>



@extends('foot')