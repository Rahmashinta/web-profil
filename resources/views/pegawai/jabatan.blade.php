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
                    <a class="btn btn-primary" href="{{ route('jabatan.create') }}">Tambah Data Jabatan</a>
                    <!-- Modal Tambah -->
                    <div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Form Tambah Jabatan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="card border-top border-0 border-danger">
                                    <div class="card-body p-3">
                                        <form class="row g-3" action="{{ route('jabatan.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12">
                                                <label for="jabatan" class="form-label">Nama Jabatan</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person-lines-fill"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="jabatan" placeholder="Nama Jabatan" name="jabatan" value="{{old ('jabatan') }}" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-square"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="kode_jabatan" placeholder="Kode Jabatan" name="kode_jabatan" value="{{old ('kode_jabatan') }}" />
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
                    <!-- End Modal -->


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
                                            <a href="/jabatan/{{$jbt->id}}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                            <a href="/jabatan/{{$jbt->id}}/edit" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></a>
                                            <form action="/jabatan/{{ $jbt->id}}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></button>
                                            </form>
                                        </td>

                                    </tr>

                                    @endforeach

                                    <!-- Modal Edit -->

                                    @foreach ($jabatan as $jbt)

                                    <!-- Modal Edit -->

                                    <div class="modal fade" id="edit" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Form Edit Jabatan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="card border-top border-0 border-danger">
                                                    <div class="card-body p-3">
                                                        <form class="row g-3" action="/jabatan/{{$jbt}}" method="post">
                                                            @method('put')
                                                            @csrf
                                                            <div class="col-md-12">
                                                                <label for="jabatan" class="form-label">Nama Jabatan</label>
                                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person-lines-fill"></i></span>
                                                                    <input type="text" class="form-control border-start-0" id="jabatan" placeholder="Nama Jabatan" name="jabatan" value="{{old ('jabatan', $jbt->jabatan) }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
                                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-square"></i></span>
                                                                    <input type="text" class="form-control border-start-0" id="kode_jabatan" placeholder="Kode Jabatan" name="kode_jabatan" value="{{old ('kode_jabatan', $jbt->kode_jabatan) }}" />
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success">Save</button>
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
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr />
            <h6 class="mb-0">Theme Styles</h6>
            <hr />
            <div class="d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                    <label class="form-check-label" for="semidark">Semi Dark</label>
                </div>
            </div>
            <hr />
            <div class="form-check">
                <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
                <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
            </div>
            <hr />
            <h6 class="mb-0">Header Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator headercolor1" id="headercolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor2" id="headercolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor3" id="headercolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor4" id="headercolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor5" id="headercolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor6" id="headercolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor7" id="headercolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor8" id="headercolor8"></div>
                    </div>
                </div>
            </div>
            <hr />
            <h6 class="mb-0">Sidebar Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->
</x-pegawai-layout>