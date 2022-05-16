<nav id="mobile-menu" class="navbar-center">
    <ul style="margin-bottom: 0px; padding-left:0px !important">
        <li class=" m-2">
            <a href="#">Dashboard</a>
        </li>
        <li class="dropdown-icon m-2">
            <a href="#">Profil</a>
            <ul class="submenu">
                <li>
                    <a href="{{ route('masyarakat.sejarah') }}">Sejarah </a>
                </li>
                <li>
                    <a href="{{ route('masyarakat.visimisi') }}">Visi dan Misi </a>
                </li>
                <li>
                    <a href="{{ route('masyarakat.struktur') }}">Struktur Organisasi </a>
                </li>
                <li>
                    <a href="{{ route('masyarakat.tugasdanfungsi') }}">Tugas dan Fungsi </a>
                </li>
                <li>
                    <a href="{{ route('masyarakat.profilpejabat') }}">Profil Pejabat </a>
                </li>
                <li>
                    <a href="{{ route('masyarakat.bidangkerja') }}">Bidang Kerja </a>
                </li>
            </ul>
        </li>
        <li class="dropdown-icon m-2">
            <a href="#">Informasi</a>
            <ul class="submenu">
                <li>
                    <a href="/berita">Berita</a>
                </li>
                <li>
                    <a href="/artikel">Artikel</a>
                </li>
                <li>
                    <a href="/pengumuman">Pengumuman</a>
                </li>
            </ul>
        </li>
        <li class="dropdown-icon m-2">
            <a href="#">Galeri</a>
            <ul class="submenu">
                <li>
                    <a href="{{ route('masyarakat.foto') }}">Foto</a>
                </li>
                <li>
                    <a href="{{ route('masyarakat.video') }}">Video</a>
                </li>
            </ul>
        </li>
        <li class="dropdown-icon m-2">
            <a href="#">Layanan</a>
            <ul class="submenu">
                <li>
                    <a href="#">LPSE</a>
                </li>
            </ul>
        </li>
        <li class="dropdown-icon m-2">
            <a href="#">Lainnya</a>
            <ul class="submenu">
                <li>
                    <a href="#">Belum Punya</a>
                </li>
            </ul>
        </li>
        <li class="m-2">
            <a href="/hubungikami">Hubungi Kami</a>
        </li>
    </ul>
</nav>