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

                    @if (session()->has('success'))

                    <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                            </div>
                            <div class="ms-3">
                                {{ session('success') }}
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    </div>

                    @elseif (session()->has('error'))

                    <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
                            </div>
                            <div class="ms-3">
                                {{session('error')}}
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    @endif

                    <a class="btn btn-primary" href="{{ route('jabatan.create') }}">Tambah Data Jabatan</a>


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
                                            <a href="/jabatan/{{$jbt->id}}/edit" class="btn btn-warning btn-sm"> <i class="bi bi-pencil-square"></i></a>
                                            <form action="/jabatan/{{ $jbt->id}}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')"><i class="bi bi-trash3"></i></button>
                                            </form>
                                        </td>

                                    </tr>

                                    @endforeach

                                    <!-- Modal Edit -->

                                    @foreach ($jabatan as $jbt)

                                    @if ($jbt->id == $jbt->id)

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
                                                                    <input type="text" class="form-control border-start-0" id="jabatan" placeholder="Nama Jabatan" name="jabatan" value="{{old ('jabatan', $jbt->id) }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
                                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-square"></i></span>
                                                                    <input type="text" class="form-control border-start-0" id="kode_jabatan" placeholder="Kode Jabatan" name="kode_jabatan" value="{{old ('kode_jabatan') }}" />
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

                                    @endif

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