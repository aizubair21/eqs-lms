<div>
    <div class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="" class="h4">StudySync-HUB</a>
                </div>
                <div class="card-body">


                    <form wire:submit.prevent="login" method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                            <input type="email" wire:model="email"
                                class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                value="{{ old('email') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        @error('email')
                            <strong class="text text-danger mb-2"> {{ $message }} </strong>
                        @enderror

                        {{-- <div class="input-group mb-3"> --}}
                        <div class="input-group mt-3">
                            <input type="password" wire:model="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('email')
                            <strong class="text text-danger mb-2"> {{ $message }} </strong>
                        @enderror
                        <div class="row mt-2">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" value="true" wire:model="remember-me" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <form action="{{ route('login') }}" method="POST" class="d-none" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                value="{{ old('email') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        @error('email')
                            <strong class="text text-danger mb-2"> {{ $message }} </strong>
                        @enderror

                        {{-- <div class="input-group mb-3"> --}}
                        <div class="input-group mt-3">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('email')
                            <strong class="text text-danger mb-2"> {{ $message }} </strong>
                        @enderror
                        <div class="row mt-2">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" value="true" name="remember-me" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    {{-- <div class="social-auth-links text-center mt-2 mb-3">
                  <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                  </a>
                  <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                  </a>
                </div> --}}
                    <!-- /.social-auth-links -->

                    <p class="mb-1">
                        <a wire:navigate href="#">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a wire:navigate href="{{ route('register') }}" class="text-center">Register a new
                            membership</a>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->

    </div>
</div>
