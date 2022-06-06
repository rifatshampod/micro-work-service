<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="Profile : "/>

  <body>
    <!-- Hero start -->
    <section class="hero SingleJobHero">
      <x-header/>
      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="singleJobHeroContent">
            <div class="text-center">
              <h3 class="cl-white">My Profile</h3>
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
                  <li class="breadcrumb-item cl-white">My Profile</li>
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
          {{-- Bootstrap alert to show any change --}}
          @if (Session::get('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{Session::get('status')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="">
                        <div class="profileContent d-flex justify-content-between mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="profileContentImg me-3">
                                  @if(Auth::user()->img==null)
                                    <img src="assets/image/gigs/user.png" alt="">
                                  @else
                                    <img src="{{Auth::user()->img}}" alt="">
                                  @endif
                                    
                                </div>
                                <div>
                                    <div>
                                        <h4 class="cl-mat-black">{{ Auth::user()->name }}</h4>
                                    </div>
                                    <div>
                                        <h5>{{session('user')}}</h5>
                                    </div>
                                    <div>
                                        <small class="cl-=cl-grey"><i class="fas fa-envelope cl-yellow me-2"></i>{{ Auth::user()->email }}</small>
                                    </div>
                                    <div>
                                        <small class="cl-=cl-grey"><i class="fas fa-map-marker-alt cl-yellow me-2"></i>{{ Auth::user()->country }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="profileEditBtn" onclick="location.href='edit-profile'">
                                <button class="px-5 py-2 cl-pm bg-white rounded-3 fw-bold">Edit Profile</button>
                            </div>
                            {{-- <div class="profileEditBtn">
                                <a class="px-5 py-2 cl-white bg-cl-red border-0 rounded-3 fw-bold" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                            </div> --}}
                        </div>
                        <div>
                            <div class="mb-4">
                                <h4>Change Password</h4>
                            </div>
                            <form action="edit-password" method="POST">
                              @csrf
                                <div class="row">
                                  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label class="mb-2">New Password</label>
                                            <input type="password" name="password" class="form-control w-100 bg-cl-ash2" required>
                                          </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label class="mb-2">Confirm Password</label>
                                            <input type="password" class="form-control w-100 bg-cl-ash2" required>
                                          </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="px-5 py-2 cl-white bg-cl-pm border-0 rounded-3 fw-bold">Submit</button>
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
