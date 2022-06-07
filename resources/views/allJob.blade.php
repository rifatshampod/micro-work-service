<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="All Jobs : "/>
  
  <body>
    <x-header-white/>

    <!----------Job Start------------->
    <section class="jobs bg-cl-light-pink p-100">
      <div class="container">
        @if (Session::get('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{Session::get('status')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="d-flex justify-content-end mb-4">
            <div>
                <button class="px-4 py-2 bg-primary border-0 rounded-3 text-white" 
                onclick="location.href='add-job'">
                    Post a New Job
                </button>
            </div>
          </div>
        <div class="mb-5">
          <div class="cl-dark-ash2">
            <h4>Finds Jobs</h4>
          </div>
          <div class="cl-mat-black">
            <h2>All Jobs</h2>
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
                  <th scope="col">Success Rate</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <!-- one row start with feature 1-->
                @foreach ($featuredJob as $item)
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
                  @if($item['total_submitted']==0)
                    <td>No Rating</td>
                    @else
                    <td>{{round($item['total_approved']/$item['total_submitted']*100)}} %</td>
                  @endif
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

                @foreach ($joblist as $item)
                  <tr class="tableRow bg-white rounded-3 cl-grey">
                  <td scope="row">
                  
                    {{$item['name']}}</td>
                  <td><i class="fas fa-link cl-pm me-2"></i>{{$item['target']}}</td>
                  <td>{{$item['completion']}}</td>
                  <td>
                      <div class="tableAvNumber d-flex justify-content-center align-items-center bg-cl-pm rounded-3">
                          <span class="text-white">{{$item['due_availability']}}</span>
                      </div>
                  </td>
                  <td>{{$item['price']}} $</td>
                  @if($item['total_submitted']==0)
                    <td>No Rating</td>
                    @else
                    <td>{{round($item['total_approved']/$item['total_submitted']*100)}} %</td>
                  @endif
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
      {{-- <div class="pagination d-flex justify-content-center align-items-center">
          {{$joblist->links('vendor.pagination.bootstrap-4')}}
      </div> --}}
<!-- --------------------------------- pagination ------------------------>

      </div>
    </section>
    <!----------Job End------------->

    <!----------Bottom Banner Start------------->
    <section class="bottomBanner">
      <div class="container">
        <div class="bottomBannerContent cl-white fw-bold">
          <h2>The Ultimate Way To <br> Earn money online.</h2>
        </div>
      </div>
    </section>
    <!----------Bottom Banner End------------->

    <!-- Bottom Section -->
    <x-footer/>
  </body>
</html>
