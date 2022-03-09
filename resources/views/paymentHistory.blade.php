<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets/>

  <body>
    <!-- Hero start -->
    <section class="">
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
    </section>
    <!-- Hero end -->

    <!----------Payment History Start------------->
    <section class="pHistory py-5">
        <div class="container">
            <div>
                <div class="mb-3">
                    <h2 class="cl-mat-black fw-bold">Recent Withdraw History</h2>
                </div>
                <div class="pHistorySearchDiv d-flex justify-content-end mb-3 px-1">
                    <!-- <div class="pHistorySearch px-2 w-20 d-flex justify-content-between align-items-center rounded-3"> -->
                        <div class="pHistorySearch">
                            <input class="p-2 w-100 rounded-3" type="text" placeholder="Search">
                        </div>
                        <!-- <div class="">
                            <i class="fas fa-search cursor pe-2"></i>
                        </div> -->
                    <!-- </div> -->
                </div>
            </div>
            <div class="pHistoryTable table-responsive mb-4">
                <table class="table table-hover table-borderless">
                    <thead>
                      <tr class="cl-deep-blue fw-bold">
                        <th scope="col">Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Method</th>
                        <th scope="col">Status</th>
                        <th class="text-end" scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="cl-dark-ash2">
                        <td>001</td>
                        <td>sha**22@gmail.com</td>
                        <td>$50.00</td>
                        <td>DBBL</td>
                        <td>
                            <div class="">
                                <small class="pTablestatus bg-cl-light-green px-4 py-1">Paid</small>
                            </div>
                        </td>
                        <td class="text-end">19 march 2022, 2.00 pm</td>
                      </tr>
                      <tr class="cl-dark-ash2">
                        <td>002</td>
                        <td>sha**22@gmail.com</td>
                        <td>$50.00</td>
                        <td>DBBL</td>
                        <td>
                            <div class="">
                                <small class="pTablestatus bg-cl-light-red px-4 py-1">UnPaid</small>
                            </div>
                        </td>
                        <td class="text-end">19 march 2022, 2.00 pm</td>
                      </tr>
                      <tr class="cl-dark-ash2">
                        <td>003</td>
                        <td>sha**22@gmail.com</td>
                        <td>$50.00</td>
                        <td>DBBL</td>
                        <td>
                            <div class="">
                                <small class="pTablestatus bg-cl-light-green px-4 py-1">Paid</small>
                            </div>
                        </td>
                        <td class="text-end">19 march 2022, 2.00 pm</td>
                      </tr>
                      <tr class="cl-dark-ash2">
                        <td>004</td>
                        <td>sha**22@gmail.com</td>
                        <td>$50.00</td>
                        <td>DBBL</td>
                        <td>
                            <div class="">
                                <small class="pTablestatus bg-cl-light-red px-4 py-1">UnPaid</small>
                            </div>
                        </td>
                        <td class="text-end">19 march 2022, 2.00 pm</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="pagination d-flex justify-content-center align-items-center">
              <div class="d-flex justify-content-center flex-wrap">
                  <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                      <i class="fas fa-chevron-left"></i>
                  </div>
                  <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-cl-pm cl-white mx-2">
                      1
                  </div>
                  <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                      2
                  </div>
                  <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                      3
                  </div>
                  <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                      4
                  </div>
                  <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                      5
                  </div>
                  <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                      <i class="fas fa-chevron-right"></i>
                  </div>
              </div>
          </div>
        </div>
    </section>
    <!----------Payment History End------------->

    <!----------Bottom Banner Start------------->
    <section class="bottomBanner">
      <div class="container">
        <div class="bottomBannerContent cl-white fw-bold">
          <h2>The Ultimate Way To <br> Earn money online.</h2>
        </div>
      </div>
    </section>
    <!----------Bottom Banner End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <script src="js/main.js"></script>
  </body>
</html>
