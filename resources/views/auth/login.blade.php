<x-login-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">

                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Silahkan Login</h3>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" action="{{ route('login') }}" method="post">
                                            @csrf
                                            <div class="col-12">
                                                <label for="username" class="form-label">Masukkan Username</label>
                                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bi bi-person-lines-fill"></i></span>
                                                    <input type="text" class="form-control border-start-0 " id="username" placeholder="Masukkan Username" name="username" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="password" class="form-label">Masukkan Password</label>
                                                <div class="input-group" id="show_hide_password"> <span class="input-group-text bg-transparent"><i class="bi bi-key"></i></span>
                                                    <input type="password" class="form-control border-start-0 border-end-0" id="password" placeholder="Masukkan password" name="password" /><a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary" style="border-radius: 1rem;">Login</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->

</x-login-layout>