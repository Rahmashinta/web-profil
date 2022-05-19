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
                            <img src="/storage/pegawai/{{ $pegawai->foto_pegawai }}" class="card-img-top mt-4" alt="..." style="width: 500px; height: 400px; margin:auto; display:block; clear:both ">
                            <div class="card-body">
                                <div class="row g-3 d-flex justify-content-center">

                                    <div class="col-md-3 btn btn-primary m-2">
                                        <h6 class="card-title" style="text-align: center; color:white "> Nama Pegawai </h6>
                                        <p class="card-title" style="text-align: center; "> {{ $pegawai->nama_pegawai }}</p>
                                    </div>
                                    <div class="col-md-3 btn btn-primary m-2">
                                        <h6 class="card-title" style="text-align: center; color:white "> NIP </h6>
                                        <p class="card-title" style="text-align: center; "> {{ $pegawai->nip }}</p>
                                    </div>
                                    <div class="col-md-3 btn btn-primary m-2">
                                        <h6 class="card-title" style="text-align: center; color:white "> Jabatan </h6>
                                        <p class="card-title" style="text-align: center; "> {{ $pegawai->jabatan }}</p>
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
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
</x-pegawai-layout>