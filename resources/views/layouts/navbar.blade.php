<div class="container">
    <!-- Main box -->
    <div class="main-box">
        <!--Nav Outer -->
        <div class="nav-outer">

            <div class="logo-box">
                @if(Request::is('/'))
                <div class="logo"><a href="/"><img src="{{ asset('images/logo-didamelid-1.png') }}" alt="" title=""></a>
                </div>
                @else
                <div class="logo"><a href="job"><img src="{{ asset('images/logo-didamelid-2.png') }}" alt=""
                            title=""></a>
                </div>
                @endif
            </div>
            <nav class="nav main-menu">
                <ul class="navigation" id="navbar">
                    <li class="">
                        <a href="/">Beranda</a>
                    </li>
                    <li class="">
                        <a href="/job">Lowongan Pekerjaan</a>
                    </li>


                    <!-- Only for Mobile View -->
                    <li class="mm-add-listing">


                        <a href="https://wa.me/6282118418130" target="_blank" class="theme-btn btn-style-one">Kirim
                            Pekerjaan</a>

                        <span>
                            <span class="contact-info">
                                <span class="phone-num"><span>Hubungi Kami</span><a href="tel:085157163559">0851 5716
                                        3559</a></span>
                                <span class="address">Jl. Asrama Nyantong No. 9B, Kahuripan, Tawang, <br>Kota
                                    Tasikmalaya, Jawa Barat 46115
                                </span>
                            </span>
                            <span class="social-links">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                                <a href="#"><span class="fab fa-linkedin-in"></span></a>
                            </span>
                        </span>
                    </li>
                </ul>
            </nav>
            <!-- Main Menu End-->
        </div>

        <div class="outer-box">

            <div class="btn-box">
                @if (Request::is('/'))

                <a href="https://wa.me/6282118418130" target="_blank" class="theme-btn btn-style-five">Kirim
                    Pekerjaan</a>
                @else
                <a href="https://wa.me/6282118418130" target="_blank" class="heme-btn btn-style-three call-modal">Kirim
                    Pekerjaan</a>

                @endif
            </div>
        </div>
    </div>
</div>
<!-- Sticky Header  -->
<div class="sticky-header">
    <div class="auto-container">

        <div class="main-box">
            <div class="logo-box">
                <div class="sticky-logo"><a href="index.html"><img src="images/logo.svg" alt="" title=""></a></div>
            </div>

            <!--Keep This Empty / Menu will come through Javascript-->
        </div>
    </div>
</div>
<!-- End Sticky Menu -->


<!-- Mobile Header -->
<div class="mobile-header">
    <div class="logo"><a href="/"><img src="images/logo-didamelid-2.png" alt="" title=""></a></div>

    <!--Nav Box-->
    <div class="nav-outer clearfix">

        <div class="outer-box">

            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
        </div>
    </div>
</div>

<!-- Mobile Nav -->
<div id="nav-mobile"></div>