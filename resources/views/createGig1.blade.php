<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>P T O - Create Gig</title>
    <link rel="icon" href="Assets/Images/Header/fav.svg" type="image/icon" />

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Unicons CDN Link for Icons -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css"
    />
    <!-- Animated CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Animation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="js/animation.js"></script>
    <!-----Bootstrap Bundle-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <!-- file upload filepond -->
    <link
      href="https://unpkg.com/filepond/dist/filepond.css"
      rel="stylesheet"
    />
  </head>

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
                    <a class="nav-link text-white" href="index.html">Home</a>
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
                    <a class="nav-link text-white" href="employeeWalet.html"
                      >Post a Job</a
                    >
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
                    <a class="nav-link text-white" href="signUp.html"
                      >Sign Up</a
                    >
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
              <h3 class="cl-white">Create a New Gig</h3>
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
                  <li class="breadcrumb-item cl-white">Create a New Gig</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <!----------Create Job Start------------->
    <section class="createGig py-5">
      <div class="container">
        <form action="">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-12 mb-4">
                  <div class="">
                    <label class="mb-2 fw-bold">Gig Title</label>
                    <input
                      type="text"
                      class="form-control w-100 bg-cl-ash2"
                      placeholder="Enter Gig Title"
                    />
                  </div>
                </div>
                <div class="col-lg-12 mb-4">
                  <div class="">
                    <label class="fw-bold mb-2">Gig Description</label>
                    <textarea
                      class="form-control"
                      rows="7"
                      placeholder="Enter Gig Description"
                    ></textarea>
                  </div>
                </div>
                <div class="col-lg-12 mb-4">
                  <div class="">
                    <label class="fw-bold mb-2">Gig Features</label>
                    <textarea
                      class="form-control"
                      rows="7"
                      placeholder="Enter Gig Features"
                    ></textarea>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="inputTag">
                    <label class="mb-2 fw-bold">Catagory</label>
                    <div class="inputTagContent">
                      <ul>
                        <input type="text" />
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="">
                    <label class="mb-2 fw-bold">Catagory</label>
                    <select
                      class="form-select bg-cl-ash2"
                      aria-label="Default select example"
                    >
                      <option selected>Select Catagory</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12 mb-4">
                  <div class="">
                    <label class="mb-2 fw-bold">Duration</label>
                    <select
                      class="form-select bg-cl-ash2"
                      aria-label="Default select example"
                    >
                      <option selected>Select Duration</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="">
                    <label class="mb-2 fw-bold">Price</label>
                    <input
                      type="number"
                      class="form-control w-100 bg-cl-ash2"
                      placeholder="Enter Amount"
                    />
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="">
                    <label class="mb-2 fw-bold"> Posting Cost</label>
                    <div class="createJobCampaign d-flex rounded-3">
                      <div
                        class="createJobCampaignIcon d-flex justify-content-center align-items-center"
                      >
                        <i class="fas fa-dollar-sign cl-pm"></i>
                      </div>
                      <div class="d-flex align-items-center px-4">
                        <small class="fs16 cl-pm">390</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 mb-4">
                  <div
                    class="createJobTotalCost bg-cl-sky d-flex justify-content-between align-items-center px-4 py-2"
                  >
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
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12 mt-4">
                  <div class="fileUpload bg-cl-ash2 mb-4">
                    <!-- We'll transform this input into a pond  -->
                    <input
                      type="file"
                      class="filepond mb-3"
                      name="filepond"
                      multiple
                      data-max-file-size="1TB"
                      data-max-files="1"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-check me-2">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault6"
                />
                <label class="form-check-label" for="flexCheckDefault6">
                  I agree with Quick F.A.Q. and T.O.S.
                </label>
              </div>
            </div>
            <div>
              <button
                type="button"
                class="bg-cl-pm border-0 rounded-3 px-4 py-2 cl-white"
              >
                Create Gig
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!----------Create Job End------------->

    <!-- Bottom Section -->
    <!------------------------Footer------------------------------>
    <footer class="footer bg-cl-navy-blue py-5">
      <div class="container">
        <div class="footerLogo d-flex justify-content-center">
          <div class="footerLogoImg mb-5">
            <img src="assets/image/logo.png" alt="" />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 mb-4">
            <div>
              <div class="text-white fw-bold mb-3">
                <h4>Contact Us Now</h4>
              </div>
              <div class="text-white fw-lighterr d-flex align-items-center">
                <div>
                  <i class="far fa-envelope me-2 mt-2"></i>
                </div>
                <div>
                  <small>ptoworkers@gmail.com</small>
                </div>
              </div>
              <div class="text-white fw-lighterr d-flex align-items-center">
                <div>
                  <i class="fas fa-phone-alt me-2 mt-2"></i>
                </div>
                <div>
                  <small>+880-1676044462</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mb-4">
            <div>
              <div class="text-white fw-bold mb-3">
                <h4>Usefull Links</h4>
              </div>
              <div class="d-flex">
                <div class="me-4">
                  <div
                    class="text-white cursor"
                    onclick="location.href='index.html'"
                  >
                    <small>Home</small>
                  </div>
                  <div
                    class="text-white cursor"
                    onclick="location.href='terms.html'"
                  >
                    <small>Terms of Services</small>
                  </div>
                  <div
                    class="text-white cursor"
                    onclick="location.href='faq.html'"
                  >
                    <small>FAQs</small>
                  </div>
                  <div
                    class="text-white cursor"
                    onclick="location.href='support.html'"
                  >
                    <small>Support</small>
                  </div>
                </div>
                <div>
                  <div
                    class="text-white cursor"
                    onclick="location.href='about.html'"
                  >
                    <small>About Us</small>
                  </div>
                  <div
                    class="text-white cursor"
                    onclick="location.href='privacy.html'"
                  >
                    <small>Privacy Policy</small>
                  </div>
                  <div
                    class="text-white cursor"
                    onclick="location.href='refundpolicy.html'"
                  >
                    <small>Refund Policy</small>
                  </div>
                  <div
                    class="text-white cursor"
                    onclick="location.href='career.html'"
                  >
                    <small>Career</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mb-4">
            <div>
              <div class="text-white fw-bold mb-3">
                <h4>Payment Methods</h4>
              </div>
              <div class="text-white mb-2">
                <small>We Support</small>
              </div>
              <div class="d-flex">
                <div class="footerPmImg cursor">
                  <img src="assets/image/paypal.png" alt="" />
                </div>
                <div class="footerPmImg mx-2 cursor">
                  <img src="assets/image/neteller.png" alt="" />
                </div>
                <div class="footerPmImg cursor">
                  <img src="assets/image/skrill.png" alt="" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mb-4">
            <div>
              <div class="text-white fw-bold mb-3">
                <h4>Downloads</h4>
              </div>
              <div class="text-white mb-2">
                <small>Download Our App From</small>
              </div>
              <div
                class="footerApp bg-cl-pm d-flex align-items-center cursor px-3 py-2 rounded-3"
              >
                <div class="me-2">
                  <i class="fab fa-google-play cl-white"></i>
                </div>
                <div class="footerAppBtnContent text-white">
                  <h5>Google Play</h5>
                  <small>Get It Now</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!----------Copy Right------------------->
    <footer class="CopyRight bg-cl-navy-blue py-3">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="copyRightContentLeft text-white w-50">
          Ptoworkers.com copyright &copy; 2021. All rights reserved.
        </div>
        <div class="copyRightContentRight text-white">
          <small
            >Powered by <span class="cl-sky-blue cursor">NoboIT</span></small
          >
        </div>
      </div>
    </footer>

    <!-- Load FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="js/main.js"></script>
    <script src="js/fileupload.js"></script>
  </body>
</html>
