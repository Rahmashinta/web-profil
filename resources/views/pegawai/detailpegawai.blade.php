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
                            <img src="/storage/pegawai/{{ $pegawai->foto_pegawai }}" data-bs-toggle="modal" data-bs-target="#show{{ $pegawai->id }}" class="card-img-top mt-4" alt="..." style="width: 300px; height: 300px; margin:auto; display:block; clear:both ">

                            <!-- Modal Show -->
                            <div class="modal fade" id="show{{$pegawai->id}}" tabindex="-1" aria-hidden="true">

                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="/storage/pegawai/{{ $pegawai->foto_pegawai }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body mt-1">
                                <div class="row g-3 d-flex justify-content-center">

                                    <div class="col-md-3 bg-primary text-white text-center rounded m-2 p-2 ">
                                        <h6 class="card-title" style=" color:white "> Nama Pegawai </h6>
                                        <p class="card-title"> {{ $pegawai->nama_pegawai }}</p>
                                    </div>
                                    <div class="col-md-3 bg-primary text-white text-center rounded m-2 p-2">
                                        <h6 class="card-title" style=" color:white "> NIP </h6>
                                        <p class="card-title"> {{ $pegawai->nip }}</p>
                                    </div>
                                    <div class="col-md-3 bg-primary text-white text-center rounded m-2 p-2">
                                        <h6 class="card-title" style=" color:white "> Jabatan </h6>
                                        <p class="card-title"> {{ $pegawai->jabatan }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
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