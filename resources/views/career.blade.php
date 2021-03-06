<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="Career : "/>

  <body>
    <x-header2/>

    <!----------Career Start------------->
    <section class="career py-5">
      <div class="container">
        @error('file')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
        @enderror
        @error('name')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
        @enderror
        @error('email')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
        @enderror
        @if (Session::get('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{Session::get('status')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="text-center">
            <h2 class="cl-mat-black text-center">Career</h2>
          </div>
          <div class="text-end">
            <p class="cl-pm">View All Jobs</p>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-4">
            <div class="careercard bg-cl-ash2 p-4 rounded-3">
              <div class="d-flex justify-content-between mb-3">
                <div>
                  <div>
                    <h5 class="cl-mat-black fw-bold">Web Designer</h5>
                  </div>
                  <div>
                    <small class="cl-dark-ash2 fw-bold">
                      Full Time Vacancy: 01
                    </small>
                  </div>
                </div>
                <div>
                  <div class="text-end">
                    <small class="cl-dark-ash2 fw-bold"> Dead Line </small>
                  </div>
                  <div>
                    <small class="cl-dark-ash2">02 March 2022</small>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <small class="cl-dark-ash2"
                  >At vero eos et accusamus et iusto odio dignissimos ducimus
                  qui blanditiis praesentium voluptatum deleniti atque corrupti
                  quos dolores et quas.</small
                >
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <button
                    class="px-3 py-2 border-0 bg-cl-pm rounded-3 cl-white"
                  >
                    Apply This Job
                  </button>
                </div>
                <div>
                  <li class="bookmark click-icon">
                    <p
                      class="bg-cl-light-pink d-flex justify-content-center align-items-center"
                    >
                      <i class="fas fa-heart toggle-box"></i>
                    </p>
                  </li>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-4">
            <div class="careercard bg-cl-ash2 p-4 rounded-3">
              <div class="d-flex justify-content-between mb-3">
                <div>
                  <div>
                    <h5 class="cl-mat-black fw-bold">Web Designer</h5>
                  </div>
                  <div>
                    <small class="cl-dark-ash2 fw-bold">
                      Full Time Vacancy: 01
                    </small>
                  </div>
                </div>
                <div>
                  <div class="text-end">
                    <small class="cl-dark-ash2 fw-bold"> Dead Line </small>
                  </div>
                  <div>
                    <small class="cl-dark-ash2">02 March 2022</small>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <small class="cl-dark-ash2"
                  >At vero eos et accusamus et iusto odio dignissimos ducimus
                  qui blanditiis praesentium voluptatum deleniti atque corrupti
                  quos dolores et quas.</small
                >
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <button
                    class="px-3 py-2 border-0 bg-cl-pm rounded-3 cl-white"
                  >
                    Apply This Job
                  </button>
                </div>
                <div>
                  <li class="bookmark click-icon">
                    <p
                      class="bg-cl-light-pink d-flex justify-content-center align-items-center"
                    >
                      <i class="fas fa-heart toggle-box"></i>
                    </p>
                  </li>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-4">
            <div class="careercard bg-cl-ash2 p-4 rounded-3">
              <div class="d-flex justify-content-between mb-3">
                <div>
                  <div>
                    <h5 class="cl-mat-black fw-bold">Web Designer</h5>
                  </div>
                  <div>
                    <small class="cl-dark-ash2 fw-bold">
                      Full Time Vacancy: 01
                    </small>
                  </div>
                </div>
                <div>
                  <div class="text-end">
                    <small class="cl-dark-ash2 fw-bold"> Dead Line </small>
                  </div>
                  <div>
                    <small class="cl-dark-ash2">02 March 2022</small>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <small class="cl-dark-ash2"
                  >At vero eos et accusamus et iusto odio dignissimos ducimus
                  qui blanditiis praesentium voluptatum deleniti atque corrupti
                  quos dolores et quas.</small
                >
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <button
                    class="px-3 py-2 border-0 bg-cl-pm rounded-3 cl-white"
                  >
                    Apply This Job
                  </button>
                </div>
                <div>
                  <li class="bookmark click-icon">
                    <p
                      class="bg-cl-light-pink d-flex justify-content-center align-items-center"
                    >
                      <i class="fas fa-heart toggle-box"></i>
                    </p>
                  </li>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mb-5 px-2">
          <div class="col-xl-6 col-lg-8 col-12">
            <div class="text-center mb-5">
              <h2 class="cl-mat-black fw-bold">Upload Your CV</h2>
            </div>

            <!-------------------      form starts          ------------------>

            {{-- @if($errors->any())
            @foreach ($errors->all() as $err)
             <li>{{$err}}</li>
            @endforeach
            @endif --}}  <!-- to show all errors together as list -->

            <form action="career" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <input class="w-100 px-3 py-2 bg-cl-ash2 border-0 rounded-3" type="text" 
                    name="name" placeholder="Your Name"/>
                    <!-- to show errors individually -->
                    <span style="color: red;">
                      @error('name'){{$message}}@enderror
                    </span>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <input
                      class="w-100 px-3 py-2 bg-cl-ash2 border-0 rounded-3"
                      type="Email" name="email"
                      placeholder="Email"
                    />
                    <!-- to show errors individually -->
                    <span style="color: red;">
                      @error('email'){{$message}}@enderror
                    </span>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <input
                      class="w-100 px-3 py-2 bg-cl-ash2 border-0 rounded-3"
                      type="number" name="phone"
                      placeholder="Contact No."
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <select
                    class="form-select border-0 mb-3 rounded-3 cl-grey bg-cl-ash2"
                    aria-label="Default select example" name="department"
                  >
                    <option selected>Select Department</option>
                    <option value="1">Design</option>
                    <option value="2">Video</option>
                    <option value="3">It</option>
                  </select>
                </div>
                <div class="col-lg-12">
                  <label for="file">CV / Resume</label> : 
                  <input type="file" name="file">
                  <div class="fileUpload bg-cl-ash2">
                    <!-- We'll transform this input into a pond  --
                    <input type="file" class="filepond mb-5" name="file"
                        multiple data-max-file-size="1TB" data-max-files="1" />
                        !-- to show errors individually -->
                    <span style="color: red;">
                      @error('file'){{$message}}@enderror
                    </span>
                  </div>
                </div>
                <div class="d-flex justify-content-center mb-5">
                  <button type="submit"
                    class="bg-cl-pm cl-white px-5 py-2 border-0 rounded-3">
                  Submit
                </button>
                </div>
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </section>
    <!----------Career End------------->

    <!-- Bottom Section -->
      <x-footer/>

    <!-- Load FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="js/main.js"></script>
    <script src="js/fileupload.js"></script>
  </body>
</html>
