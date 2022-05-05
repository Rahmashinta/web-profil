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
                        <h6 class="mb-0 text-uppercase">Tambah Data Layanan</h6>
                        <hr />
                        <div class="card border-top border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" action="{{ route('layanan.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="gambar" class="form-label">Gambar Konten</label>
                                            <input class="form-control" type="file" id="gambar" name="gambar" value="{{old ('gambar') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="link" class="form-label">Link Layanan</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-link"></i></span>
                                            <input type="text" class="form-control border-start-0" id="link" placeholder="Link Layanan" name="link" value="{{old ('link') }}" />
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-success">Simpan</button>
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