@extends('layout.mainlayout')
@section('content')

<div>
    <div class="container-fluid login_page">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow login_card">
                    <div class="title text-center text-black">
                        <h3>LOGIN</h3>
                    </div>
                    <div class="card-body" style="margin-top: 10px;">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-group mb-5 m-1">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope-circle-check"></i>
                                </span>
                                <input type="email" class="form-control py-3 login_input @error('email') is-invalid @enderror" id="email" 
                                    placeholder="Email" name="email" value="{{ old('email') }}" 
                                      autocomplete="username"  required autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-5 m-1">
                                <span class="input-group-text p-2">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                <input type="password" class="form-control py-3 login_input @error('password') is-invalid @enderror" id="password" name="password"
                                 placeholder="⬤⬤⬤⬤⬤⬤"
                                 autocomplete="current-password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" 
                                    name="remember" {{ old('remember') ? 'checked' : '' }} 
                                    style="border: rgb(231, 53, 189) 1px solid;">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-3 mt-3"
                            style="background-color: rgb(231, 53, 189); border: none; color: white; font-size:18px;">Login</button>
                        </form>
                        <p class="fs-6 text-center" style="color: rgb(171, 165, 165);margin-top:80px;">All Reserve By Shahariar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@push('script')
    <script>
        $(document).ready(function(){
            
        })
    </script>
@endpush