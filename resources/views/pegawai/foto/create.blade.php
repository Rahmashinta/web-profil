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
                        <h6 class="mb-0 text-uppercase">Tambah Data Foto</h6>
                        <hr />
                        <div class="card border-top border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <!-- <div class="after-add-more"> -->
                                    <div class="col-12">
                                        <label class="form-label">Judul Foto</label>
                                        <select class="form-select" aria-label="Default select example" name="judul">
                                            <option selected>Pilih Judul Foto</option>
                                            <option id="baru" onclick="pilih()">Baru</option>
                                            @foreach ($foto as $ft)
                                            <option value="{{$ft->judul}}" class="lama">{{$ft->judul}}</option>

                                            @endforeach

                                        </select>
                                    </div>
                                    <!-- </div> -->


                                    <div class="col-md-12" id="tampil" style="display: none;">
                                        <label for="judul" class="form-label">Judul Foto</label>
                                        <div class="input-group "> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-fill"></i></span>
                                            <input type="text" class="form-control border-start-0" id="judul" placeholder="Judul Foto" name="judul" value="{{old ('judul') }}" />
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="file" class="form-label">Foto</label>
                                            <input class="form-control" type="file" id="file" name="file" value="{{old ('file') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="keterangan" class="form-label">Keterangan Foto</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-card-text"></i></span>
                                            <input type="text" class="form-control border-start-0" id="keterangan" placeholder="Keterangan Foto" name="keterangan" value="{{old ('keterangan') }}" />
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

    @section('judul')

    <script>
        let baru = document.getElementById('baru');
        let lama = document.getElementsByClassName('lama');
        let tampil = document.getElementById('tampil');

        function pilih() {
            tampil.style.display = 'block';
            console.log('haloo');
        };

        for (let i = 0; i < lama.length; i++) {
            lama[i].addEventListener('click', function() {
                if (tampil.style.display === 'none') {
                    tampil.style.display = 'block';
                } else {
                    tampil.style.display = 'none';
                }
            })
        }
    </script>

    @endsection
</x-pegawai-layout>