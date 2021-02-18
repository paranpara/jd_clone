@extends('admin.master')

@section('body')

<!-- Outer Row -->
<div class="row justify-content-center" style="width: 100%;">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form method="post" class="user" action="{{ route('admin.') }}">
                                @csrf
                                <div class="form-group">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-user @error('email') is-invalid @enderror"
                                        name="email" 
                                        id="exampleInputEmail" 
                                        aria-describedby="emailHelp"
                                        placeholder="Enter Email Address..."
                                        value="{{ old('email') }}"
                                    >
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" 
                                        class="form-control form-control-user @error('password') is-invalid @enderror"
                                        name="password" 
                                        id="exampleInputPassword" 
                                        placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">{{ __('Forgot Your Password?') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection