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
              <h3 class="cl-white">Create a New Gig</h3>
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
                  <li class="breadcrumb-item cl-white">Create a New Gig</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <!----------Create Job Start------------->
    <section class="createGig py-5">
      <div class="container">
        <form action="addGig" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-12 mb-4">
                  <div class="">
                    <label class="mb-2 fw-bold">Gig Title</label>
                    <input
                      type="text" name="title"
                      class="form-control w-100 bg-cl-ash2"
                      placeholder="Enter Gig Title"
                    />
                  </div>
                  @error('title')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{$message}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @enderror
                </div>
                <div class="col-lg-12 mb-4">
                  <div class="">
                    <label class="fw-bold mb-2">Gig Description</label>
                    <textarea
                    id="summernote"
                      class="form-control" name="description"
                      rows="7"
                      placeholder="Enter Gig Description"
                    ></textarea>
                  </div>
                </div>
                <div class="col-lg-12 mb-4">
                  <div class="">
                    <label class="fw-bold mb-2">Gig Features</label>
                    <textarea
                    id="summernote2"
                      class="form-control" name="feature"
                      rows="7"
                      placeholder="Enter Gig Description"
                    ></textarea>
                  </div>
                </div>

                <!--
                <div class="col-lg-6">
                  
                  <div class="inputTag">
                    <label class="mb-2 fw-bold">Special Skills</label>
                    <div class="inputTagContent">
                      <ul>
                        <input type="text" name="speciality" />
                      </ul>
                    </div>
                  </div>   
                </div>  -->
                <div class="col-lg-6">
                  <div class="">
                    <label class="mb-2 fw-bold">Catagory</label>
                    <select name="category"
                      class="form-select bg-cl-ash2"
                      aria-label="Default select example"
                    >
                      @foreach($categorylist as $item)
                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="">
                    <label class="mb-2 fw-bold">Duration</label>
                    <select name="duration"
                      class="form-select bg-cl-ash2"
                      aria-label="Default select example"
                    >
                      <option selected>Select Duration</option>
                      <option value="1">One Month</option>
                      <option value="2">Three Months</option>
                      <option value="3">Six Months</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="">
                    <label class="mb-2 fw-bold">Starting Price</label>
                    <input
                      type="number" name="price"
                      class="form-control w-100 bg-cl-ash2"
                      id="startPrice"
                      placeholder="Enter Amount" onchange="pricePercentage()"
                    />
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="">
                    <label class="mb-2 fw-bold"> Posting Cost</label>
                    <div class="createJobCampaign d-flex rounded-3 bg-cl-ash2">
                      <div
                        class="createJobCampaignIcon d-flex justify-content-center align-items-center"
                      >
                        <span id="costPercent">{{$costing->charge}}</span>%
                      </div>
                      <div class="d-flex align-items-center px-4">
                        <input name="cost" class="fs16 cl-pm bg-cl-ash2" style="border:0" type="number" value="" id="postingCost" readonly/>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 mb-4">
                  <div
                    class="createJobTotalCost bg-cl-sky d-flex justify-content-between align-items-center px-4 py-2"
                  >
                    <div>
                      <small class="fs20 fw-bold">Total Cost</small>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="me-2">
                        <i class="fas fa-dollar-sign cl-green"></i>
                      </div>
                      <div>

                        <input name="totalCost" class="fs20 fw-bold w-30 bg-cl-sky" style="border:0" type="number" value="{{$costing->charge}}" readonly/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12 mt-4">
                  <label class="fw-bold mb-2">Gig Feature Image</label>
                  <input type="file" name="file"/>
                  <div class="fileUpload bg-cl-ash2 mb-4">
                    <!-- We'll transform this input into a pond  -->
                    
                  </div>
                </div>

                <div class="col-lg-12 mt-4">
                  <label class="fw-bold mb-2">Gig Speciality</label>
                    <textarea
                    
                      class="form-control" name="speciality"
                      rows="7"
                      placeholder="Enter Gig Description"
                    ></textarea>
                  
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-check me-2">
                <input
                  class="form-check-input"
                  type="checkbox" name="agreement"
                  value="1"
                  id="flexCheckDefault6"
                />
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
           <div id="balanceAlert" class="alert alert-danger" role="alert">
             insufficient credits balance please recharge to continue.
            </div>
            <div class="mb-4">
           <button id="submitBtn" type="button" onclick="walletCheck()" class="bg-cl-pm border-0 rounded-3 px-4 py-2 cl-white">Create Gig</button>
          </div>
          <div class="row">
                        <div class="col-lg-6">
                            <div class="createJobRightBottom d-flex justify-content-between align-items-center rounded-3 p-5">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="createJobRightBottomIcon d-flex justify-content-center align-items-center me-2">
                                        <i class="fas fa-wallet fs20 cl-white"></i>
                                    </div>
                                    <div>
                                        <small class="fs20 cl-white fw-bold">My Wallet</small>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 mb-1">
                                            <i class="fas fa-dollar-sign cl-green fs30"></i>
                                        </div>
                                        <div class="mb-2">
                                            <small class="fs36 fw-bold cl-white" id="walletBalance">
                                               {{collect($balance)->sum('amount')-collect($withdraw)->sum('amount')+ Auth::user()->earned - Auth::user()->spent}}
                                            </small>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="bg-cl-pm border-0 rounded-3 px-4 py-2 cl-white" onclick="location.href='recharge-wallet'">Recharge</button>
                                    </div>
                                </div>
                            </div>
                        </div>
          </div>
          </div>
        </form>
      </div>
    </section>
    <!----------Create Job End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <!-- Load FilePond library -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
      //description
      $('#summernote').summernote({
        placeholder: 'Job Descriptions',
        tabsize: 2,
        height: 150,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });

      //features
      $('#summernote2').summernote({
        placeholder: 'Job Descriptions',
        tabsize: 2,
        height: 150,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });

      //Price percentage
        function pricePercentage(){
          var startPrice = parseFloat(document.getElementById("startPrice").value);
          var postingCost = parseFloat(document.getElementById("costPercent").innerHTML);
          var costPercentVal = (startPrice / 100) * postingCost;
          var totalCost = startPrice + costPercentVal;
          document.getElementById("postingCost").value = costPercentVal;
          document.getElementById("totalCost").value = totalCost;
        }

      //wallet check
      function walletCheck(){
        var totalCost = parseFloat(document.getElementById("totalCost").value);
        var walletBalance = parseFloat(document.getElementById("walletBalance").innerHTML);
        if( totalCost > walletBalance ){
          document.getElementById("balanceAlert").style.display = "block";
        }
        else{
          var submitBtn = document.getElementById("submitBtn").type = "submit";
        }
      }


    </script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="js/main.js"></script>
    <script src="js/fileupload.js"></script>
  </body>
</html>
