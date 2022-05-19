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
                        <h2 class="f-800" style="color: white;">Pengumuman</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page banner area end -->

    <!-- blog area start -->
    <section class="blog-details-area pb-20 pt-40">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main-wrapper" style="margin-right:0px !important">
                        <div class="content-wrapper" style="padding-left: 0px !important">
                            @foreach ($pengumuman as $pg)
                            <h2 style="color:#4c6b99; font-family:'Crimson Text','Times New Roman',Times,serif">{{ $pg->judul_konten }}</h2>

                            <div class="tanggal">
                                <span style="font-size: 15px; font-family:'Times New Roman', Times, serif">Diupload oleh <b>Admin</b></span>
                                <pg>
                                    <span class="dusty__gray-color f-500" style="font-size: 13px;">{{ $pg->created_at->format('d-M-Y') }}</span>
                            </div>
                            <hr>
                            <div class="col">
                                <img src="/storage/konten/{{ $pg->gambar }}" class="img-fluid rounded-start" alt="..." style=" margin:auto; display:block; clear:both ">
                            </div>
                            <div class="text">

                                <p class="mb-20 mt-10" style="text-align: justify;"><span><b style="color: black; font-size:20px;font-family:'Times New Roman', Times, serif ">Biro PBJ, Riau - </b></span>{!! $pg->isi_konten !!}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->
    
</x-main-layout>