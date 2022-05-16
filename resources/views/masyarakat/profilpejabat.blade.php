<x-main-layout>
    <!-- Main -->
    <main class="main--wrapper">

        <!-- page banner area start -->
        <section class="page-banner-area blog-page" style="background-color: #4c6b99">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="banner-text text-center pt-20 pb-20">
                            <h2 class="f-800" style="color: white;">Profil Pejabat</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page banner area end -->

        <section class="blog-area-three trending-product pb-20 pt-20">
            <div class="container">
                <div class="row">
                    @foreach ($pegawai as $pgw)


                    <div class="col-lg-3 col-sm-6">
                        <div class="blog-single mb-30" style="width: 100px;">
                            <div class="image">
                                <img src="/storage/pegawai/{{ $pgw->foto_pegawai }}" alt="" height="200px" width="200px">
                            </div>
                            <div class="content d-flex justify-content-center">
                                <span class="black-color pt-15" style="font-size: 15px;">{{ $pgw->nama_pegawai }}</span>
                            </div>
                            <div class="content d-flex justify-content-center">
                                <span class="blog-title cod__black-color f-700" style="font-size: 18px;">{{ $pgw->jabatan }}</span>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </section>

    </main>
    <!-- Main End -->
</x-main-layout>