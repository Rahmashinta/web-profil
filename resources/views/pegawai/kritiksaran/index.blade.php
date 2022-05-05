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
                                        <td>1</td>
                                        <td>{{ $ks->nama }}</td>
                                        <td>{{ $ks->email }}</td>
                                        <td>
                                            <a href="/kritiksaran/{{ $ks->id}}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                            <form action="/kritiksaran/{{ $ks->id}}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></button>
                                            </form>
                                        </td>
                                    </tr>
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