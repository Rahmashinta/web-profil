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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Data Pengguna</button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Pengguna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="card border-top border-0 border-4 border-primary">
                                            <div class="card-body p-4">
                                                <form class="row g-3" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="col-md-12">
                                                        <label for="nama" class="form-label">Nama Pengguna</label>
                                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person"></i></span>
                                                            <input type="text" class="form-control border-start-0" id="nama" placeholder="Nama Pengguna" name="nama" value="{{old ('nama') }}" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="username" class="form-label">Username</label>
                                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person-square"></i></span>
                                                            <input type="text" class="form-control border-start-0" id="username" placeholder="username" name="username" value="{{old ('username') }}" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label">Role</label>
                                                        <select class="form-select mb-3" aria-label="Default select example" name="role">
                                                            <option selected>Pilih Role Pengguna</option>
                                                            <option value=" Admin">Admin</option>
                                                            <option value="Pegawai">Pegawai</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="password" class="form-label">Password</label>
                                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-key"></i></span>
                                                            <input type="text" class="form-control border-start-0" id="password" placeholder="Password" name="password" value="{{old ('password') }}" required />
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
                <h6 class="mt-4 text-uppercase">Data Pengguna</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $us)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $us->nama }}</td>
                                        <td>{{ $us->username }}</td>
                                        <td>{{ $us->role }}</td>
                                        <td>

                                            <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$us->id}}"><i class="bi bi-pencil-square"></i></a>

                                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus{{$us->id}}"><i class="bi bi-trash3"></i></button>
                                    </tr>


                                    <!-- Modal Edit -->
                                    <div class="col">
                                        <div class="modal fade" id="edit{{$us->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Form Edit Pengguna</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="card border-top border-0 border-4 border-primary">
                                                            <div class="card-body p-5">
                                                                <form class="row g-3" action="{{ route('user.update', $us->id) }}" method="post" enctype="multipart/form-data">
                                                                    @method('put')
                                                                    @csrf

                                                                    <div class="col-md-12">
                                                                        <label for="nama" class="form-label">Nama Pengguna</label>
                                                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person"></i></span>
                                                                            <input type="text" class="form-control border-start-0" id="nama" placeholder="Nama Pengguna" name="nama" value="{{old ('user', $us->nama) }}" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="username" class="form-label">Username</label>
                                                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person-square"></i></span>
                                                                            <input type="text" class="form-control border-start-0" id="username" placeholder="username" name="username" value="{{old ('user', $us->username) }}" readonly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label class="form-label">Role</label>
                                                                        <select class="form-select mb-3" aria-label="Default select example" name="role">
                                                                            <option selected value="{{old ('user', $us->role) }}">{{old ('user', $us->role) }}</option>
                                                                            <option value=" Admin">Admin</option>
                                                                            <option value="Pegawai">Pegawai</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="password" class="form-label">Password</label>
                                                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-key"></i></span>
                                                                            <input type="text" class="form-control border-start-0" id="password" placeholder="Password" name="password" value="{{old ('user', $us->password) }}" />
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
                                        <div class="modal fade" id="hapus{{$us->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus Pengguna</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form action="/user/{{ $us->id}}" method="post" class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <div class="div">
                                                                <p>Yakin Ingin Menghapus Pengguna <b>{{ $us->nama }} </b> ? </p>
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