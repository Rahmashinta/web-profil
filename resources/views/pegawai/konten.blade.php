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

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Tambah Data Konten</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Form Tambah Konten</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="card border-top border-0 border-danger">
                                    <div class="card-body p-3">
                                        <form class="row g-3">
                                            <div class="col-md-12">
                                                <label for="judulkonten" class="form-label">Judul Konten</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-people-fill"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="judulkonten" placeholder="Judul Konten" name="judulkonten" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="tanggalKonten" class="form-label">Tanggal Konten</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-people-fill"></i></span>
                                                    <input type="date" class="form-control border-start-0" id="tanggalKonten" placeholder="Tanggal Konten" name="tanggalKonten" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="kategorikonten" class="form-label">Kategori Konten</label>
                                                <select class="form-select mb-3" aria-label="Default select example">
                                                    <option selected>Pilih Kategori Konten</option>
                                                    <option value="1">Berita</option>
                                                    <option value="2">Artikel</option>
                                                    <option value="3">Pengumuman</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="foto" class="form-label">Gambar Konten</label>
                                                    <input class="form-control" type="file" id="foto" name="foto">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="isikonten" class="form-label">Isi Konten</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-pencil-fill"></i></span>
                                                    <input type="text" class="form-control border-start-0" id="isikonten" placeholder="Isi Konten" name="isikonten" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h6 class="mt-4 text-uppercase">Data Konten</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Konten</th>
                                        <th>Tanggal Konten</th>
                                        <th>Kategori Konten</th>
                                        <th>Gambar</th>
                                        <th>Isi Konten</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Berita Kecelakaan</td>
                                        <td>13 Maret 2022</td>
                                        <td>Berita</td>
                                        <td></td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, quam.</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Artikel Kecelakaan</td>
                                        <td>13 Maret 2022</td>
                                        <td>Artikel</td>
                                        <td></td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, quam.</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Pengumuman libur</td>
                                        <td>13 Maret 2022</td>
                                        <td>Pengumuman</td>
                                        <td></td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, quam.</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                    </tr>


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