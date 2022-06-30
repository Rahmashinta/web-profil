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
                            <img src="/storage/foto/{{ $foto->file }}" data-bs-toggle="modal" data-bs-target="#show" class="card-img-top" alt="..." style="width: 500px; height: 400px; margin:auto; display:block; clear:both ">
                            <div class="card-body">
                                <h5 class="card-title"><b>Judul &nbsp; &nbsp; &nbsp;:</b>{{ $foto->judul }}</h5>
                                <p class="card-text"><b>Keterangan &nbsp; :</b>{{ $foto->keterangan }}</p>
                                </p>
                            </div>

                            <div class="modal-footer">
                                <a href="{{ route('galeri.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>

                            <!-- Modal Show -->
                            <div class="modal fade" id="show" tabindex="-1" aria-hidden="true">

                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="/storage/foto/{{ $foto->file }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
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