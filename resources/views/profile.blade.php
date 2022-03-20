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
                                        <h5>{{session('user')}}</h5>
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
                                    <div class="mt-4">
                                        <a class="px-5 py-2 cl-white bg-cl-red border-0 rounded-3 fw-bold" href="/logout">Log Out</a>
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
