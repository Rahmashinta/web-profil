<x-main-layout>

    <div class="bottom header__bottom header__bottom--border custom-header-bottom">
        <div class="container">
            <div class="row">
                <div>
                    <div class="main-menu ">
                        @include('layouts.navbarmobile')
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main -->
    <main class="main--wrapper">

        <!-- contact google map start -->
        <section class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6560918110204!2d101.4440892620167!3d0.5166853657273541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5add435a4a267%3A0x1678af417ffa4cab!2sMenara%20Lancang%20Kuning!5e0!3m2!1sid!2sid!4v1648020149805!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
        <!-- contact google map end -->

        <!-- contact area start -->
        <section class="contact-area pt-30 mb-20">
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="contact-form">
                            <h4 class="title">Kritik dan Saran</h4>
                            <form action="{{ route('kritiksaran.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="field">
                                    <input type="text" placeholder="Masukkan Nama Anda" id="nama" name="nama" value="{{old ('nama') }}">
                                    <input type="email" placeholder="Masukkan Email Anda" name="email" id="email">
                                </div>
                                <textarea placeholder="Kritik dan Saran" name="kritik"></textarea>
                                <button type="submit" style="margin-top: 0 !important">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->
        <div class="brand">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="brand-active">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <!-- Main End -->

</x-main-layout>