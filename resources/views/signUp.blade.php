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
                <form action="">
                  <div class="signInFeildBox">
                    <input class="w-100 mb-3 py-2 px-3 rounded-3 border-0 bg-cl-ash2" type="text" placeholder="FUll Name" />
                  </div>
                  <div class="signInFeildBox">
                    <input class="w-100 mb-3 py-2 px-3 rounded-3 border-0 bg-cl-ash2"  type="email" placeholder="Email" />
                  </div>
                  <div class="signInFeildBox">
                    <input class="w-100 mb-3 py-2 px-3 rounded-3 border-0 bg-cl-ash2"  type="number" placeholder="Phone Number" />
                  </div>
                  <div>
                    <select
                      class="form-select border-0 mb-3 rounded-3 cl-grey bg-cl-ash2"
                      aria-label="Default select example">
                      <option selected>Select Country</option>
                      <option value="1">Bangladesh</option>
                      <option value="2">Denmark</option>
                      <option value="3">Germany</option>
                    </select>
                  </div>
                  <div class="signInFeildBox">
                    <input class="w-100 mb-3 py-2 px-3 rounded-3 border-0 bg-cl-ash2"  type="password" placeholder="Password" />
                  </div>
                  <div class="signInFeildBox">
                    <input class="w-100 mb-3 py-2 px-3 rounded-3 border-0 bg-cl-ash2"  type="password" placeholder="Confirm password" />
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
                      <button class="w-100 py-2 border-0 rounded-3 bg-cl-pm cl-white">Sign Up</button>
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
