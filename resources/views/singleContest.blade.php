<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="Job : "/>

  <body>
    <!-- Hero start -->
    <section class="hero SingleJobHero">
      
      <x-header/>

      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="singleJobHeroContent">
            <div class="text-center">
              <h3 class="cl-white">Contest DETAIL</h3>
            </div>
            <div class="breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li
                    class="breadcrumb-item cl-white cursor"
                    onclick="location.href='/'"
                  >
                    Home
                  </li>
                  <li
                    class="breadcrumb-item cursor cl-white"
                    onclick="location.href='/contests'"
                  >
                    All Contests
                  </li>
                  <li class="breadcrumb-item cl-white">Contest Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <!----------Single Job Start------------->
    <section class="SingleJob py-5">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 col-lg-8 mb-3">
            <div class="singleJobMidLeft p-4 rounded-3">
              <div class="d-flex align-items-center mb-4">
                {{--  --}}
                <div
                  class="sJMLIcon d-flex justify-content-center align-items-center bg-cl-light-pink2 rounded-3 me-3"
                >
                  <i class="fas fa-clipboard-check cl-pm fs20"></i>
                </div>
                <div class="">
                  <div class="">
                    <h3 class="cl-mat-black fw-bold">
                      {{$contests->title}}
                    </h3>
                  </div>
                  <div class="jobFlexTopDiv d-flex">
                    <div class="d-flex cl-grey me-3">
                      <div class="me-2">
                        <i class="fas fa-th-large"></i>
                      </div>
                      <div class="text-center">
                        <p>
                          Catagory: <span class="cl-pm fw-bold">{{$contests->category_name}}</span>
                        </p>
                      </div>
                    </div>
                    <div class="d-flex cl-grey">
                      <div class="me-2">
                        <i class="far fa-clock"></i>
                      </div>
                      <div class="text-center">
                        <p>Due Date:  <span class="cl-pm fw-bold">{{$contests->completion}}</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-4">
                <div class="mb-4">
                  <h4 class="cl-deep-blue">Contest Description:</h4>
                </div>
                <div class="cl-grey">
                  <small>
                    <p>
                      {{$contests->description}} 
                    </p>
                  </small>
                </div>
                <div class="createGigImg mb-4"> <!-- single gig image-->
                  <img src="/{{$contests->feature_image}}" alt="" height="150">
              </div>
              </div>
              {{-- <div class="mb-4">
                <div class="mb-4">
                  <h4 class="cl-deep-blue">How to prove you done it:</h4>
                </div>
                <div class="cl-grey">
                  <small>
                    <p>
                      {{$jobs->requirement}}
                    </p>
                  </small>
                </div>
              </div> --}}
              {{-- <div>
                <div class="mb-4">
                  <h4 class="cl-deep-blue">This job is available to:</h4>
                </div>
                <div class="cl-grey">
                  <small>
                    <p>{{$jobs->target}}</p>
                  </small>
                </div>
              </div> --}}
            </div>
          </div>
          <div class="col-xl-3 col-lg-4">
            
            <div class="singleJobMidRight p-4 rounded-3">
              <div class="mb-3">
                <h4 class="cl-mat-black fw-bold">Submit Proof</h4>
              </div>
              <form action="submit-proof" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="job_id" value="{{$contests->id}}">
                <input type="hidden" name="post_type" value="2">
                <div class="mb-2">
                  <small>Your Proof</small>
                </div>
                <div class="mb-3">
                  <textarea
                    class="w-100 rounded-3"
                    name="description"
                    id=""
                    cols="20"
                    rows="6"
                  ></textarea>
                </div>
                <div class="bg-cl-ash p-3 rounded-3 mb-3">
                  <small class="cl-pm fs12"
                    >Please also upload a ScreenShot of proof Files allowed:
                    *.jpg, *.png, *.zip, *.pdf (?)</small
                  >
                </div>
                <div class="mb-4">
                  <!-- We'll transform this input into a pond  -->
                  <input
                    type="file"
                    class="mb-3"
                    name="file"
                    multiple
                    data-max-file-size="1TB"
                    data-max-files="1"
                  />
                </div>
                <div>
                  <button type="submit"
                    class="w-100 py-2 bg-cl-pm cl-white border-0 rounded-3"
                  >
                    Submit Proof
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row align-items-center p-150">
          <div class="col-lg-6">
            <div class="singleJobMidBottomLeft">
              <div>
                <h2 class="fw-bold">
                  Fllow 4 Easy <br />
                  Steps
                </h2>
              </div>
              <div class="pb-5">
                <p class="cl-pm fw-bold fs20">
                  Instant APPROVAL only <br />
                  sign up
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="singleJobBottomRight">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                  <div class="sJBRCard sJBRCard2 bg-cl-ash mb-4">
                    <div
                      class="sJBRCardIcon d-flex justify-content-center mb-3"
                    >
                      <i class="fas fa-hand-holding-water fs20"></i>
                    </div>
                    <div class="text-center">
                      <h4 class="fw-bold">$ {{$contests->prize_money}}</h4>
                    </div>
                    <div class="cl-grey text-center">
                      <small>The fund to be added to your account.</small>
                    </div>
                    <div class="sJBRCardImg">
                      <img src="assets/image/dot/dot1.png" alt="" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                  <div class="sJBRCard bg-cl-ash mb-4">
                    <div
                      class="sJBRCardIcon d-flex justify-content-center mb-3"
                    >
                      <i class="far fa-clock fs20"></i>
                    </div>
                    <div class="text-center">
                      <h4 class="fw-bold">{{$contests->completion}}</h4>
                    </div>
                    <div class="cl-grey text-center">
                      <small>Time required to complete this job.</small>
                    </div>
                    <div class="sJBRCardImg">
                      <img src="assets/image/dot/dot2.png" alt="" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                  <div class="sJBRCard sJBRCard2 bg-cl-ash mb-4">
                    <div
                      class="sJBRCardIcon d-flex justify-content-center mb-3"
                    >
                      <i class="fab fa-cc-diners-club fs20"></i>
                    </div>
                    <div class="text-center">
                      <h4 class="fw-bold">Contest Result Publishion : {{$contests->result_date}}</h4>
                    </div>
                    <div class="cl-grey text-center">
                      <small>The slots available for this job.</small>
                    </div>
                    <div class="sJBRCardImg">
                      <img src="assets/image/dot/dot3.png" alt="" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                  <div class="sJBRCard bg-cl-ash mb-4">
                    <div
                      class="sJBRCardIcon d-flex justify-content-center mb-3"
                    >
                      <i class="fas fa-gavel fs20"></i>
                    </div>
                    <div class="sJBRCardBtn d-flex justify-content-center mb-2">
                      <button class="bg-cl-pm cl-white border-0 py-2 px-3">
                        Submit Proof
                      </button>
                    </div>
                    <div class="cl-grey text-center">
                      <small>See how to complete this jobs</small>
                    </div>
                    <div class="sJBRCardImg">
                      <img src="assets/image/dot/dot4.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----------Single Job End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <!-- Load FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="js/main.js"></script>
    <script src="js/fileupload.js"></script>
  </body>
</html>
