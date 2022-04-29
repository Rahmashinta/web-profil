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
                        <h6 class="mb-0 text-uppercase">Edit Data Konten</h6>
                        <hr />
                        <div class="card border-top border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" action="{{ route('konten.update', $konten->id) }}" method="post" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf

                                    <div class="col-md-12">
                                        <label for="judul_konten" class="form-label">Judul Konten</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-fill"></i></span>
                                            <input type="text" class="form-control border-start-0" id="judul_konten" placeholder="Judul Konten" name="judul_konten" value="{{old ('konten', $konten->judul_konten) }}" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Kategori Konten</label>
                                        <select class="form-select mb-3" aria-label="Default select example" name="kategori_konten">
                                            <option selected value="{{old ('konten', $konten->kategori_konten) }}">{{old ('konten', $konten->kategori_konten) }}</option>
                                            <option value=" Berita">Berita</option>
                                            <option value="Artikel">Artikel</option>
                                            <option value="Pengumuman">Pengumuman</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="gambar" class="form-label">Gambar Konten</label>
                                            <input type="hidden" name="oldImage" value="{{ $konten->gambar}}">
                                            <input class="form-control" type="file" id="gambar" name="gambar" value="{{old ('konten', $konten->gambar) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="isi_konten" class="form-label">Isi Konten</label>
                                        <textarea id="isi_konten" name="isi_konten" value="{{old ('konten', $konten->isi_konten) }}">{{old ('konten', $konten->isi_konten) }}</textarea>
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