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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Data Pegawai</button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Pegawai</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="card border-top border-0 border-4 border-primary">
                                            <div class="card-body p-5">
                                                <form class="row g-3" action="{{ route('pegawai.store') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="col-md-6">
                                                        <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person-fill"></i></span>
                                                            <input type="text" class="form-control border-start-0 " id="nama_pegawai" placeholder="Nama Pegawai" name="nama_pegawai" value="{{old ('nama_pegawai') }}" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="nip" class="form-label">NIP</label>
                                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-123"></i></span>
                                                            <input type="text" class="form-control border-start-0 " id="nip" placeholder="NIP" name="nip" value="{{old ('nip') }}" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label">Jabatan</label>
                                                        <select class="form-select mb-3" aria-label="Default select example" name="jabatan">
                                                            <option selected>Pilih Jabatan</option>
                                                            @foreach ($jabatan as $jbt)
                                                            <option value="{{$jbt->jabatan}}" class="lama">{{$jbt->jabatan}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="foto_pegawai" class="form-label">Foto Pegawai</label>
                                                            <img class="img-preview mx-auto mb-3 col-sm-5">
                                                            <input class="form-control" type="file" id="foto_pegawai" name="foto_pegawai" onchange="previewImage()" value="{{old ('foto_pegawai') }}" required>
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
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pgw->nama_pegawai }}</td>
                                        <td>{{ $pgw->nip }}</td>
                                        <td>{{ $pgw->jabatan }}</td>
                                        <td>
                                            <a href="{{ route('pegawai.show', $pgw->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>

                                            <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$pgw->id}}"><i class="bi bi-pencil-square"></i></a>

                                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus{{$pgw->id}}"><i class="bi bi-trash3"></i></button>
                                    </tr>

                                    <!-- Modal Edit -->
                                    <div class="col">
                                        <div class="modal fade" id="edit{{$pgw->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Form Edit Pegawai</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="card border-top border-0 border-4 border-primary">
                                                            <div class="card-body p-5">
                                                                <form class="row g-3" action="{{ route('pegawai.update', $pgw->id) }}" method="post" enctype="multipart/form-data">
                                                                    @method('put')
                                                                    @csrf

                                                                    <div class="col m-2">
                                                                        <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                                                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person-fill"></i></span>
                                                                            <input type="text" class="form-control border-start-0 " id="nama_pegawai" placeholder="Nama Pegawai" name="nama_pegawai" value="{{old ('pegawai', $pgw->nama_pegawai) }}" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col m-2">
                                                                        <label for="nip" class="form-label">NIP</label>
                                                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-123"></i></span>
                                                                            <input type="text" class="form-control border-start-0 " id="nip" placeholder="NIP" name="nip" value="{{old ('pegawai', $pgw->nip) }}" readonly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col m-2">
                                                                        <label class="form-label">Jabatan</label>
                                                                        <select class="form-select mb-3" aria-label="Default select example" name="jabatan">
                                                                            <option selected>{{old ('pegawai', $pgw->jabatan) }}</option>
                                                                            @foreach ($jabatan as $jbt)
                                                                            <option value="{{$jbt->jabatan}}" class="lama">{{$jbt->jabatan}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col m-2">
                                                                        <div class="mb-3">
                                                                            <label for="foto_pegawai" class="form-label">Foto Pegawai</label>
                                                                            <input type="hidden" name="oldImage" value="{{ $pgw->foto_pegawai}}">

                                                                            @if ($pgw->foto_pegawai)
                                                                            <img src="/storage/pegawai/{{ $pgw->foto_pegawai }}" class="img-preview mx-auto mb-3 col-sm-5 d-block">
                                                                            @else
                                                                            <img class="img-preview mx-auto mb-3 col-sm-5">
                                                                            @endif

                                                                            <input class="form-control" type="file" id="foto_pegawai" name="foto_pegawai" onchange="previewImage()" value=" {{old ('pegawai', $pgw->foto_pegawai) }}">
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
                                    </div>

                                    <!-- Modal Hapus -->
                                    <div class="col">
                                        <div class="modal fade" id="hapus{{$pgw->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus Pegawai</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form action="/pegawai/{{ $pgw->id}}" method="post" class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <div class="div">
                                                                <p>Yakin Ingin Menghapus Pegawai <b>{{ $pgw->nama_pegawai }} </b> ? </p>
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
    </div>
    <!--end wrapper-->
</x-pegawai-layout>