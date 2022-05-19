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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Data Video</button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Video</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12">
                                                <label for="judul" class="form-label">Judul Video</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-fill"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="judul" placeholder="Judul Video" name="judul" value="{{old ('judul') }}" required />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="link" class="form-label">Link Video</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-link"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="link" placeholder="Link Video" name="link" value="{{old ('link') }}" required />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="keterangan" class="form-label">Keterangan Video</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-card-text"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="keterangan" placeholder="Keterangan Video" name="keterangan" value="{{old ('keterangan') }}" />
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
                <h6 class="mt-4 text-uppercase">Data Video</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Video</th>
                                        <th>Tanggal </th>
                                        <th>Link</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($video as $vd)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $vd->judul }}</td>
                                        <td>{{ $vd->created_at->format('d-M-Y') }}</td>
                                        <td><a href="{{ $vd->link  }}"> {{ substr($vd->link, 0, 30); }}</a></td>
                                        <td>{{ $vd->keterangan}}</td>
                                        <td>

                                            <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$vd->id}}"><i class="bi bi-pencil-square"></i></a>

                                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus{{$vd->id}}"><i class="bi bi-trash3"></i></button>
                                    </tr>

                                    <!-- Modal Edit -->
                                    <div class="col">
                                        <div class="modal fade" id="edit{{$vd->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Form Edit Video</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form class="row g-3" action="{{ route('video.update', $vd->id) }}" method="post" enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf

                                                            <div class="col-md-12">
                                                                <label for="judul" class="form-label">Judul Video</label>
                                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-fill"></i></span>
                                                                    <input type="text" class="form-control border-start-0" id="judul" placeholder="Judul Video" name="judul" value="{{old ('video', $vd->judul) }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="link" class="form-label">Link Video</label>
                                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-link"></i></span>
                                                                    <input type="text" class="form-control border-start-0" id="link" placeholder="Link Video" name="link" value="{{old ('video', $vd->link) }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="keterangan" class="form-label">Keterangan Video</label>
                                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-card-text"></i></span>
                                                                    <input type="text" class="form-control border-start-0" id="keterangan" placeholder="Keterangan Video" name="keterangan" value="{{old ('video', $vd->keterangan) }}" />
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
                                        <div class="modal fade" id="hapus{{$vd->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus Video</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form action="/video/{{ $vd->id}}" method="post" class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <div class="div">
                                                                <p>Yakin Ingin Menghapus Video <b>{{ $vd->judul }} </b> ? </p>
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