        <!-- top header -->
      <div class="topHeader">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center py-3">
            <div class="d-flex flex-wrap align-items-center">
              <div class="mx-2">
                <small class="fw-lighter cl-white cursor"
                  ><i class="far fa-envelope me-2"></i
                  >ptoworkers@gmail.com</small
                >
              </div>
              <div
                class="topHeadPhone d-flex align-items-center mx-2 bg-cl-green"
              >
                <small class="fw-lighter cl-white cursor"
                  ><i class="fas fa-phone-alt me-2"></i>+091-321654987</small
                >
              </div>
            </div>
            <div class="topSocial d-flex">
            <div class="mb-2">
              <small class="topSocialHelp cl-white me-3 cursor" onclick="location.href='support'">Help & Support</small>
            </div>
            <div class="d-flex">
            <div
                class="topSocialIcon d-flex justify-content-center align-items-center cursor mx-1"
              >
                <i class="fab fa-facebook-f cl-white"></i>
              </div>
              <div
                class="topSocialIcon d-flex justify-content-center align-items-center cursor mx-1"
              >
                <i class="fab fa-twitter cl-white"></i>
              </div>
              <div
                class="topSocialIcon d-flex justify-content-center align-items-center cursor mx-1"
              >
                <i class="fab fa-youtube cl-white"></i>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Bottom Header-->
      <div class="bottomHeader" id="navbar">
        <div class="container">
          <nav class="navbar navbar-expand-xl navbar-light">
            <div class="container-fluid px-0 py-2">
              <div class="bottomHeader-img cursor">
                <img
                  src="assets/image/logo.png"
                  alt=""
                  onclick="window.location.href='/'"
                />
              </div>
              <button
                class="navbar-toggler border-0"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <i class="fa fa-align-center text-white"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="/"
                      >Home</a
                    >
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="/payment-proof"
                      >Payment Proof</a
                    >
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="/jobs"
                      >Find a Job</a
                    >
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="/gigs"
                      >Find Gigs</a
                    >
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="/contests"
                      >Find Contests</a
                    >
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="add-job">Post a Job</a>
                  </li>
                  
                          @guest
                            @if (Route::has('login'))
                                <li class="nav-item navSignIn mx-1 px-3 mb-2">
                                  <a class="btn border-0 px-3 text-white"
                                    href="{{ route('login') }}"
                                    role="button">Sign In</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item navSignIn mx-1 px-3 mb-2">
                                  <a class="btn text-white" href="{{ route('register') }}">Sign Up</a>
                                </li> 
                            @endif
                            @else
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      User Menu
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <button class="dropdown-item" type="button" onclick="location.href='profile'">
                                      {{ Auth::user()->name }} <span class="bg-cl-pm ms-4 cl-white px-3 py-1 rounded-3">Profile</span>
                                    </button>
                                    <ul class="">
                                      
                                      <li><button class="dropdown-item" type="button" onclick="location.href='my-jobs'">My Create Job</button></li>
                                      <li><button class="dropdown-item" type="button" onclick="location.href='applied-jobs'">My Applied Job</button></li>
                                      <li><button class="dropdown-item" type="button" onclick="location.href='my-gigs'">My Gigs</button></li>
                                      <li><button class="dropdown-item" type="button" onclick="location.href='my-campaigns'">My Campaigns</button></li>
                                      <li><button class="dropdown-item" type="button" onclick="location.href='my-contests'">My Create Contest</button></li>
                                      <li><button class="dropdown-item" type="button" onclick="location.href='applied-contests'">My Applied Contest</button></li>
                                      
                                    </ul>
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                          @endguest

                        <li>
                        <div class="d-flex mobileNavSocial">
                        <div
                        class="topSocialIcon d-flex justify-content-center align-items-center cursor mx-1">
                        <i class="fab fa-facebook-f cl-white"></i>
                       </div>
                       <div
                         class="topSocialIcon d-flex justify-content-center align-items-center cursor mx-1">
                        <i class="fab fa-twitter cl-white"></i>
                        </div>
                       <div
                        class="topSocialIcon d-flex justify-content-center align-items-center cursor mx-1"
                        >
                        <i class="fab fa-youtube cl-white"></i>
                        </div>
                        </div>
                          </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>

