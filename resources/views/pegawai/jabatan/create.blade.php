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
                    <div class="col-xl-10 mx-auto">
                        <h6 class="mb-0 text-uppercase">Tambah Data Jabatan</h6>
                        <hr />
                        <div class="card border-top border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" action="{{ route('jabatan.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="jabatan" class="form-label">Nama Jabatan</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person-lines-fill"></i></span>
                                            <input type="text" class="form-control border-start-0 " id="jabatan" placeholder="Nama Jabatan" name="jabatan" value="{{old ('jabatan') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-square"></i></span>
                                            <input type="text" class="form-control border-start-0 " id="kode_jabatan" placeholder="Kode Jabatan" name="kode_jabatan" value="{{old ('kode_jabatan') }}" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success px-5">Simpan</button>
                                    </div>
                                </form>
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