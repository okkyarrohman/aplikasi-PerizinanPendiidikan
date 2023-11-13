<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - TecnoPolis</title>
    <link rel="stylesheet" href="{{ asset('dashboard/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.png') }}" type="image/png">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div x-data="{
        activeStep: 1,
        next() {
            this.activeStep = this.activeStep + 1;
        },
        prev() {
            this.activeStep = this.activeStep - 1;
        }
    }" x-cloak>
        <div id="auth">
            <div class="row h-100">
                <div class="col-lg-5 col-12">
                    <div id="auth-left">
                        <h1 class="auth-title">Register.</h1>
                        <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div x-show="activeStep === 1" x-transition class="active-step">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">Nama Lengkap</label>
                                    <input type="text" class="form-control form-control-xl" placeholder="Email"
                                        name="name">
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">Email</label>
                                    <input type="text" class="form-control form-control-xl" placeholder="Email"
                                        name="email">
                                </div>

                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">Password</label>
                                    <input type="password" class="form-control form-control-xl" placeholder="Password"
                                        name="password">
                                </div>

                                <div class="button flex">
                                    <a @click="next()" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                                        Next</a>
                                </div>
                            </div>

                            <div x-show="activeStep === 2" x-transition class="active-step">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">No Telepon</label>
                                    <input type="text" class="form-control form-control-xl" placeholder="Email"
                                        name="telepon">
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">Nama Pekerjaan</label>
                                    <input type="text" class="form-control form-control-xl" placeholder="Email"
                                        name="pekerjaan">
                                </div>

                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">Nomor NIK</label>
                                    <input type="number" class="form-control form-control-xl" placeholder="text"
                                        name="nik">
                                </div>

                                <div class="button d-flex justify-content-around align-items-lg-around">
                                    <div class="btn1"><a @click="prev()"
                                            class="btn btn-warning btn-block btn-lg shadow-lg mt-5">
                                            Previous</a>
                                    </div>
                                    <div class="btn2"><a @click="next()"
                                            class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                                            Next</a>
                                    </div>
                                </div>
                            </div>

                            <div x-show="activeStep === 3" x-transition class="active-step">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">Tanggal Lahir</label>
                                    <input type="date" class="form-control form-control-xl" placeholder="Email"
                                        name="tanggal_lahir">
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">Alamat</label>
                                    <input type="text" class="form-control form-control-xl" placeholder="Email"
                                        name="alamat">
                                </div>

                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">Domisili</label>
                                    <input type="text" class="form-control form-control-xl" placeholder="text"
                                        name="domisili">
                                </div>

                                <div class="button d-flex justify-content-around align-items-lg-around">
                                    <div class="btn1"><a @click="prev()"
                                            class="btn btn-warning btn-block btn-lg shadow-lg mt-5">
                                            Previous</a>
                                    </div>
                                    <div class="btn2"><a @click="next()"
                                            class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                                            Next</a>
                                    </div>
                                </div>
                            </div>

                            <div x-show="activeStep === 4" x-transition class="active-step">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">Kode Pos</label>
                                    <input type="number" class="form-control form-control-xl" placeholder="Email"
                                        name="kode_pos">
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">Kota</label>
                                    <input type="text" class="form-control form-control-xl" placeholder="Email"
                                        name="kota">
                                </div>

                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">Kecamatan</label>
                                    <input type="text" class="form-control form-control-xl" placeholder="text"
                                        name="kecamatan">
                                </div>

                                <div class="button d-flex justify-content-around align-items-lg-around">
                                    <div class="btn1"><a @click="prev()"
                                            class="btn btn-warning btn-block btn-lg shadow-lg mt-5">
                                            Previous</a>
                                    </div>
                                    <div class="btn2"><a @click="next()"
                                            class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                                            Next</a>
                                    </div>
                                </div>
                            </div>

                            <div x-show="activeStep === 5" x-transition class="active-step">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">Kelurahan</label>
                                    <input type="text" class="form-control form-control-xl" placeholder="Email"
                                        name="kelurahan">
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="" class="form-control">Desa</label>
                                    <input type="text" class="form-control form-control-xl" placeholder="Email"
                                        name="desa">
                                </div>

                                <select name="roles" hidden>
                                    <option value="pemohon" selected hidden></option>
                                </select>

                                <div class="button d-flex justify-content-around align-items-lg-around">
                                    <div class="btn1"><a @click="prev()"
                                            class="btn btn-warning btn-block btn-lg shadow-lg mt-5">
                                            Previous</a>
                                    </div>
                                    <div class="btn2">
                                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5"
                                            type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <div id="auth-right">
                    </div>
                </div>
            </div>
        </div>

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://kit.fontawesome.com/f9a30c1ad2.js" crossorigin="anonymous"></script>
</body>

</html>
