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
    <!-- <section class="page-banner-area blog-page" data-background="img/bg/tes2.jpg"> -->
    <section class="page-banner-area blog-page" style="background-color: #4c6b99">
        <div class="container" style="padding: 0px !important">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner-text text-center pt-10 pb-10">
                        <h2 class="f-800" style="color: white;">Sejarah</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page banner area end -->

    <section class="shop-details-desc m-4" style="padding: 10px 10px 10px 10px !important">
        <div class="col-sm-12">
            <div class="desc-wrapper">
                <!-- Shop-details tab start -->
                <section class="shop-details-desc" style="padding: 0px !important">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="col-sm-12">
                                <div class="desc-wrapper">
                                    <div class="tab-content" id="myTabContent1">
                                        <div class="tab-pane fade show active" id="profile11" role="tabpanel" aria-labelledby="profile-tab11">
                                            <div class="desc-content mt-20">
                                                <div class="row">

                                                    <div class="col-md-12 d-flex justify-content-center">
                                                        <div class="about-single mb-10">
                                                            <div class="about-img mb-20">
                                                                <img src="img/konten/6.jpg" class="img-fluid" alt="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="single-content mb-20 p-3" style="text-align: justify">
                                                            <h6> &nbsp; &nbsp; &nbsp;Pembentukan Biro Pengadaan Barang dan Jasa Sekretariat Daerah Provinsi Riau berdasarkan Peraturan Gubernur Riau Nomor 61 Tahun 2021 tentang kedudukan, susunan organisasi dan tata kerja perangkat daerah di lingkungan pemerintah provinsi Riau. Terkait Peraturan Daerah Provinsi Riau Nomor 3 Tahun 2020 tentang Perubahan Kedua Atas Peraturan Daerah Nomor 4 tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Provinsi Riau (Lembaran Daerah Provinsi Riau Tahun 2020 Nomor 7), maka ditetapkan Peraturan Gubernur tentang Kedudukan, Susunan Organisasi dan Tata Kerja Perangkat Daerah di Lingkungan Pemerintah Provinsi Riau
                                                            </h6>
                                                            <h6> &nbsp; &nbsp; &nbsp;Pada pasal 21 Peraturan Gubernur Riau Nomor 61 Tahun 2021, Biro Pengadaan Barang dan Jasa bertugas membantu Asisten Perekonomian dan Pembangunan dalam penyiapan perumusan kebijakan daerah, pengoordinasian pelaksanaan tugas Perangkat Daerah, pengoordinasian pelaksanaan tugas Perangkat Daerah di bidang pengelolaan pengadaan barang dan jasa, pengelolaan layanan pengadaan secara elektronik, pembinaan dan advokasi pengadaan barang dan jasa.
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mt-20">
                            <div class="common-sidebar shop-banner-sidebar shop-right-sidebar bg-white">

                                <div class="common-cat">
                                    <div class="side-title">
                                        <h6>Berita</h6>
                                    </div>

                                    @foreach ($berita as $br )
                                    <div class="row">
                                        <div class="col-md-3" style="padding: 0px;">
                                            <img src="/storage/konten/{{ $br->gambar }}" class="img-fluid pt-2 " alt="..." style="width: 60px; height:60px">
                                        </div>
                                        <div class="col-md-9" style="padding: 5px;">
                                            <a href="{{ route('masyarakat.detailberita', $br->id) }}" class="d-flex cod__blue-color f-700" style="font-size: 12px; text-align:left !important">{!! substr($br->judul_konten, 0, 30); !!}</a>
                                            <p class="dusty__gray-color f-500" style="font-size: 10px; margin:0px; text-align:left !important">{{ $br->created_at->format('d-M-Y') }}</p>
                                        </div>
                                    </div>

                                    @endforeach

                                    <a href="{{ route('masyarakat.berita') }}" class="d-flex justify-content-end cod__blue-color f-700" style="font-size: 13px !important">Selengkapnya ...</a>
                                    <hr>

                                </div>

                                <div class="common-cat">
                                    <div class="side-title">
                                        <h6>Artikel</h6>
                                    </div>

                                    @foreach ($artikel as $ar )
                                    <div class="row">
                                        <div class="col-md-3" style="padding: 0px;">
                                            <img src="/storage/konten/{{ $ar->gambar }}" class="img-fluid pt-2" alt="..." style="width: 60px; height:60px">
                                        </div>
                                        <div class="col-md-9" style="padding: 5px;">
                                            <a href="{{ route('masyarakat.detailartikel', $ar->id) }}" class="d-flex cod__blue-color f-700" style="font-size: 13px; text-align:left !important">{!! substr($ar->judul_konten, 0, 30); !!}</a>
                                            <p class="dusty__gray-color f-500" style="font-size: 11px; text-align:left">{{ $ar->created_at->format('d-M-Y') }}</p>
                                        </div>
                                    </div>

                                    @endforeach

                                    <a href="{{ route('masyarakat.artikel') }}" class="d-flex justify-content-end cod__blue-color f-700" style="font-size: 13px !important">Selengkapnya ...</a>
                                    <hr>

                                </div>

                                <div class="common-cat">
                                    <div class="side-title">
                                        <h6>Pengumuman</h6>
                                    </div>

                                    @foreach ($pengumuman as $pg )
                                    <div class="row">
                                        <div class="col-md-3" style="padding: 0px;">
                                            <img src="/storage/konten/{{ $pg->gambar }}" class="img-fluid pt-2" alt="..." style="width: 60px; height:60px">
                                        </div>
                                        <div class="col-md-9" style="padding: 5px;">
                                            <a href="{{ route('masyarakat.detailpengumuman', $pg->id) }}" class="d-flex cod__blue-color f-700" style="font-size: 13px; text-align:left !important">{!! substr($pg->judul_konten, 0, 30); !!}</a>
                                            <p class="dusty__gray-color f-500" style="font-size: 11px; text-align:left">{{ $pg->created_at->format('d-M-Y') }}</p>
                                        </div>
                                    </div>

                                    @endforeach

                                    <a href="{{ route('masyarakat.pengumuman') }}" class="d-flex justify-content-end cod__blue-color f-700" style="font-size: 13px !important">Selengkapnya ...</a>
                                    <hr>

                                </div>

                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

</x-main-layout>