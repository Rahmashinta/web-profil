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

                    @if (session()->has('jabatan'))

                    <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                            </div>
                            <div class="ms-3">
                                {{ session('jabatan') }}
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Data Jabatan</button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Jabatan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" action="{{ route('jabatan.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-6">
                                                <label for="jabatan" class="form-label @error('jabatan') is-invalid
                                                @enderror">Nama Jabatan</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person-lines-fill"></i></span>
                                                    <input type="text" class="form-control border-start-0 " id="jabatan" placeholder="Nama Jabatan" name="jabatan" value="{{old ('jabatan') }}" />
                                                    @error('jabatan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-square"></i></span>
                                                    <input type="text" class="form-control border-start-0 " id="kode_jabatan" placeholder="Kode Jabatan" name="kode_jabatan" value="{{old ('kode_jabatan') }}" />
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
                <h6 class="mt-4 text-uppercase">Data Jabatan</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Jabatan</th>
                                        <th>Kode Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($jabatan as $jbt )
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $jbt->jabatan}}</td>
                                        <td>{{ $jbt->kode_jabatan }}</td>
                                        <td>
                                            <a href="/jabatan/{{$jbt->id}}/edit" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$jbt->id}}"> <i class="bi bi-pencil-square"></i></a>

                                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus{{$jbt->id}}"><i class="bi bi-trash3"></i></button>

                                        </td>

                                    </tr>

                                    <!-- Modal Edit -->
                                    <div class="col">
                                        <div class="modal fade" id="edit{{$jbt->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Form Edit Jabatan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form class="row g-3" action="{{ route('jabatan.update', $jbt->id) }}" method="post">
                                                            @method('put')
                                                            @csrf
                                                            <div class="col-md-12 mt-2">
                                                                <label for="jabatan" class="form-label">Nama Jabatan</label>
                                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person-lines-fill"></i></span>
                                                                    <input type="text" class="form-control border-start-0" id="jabatan" placeholder="Nama Jabatan" name="jabatan" value="{{old ('jabatan', $jbt->jabatan) }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-2">
                                                                <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
                                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-square"></i></span>
                                                                    <input type="text" class="form-control border-start-0" id="kode_jabatan" placeholder="Kode Jabatan" name="kode_jabatan" value="{{old ('jabatan', $jbt->kode_jabatan) }}" />
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

                                    <!-- Modal Hapu -->
                                    <div class="col">
                                        <div class="modal fade" id="hapus{{$jbt->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus Jabatan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form action="/jabatan/{{ $jbt->id}}" method="post" class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <div class="div">
                                                                <p>Yakin ingin Menghapus Jabatan <b>{{ $jbt->jabatan }} </b> ? </p>
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

                                    @endforeach

                                    <!-- Modal Show -->

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