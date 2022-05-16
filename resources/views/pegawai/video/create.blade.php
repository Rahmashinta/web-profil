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
                        <h6 class="mb-0 text-uppercase">Tambah Data Video</h6>
                        <hr />
                        <div class="card border-top border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="judul" class="form-label">Judul Video</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-fill"></i></span>
                                            <input type="text" class="form-control border-start-0" id="judul" placeholder="Judul Video" name="judul" value="{{old ('judul') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="link" class="form-label">Link Video</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-link"></i></span>
                                            <input type="text" class="form-control border-start-0" id="link" placeholder="Link Video" name="link" value="{{old ('link') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="keterangan" class="form-label">Keterangan Video</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-card-text"></i></span>
                                            <input type="text" class="form-control border-start-0" id="keterangan" placeholder="Keterangan Video" name="keterangan" value="{{old ('keterangan') }}" />
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