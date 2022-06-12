<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="Create gig : "/>
  {{-- <style>
          .rating {
        display: inline-block;
        position: relative;
        height: 50px;
        line-height: 50px;
        font-size: 50px;
      }

      .rating label {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        cursor: pointer;
      }

      .rating label:last-child {
        position: static;
      }

      .rating label:nth-child(1) {
        z-index: 5;
      }

      .rating label:nth-child(2) {
        z-index: 4;
      }

      .rating label:nth-child(3) {
        z-index: 3;
      }

      .rating label:nth-child(4) {
        z-index: 2;
      }

      .rating label:nth-child(5) {
        z-index: 1;
      }

      .rating label input {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
      }

      .rating label .icon {
        float: left;
        color: transparent;
      }

      .rating label:last-child .icon {
        color: #000;
      }

      .rating:not(:hover) label input:checked ~ .icon,
      .rating:hover label:hover input ~ .icon {
        color: #09f;
      }

      .rating label input:focus:not(:checked) ~ .icon:last-child {
        color: #000;
        text-shadow: 0 0 5px #09f;
      }
  </style> --}}
  <style>
          .rating {
        --dir: right;
        --fill: gold;
        --fillbg: rgba(100, 100, 100, 0.15);
        --star: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.25l-6.188 3.75 1.641-7.031-5.438-4.734 7.172-0.609 2.813-6.609 2.813 6.609 7.172 0.609-5.438 4.734 1.641 7.031z"/></svg>');
        --stars: 5;
        --starsize: 3rem;
        --symbol: var(--star);
        --value: 1;
        --w: calc(var(--stars) * var(--starsize));
        --x: calc(100% * (var(--value) / var(--stars)));
        block-size: var(--starsize);
        inline-size: var(--w);
        position: relative;
        touch-action: manipulation;
        -webkit-appearance: none;
      }
      [dir="rtl"] .rating {
        --dir: left;
      }
      .rating::-moz-range-track {
        background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
        block-size: 100%;
        mask: repeat left center/var(--starsize) var(--symbol);
      }
      .rating::-webkit-slider-runnable-track {
        background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
        block-size: 100%;
        mask: repeat left center/var(--starsize) var(--symbol);
        -webkit-mask: repeat left center/var(--starsize) var(--symbol);
      }
      .rating::-moz-range-thumb {
        height: var(--starsize);
        opacity: 0;
        width: var(--starsize);
      }
      .rating::-webkit-slider-thumb {
        height: var(--starsize);
        opacity: 0;
        width: var(--starsize);
        -webkit-appearance: none;
      }
      .rating, .rating-label {
        display: block;
        font-family: ui-sans-serif, system-ui, sans-serif;
      }
      .rating-label {
        margin-block-end: 1rem;
      }

      /* NO JS */
      .rating--nojs::-moz-range-track {
        background: var(--fillbg);
      }
      .rating--nojs::-moz-range-progress {
        background: var(--fill);
        block-size: 100%;
        mask: repeat left center/var(--starsize) var(--star);
      }
      .rating--nojs::-webkit-slider-runnable-track {
        background: var(--fillbg);
      }
      .rating--nojs::-webkit-slider-thumb {
        background-color: var(--fill);
        box-shadow: calc(0rem - var(--w)) 0 0 var(--w) var(--fill);
        opacity: 1;
        width: 1px;
      }
      [dir="rtl"] .rating--nojs::-webkit-slider-thumb {
        box-shadow: var(--w) 0 0 var(--w) var(--fill);
      }
  </style>

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
                    {!!$gigs->description!!}
                  </small>
                </div>
              </div>
              <div class="mb-4">
                <div class="mb-4">
                  <h4 class="cl-deep-blue">Features</h4>
                </div>
                <div class="cl-grey">
                  <small>
                    {!!$gigs->features!!}
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
              @if($gigs->gigcreator==Auth::user()->id) 
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
                        <h4 class="cl-mat-black">Total Ratings: <span class="ms-3 cl-pm">{{round(collect($ratings)->sum('rating')/collect($ratings)->count('rating'),1)}}</span></h4>
                    </div>
                    <!-------------------add rating ------------------>
                    {{-- @if($condition)
                      
                    @endif --}}
                    <div class="mt-4 text-center">
                        <form  method="post" action="give-rating">
                          @csrf
                          <input type="hidden" name="gig_id" value="{{$gigs->id}}">
                          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                          Add Rating
                          <input
                              class="rating rating--nojs"
                              max="5"
                              step="1"
                              type="range"
                              name="stars">
                          
                          <button class="px-4 py-2 rounded-3 border-0 bg-cl-pm cl-white mt-2 text-center" type="submit">Submit Rating</button>
                        </form>
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



    <!--- modal popup ends --->

    <script src="js/main.js"></script>


  </body>
</html>
