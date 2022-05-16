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

                    @if (session()->has('menu'))

                    <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                            </div>
                            <div class="ms-3">
                                {{ session('menu') }}
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Data Menu</button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Menu</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12">
                                                <label for="nama_menu" class="form-label">Nama Menu</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-menu-button-wide"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="nama_menu" placeholder="Nama Menu" name="nama_menu" value="{{old ('nama_menu') }}" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="link" class="form-label">Link Menu</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-link"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="link" placeholder="Link Menu" name="link" value="{{old ('link') }}" />
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
                <h6 class="mt-4 text-uppercase">Data Menu</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Menu</th>
                                        <th>Link</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menu as $mn)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $mn->nama_menu }}</td>
                                        <td><a href=" {{ $mn->link }}">{{ $mn->link }}</a></td>
                                        <td>
                                            <a href="/menu/{{$mn->id}}/edit" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$mn->id}}"> <i class="bi bi-pencil-square"></i></a>

                                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus{{$mn->id}}"><i class="bi bi-trash3"></i></button>
                                        </td>
                                    </tr>

                                </tbody>

                                <!-- Modal Edit -->
                                <div class="col">
                                    <div class="modal fade" id="edit{{$mn->id}}" tabindex="-1" aria-hidden="true">

                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Form Edit Pegawai</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <form class="row g-3" action="{{ route('menu.update', $mn->id) }}" method="post" enctype="multipart/form-data">
                                                        @method('put')
                                                        @csrf

                                                        <div class="col-md-12">
                                                            <label for="nama_menu" class="form-label">Nama Menu</label>
                                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-menu-button-wide"></i></span>
                                                                <input type="text" class="form-control border-start-0" id="nama_menu" placeholder="Nama Menu" name="nama_menu" value="{{old ('menu', $mn->nama_menu) }}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="link" class="form-label">Link Menu</label>
                                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-link"></i></span>
                                                                <input type="text" class="form-control border-start-0" id="link" placeholder="Link Menu" name="link" value="{{old ('menu', $mn->link) }}" />
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
                                    <div class="modal fade" id="hapus{{$mn->id}}" tabindex="-1" aria-hidden="true">

                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Hapus Menu</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="/menu/{{ $mn->id}}" method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <div class="div">
                                                            <p>Yakin Ingin Menghapus Menu <b>{{ $mn->nama_menu }} </b> ? </p>
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