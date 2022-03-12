<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="Forget Password : "/>

  <body>
    <!----------------------Forget Pass start------------------------->
    <section class="signUp">
      <div class="container">
        <div class="signUpContent d-flex align-items-center justify-content-center p-50">
          <div class="signUpContentDiv">
            <div class="singUpImg cursor mx-auto mb-4" onclick="location.href='index.html'">
              <img src="assets/image/logo.png" alt="" />
            </div>
            <div class="signUpFeild bg-white">
              <div class="mb-3 text-center">
                <h3 class="cl-mat-black fw-bold">Recover Password</h3>
              </div>
              <div class="mb-3 cl-dark-ash2">
                  <small>Complete the form below to receive an email with the authorization code needed to reset your password.</small>
              </div>
              <div>
                <form action="">
                  <div class="signInFeildBox">
                    <input class="w-100 mb-3 py-2 px-3 rounded-3 border-0 bg-cl-ash2"  type="email" placeholder="Email" />
                  </div>
                  <div class="mb-3 d-flex justify-content-between">
                    <div class="cl-dark-ash2">
                        <small>
                            If you can't remember your password. Enter your e-mail address in the above box. Then click (Recover Password) and we'll send you a recovery password.
                        </small>
                    </div>
                  </div>
                  <div class="mb-2">
                      <button class="w-100 py-2 border-0 rounded-3 bg-cl-pm cl-white">Recover Password</button>
                  </div>
                </form>
                <div class="text-center cl-dark-ash2">
                    <p>Aleady a Member? <span class="cursor cl-pm fw-bold" onclick="location.href='signIn.html'">Sign In</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----------------------Forget Pass End------------------------->
  </body>
</html>
