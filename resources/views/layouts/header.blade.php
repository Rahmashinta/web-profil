<header class="header">
    <div class="middle header__middle bg--header__middle pt-10 pb-10" style="background-color: 	#4c6b99 !important">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content--header__middle d-flex align-items-center ">
                        <div class="logo--header__middle">
                            <div class="logo">
                                <a class="logo__link" href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="" style="width: 50px;"></a>
                            </div>
                        </div>
                        <div class="search--header__middle h1search--header__middle">
                            <p style="font-size: 35px; text-align:center; color:white; padding-left:250px; padding-right:30px; margin-bottom:0px; ">Biro Pengadaan Barang dan Jasa</p>
                        </div>
                        <p class="nama" style="font-size: 15px; color:#000000; padding-left:150px; margin-bottom:0px !important">Login</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom header__bottom header__bottom--border custom-header-bottom">
        <div class="container">
            <div class="row">
                <div>
                    <div class="main-menu ">
                        @include('layouts.navbarmobile')
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>