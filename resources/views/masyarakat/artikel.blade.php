<x-main-layout>

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

    <!-- page banner area start -->
    <section class="page-banner-area blog-page" style="background-color: #4c6b99">
        <div class="container" style="padding: 0px !important">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner-text text-center pt-20 pb-20">
                        <h2 class="f-800" style="color: white;">Artikel</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page banner area end -->

    <!-- blog area start -->
    <section class="blog-area-three blog-page pb-20 pt-30">
        <div class="container">
            <div class="row small-padding">

                @foreach ($artikel as $ar)
                <div class="col-sm-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 " style="margin: auto; padding-left:20px">
                                <img src="/storage/konten/{{ $ar->gambar }}" class="img-fluid rounded-start" alt="..." pt-20>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="tanggal">
                                        <span class="dusty__gray-color f-500 pt-15" style="font-size: 13px;">{{ $ar->created_at->format('d-M-Y') }}</span>
                                    </div>
                                    <span class="blog-title"><a href="{{ route('masyarakat.detailartikel', $ar->id) }}" class="cod__blue-color f-700">{!! substr($ar->judul_konten, 0, 50); !!}</a></span>
                                    <p class="f-400">{!! substr($ar->isi_konten, 0, 100); !!} ...</p>
                                    <a href="{{ route('masyarakat.detailartikel', $ar->id) }}" class="f-600 grenadier-color">Read More <i class="icofont-long-arrow-right grenadier-color"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- blog area end -->
</x-main-layout>