<!DOCTYPE html>
<html lang="en">

    <x-assets title=""/>
  <body>
    <!-- Hero start -->
    <section class="hero">

        <x-header/>

      <div class="container">
        <div class="heroContent">
          <div>
            <h4 class="cl-white">WELCOME TO</h4>
          </div>
          <div>
            <h1 class="cl-white">KBH WORKERS</h1>
          </div>
          <div class="mb-5">
            <h3 class="cl-white">The Ultimate Way To Earn Money Online.</h3>
          </div>
          <div class="heroButton d-flex">
            <div class="me-3 mb-3">
              <button class="cl-white rounded-3" onclick="location.href='jobs'">Find Jobs</button>
            </div>
            <div class="me-3 mb-3">
              <button class="cl-white rounded-3" onclick="location.href='gigs'">Find Gigs</button>
            </div>
            <div class="mb-3">
              
          <button class="cl-white rounded-3" onclick="location.href='contests'">Check Ongoing Contest</button>
          <!--
              <button class="cl-white rounded-3">Signup Now</button> -->
            </div>
          </div>
        </div>
      </div>
        <div class="">
          <div
            class="d-flex justify-content-between align-items-center breaking-news bg-white"
          >
            <div
              class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news"
            >
              <span class="d-flex align-items-center">&nbsp;KBH News</span>
            </div>
            <marquee
              class="news-scroll"
              behavior="scroll"
              direction="left"
              onmouseover="this.stop();"
              onmouseout="this.start();"
            >
            @foreach ($news as $item)
                <a href="#"
                >{{$item['news']}}
              </a>
              <span class="dot"></span>
            @endforeach
              
              
            </marquee>
          </div>
        </div>
    </section>
    <!-- Hero end -->

    <!--------Worker Step Start---------->
    <section class="workerStep bg-cl-ash p-150">
      <div class="container">
        <div class="workerSteps">
          <div class="text-center">
            <h3>Simple Steps</h3>
            <div class="d-flex justify-content-center">
              <div class="lines">
                <div class="daimond"></div>
              </div>
            </div>
          </div>
          <div class="text-center cl-grey mb-5">
            <h5></h5>
              Post a job to tell us about your project. We'll quickly match you
              with <br />
              the right freelancers.
            </h5>
          </div>
          <div class="row">
            <div class="col-lg-5 col-12 d-flex flex-column justify-content-center">
            <div class="mb-5">
              <div>
                <h3 class="cl-mat-black fw-bold">
                  For <span class="cl-pm">Worker</span>
                </h3>
              </div>
              <div>
                <h5>
                  Post a job to tell us about your project. We'll quickly <br> match
                  you with the right freelancers.
                </h5>
              </div>
            </div>
           </div>
            <div class="col-lg-7 col-12">
              <div class="row justify-content-center align-items-center">
                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                  <div
                    class="stepsCard d-flex flex-column justify-content-center align-items-center bg-white cursor mb-5"
                  >
                    <div
                      class="stepCardIcon d-flex justify-content-center align-items-center bg-cl-ash mb-2"
                    >
                      <i class="fas fa-user cl-pm"></i>
                    </div>
                    <div class="stepCardText cl-dark-ash">
                      <h5>Sign Up</h5>
                    </div>
                    <div class="stepCardSpan d-flex justify-content-center align-items-center bg-cl-pm">
                      <small class="cl-white">01</small>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                    <div
                    class="stepsCard d-flex flex-column justify-content-center align-items-center bg-white cursor mb-5"
                  >
                    <div
                      class="stepCardIcon d-flex justify-content-center align-items-center bg-cl-ash mb-2"
                    >
                    <i class="far fa-comment-alt cl-pm"></i>
                    </div>
                    <div class="stepCardText cl-dark-ash">
                      <h5>Verify Your Email</h5>
                    </div>
                    <div class="stepCardSpan d-flex justify-content-center align-items-center bg-cl-pm">
                      <small class="cl-white">02</small>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                    <div
                    class="stepsCard d-flex flex-column justify-content-center align-items-center bg-white cursor mb-5"
                  >
                    <div
                      class="stepCardIcon d-flex justify-content-center align-items-center bg-cl-ash mb-2"
                    >
                    <i class="fas fa-search cl-pm"></i>
                    </div>
                    <div class="stepCardText cl-dark-ash">
                      <h5>Find Job</h5>
                    </div>
                    <div class="stepCardSpan d-flex justify-content-center align-items-center bg-cl-pm">
                      <small class="cl-white">03</small>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                    <div
                    class="stepsCard d-flex flex-column justify-content-center align-items-center bg-white cursor mb-5"
                  >
                    <div
                      class="stepCardIcon d-flex justify-content-center align-items-center bg-cl-ash mb-2"
                    >
                    <i class="fas fa-search cl-pm"></i>
                    </div>
                    <div class="stepCardText cl-dark-ash">
                      <h5>Find Contest</h5>
                    </div>
                    <div class="stepCardSpan d-flex justify-content-center align-items-center bg-cl-pm">
                      <small class="cl-white">04</small>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                    <div
                    class="stepsCard d-flex flex-column justify-content-center align-items-center bg-white cursor mb-5"
                  >
                    <div
                      class="stepCardIcon d-flex justify-content-center align-items-center bg-cl-ash mb-2"
                    >
                    <i class="fas fas fa-align-justify cl-pm"></i>
                    </div>
                    <div class="stepCardText cl-dark-ash">
                      <h5>Submit Your Prof</h5>
                    </div>
                    <div class="stepCardSpan d-flex justify-content-center align-items-center bg-cl-pm">
                      <small class="cl-white">05</small>
                    </div>
                  </div>
                </div>
                 <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                    <div
                    class="stepsCard d-flex flex-column justify-content-center align-items-center bg-white cursor mb-5"
                  >
                    <div
                      class="stepCardIcon d-flex justify-content-center align-items-center bg-cl-ash mb-2"
                    >
                    <i class="fas fa-hand-holding-usd cl-pm"></i>
                    </div>
                    <div class="stepCardText cl-dark-ash">
                      <h5>Receive Funds</h5>
                    </div>
                    <div class="stepCardSpan d-flex justify-content-center align-items-center bg-cl-pm">
                      <small class="cl-white">06</small>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                    <div
                    class="stepsCard d-flex flex-column justify-content-center align-items-center bg-white cursor mb-5"
                  >
                    <div
                      class="stepCardIcon d-flex justify-content-center align-items-center bg-cl-ash mb-2"
                    >
                    <i class="fas fa-file cl-pm"></i>
                    </div>
                    <div class="stepCardText cl-dark-ash">
                      <h5>Gigs</h5>
                    </div>
                    <div class="stepCardSpan d-flex justify-content-center align-items-center bg-cl-pm">
                      <small class="cl-white">07</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--------Worker Step End---------->

    <!--------Buyer Step Start---------->
    <section class="buyerStep p-150">
            <div class="container">
              <div class="workerSteps">
                <div class="row">
                  <div class="col-lg-7 col-12">
                    <div class="row justify-content-center align-items-center">
                      <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                        <div
                          class="stepsCard d-flex flex-column justify-content-center align-items-center bg-cl-ash2 cursor mb-5"
                        >
                          <div
                            class="stepCardIcon d-flex justify-content-center align-items-center bg-cl-ash mb-2"
                          >
                            <i class="fas fa-user cl-mat-black"></i>
                          </div>
                          <div class="stepCardText cl-dark-ash">
                            <h5>Sign Up</h5>
                          </div>
                          <div class="stepCardSpan d-flex justify-content-center align-items-center bg-cl-mat-black">
                            <small class="cl-white">01</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                          <div
                          class="stepsCard d-flex flex-column justify-content-center align-items-center bg-cl-ash2 cursor mb-5"
                        >
                          <div
                            class="stepCardIcon d-flex justify-content-center align-items-center bg-cl-ash mb-2"
                          >
                          <i class="far fa-comment-alt cl-mat-black"></i>
                          </div>
                          <div class="stepCardText cl-dark-ash">
                            <h5>Verify Your Email</h5>
                          </div>
                          <div class="stepCardSpan d-flex justify-content-center align-items-center bg-cl-mat-black">
                            <small class="cl-white">02</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                          <div
                          class="stepsCard d-flex flex-column justify-content-center align-items-center bg-cl-ash2 cursor mb-5"
                        >
                          <div
                            class="stepCardIcon d-flex justify-content-center align-items-center bg-cl-ash mb-2"
                          >
                          <i class="fas fa-briefcase cl-mat-black"></i>
                          </div>
                          <div class="stepCardText cl-dark-ash">
                            <h5>Post a Job</h5>
                          </div>
                          <div class="stepCardSpan d-flex justify-content-center align-items-center bg-cl-mat-black">
                            <small class="cl-white">03</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                          <div
                          class="stepsCard d-flex flex-column justify-content-center align-items-center bg-cl-ash2 cursor mb-5"
                        >
                          <div
                            class="stepCardIcon d-flex justify-content-center align-items-center bg-cl-ash mb-2"
                          >
                          <i class="fas fa-network-wired cl-mat-black"></i>
                          </div>
                          <div class="stepCardText cl-dark-ash">
                            <h5>Post A contest</h5>
                          </div>
                          <div class="stepCardSpan d-flex justify-content-center align-items-center bg-cl-mat-black">
                            <small class="cl-white">04</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                          <div
                          class="stepsCard d-flex flex-column justify-content-center align-items-center bg-cl-ash2 cursor mb-5"
                        >
                          <div
                            class="stepCardIcon d-flex justify-content-center align-items-center bg-cl-ash mb-2"
                          >
                          <i class="fas fa-file-archive cl-mat-black"></i>
                          </div>
                          <div class="stepCardText cl-dark-ash">
                            <h5>Gigs</h5>
                          </div>
                          <div class="stepCardSpan d-flex justify-content-center align-items-center bg-cl-mat-black">
                            <small class="cl-white">05</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                          <div
                          class="stepsCard d-flex flex-column justify-content-center align-items-center bg-cl-ash2 cursor mb-5"
                        >
                          <div
                            class="stepCardIcon d-flex justify-content-center align-items-center bg-cl-ash mb-2"
                          >
                          <i class="fas fa-hand-holding-usd cl-mat-black"></i>
                          </div>
                          <div class="stepCardText cl-dark-ash">
                            <h5>Pay Charge</h5>
                          </div>
                          <div class="stepCardSpan d-flex justify-content-center align-items-center bg-cl-mat-black">
                            <small class="cl-white">06</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-12 d-flex flex-column justify-content-center text-end">
                    <div class="">
                      <div>
                        <h3 class="cl-mat-black fw-bold">
                          For <span class="cl-pm">Buyer</span>
                        </h3>
                      </div>
                      <div>
                        <h5>
                          Post a job to tell us about your project. We'll quickly <br> match
                          you with the right freelancers.
                        </h5>
                      </div>
                    </div>
                   </div>
                </div>
              </div>
            </div>
    </section>
    <!--------Buyer Step End---------->

    <!----------Job Start------------->
    <section class="jobs bg-cl-light-pink p-150">
        <div class="container">
            <div>
                <div class="text-center">
                    <h3>Featured Jobs</h3>
                    <div class="d-flex justify-content-center">
                      <div class="lines">
                        <div class="daimond"></div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center cl-grey mb-5">
                    <h5></h5>
                    Post a job to tell us about your project. We'll quickly match you with <br> the right freelancers.
                    </h5>
                  </div>
            </div>
            <div class="table-responsive-md jobTable">
          <table class="table table-borderless px-5">
              <thead>
                <tr>
                  <th scope="col">Job Name</th>
                  <th scope="col">Target</th>
                  <th scope="col">Competion Time</th>
                  <th scope="col">Availability</th>
                  <th scope="col">Payment</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <!-- one row start with feature 1-->
                @foreach ($joblist as $item)
                  <tr class="tableRow bg-white rounded-3 cl-grey">
                  <td scope="row">
                    <!-- featured priority level 1 -->
                    @if ($item['featured']==1)
                    <div class="stickeyImg">
                      <img src="assets/image/stickey2.png" alt="">
                    </div>
                    @endif
                    <!-- featured priority level 2 -->
                    @if ($item['featured']==2)     
                      <div class="stickeyImg">
                      <img src="assets/image/stickey1.png" alt="">
                    </div>
                    @endif
                    {{$item['name']}}</td>
                  <td><i class="fas fa-link cl-pm me-2"></i>{{$item['target']}}</td>
                  <td>{{$item['completion']}}</td>
                  <td>
                      <div class="tableAvNumber d-flex justify-content-center align-items-center bg-cl-pm rounded-3">
                          <span class="text-white">{{$item['due_availability']}}</span>
                      </div>
                  </td>
                  <td>{{$item['price']}} $</td>
                  <td>
                    <a href="single-job={{$item['id']}}">
                      <div class="tableRowBtn text-end">
                      <a href="job-details={{$item['id']}}">
                          <button class="py-1 px-4 bg-cl-pm border-0 rounded-3 cl-white">Apply Job</button></a>
                      </div>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
<!-- --------------------------------- pagination ------------------------>
      <div class="pagination d-flex justify-content-center align-items-center">
          {{$joblist->links('vendor.pagination.bootstrap-4')}}
      </div>
<!-- --------------------------------- pagination ------------------------>
        </div>
    </section>
    <!----------Job End------------->

    <!----------Bottom Banner Start------------->
    <section class="bottomBanner">
      <div class="container">
        <div class="bottomBannerImg">
          <div class="d-flex justify-content-center align-items center py-4">
          <img src="assets/image/hand.png" alt="">
          </div>
        </div>
        <div class="bottomBannerContent cl-white fw-bold">
          <h2>The Ultimate Way To <br> Earn money online.</h2>
        </div>
      </div>
    </section>
    <!----------Bottom Banner End------------->

    <x-footer/>
  </body>
</html>