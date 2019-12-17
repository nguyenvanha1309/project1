<footer>
        <div class="footer_content news">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="{{url('logo/logopoki2.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <ul>
                                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                    <li>
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fab fa-google"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <h2>Về chúng tôi</h2>
                            <div class="reset card-body">
                                <ul>
                                    <li><i class="fas fa-map-marker"></i><span> Phòng 807 tòa HH2 Bắc Hà - Nhân Chính - Thanh Xuân - Hà Nội</span></li>
                                    <li><i class="fas fa-phone-alt"></i><span> 0397093636</span></li>
                                    <li><i class="fas fa-envelope"></i><span> Thuongphv2312@gmail.com</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="fb col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <h2>Tin mới nhất</h2>
                            <div class="tinmoi card-body">
                                <li><a href="">Những dấu hiệu nhận biết kẻ bắt cóc trẻ em</a></li>
                                <li>
                                    <a href="">Phòng tránh nguy cơ bị bắt cóc</a>
                                </li>
                                <li>
                                    <a href="">Cuộc phưu lưu của muỗi vằn</a>
                                </li>
                                <li>
                                    <a href="">Làm gì khi trẻ bị lạc</a>
                                </li>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="fb-page" data-href="https://www.facebook.com/CacKyNangSong/" data-tabs="" data-width="" data-height="250px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/CacKyNangSong/" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/CacKyNangSong/">Kỹ Năng Sống</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>