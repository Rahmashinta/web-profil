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
                        <h6 class="mb-0 text-uppercase">Edit Data Pegawai</h6>
                        <hr />
                        <div class="card border-top border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" action="{{ route('pegawai.update', $pegawai->id) }}" method="post" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf

                                    <div class="col-md-6">
                                        <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person-fill"></i></span>
                                            <input type="text" class="form-control border-start-0 " id="nama_pegawai" placeholder="Nama Pegawai" name="nama_pegawai" value="{{old ('pegawai', $pegawai->nama_pegawai) }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nip" class="form-label">NIP</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-123"></i></span>
                                            <input type="text" class="form-control border-start-0 " id="nip" placeholder="NIP" name="nip" value="{{old ('pegawai', $pegawai->nip) }}" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Jabatan</label>
                                        <select class="form-select mb-3" aria-label="Default select example" name="jabatan">
                                            <option selected>{{old ('pegawai', $pegawai->jabatan) }}</option>
                                            @foreach ($jabatan as $jbt)
                                            <option value="{{$jbt->jabatan}}" class="lama">{{$jbt->jabatan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="foto_pegawai" class="form-label">Foto Pegawai</label>
                                            <input type="hidden" name="oldImage" value="{{ $pegawai->foto_pegawai}}">

                                            <input class="form-control" type="file" id="foto_pegawai" name="foto_pegawai" value="{{old ('pegawai', $pegawai->foto_pegawai) }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success px-5">Simpan</button>
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