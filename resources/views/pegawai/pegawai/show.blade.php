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

                <div class="row">
                    <div class="col ">
                        <div class="card m-2">
                            <!-- <img src="{{ asset('assets/images/avatars/avatar-2.png') }}" class="card-img-top" alt="..."> -->
                            <img src="/storage/pegawai/{{ $pegawai->foto_pegawai }}" class="card-img-top mt-4" alt="..." style="width: 500px; height: 400px; margin:auto; display:block; clear:both ">

                            <div class="card-body">
                                <div class="row g-3">

                                    <div class="col-md-4">
                                        <p class="card-title" style="text-align: center; "> Nama Pegawai </p>
                                        <h5 class="card-title" style="text-align: center; "> {{ $pegawai->nama_pegawai }}</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="card-title" style="text-align: center; "> NIP </p>
                                        <h5 class="card-title" style="text-align: center; "> {{ $pegawai->nip }}</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="card-title" style="text-align: center; "> Jabatan </p>
                                        <h5 class="card-title" style="text-align: center; "> {{ $pegawai->jabatan }}</h5>
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
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
</x-pegawai-layout>