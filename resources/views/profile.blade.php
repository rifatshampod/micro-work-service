<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets/>

  <body>
    <!-- Hero start -->
    <section class="hero SingleJobHero">
      <div class="topHeader bg-white">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center py-3">
            <div class="d-flex flex-wrap align-items-center">
              <div class="mx-2">
                <small class="fw-lighter"
                  ><i class="far fa-envelope me-2"></i
                  >ptoworkers@gmail.com</small
                >
              </div>
              <div
                class="topHeadPhone d-flex align-items-center mx-2 bg-cl-green"
              >
                <small class="fw-lighter"
                  ><i class="fas fa-phone-alt me-2"></i>+091-321654987</small
                >
              </div>
            </div>
            <div class="topSocial d-flex">
              <div
                class="topSocialIcon topSocialIcon2 d-flex justify-content-center align-items-center cursor me-3"
              >
                <i class="fab fa-facebook-f"></i>
              </div>
              <div
                class="topSocialIcon topSocialIcon2 d-flex justify-content-center align-items-center cursor"
              >
                <i class="fab fa-twitter"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Bottom Header-->
      <div class="bottomHeader bg-cl-navy-blue" id="navbar">
        <div class="container">
          <nav class="navbar navbar-expand-xl navbar-light">
            <div class="container-fluid px-0 py-2">
              <div class="bottomHeader-img cursor">
                <img
                  src="assets/image/logo.png"
                  alt=""
                  onclick="window.location.href='index.html'"
                />
              </div>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="index.html"
                      >Home</a
                    >
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="paymentHistory.html"
                      >Payment Proof</a
                    >
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="allJob.html"
                      >Find a Job</a
                    >
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="allGig.html"
                      >Find Gigs</a
                    >
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="employeeWalet.html">Post a Job</a>
                  </li>
                  <li class="nav-item mx-2 me-5">
                    <a class="nav-link text-white" href="support.html">Help</a>
                  </li>
                  <li class="nav-item navSignIn mx-1 px-3 mb-2">
                    <a
                      class="btn bg-cl-green border-0 px-3 text-white"
                      href="signIn.html"
                      role="button"
                      >Sign In</a
                    >
                  </li>
                  <li class="nav-item navSignIn mx-1 px-3 mb-2">
                    <a class="nav-link text-white" href="signUp.html">Sign Up</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="singleJobHeroContent">
            <div class="text-center">
              <h3 class="cl-white">My Wallet</h3>
            </div>
            <div class="breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li
                    class="breadcrumb-item cl-white cursor"
                    onclick="location.href='index.html'"
                  >
                    Home
                  </li>
                  <li class="breadcrumb-item cl-white">My Wallet</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <!----------Profile Start------------->
    <section class="profile p-100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="">
                        <div class="profileContent d-flex justify-content-between mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="profileContentImg me-3">
                                    <img src="assets/image/gigs/gigcard.jfif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <h4 class="cl-mat-black">Alissa White</h4>
                                    </div>
                                    <div>
                                        <h5>alissa2022@gmail.com</h5>
                                    </div>
                                    <div>
                                        <small class="cl-=cl-grey"><i class="fas fa-map-marker-alt cl-yellow me-2"></i> Bangladesh</small>
                                    </div>
                                </div>
                            </div>
                            <div class="profileEditBtn" onclick="location.href='profileEdit.html'">
                                <button class="px-5 py-2 cl-pm bg-white rounded-3 fw-bold">Edit</button>
                            </div>
                        </div>
                        <div>
                            <div class="mb-4">
                                <h4>Change Password</h4>
                            </div>
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label class="mb-2">New Password</label>
                                            <input type="password" class="form-control w-100 bg-cl-ash2">
                                          </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label class="mb-2">Confirm Password</label>
                                            <input type="password" class="form-control w-100 bg-cl-ash2">
                                          </div>
                                    </div>
                                    <div class="mt-4">
                                        <button class="px-5 py-2 cl-white bg-cl-pm border-0 rounded-3 fw-bold">Submit</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------Profile End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <script src="js/main.js"></script>
  </body>
</html>
