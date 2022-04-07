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

                <div class="col">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Tambah Data Konten</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Form Tambah Konten</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="card border-top border-0 border-danger">
                                    <div class="card-body p-3">
                                        <form class="row g-3" action="{{ route('konten.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12">
                                                <label for="judul_konten" class="form-label">Judul Konten</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-people-fill"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="judul_konten" placeholder="Judul Konten" name="judul_konten" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="tanggal_konten" class="form-label">Tanggal Konten</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-people-fill"></i></span>
                                                    <input type="date" class="form-control border-start-0" id="tanggal_konten" placeholder="Tanggal Konten" name="tanggal_konten" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Kategori Konten</label>
                                                <select class="form-select mb-3" aria-label="Default select example" name="kategori_konten">
                                                    <option selected>Pilih Kategori Konten</option>
                                                    <option value="1">Berita</option>
                                                    <option value="2">Artikel</option>
                                                    <option value="3">Pengumuman</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="gambar" class="form-label">Gambar Konten</label>
                                                    <input class="form-control" type="file" id="gambar" name="gambar">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="isi_konten" class="form-label">Isi Konten</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-fill"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="isi_konten" placeholder="Isi Konten" name="isi_konten" />
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

                <h6 class="mt-4 text-uppercase">Data Konten</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Konten</th>
                                        <th>Tanggal Konten</th>
                                        <th>Kategori Konten</th>
                                        <th>Status Konten</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($konten as $ktn)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $ktn->judul_konten }}</td>
                                        <td>{{ $ktn->tanggal_konten }}</td>
                                        <td>{{ $ktn->kategori_konten }}</td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                            <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                            <form action="/konten/{{ $ktn->id}}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></button>
                                            </form>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
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