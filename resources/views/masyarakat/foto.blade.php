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
                            <img src="/storage/foto/{{ $ft->file }}" data-bs-toggle="modal" data-bs-target="#show{{ $ft->id }}" class="img-fluid text-center" alt="" style="position: relative; width:250px; height:200px">
                        </div>
                        <div class="about-text" style="text-align: center !important">
                            <h6 class="f-700 pt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#show{{ $ft->id }}" style="text-decoration: none !important">{{ $ft->judul }}</a></h6>
                            <p>{{ $ft->keterangan }}</p>
                        </div>
                    </div>
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
    </section>

    @include('layouts.footer')

</x-main-layout>