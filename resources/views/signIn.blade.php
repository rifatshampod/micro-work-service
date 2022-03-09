<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets/>

  <body>
    <!----------------------Sing In start------------------------->
    <section class="signUp">
      <div class="container">
        <div class="signUpContent d-flex align-items-center justify-content-center p-50">
          <div class="signUpContentDiv">
            <div class="singUpImg cursor mx-auto mb-4" onclick="location.href='index.html'">
              <img src="assets/image/logo.png" alt="" />
            </div>
            <div class="signUpFeild bg-white">
              <div class="mb-3">
                <h3 class="cl-mat-black fw-bold">Sing In</h3>
              </div>
              <div>
                <form action="profile.html">
                  <div class="signInFeildBox">
                    <input class="w-100 mb-3 py-2 px-3 rounded-3 border-0 bg-cl-ash2"  type="email" placeholder="Email" />
                  </div>
                  <div class="signInFeildBox">
                    <input class="w-100 mb-3 py-2 px-3 rounded-3 border-0 bg-cl-ash2"  type="password" placeholder="Password" />
                  </div>
                  <div class="signInRemember mb-3 d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Remember Me
                        </label>
                      </div>
                      <div class="cursor" onclick="location.href='forgetpass.html'">
                        <p>Forget Password?</p>
                      </div>
                  </div>
                  <div class="mb-2">
                      <button class="w-100 py-2 border-0 rounded-3 bg-cl-pm cl-white">Sign In</button>
                  </div>
                </form>
                <div class="text-center cl-dark-ash2">
                    <p>Don't have an account yet? <span class="cursor cl-pm fw-bold" onclick="location.href='signUp.html'">Sign Up!</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----------------------Sing In End------------------------->
  </body>
</html>
