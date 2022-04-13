<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="Create job : "/>

  <body>
    <!-- Hero start -->
    <section class="hero SingleJobHero">
      <x-header/>
      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="singleJobHeroContent">
            <div class="text-center">
              <h3 class="cl-white">Create a New Job</h3>
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
                  <li class="breadcrumb-item cl-white">Create a New Job</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <!----------Create Job Start------------->
    <section class="createJob py-5">
        <div class="container">
            <form action="addJob" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Job Title</label>
                                    <input type="text" name="title" class="form-control w-100 bg-cl-ash2" placeholder="Enter Job Title">
                                    @error('title')
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          {{$message}}
                                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                                    @enderror
                                  </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Catagory</label>
                                    <select name="category" class="form-select bg-cl-ash2" aria-label="Default select example">
                                      @foreach($categorylist as $item)
                                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                                      @endforeach
                                      </select>
                                  </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Target Workers</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check me-2 mb-4">
                                            <input name="target" class="form-check-input" type="radio" value="International" id="flexCheckDefault1">
                                            <label class="form-check-label" for="flexCheckDefault1">
                                              International
                                            </label>
                                          </div>
                                          <div class="form-check me-2 mb-4">
                                            <input name="target" class="form-check-input" type="radio" value="Europe-West" id="flexCheckDefault2">
                                            <label class="form-check-label" for="flexCheckDefault2">
                                                Europe West
                                            </label>
                                          </div>
                                          <div class="form-check me-2 mb-4">
                                            <input name="target" class="form-check-input" type="radio" value="Usa-Western" id="flexCheckDefault3">
                                            <label class="form-check-label" for="flexCheckDefault3">
                                                Usa Western
                                            </label>
                                          </div>
                                          <div class="form-check me-2 mb-4">
                                            <input name="target" class="form-check-input" type="radio" value="Europe-East" id="flexCheckDefault4">
                                            <label class="form-check-label" for="flexCheckDefault4">
                                                Europe East
                                            </label>
                                          </div>
                                          <div class="form-check me-2 mb-4">
                                            <input name="target" class="form-check-input" type="radio" value="Asia And Africa" id="flexCheckDefault5">
                                            <label class="form-check-label" for="flexCheckDefault5">
                                                Asia And Africa
                                            </label>
                                          </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Time To Complete Job</label>
                                    <input name="dueTime" type="Date" class="form-control w-100 bg-cl-ash2">
                                  </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Available Amount</label>
                                    <input type="number" id="availableAmount" onblur="countSum()" name="availability" class="form-control w-100 bg-cl-ash2" placeholder="Enter Amount">
                                    @error('availability')
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          {{$message}}
                                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                                    @enderror
                                  </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Price Per Job</label>
                                    <input type="number" id="pricePerJob" onblur="countSum()" step=".01" name="price" class="form-control w-100 bg-cl-ash2" placeholder="Enter Amount">
                                    @error('price')
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          {{$message}}
                                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                                    @enderror
                                  </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Campaign Posting Cost</label>
                                    <div class="createJobCampaign d-flex rounded-3">
                                        <div class="createJobCampaignIcon d-flex justify-content-center align-items-center">
                                            <i class="fas fa-dollar-sign cl-pm"></i>
                                        </div>
                                        <div class="d-flex align-items-center px-4">
                                            <input name="cost" class="fs16 cl-pm" id="cost" onblur="countSum()" style="border:0" type="number" value="10" readonly/>
                                            
                                        </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="createJobTotalCost bg-cl-sky d-flex justify-content-between align-items-center px-4 py-2">
                                    <div>
                                        <small class="fs20 fw-bold">Total Cost</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <i class="fas fa-dollar-sign cl-green"></i>
                                        </div>
                                        <div>
                                        <input name="totalCost" id="totalCost" onblur="countSum()" class="fs20 fw-bold w-30 bg-cl-sky" style="border:0" type="number" readonly/>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-check me-2">
                                    <input class="form-check-input" name="agreement" type="radio" id="flexCheckDefault6">
                                    <label class="form-check-label" for="flexCheckDefault6">
                                        I agree with Quick F.A.Q. and T.O.S.
                                    </label>
                                    @error('agreement')
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          {{$message}}
                                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                                    @enderror
                                  </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="">
                                <label class="fw-bold mb-2">Job Description</label>
                                <textarea name="description" class="form-control"  rows="6" placeholder="Enter job Description"></textarea>
                              </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="">
                                <label class="fw-bold mb-2">Completion Requirements</label>
                                <textarea name="requirement" class="form-control"  rows="6" placeholder="Enter job Completion Requirements"></textarea>
                              </div>
                        </div>
                        
                    </div>
                </div>
                <div>
                  <button type="submit" class="bg-cl-pm border-0 rounded-3 px-4 py-2 cl-white">Create Job</button>
              </div>
            </div>
        </form>
        </div>
    </section>
    <!----------Create Job End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <script src="js/main.js"></script>
  </body>
</html>
