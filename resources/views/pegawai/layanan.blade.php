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

                    @if (session()->has('layanan'))

                    <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                            </div>
                            <div class="ms-3">
                                {{ session('layanan') }}
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    </div>

                    @elseif (session()->has('error'))

                    <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                            </div>
                            <div class="ms-3">
                                {{session('error')}}
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    @endif

                    <div class="col">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Data Layanan</button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Layanan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
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
                <h6 class="mt-4 text-uppercase">Data Layanan</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Link Layanan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($layanan as $ly)
                                    <tr>
                                        <td>1</td>
                                        <td><img src="/storage/layanan/{{ $ly->gambar }}" style="width: 100px; height: 100px; margin:auto; display:block; clear:both"></td>
                                        <td><a href=" {{ $ly->link }}">{{ $ly->link }}</a></td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$ly->id}}"><i class="bi bi-pencil-square"></i></a>

                                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus{{$ly->id}}"><i class="bi bi-trash3"></i></button>
                                    </tr>


                                    <!-- Modal Edit -->
                                    <div class="col">
                                        <div class="modal fade" id="edit{{$ly->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Form Edit Layanan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form class="row g-3" action="{{ route('layanan.update', $ly->id) }}" method="post" enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf

                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label for="gambar" class="form-label">Gambar Layanan</label>
                                                                    <input type="hidden" name="oldImage" value="{{ $ly->gambar}}">
                                                                    <input class="form-control" type="file" id="gambar" name="gambar" value="{{old ('layanan', $ly->gambar) }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="link" class="form-label">Link Layanan</label>
                                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-link"></i></span>
                                                                    <input type="text" class="form-control border-start-0" id="link" placeholder="Link Layanan" name="link" value="{{old ('layanan', $ly->link) }}" />
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
                                        <div class="modal fade" id="hapus{{$ly->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus Pegawai</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form action="/layanan/{{ $ly->id}}" method="post" class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <div class="div">
                                                                <p>Yakin Ingin Menghapus Layanan ? </p>
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