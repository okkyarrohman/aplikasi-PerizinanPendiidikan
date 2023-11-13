@extends('layouts.app-without-nav')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-16">
                <div class="card align-items-center">
                    <div class="card-title m-3">
                        <b>
                            <h4>Registrasi Account</h4>
                        </b>
                    </div>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-8 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name" required
                                        autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email" required
                                        autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Row 2 --}}

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="telepon"
                                    class="col-md-4 col-form-label text-md-end">{{ __('No Telepon') }}</label>

                                <div class="col-md-6">
                                    <input id="telepon" type="text" class="form-control " name="telepon" required
                                        autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="pekerjaan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Pekerjaan') }}</label>

                                <div class="col-md-6">
                                    <input id="pekerjaan" type="text" class="form-control " name="pekerjaan" required
                                        autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nik"
                                    class="col-md-4 col-form-label text-md-end">{{ __('No NIK') }}</label>

                                <div class="col-md-6">
                                    <input id="nik" type="number" class="form-control " name="nik" required
                                        autocomplete="name" autofocus>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
                {{-- Row 3 --}}
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="tanggal_lahir"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tanggal lahir') }}</label>

                                <div class="col-md-6">
                                    <input id="tanggal_lahir" type="date" class="form-control " name="tanggal_lahir"
                                        required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                                <div class="col-md-6">
                                    <input id="alamat" type="text" class="form-control " name="alamat" required
                                        autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="domisili"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Domisili') }}</label>

                                <div class="col-md-6">
                                    <input id="domisili" type="text" class="form-control " name="domisili" required
                                        autocomplete="name" autofocus>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="kode_pos"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kode Pos') }}</label>

                                <div class="col-md-6">
                                    <input id="kode_pos" type="number" class="form-control " name="kode_pos" required
                                        autocomplete="name" autofocus>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                {{-- Row 3 --}}
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="kota"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kota') }}</label>

                                <div class="col-md-6">
                                    <input id="kota" type="text" class="form-control " name="kota" required
                                        autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kecamatan" class="col-md-4 col-form-label text-md-end">Kecam atan</label>

                                <div class="col-md-6">
                                    <input id="kecamatan" type="text" class="form-control " name="kecamatan" required
                                        autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kelurahan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kelurahan') }}</label>

                                <div class="col-md-6">
                                    <input id="kelurahan" type="text" class="form-control " name="kelurahan" required
                                        autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="desa"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Desa') }}</label>

                                <div class="col-md-6">
                                    <input id="desa" type="text" class="form-control " name="desa" required
                                        autocomplete="name" autofocus>
                                </div>
                            </div>

                            <select name="roles" hidden>
                                <option value="pemohon" selected hidden></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Row submit --}}
            <div class="row">
                <div class="card align-items-center">
                    <div class="card-footer d-inline-block w-100"">
                        <button type="submit"
                            class="btn btn-primary w-100 justify-center align-items-center">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
