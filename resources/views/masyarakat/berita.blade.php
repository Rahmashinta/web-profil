<x-main-layout>
    <!-- page banner area start -->
    <section class="page-banner-area blog-page" style="background-color: #4c6b99">
        <div class="container" style="padding: 0px !important">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner-text text-center pt-20 pb-20">
                        <h2 class="f-800" style="color: white;">Berita</h2>
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

                @foreach ($berita as $br)
                <div class="col-sm-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 " style="margin: auto; padding-left:20px">
                                <img src="/storage/konten/{{ $br->gambar }}" class="img-fluid rounded-start" alt="..." pt-20>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="tanggal">
                                        <span class="dusty__gray-color f-500 pt-15" style="font-size: 13px;">{{ $br->created_at->format('d-M-Y') }}</span>
                                    </div>
                                    <span class="blog-title"><a href="{{ route('masyarakat.detailberita', $br->id) }}" class="cod__blue-color f-700">{!! substr($br->judul_konten, 0, 50); !!}</a></span>
                                    <p class="f-400">{!! substr($br->isi_konten, 0, 100); !!} ...</p>
                                    <a href="{{ route('masyarakat.detailberita', $br->id) }}" class="f-600 grenadier-color">Read More <i class="icofont-long-arrow-right grenadier-color"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="common-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i> Prev</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next <i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
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