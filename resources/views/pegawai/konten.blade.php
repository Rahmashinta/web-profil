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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Data Konten</button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Konten</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="card border-top border-0 border-4 border-primary">
                                            <div class="card-body p-4">
                                                <form class="row g-3" action="{{ route('konten.store') }}" method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="col-md-12">
                                                        <label for="judul_konten" class="form-label">Judul Konten</label>
                                                        <div class="input-group">
                                                            <textarea type="text" class="form-control" id="judul_konten" name="judul_konten" value="{{old ('judul_konten') }}" autofocus required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <label class="form-label">Kategori Konten</label>
                                                        <select class="form-select mb-3" aria-label="Default select example" name="kategori_konten" required>
                                                            <option selected>Pilih Kategori Konten</option>
                                                            <option value=" Berita">Berita</option>
                                                            <option value="Artikel">Artikel</option>
                                                            <option value="Pengumuman">Pengumuman</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="gambar" class="form-label">Gambar Konten</label>
                                                            <img class="img-preview mx-auto mb-3 col-sm-5">
                                                            <input class="form-control" type="file" id="gambar" name="gambar" onchange="previewImagekonten()" value="{{old ('gambar') }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="isi_konten" class="form-label">Isi Konten</label>
                                                        <textarea id="isi_konten" name="isi_konten" value="{{old ('isi_konten') }}" required>Hello, World!</textarea>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-body">

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
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ substr($ktn->judul_konten, 0, 30); }}</td>
                                        <td>{{ $ktn->created_at->format('d-M-Y') }}</td>

                                        <td>{{ $ktn->kategori_konten }}</td>
                                        <td><span class="badge bg-info" style="font-size: 15px;">{{ $ktn->status }}</span></td>
                                        <td>
                                            <a href="{{ route('konten.show', $ktn->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>

                                            <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$ktn->id}}"><i class="bi bi-pencil-square"></i></a>

                                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus{{$ktn->id}}"><i class="bi bi-trash3"></i></button>
                                    </tr>

                                    <!-- Modal Edit -->
                                    <div class="col">
                                        <div class="modal fade" id="edit{{$ktn->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Form Edit Konten</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="card border-top border-0 border-4 border-primary">
                                                            <div class="card-body p-5">
                                                                <form class="row g-3" action="{{ route('konten.update', $ktn->id) }}" method="post" enctype="multipart/form-data">
                                                                    @method('put')
                                                                    @csrf

                                                                    <div class="col-12">
                                                                        <label class="form-label">Status Konten</label>
                                                                        <select class="form-select mb-3" aria-label="Default select example" name="status">
                                                                            <option selected value="{{old ('konten', $ktn->status) }}">{{old ('konten', $ktn->status) }}</option>
                                                                            <option value="Publish">Publish</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <label for="judul_konten" class="form-label">Judul Konten</label>
                                                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-fill"></i></span>
                                                                            <input type="text" class="form-control border-start-0 " id="judul_konten" placeholder="Judul Konten" name="judul_konten" value="{{old ('konten', $ktn->judul_konten) }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label class="form-label">Kategori Konten</label>
                                                                        <select class="form-select mb-3" aria-label="Default select example" name="kategori_konten">
                                                                            <option selected value="{{old ('konten', $ktn->kategori_konten) }}">{{old ('konten', $ktn->kategori_konten) }}</option>
                                                                            <option value=" Berita">Berita</option>
                                                                            <option value="Artikel">Artikel</option>
                                                                            <option value="Pengumuman">Pengumuman</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="mb-3">
                                                                            <label for="gambar" class="form-label">Gambar Konten</label>
                                                                            <input type="hidden" name="oldImage" value="{{ $ktn->gambar}}">

                                                                            @if ($ktn->gambar)
                                                                            <img src="/storage/konten/{{ $ktn->gambar }}" class="img-preview mx-auto mb-3 col-sm-5 d-block">
                                                                            @else
                                                                            <img class="img-preview mx auto mb-3 col-sm-5">
                                                                            @endif


                                                                            <input class="form-control" type="file" id="gambar" name="gambar" onchange="previewImagekonten()" value="{{old ('konten', $ktn->gambar) }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="isi_konten" class="form-label">Isi Konten</label>
                                                                        <textarea id="isi_konten" name="isi_konten" value="{{old ('konten', $ktn->isi_konten) }}">{{old ('konten', $ktn->isi_konten) }}</textarea>
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
                                        <div class="modal fade" id="hapus{{$ktn->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus Pegawai</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form action="{{ route('konten.destroy', $ktn->id) }}" method="post" class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <div class="div">
                                                                <p>Yakin Ingin Menghapus Konten ? </p>
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