<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="Wallet : "/>

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

    <!----------My Wallet Start------------->
    <section class="myWallet py-5">
        <div class="container">
            <div class="myWalletTop d-flex">
                <div class="myWalletTopLeft bg-cl-ash w-60 p-5">
                    <div class="mb-3">
                        <h3>
                            Hi, This is your wallet
                        </h3>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <div class="myWalletCard bg-cl-sky-blue p-4">
                                    <div>
                                        <h4 class="fs18">Available Amount</h4>
                                    </div>
                                    <div>
                                        <p class="fs36 cl-pm fw-bold">$220.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="myWalletCard bg-cl-pink p-4">
                                    <div>
                                        <h4 class="fs18">Available Amount</h4>
                                    </div>
                                    <div>
                                        <p class="fs36 fw-bold">$220.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="myWalletTopRight d-flex justify-content-center align-items-center bg-cl-deep-blue w-40">
                    <div>
                        <div class="myWalletTopRightImg mb-4">
                            <img src="assets/image/allGigImg.png" alt="">
                        </div>
                        <div class="d-flex justify-content-center" onclick="location.href='employeeWalletEdit.html'">
                            <button class="px-4 py-2 bg-cl-pm border-0 rounded-3 cl-white">Recharge</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="myWalletBottom py-5">
                <div>
                    <div class="text-center mb-4">
                        <h2 class="cl-mat-black fw-bold">Recent Withdraw History</h2>
                        <h4 class="cl-dark-ash2">From 22 Jan, 2018</h4>
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
        </div>
    </section>
    <!----------My Wallet End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <script src="js/main.js"></script>
  </body>
</html>
