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
              <h3 class="cl-white">Create a New Job</h3>
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
                  <li class="breadcrumb-item cl-white">Create a New Job</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <!----------Create Job Start------------->
    <section class="createJob py-5">
        <div class="container">
            <form action="">
            <div class="row">
                <div class="col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Job Title</label>
                                    <input type="text" class="form-control w-100 bg-cl-ash2" placeholder="Enter Job Title">
                                  </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Catagory</label>
                                    <select class="form-select bg-cl-ash2" aria-label="Default select example">
                                        <option selected>Select Catagory</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                  </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Target Workers</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check me-2 mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                            <label class="form-check-label" for="flexCheckDefault1">
                                              International
                                            </label>
                                          </div>
                                          <div class="form-check me-2 mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                            <label class="form-check-label" for="flexCheckDefault2">
                                                Europe West
                                            </label>
                                          </div>
                                          <div class="form-check me-2 mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                            <label class="form-check-label" for="flexCheckDefault3">
                                                Usa Western
                                            </label>
                                          </div>
                                          <div class="form-check me-2 mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                            <label class="form-check-label" for="flexCheckDefault4">
                                                Europe East
                                            </label>
                                          </div>
                                          <div class="form-check me-2 mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                            <label class="form-check-label" for="flexCheckDefault5">
                                                Asia And Africa
                                            </label>
                                          </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Time To Complete Job</label>
                                    <input type="Date" class="form-control w-100 bg-cl-ash2">
                                  </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Time To Complete Job</label>
                                    <input type="number" class="form-control w-100 bg-cl-ash2" placeholder="Enter Amount">
                                  </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Price Per Job</label>
                                    <input type="number" class="form-control w-100 bg-cl-ash2" placeholder="Enter Amount">
                                  </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Campaign Posting Cost</label>
                                    <div class="createJobCampaign d-flex rounded-3">
                                        <div class="createJobCampaignIcon d-flex justify-content-center align-items-center">
                                            <i class="fas fa-dollar-sign cl-pm"></i>
                                        </div>
                                        <div class="d-flex align-items-center px-4">
                                            <small class="fs16 cl-pm">390</small>
                                        </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="createJobTotalCost bg-cl-sky d-flex justify-content-between align-items-center px-4 py-2">
                                    <div>
                                        <small class="fs20 fw-bold">Total Cost</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <i class="fas fa-dollar-sign cl-green"></i>
                                        </div>
                                        <div>
                                            <small class="fs20 fw-bold">0.50</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-check me-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                                    <label class="form-check-label" for="flexCheckDefault6">
                                        I agree with Quick F.A.Q. and T.O.S.
                                    </label>
                                  </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="">
                                <label class="fw-bold mb-2">Job Description</label>
                                <textarea class="form-control"  rows="6" placeholder="Enter job Description"></textarea>
                              </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="">
                                <label class="fw-bold mb-2">Completion Requirements</label>
                                <textarea class="form-control"  rows="6" placeholder="Enter job Completion Requirements"></textarea>
                              </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="createJobRightBottom d-flex justify-content-between align-items-center rounded-3 p-5">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="createJobRightBottomIcon d-flex justify-content-center align-items-center me-2">
                                        <i class="fas fa-wallet fs20 cl-white"></i>
                                    </div>
                                    <div>
                                        <small class="fs20 cl-white fw-bold">My Wallet</small>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 mb-1">
                                            <i class="fas fa-dollar-sign cl-green fs16"></i>
                                        </div>
                                        <div class="mb-2">
                                            <small class="fs20 fw-bold cl-white">4500.00</small>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="bg-cl-pm border-0 rounded-3 px-4 py-2 cl-white">Recharge</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                  <button type="submit" class="bg-cl-pm border-0 rounded-3 px-4 py-2 cl-white">Create Job</button>
              </div>
            </div>
        </form>
        </div>
    </section>
    <!----------Create Job End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <script src="js/main.js"></script>
  </body>
</html>
