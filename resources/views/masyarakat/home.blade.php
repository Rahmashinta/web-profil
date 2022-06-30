<x-main-layout style="text-decoration: none !important">

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

    <!-- Main -->
    <main class="main--wrapper" style="text-decoration: none !important">

        <!-- hero  -->
        <section class="hero hero__area">
            <div class="hero__active slider-active">
                <div class="single__hero single-slider hero__bg pt-140 pb-120" data-background="img/konten/1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <div class="hero__caption">
                                    <span class="offer--title__hero white-color f-800" data-animation="fadeInDown" data-delay=".2s">Biro Pengadaan Barang dan Jasa</span>
                                    <h2 class="product--name__hero white-color f-200 mb-50" data-animation="fadeInUp" data-delay=".5s">Sekretariat Daerah Provinsi Riau</h2>
                                    <p class="product--price__hero white-color mb-20" data-animation="fadeInLeft" data-delay=".7s"><span class="f-300"></span><span class="price f-800"><sup></sup></span></p>
                                    <a href="#" class="btn orange-bg-btn f-700" data-animation="fadeInDown" data-delay=".9s"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single__hero single-slider hero__bg pt-140 pb-120 " data-background="img/konten/4.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <div class="hero__caption">
                                    <span class="offer--title__hero white-color f-800" data-animation="fadeInDown" data-delay=".2s">Biro Pengadaan Barang dan Jasa</span>
                                    <h2 class="product--name__hero white-color f-200 mb-50" data-animation="fadeInUp" data-delay=".5s">Sekretariat Daerah Provinsi Riau</h2>
                                    <p class="product--price__hero white-color mb-20" data-animation="fadeInLeft" data-delay=".7s"><span class="f-300"></span><span class="price f-800"><sup></sup></span></p>
                                    <a href="#" class="btn orange-bg-btn f-700" data-animation="fadeInDown" data-delay=".9s"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single__hero single-slider hero__bg pt-140 pb-120" data-background="img/konten/5.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <div class="hero__caption">
                                    <span class="offer--title__hero white-color f-800" data-animation="fadeInDown" data-delay=".2s">Biro Pengadaan Barang dan Jasa</span>
                                    <h2 class="product--name__hero white-color f-200 mb-50" data-animation="fadeInUp" data-delay=".5s">Sekretariat Daerah Provinsi Riau</h2>
                                    <p class="product--price__hero white-color mb-20" data-animation="fadeInLeft" data-delay=".7s"><span class="f-300"></span><span class="price f-800"><sup></sup></span></p>
                                    <a href="#" class="btn orange-bg-btn f-700" data-animation="fadeInDown" data-delay=".9s"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single__hero single-slider hero__bg pt-140 pb-120" data-background="img/konten/6.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <div class="hero__caption">
                                    <span class="offer--title__hero white-color f-800" data-animation="fadeInDown" data-delay=".2s">Biro Pengadaan Barang dan Jasa</span>
                                    <h2 class="product--name__hero white-color f-200 mb-50" data-animation="fadeInUp" data-delay=".5s">Sekretariat Daerah Provinsi Riau</h2>
                                    <p class="product--price__hero white-color mb-20" data-animation="fadeInLeft" data-delay=".7s"><span class="f-300"></span><span class="price f-800"><sup></sup></span></p>
                                    <a href="#" class="btn orange-bg-btn f-700" data-animation="fadeInDown" data-delay=".9s"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- hero end -->


        <!-- Product  -->
        <div class="product pt-20 fix">
            <div class="container">

                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-6">
                        <div class="product-section mb-20">
                            <h6 class="product--section__title f-800 white-color grenadier-bg">Berita</h6>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="all__product--link text-right mb-20">
                            <a class="all-link" href="{{ route('masyarakat.berita') }}">Lihat Selengkapnya ...<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="product__active owl-carousel mb-20">

                            @foreach ($berita as $br )

                            <div class="product__single">
                                <div class="product__box">
                                    <div class="product__thumb">
                                        <a href="{{ route('masyarakat.detailberita', $br->id) }}" class="img-wrapper">
                                            <img class="img" src="/storage/konten/{{ $br->gambar }}" alt="" style="height: 160px;">
                                        </a>
                                    </div>
                                    <div class="product__content--top">
                                        <span class="cate-name" style="text-transform:none !important">Di upload oleh <b>Admin</b> tanggal {{ $br->created_at->format('d-M-Y') }}</span>
                                        <h6 class="product__title mine__shaft-color f-700 mb-0">
                                            <a href="{{ route('masyarakat.detailberita', $br->id) }}">{!! substr($br->judul_konten, 0, 30); !!}</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>

                    <!-- what shop-max offer -->
                    <section class="offer  pt-20 pb-20">
                        <div class="row text-center mb-4 " style="background-color: #4c6b99;">
                            <h1 class="text-white">Foto</h1>
                        </div>
                        <div class="col">
                            <div class="all__product--link text-right">
                                <a class="all-link" href="{{ route('masyarakat.foto') }}">Lihat Selengkapnya ...<span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                @foreach ($foto as $ft)
                                <div class="col-xl-3 col-lg-6 text-center d-flex p-1" data-mdb-animation="slide-out-right">
                                    <img src="/storage/foto/{{ $ft->file }}" data-bs-toggle="modal" data-bs-target="#show{{ $ft->id }}" style="width: 250px; height:250px; margin:20px !important ">
                                    </img>
                                </div>

                                <!-- Modal Show -->
                                <div class="modal fade" id="show{{$ft->id}}" tabindex="-1" aria-hidden="true">

                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <img src="/storage/foto/{{ $ft->file }}" class="card-img-top" alt="...">

                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </section>
                    <!-- what shop-max offer end -->

                </div>
            </div>
        </div>
        <!-- Product end -->

        <!-- Product  -->
        <div class="product pt-20 fix">
            <div class="container">

                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-6">
                        <div class="product-section mb-30">
                            <h6 class="product--section__title f-800 white-color grenadier-bg">Artikel</h6>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="all__product--link text-right mb-30">
                            <a class="all-link" href="{{ route('masyarakat.artikel') }}">Lihat Selengkapnya ...<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="product__active owl-carousel mb-15">
                            @foreach ($artikel as $ar )

                            <div class="product__single">
                                <div class="product__box">
                                    <div class="product__thumb">
                                        <a href="{{ route('masyarakat.detailartikel', $ar->id) }}" class="img-wrapper">
                                            <img class="img" src="/storage/konten/{{ $ar->gambar }}" alt="" style="height: 160px;">
                                        </a>
                                    </div>
                                    <div class="product__content--top">
                                        <span class="cate-name" style="text-transform:none !important">Di upload oleh <b>Admin</b> tanggal {{ $ar->created_at->format('d-M-Y') }}</span>
                                        <h6 class="product__title mine__shaft-color f-700 mb-0">
                                            <a href="{{ route('masyarakat.detailartikel', $ar->id) }}">{!! substr($ar->judul_konten, 0, 30); !!}</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row text-center mb-4 " style="background-color: #4c6b99;">
                    <h1 class="text-white">Video</h1>
                </div>
                <div class="col">
                    <div class="all__product--link text-right mb-2">
                        <a class="all-link" href="{{ route('masyarakat.video') }}">Lihat Selengkapnya ...<span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>

                <div class="row">
                    @foreach ($video as $v)
                    <div class="col-lg-4 m-10">
                        <div class="col-sm-2">
                            <div class="about-single">
                                <iframe width="300" height="315" src="{{ $v->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                        </div>
                        <div class="about-text mt-2">
                            <h6 class="f-700 pt-2"><a href="https://www.youtube.com/embed/pFnJ97g-wSs" style="text-decoration: none !important">{{ $v->judul }}</a></h6>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Product end -->

        <!-- Product  -->
        <div class="product pt-20 fix">
            <div class="container">

                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-6">
                        <div class="product-section mb-30">
                            <h6 class="product--section__title f-800 white-color grenadier-bg">Pengumuman</h6>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="all__product--link text-right mb-30">
                            <a class="all-link" href="{{ route('masyarakat.pengumuman') }}">Lihat Selengkapnya ...<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="product__active owl-carousel mb-20">
                            @foreach ($pengumuman as $pg )

                            <div class="product__single">
                                <div class="product__box">
                                    <div class="product__thumb">
                                        <a href="{{ route('masyarakat.detailpengumuman', $pg->id) }}" class="img-wrapper">
                                            <img class="img" src="/storage/konten/{{ $pg->gambar }}" alt="" style="height: 160px;">
                                        </a>
                                    </div>
                                    <div class="product__content--top">
                                        <span class="cate-name" style="text-transform:none !important">Di upload oleh <b>Admin</b> tanggal {{ $pg->created_at->format('d-M-Y') }}</span>
                                        <h6 class="product__title mine__shaft-color f-700 mb-0">
                                            <a href="{{ route('masyarakat.detailpengumuman', $pg->id) }}">{!! substr($pg->judul_konten, 0, 30); !!}</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product end -->

    </main>
    <!-- Main End -->



</x-main-layout>