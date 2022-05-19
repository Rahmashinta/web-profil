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

                    <div class="col">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Data Foto</button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Foto</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <div class="col-md-12">
                                                <label for="judul" class="form-label">Judul Foto</label>
                                                <div class="input-group "> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-fill"></i></span>
                                                    <input type="text" autofocus class="form-control border-start-0" id="judul" placeholder="Judul Foto" name="judul" value="{{old ('judul') }}">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="file" class="form-label">Foto</label>
                                                    <input class="form-control" type="file" id="file" name="file" value="{{old ('file') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="keterangan" class="form-label">Keterangan Foto</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-card-text"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="keterangan" placeholder="Keterangan Foto" name="keterangan" value="{{old ('keterangan') }}" />
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <h6 class="mt-4 text-uppercase">Data Foto</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($foto as $ft)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ft->judul }}</td>
                                        <td>
                                            <a href="{{ route('galeri.show', $ft->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>

                                            <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$ft->id}}"><i class="bi bi-pencil-square"></i></a>

                                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus{{$ft->id}}"><i class="bi bi-trash3"></i></button>
                                    </tr>


                                    <!-- Modal Show -->
                                    <div class="col">
                                        <div class="modal fade" id="show{{$ft->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Detail Foto</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="card m-2">
                                                            <img src="/storage/foto/{{ $ft->file }}" class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <h5 class="card-title">{{ $ft->judul }}</h5>
                                                                <p class="card-text">{{ $ft->keterangan }}</p>
                                                                </p>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Edit -->
                                    <div class="col">
                                        <div class="modal fade" id="edit{{$ft->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Form Edit Foto</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form class="row g-3" action="{{ route('galeri.update', $ft->id) }}" method="post" enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf

                                                            <div class="col-md-12">
                                                                <label for="judul" class="form-label">Judul Foto</label>
                                                                <div class="input-group "> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-fill"></i></span>
                                                                    <input type="text" class="form-control border-start-0" id="judul" placeholder="Judul Foto" name="judul" value="{{old ('galeri', $ft->judul) }}" />
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label for="file" class="form-label">Foto</label>
                                                                    <input type="hidden" name="oldImage" value="{{ $ft->file}}">
                                                                    <input class="form-control" type="file" id="file" name="file" value="{{old ('galeri', $ft->file) }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="keterangan" class="form-label">Keterangan Foto</label>
                                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-card-text"></i></span>
                                                                    <input type="text" class="form-control border-start-0" id="keterangan" placeholder="Keterangan Foto" name="keterangan" value="{{old ('galeri', $ft->keterangan) }}" />
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Hapus -->
                                    <div class="col">
                                        <div class="modal fade" id="hapus{{$ft->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus Foto</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form action="/galeri/{{ $ft->id}}" method="post" class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <div class="div">
                                                                <p>Yakin ingin Menghapus <b>{{ $ft->judul }} </b> ? </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </div>

                                                        </form>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Show -->

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