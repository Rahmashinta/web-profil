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
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <h6 class="mb-0 text-uppercase">Edit Data Pengguna</h6>
                        <hr />
                        <div class="card border-top border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" action="{{ route('pengguna.update', $user->id) }}" method="post" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf

                                    <div class="col-md-12">
                                        <label for="nama" class="form-label">Nama Pengguna</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person"></i></span>
                                            <input type="text" class="form-control border-start-0" id="nama" placeholder="Nama Pengguna" name="nama" value="{{old ('user', $user->nama) }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="username" class="form-label">Username</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person-square"></i></span>
                                            <input type="text" class="form-control border-start-0" id="username" placeholder="username" name="username" value="{{old ('user', $user->username) }}" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Role</label>
                                        <select class="form-select mb-3" aria-label="Default select example" name="role">
                                            <option selected value="{{old ('user', $user->role) }}">{{old ('user', $user->role) }}</option>
                                            <option value=" Admin">Admin</option>
                                            <option value="Pegawai">Pegawai</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-key"></i></span>
                                            <input type="text" class="form-control border-start-0" id="password" placeholder="Password" name="password" value="{{old ('user', $user->password) }}" />
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