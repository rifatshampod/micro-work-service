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
              <h3 class="cl-white">Edit Job</h3>
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
                  <li class="breadcrumb-item cl-white">Edit Job</li>
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
        <form action="updateJob" method="POST" enctype="multipart/form-data">
          @csrf

          <input type="hidden" name="job_id" value="{{$jobs->id}}">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-12 mb-4">
                  <div class="">
                    <label class="mb-2 fw-bold">Job Title</label>
                    <input
                      type="text" name="name"
                      class="form-control w-100 bg-cl-ash2" value="{{$jobs->name}}"
                      
                    />
                  </div>
                  @error('name')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{$message}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @enderror
                </div>
                <div class="col-lg-12 mb-4">
                  <div class="">
                    <label class="fw-bold mb-2">Job Description</label>
                    <textarea
                      id="summernote"
                      value="{{$jobs->description}}"
                      class="form-control" name="description"
                      rows="7"
                      
                    >{{$jobs->description}}</textarea>
                  </div>
                </div>
                <div class="col-lg-12 mb-4">
                  <div class="">
                    <label class="fw-bold mb-2">Job Requirements</label>
                    <textarea name="requirement"
                    id="summernote2"
                      class="form-control"
                      rows="7"
                      value="{{$jobs->requirement}}"
                    >{{$jobs->requirement}}</textarea>
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
                    <label class="mb-2 fw-bold">Due Date</label>
                    <input
                      type="date" name="completion"
                      class="form-control w-100 bg-cl-ash2"
                      value="{{$jobs->completion}}"
                    />
                  </div>
                </div>
                
                
              </div>
            </div>

            <div class="mb-4">
              <div class="form-check me-2">
                <input
                  class="form-check-input"
                  type="checkbox" name="agreement"
                  value="1"
                  required
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
            <div>
              <button
                type="submit"
                class="bg-cl-pm border-0 rounded-3 px-4 py-2 cl-white"
              >
                Update Job
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!----------Create Job End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <!-- Load FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="js/main.js"></script>
    <script src="js/fileupload.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
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

      $('#summernote2').summernote({
        placeholder: 'Job Completion requirements',
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
    </script>
  </body>
</html>
