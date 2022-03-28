<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="Create account : "/>

  <body>
    <!----------------------Sing Up start------------------------->
    <section class="signUp">
      <div class="container">
        <div class="signUpContent d-flex align-items-center justify-content-center p-50">
          <div class="signUpContentDiv">
            <div class="singUpImg cursor mx-auto mb-4" onclick="location.href='index.html'">
              <img src="assets/image/logo.png" alt="" />
            </div>
            <div class="signUpFeild bg-white">
              <div class="mb-3">
                <h3 class="cl-mat-black fw-bold">Sing Up</h3>
              </div>
              <div>
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                  <div class="signInFeildBox">
                    <input id="name" class="w-100 mb-3 py-2 px-3 rounded-3 border-0 bg-cl-ash2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus type="text" placeholder="Full Name" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                  <div class="signInFeildBox">
                    <input id="email" class="w-100 mb-3 py-2 px-3 rounded-3 border-0 bg-cl-ash2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  type="email" placeholder="Email" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- 
                  <div class="signInFeildBox">
                    <input id="phone" class="w-100 mb-3 py-2 px-3 rounded-3 border-0 bg-cl-ash2"  type="number" placeholder="Phone Number" />
                  </div>  
                  <div>
                    <select id="country"
                      class="form-select border-0 mb-3 rounded-3 cl-grey bg-cl-ash2"
                      aria-label="Default select example" name="country">
                      <option selected>Select Country</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Denmark">Denmark</option>
                      <option value="Germany">Germany</option>
                    </select>
                  </div> -->
                  <div class="signInFeildBox">
                    <input id="password" class="w-100 mb-3 py-2 px-3 rounded-3 border-0 bg-cl-ash2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  type="password" placeholder="Password" />
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                  <div class="signInFeildBox">
                    <input id="password-confirm" class="w-100 mb-3 py-2 px-3 rounded-3 border-0 bg-cl-ash2"  type="password" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password"/>
                  </div>
                  <div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">
                          T.O.S <span class="fs10 cursor cl-pm fw-bold" onclick="location.href='terms.html'">View Terms of Services</span>
                        </label>
                      </div>
                      <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked>
                        <label class="form-check-label" for="flexCheckChecked2">
                            I wish to receive Newsletter
                        </label>
                      </div>
                  </div>
                  <div class="mb-2">
                      <button type="submit" class="w-100 py-2 border-0 rounded-3 bg-cl-pm cl-white">Sign Up</button>
                      
                  </div>
                </form>
                <div class="text-center cl-dark-ash2">
                    <p>Already a Member? <span class="cursor cl-pm fw-bold" onclick="location.href='/login'">Sign In</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----------------------Sing Up End------------------------->
  </body>
</html>
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  -->

