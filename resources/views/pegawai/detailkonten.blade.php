<x-pegawai-layout>
    <!--wrapper-->
    <div class="wrapper">
        @include('layouts.sidebarpegawai')
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                @include('layouts.navbarpegawai')
            </div>
        </header>
        <!--end header -->

        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="card">
                    <div class="card-body">
                        <div class="card m-2">
                            <img src="/storage/konten/{{ $konten->gambar }}" class="card-img-top mt-4" alt="..." style="width: 500px; height: 400px; margin:auto; display:block; clear:both ">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center; color:#008cff">{{ $konten->judul_konten }}</h5>
                                <p><b>{{ $konten->created_at->format('d-M-Y') }}</b></p>
                                <span class="badge bg-info pl-10" style="font-size: 15px;">{{ $konten->status }}</span>
                                <p class="badge bg-info ps-10 " style="font-size: 15px; float:right">{{$author->nama}}</p>
                                <p class=" card-text"> {!! $konten->isi_konten !!}</p>
                                </p>
                            </div>

                            <div class="modal-footer">
                                <a href="{{ route('konten.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
    </div>
    <!--end wrapper-->
</x-pegawai-layout>