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
            
          </div>
        </div>
        <div class="table-responsive-md jobTable">
            <div class="mt-5">
              <h4>Submissions</h4>
            </div>
            @if ($submission->isEmpty())
                <div class="text-center">No submission yet</div>
            @else
              <table class="table table-borderless px-5">
              <thead>
                <tr>
                  <th scope="col">Submitted By</th>
                  <th scope="col">Details</th>
                  <th scope="col">Attachment</th>
                  <th class="text-end" scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($submission as $item)
                    <tr class="tableRow bg-white rounded-3 cl-grey">
                  <td scope="row">{{$item['username']}}</td>
                  <td scope="row">{{$item['details']}}</td>
                  <td><a href="/{{$item['attachment']}}" target="_blank">
                    <i class="fas fa-link cl-pm me-2"></i>{{$item['attachment']}}
                  </a></td>
                  <td>
                      <div class="d-flex justify-content-end">
                          <div class="submissionIcon d-flex justify-content-center align-items-center mx-1 cursor">
                            <i class="fa fa-check cl-pm"></i>
                          </div>
                          <div class="submissionIcon d-flex justify-content-center align-items-center mx-1 cursor">
                            <i class="fa fa-times text-danger"></i>
                          </div>
                      </div>
                  </td>
                </tr>
                @endforeach

                
              </tbody>
          </table>
            @endif
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
