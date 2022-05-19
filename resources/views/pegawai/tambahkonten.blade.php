<x-pegawai-layout>
    <div class="pag-wrapper">
        <header class="login-header shadow">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded fixed-top rounded-0 shadow-sm">
                <div class="container-fluid"> 
                    <a class="navbar-brand mb-10" href="#">
                        <img src="assets/images/logo.png" width="25" alt="" />
                    </a>
                    <h5>Biro Pengadaan Barang dan Jasa</h5>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"> <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-info pe-3">
                                        @foreach ($navbar as $nv )
                                        @endforeach
                                        <h6 class="user-name mb-0">{{ $nv->nama }}</p>

                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="dropdown-item" type="submit"">
                                                <i class='bx bx-log-out-circle'></i>
                                                <span>Logout</span>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class=" page mt-5">
                                                <div class="page-content ">
                                                    <div class="row">
                                                        <div class="col-xl-10 mx-auto">
                                                            <div class="card border-top border-primary mt-10">
                                                                <h4 class=" text-center" style="margin-top: 20px !important">Tambah Data Konten</h4>
                                                                <div class="card-body p-5">
                                                                    <form class="row g-3" action="{{ route('tambahkonten.store') }}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="col-md-12">
                                                                            <label for="judul_konten" class="form-label">Judul Konten</label>
                                                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-fill"></i></span>
                                                                                <input type="text" class="form-control border-start-0" id="judul_konten" placeholder="Judul Konten" name="judul_konten" value="{{old ('judul_konten') }}" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <label class="form-label">Kategori Konten</label>
                                                                            <select class="form-select mb-3" aria-label="Default select example" name="kategori_konten">
                                                                                <option selected>Pilih Kategori Konten</option>
                                                                                <option value=" Berita">Berita</option>
                                                                                <option value="Artikel">Artikel</option>
                                                                                <option value="Pengumuman">Pengumuman</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label for="gambar" class="form-label">Gambar Konten</label>
                                                                                <input class="form-control" type="file" id="gambar" name="gambar" value="{{old ('gambar') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label for="isi_konten" class="form-label">Isi Konten</label>
                                                                            <textarea id="isi_konten" name="isi_konten" value="{{old ('isi_konten') }}">Hello, World!</textarea>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                    </div>

</x-pegawai-layout>