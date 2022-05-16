<x-main-layout>
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
    <section class="blog-details-area pb-20 pt-40">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main-wrapper" style="margin-right:0px !important">
                        <div class="content-wrapper" style="padding-left: 0px !important">
                            @foreach ($artikel as $ar)
                            <h2 style="color:#4c6b99; font-family:'Crimson Text','Times New Roman',Times,serif">{{ $ar->judul_konten }}</h2>

                            <div class="tanggal">
                                <span style="font-size: 15px; font-family:'Times New Roman', Times, serif">Diupload oleh <b>Admin</b></span>
                                <br>
                                <span class="dusty__gray-color f-500" style="font-size: 13px;">{{ $ar->created_at->format('d-M-Y') }}</span>
                            </div>
                            <hr>
                            <div class="col">
                                <img src="/storage/konten/{{ $ar->gambar }}" class="img-fluid rounded-start" alt="..." style=" margin:auto; display:block; clear:both ">
                            </div>
                            <div class="text">

                                <p class="mb-20 mt-10" style="text-align: justify;"><span><b style="color: black; font-size:20px;font-family:'Times New Roman', Times, serif ">Biro PBJ, Riau - </b></span>{!! $ar->isi_konten !!}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->
    <!-- Brand -->
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="brand-active pt-4">
                        @foreach ($layanan as $ly )

                        <div class="single-brand">
                            <img src="/storage/pegawai/{{ $ly->gambar }}" alt="" style="width: 120px; height: 120px; padding: 0px !important">
                        </div>


                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->
</x-main-layout>