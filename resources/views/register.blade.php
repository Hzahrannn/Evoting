
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8 col-sm-11 mx-2">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h4 class="text-dark font-weight-normal">Register</h4>
                    <p class="text-dark mb-4">Enter your details to continue</p>

                    <form method="POST" action="/register/register">
                        @csrf
                        <div class="form-group">
                            <label for="nama" class="form-label text-dark">Nama</label>
                            <input id="nama" type="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" required autocomplete="nama" autofocus>
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label text-dark">NIM</label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="nim" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label text-dark">Password</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            @if (Route::has('password.request'))
                                <a class="text-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
