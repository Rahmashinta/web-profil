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

                <h6 class="mt-4 text-uppercase">Data Kritik dan Saran</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kritiksaran as $ks)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ks->nama }}</td>
                                        <td>{{ $ks->email }}</td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#show{{$ks->id}}"><i class="bi bi-eye"></i></a>

                                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus{{$ks->id}}"><i class="bi bi-trash3"></i></button>
                                        </td>
                                    </tr>

                                    <!-- Modal Show -->
                                    <div class="col">
                                        <div class="modal fade" id="show{{$ks->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Detail Kritik dan Saran</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="card m-2">

                                                            <div class="card-body">
                                                                <div class="row g-3">

                                                                    <div class="col-md-4">
                                                                        <p class="card-title" style="text-align: center; "> Nama </p>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <p class="card-title" style="text-align: left; "> {{ $ks->nama}}</p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p class="card-title" style="text-align: center; "> Email </p>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <p class="card-title" style="text-align: left; "> {{ $ks->email }}</p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p class="card-title" style="text-align: center; "> Kritik dan Saran </p>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <p class="card-title" style="text-align: left; "> {{ $ks->kritik }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Hapus -->
                                    <div class="col">
                                        <div class="modal fade" id="hapus{{$ks->id}}" tabindex="-1" aria-hidden="true">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus KritikSaran</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form action="/kritiksaran/{{ $ks->id}}" method="post" class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <div class="div">
                                                                <p>Yakin Ingin Menghapus Kritik dan Saran <b>{{ $ks->nama }} </b> ? </p>
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