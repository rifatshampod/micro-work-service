<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="Create gig : "/>

  <body>
    <!-- Hero start -->
    <section class="hero SingleJobHero">
      <x-header/>
      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="singleJobHeroContent">
            <div class="text-center">
              <h3 class="cl-white">Gig DETAIL</h3>
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
                  <li
                    class="breadcrumb-item cursor cl-white"
                    onclick="location.href='allJob.html'"
                  >
                    Gigs
                  </li>
                  <li class="breadcrumb-item cl-white">Gig Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <!----------Job Details Start------------->
    <section class="jobDetails py-5">
      <div class="container">
        <div class="row">
          <div class="col-xxl-9 col-xl-8 mb-3">
              <div class="createGigImg mb-4"> <!-- single gig image-->
                  <img src="/{{$gigs->gig_image}}" alt="">
              </div>
            <div class="singleJobMidLeft p-4 rounded-3">
              <div class="d-flex align-items-center mb-4">
                <div
                  class="sJMLIcon d-flex justify-content-center align-items-center bg-cl-light-pink2 rounded-3 me-3"
                >
                  <i class="fas fa-clipboard-check cl-pm fs20"></i>
                </div>
                <div class="">
                  <div class="">
                    <h3 class="cl-mat-black fw-bold">
                      {{$gigs->title}}
                    </h3>
                  </div>
                  <div class="d-flex">
                    <div class="d-flex cl-grey me-3">
                      <div class="me-2">
                        <i class="fas fa-th-large"></i>
                      </div>
                      <div class="text-center">
                        <p class="cl-pm fw-bold">
                          {{$gigs->category_name}}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-4">
                <div class="mb-4">
                  <h4 class="cl-deep-blue">Description:</h4>
                </div>
                <div class="cl-grey">
                  <small>
                    {{$gigs->description}}
                  </small>
                </div>
              </div>
              <div class="mb-4">
                <div class="mb-4">
                  <h4 class="cl-deep-blue">Features</h4>
                </div>
                <div class="cl-grey">
                  <small>
                    {{$gigs->features}}
                  </small>
                </div>
              </div>
              <div class="jobFlexDiv d-flex justify-content-between">
                <div>
                    <div class="mb-2">
                        <h4 class="cl-deep-blue">Duration</h4>
                      </div>
                      <div class="cl-grey">
                        <small>
                          <p>30 January 22, 03:00.00 pm</p>
                        </small>
                      </div>
                </div>
                <div>
                    <div class="mb-2">
                        <h4 class="cl-deep-blue">Starting Price</h4>
                      </div>
                      <div class="cl-grey">
                        <small>
                          <p>$ {{$gigs->price}}</p>
                        </small>
                      </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4">
            <div class="singleJobMidRight p-4">
              {{-- change user id with logged in user id  --}}
              @if($gigs->gigcreator==1) 
                <div class="mb-4 d-flex justify-content-end">
                    {{-- <div class="me-2">
                        <button class="px-3 py-2 rounded-3 border-0 bg-danger cl-white">Remove Gig</button>
                    </div> --}}
                    <div>
                        <button class="px-4 py-2 rounded-3 border-0 bg-cl-pm cl-white"
                         onclick="location.href='edit-gig={{$gigs->id}}'">Edit Gig</button>
                    </div>
                </div>
              @endif
                <div class="mb-3">
                    <h4 class="cl-mat-black fw-bold">
                        Creator’s Profile
                    </h4>
                </div>
                <div class="singleJobRightTop2nd d-flex align-items-center p-2 bg-cl-ash2 mb-3">
                  <div class="singleJobRightTop2ndImg singleContestRightTop2ndImg me-2">
                    @if($gigs['img']==null)
                          <img src="/assets/image/gigs/user.png" alt="" />
                        @else
                          <img src="{{$gigs['img']}}" alt="" />
                        @endif
                  </div>
                  <div>
                    <div>
                      <small class="fs16 cl-pm fw-bold">{{$gigs->user_name}}</small>
                    </div>
                    <div>
                      <small>{{$gigs->country}}</small>
                    </div>
                  </div>
                </div>
                <div>
                    <div> 
                        <h4 class="cl-mat-black">Speciality</h4>
                    </div>
                    <div>
                        <small class="cl-grey">{{$gigs->speciality}}</small>
                    </div>
                    <div class="mt-2">
                        <h4 class="cl-mat-black">Total Ratings: <span class="ms-3 cl-pm">4.3</span></h4>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----------Job Details End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <script src="js/main.js"></script>
  </body>
</html>
