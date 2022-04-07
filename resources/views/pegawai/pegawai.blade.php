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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Tambah Data Pegawai</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Form Tambah Pegawai</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="card border-top border-0 border-danger">
                                    <div class="card-body p-3">
                                        <form class="row g-3" action="{{ route('pegawai.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12">
                                                <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-people-fill"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="nama_pegawai" placeholder="Nama Pegawai" name="nama_pegawai" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Nama Jabatan</label>
                                                <select class="form-select mb-3" aria-label="Default select example" name="jabatan_id">
                                                    <option selected>Pilih Jabatan</option>
                                                    <option value="1">Kepala Bagian</option>
                                                    <option value="2">Help Desk</option>
                                                    <option value="3">Pegawai</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="nip" class="form-label">NIP</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="nip" placeholder="NIP" name="nip" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="foto_pegawai" class="form-label">Foto Pegawai</label>
                                                    <input class="form-control" type="file" id="foto_pegawai" name="foto_pegawai">
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

                <h6 class="mt-4 text-uppercase">Data Pegawai</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pegawai</th>
                                        <th>NIP</th>
                                        <th>Nama Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($pegawai as $pgw )
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $pgw->nama_pegawai }}</td>
                                        <td>{{ $pgw->nip }}</td>
                                        <td>{{ $pgw->jabatan_id }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                            <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                            <form action="/pegawai/{{ $pgw->id}}" method="post" class="d-inline">
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