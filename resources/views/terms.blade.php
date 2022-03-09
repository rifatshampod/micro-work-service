<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets data="terms&conditions"/>

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

    <!----------Terms And Services Start------------->
    <section class="terms p-150">
        <div class="container">
            <div class="mb-5">
                <div class="cl-dark-ash2">
                  <h4>Agreement</h4>
                </div>
                <div class="cl-mat-black">
                  <h2>Terms of Services</h2>
                </div>
              </div>
              <div class="termsContent cl-dark-ash2 mb-5">
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. 
                  </p>
                  <p>
                    as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                  </p>
                  <p>
                      <ul>
                          <li>Aenean lobortis mauris non libero venenatis lobortis.</li>
                          <li>Aenean lobortis mauris non libero venenatis lobortis.</li>
                          <li>Aenean lobortis mauris non libero venenatis lobortis.</li>
                          <li>Aenean lobortis mauris non libero venenatis lobortis.</li>
                          <li>Aenean lobortis mauris non libero venenatis lobortis.</li>
                      </ul>
                  </p>
                  <p>
                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.
                  </p>
                  <p>
                    No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure.
                  </p>
              </div>
              <div class="termsBtn d-flex">
                  <div class="termsBtn1 me-3">
                      <button class="bg-white px-3 py-2 rounded-3">Not Right Now..</button>
                  </div>
                  <div class="termsBtn2">
                    <button class="bg-cl-pm px-3 py-2 rounded-3 border-0 cl-white">I Agree With terms</button>
                </div>
              </div>
        </div>
    </section>
    <!----------Terms And Services End------------->

    <!-- Bottom Section -->
    <x-footer/>

  </body>
</html>
