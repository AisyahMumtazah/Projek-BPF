<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register Card -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-text demo text-body fw-bolder">Registrasi</span>
                        </a>
                    </div>
                    <form id="formAuthentication" class="mb-3" action="<?=base_url('Auth/registrasi');?>" method="POST">
                        <div class="mb-3">
                            <label for="namalengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="namalengkap" name="namalengkap"
                                placeholder="Masukkan Nama Lengkap" autofocus />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Masukkan Alamat Email" />
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="Masukkan Username" />
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="mb-3">
                                    <label for="noTelp" class="form-label">No Telp</label>
                                    <input type="text" class="form-control" id="noTelp" name="noTelp"
                                        placeholder="0123456789" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="mb-3 form-password-toggle">
                                    <label for="password1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password1" name="password1"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" 
                                        aria-describedby="password"/>
                                    </div>
                            </div>
                            <div class="col-sm">
                                <div class="mb-3 form-password-toggle">
                                    <label for="password2" class="form-label">Ulangi Password</label>
                                    <input type="password" class="form-control" id="password2" name="password2"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" 
                                        aria-describedby="password"/>
                                    </div>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100">Daftar</button>
                    </form>

                    <p class="text-center">
                        <span>Sudah menjadi Anggota?</span>
                        <a href="<?=site_url('Welcome/login')?>">
                            <span>Login di sini</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- Register Card -->
        </div>
    </div>
</div>