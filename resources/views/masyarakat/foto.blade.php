<x-main-layout>
    <!-- page banner area start -->
    <section class="page-banner-area blog-page" style="background-color: #4c6b99">
        <div class="container" style="padding: 0px !important">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner-text text-center pt-20 pb-20">
                        <h2 class="f-800" style="color: white;">Galeri Foto</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page banner area end -->

    <!-- about area start -->
    <section class="about-area pt-40 pb-30">
        <div class="container">
            <div class="row">
                @foreach ($foto as $ft)

                <div class="col-lg-3 col-sm-6">
                    <div class="about-single mb-10">
                        <div class="about-img">
                            <img src="/storage/foto/{{ $ft->file }}" class="img-fluid" alt="" style="position: relative;">
                        </div>
                        <div class="about-text" style="text-align: center !important">
                            <h6 class="f-700 pt-2"><a href="#" style="text-decoration: none !important">{{ $ft->judul }}</a></h6>
                            <p>{{ $ft->keterangan }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- about area end -->

</x-main-layout>