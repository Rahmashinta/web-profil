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
                        <h2 class="f-800" style="color: white;">Galeri Video</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page banner area end -->

    <!-- about area start -->
    <section class="about-area pt-40">
        <div class="container">
            <div class="row">

                @foreach ($video as $v)
                <div class="col-sm-6">
                    <div class="about-single mb-10">
                        <iframe width="560" height="315" src="{{ $v->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <div class="about-text">
                            <h6 class="f-700 pt-2"><a href="{{ $v->link }}" style="text-decoration: none !important">{{ $v->judul }}</a></h6>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- about area end -->

</x-main-layout>