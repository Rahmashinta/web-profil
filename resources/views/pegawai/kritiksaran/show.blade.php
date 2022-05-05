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

                            <div class="card-body">
                                <div class="row g-2">

                                    <div class="col-md-4">
                                        <p class="card-title" style="text-align: center; "> Nama </p>
                                    </div>
                                    <div class="col-md-8">
                                        <p class="card-title" style="text-align: left; "> {{ $kritiksaran->nama}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="card-title" style="text-align: center; "> Email </p>
                                    </div>
                                    <div class="col-md-8">
                                        <p class="card-title" style="text-align: left; "> {{ $kritiksaran->email }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="card-title" style="text-align: center; "> Kritik dan Saran </p>
                                    </div>
                                    <div class="col-md-8">
                                        <p class="card-title" style="text-align: left; "> {{ $kritiksaran->kritik }}</p>
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