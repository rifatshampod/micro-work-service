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
        <form action="updateGig" method="POST" enctype="multipart/form-data">
          @csrf

          <input type="hidden" name="gig_id" value="{{$gigs->id}}">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-12 mb-4">
                  <div class="">
                    <label class="mb-2 fw-bold">Gig Title</label>
                    <input
                      type="text" name="title"
                      class="form-control w-100 bg-cl-ash2" value="{{$gigs->title}}"
                      
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
                      value=""
                      class="form-control" name="description"
                      rows="7"
                      
                    >{{$gigs->description}}</textarea>
                  </div>
                </div>
                <div class="col-lg-12 mb-4">
                  <div class="">
                    <label class="fw-bold mb-2">Gig Features</label>
                    <textarea name="feature"
                      class="form-control"
                      rows="7"
                      value="{{$gigs->features}}"
                      placeholder="{{$gigs->features}}"
                    >{{$gigs->description}}</textarea>
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
                    <label class="mb-2 fw-bold">Starting Price</label>
                    <input
                      type="number" name="price"
                      class="form-control w-100 bg-cl-ash2"
                      value="{{$gigs->price}}"
                      placeholder="Enter Amount"
                    />
                  </div>
                </div>
                
                
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12 mt-4">
                  <input type="file" name="file"/>
                  <div class="fileUpload bg-cl-ash2 mb-4">
                    <!-- We'll transform this input into a pond  -->
                    
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
                Update Gig
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
  </body>
</html>
