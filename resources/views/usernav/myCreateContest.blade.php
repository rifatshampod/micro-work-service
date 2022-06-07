<!DOCTYPE html>
<html lang="en">
<!-- link and header data -->
<x-assets title="My contest : " />

  <body>
    <!-- Hero start -->
    <section class="">
      <x-header2 />
    </section>
    <!-- Hero end -->

    <!----------User Profile Start------------->
    <div class="container">
    <div class="py-5 mb-3">
    <div class="row">
    <div class="col-lg-12">
        <div>
                            <div class="mb-2">
          <div class="d-flex justify-content-end">
            <div>
                <button class="px-4 py-2 bg-primary border-0 rounded-3 text-white" 
                onclick="location.href='add-contest'">
                    Post a New Contest
                </button>
            </div>
          </div>
          <div class="cl-mat-black">
            <h4>My Contest</h4>
          </div>
        </div>
                <div class="row">
          @foreach($contestlist as $item)

            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
            
            <div class="card teamCard cursor" 
            onclick="location.href='my-contest={{$item['id']}}'"
            >
              <div class="teamCardImage">
                <img
                  src="
                  /{{$item['feature_image']}}
                  "
                  class="card-img-top"
                  alt="..."
                />
              </div>
              <div class="card-body gigCardBody bg-cl-ash2">
                <div class="gigCardBodyTop">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                      <div>
                        <small class="cl-pm fw-bold">
                          {{$item['contest_name']}}
                        </small>
                      </div>
                    </div>
                    
                  </div>
                  <div>
                    <small class="cardText cl-dark-ash2">
                      {{$item['description']}}
                      </small
                    >
                  </div>
                </div>

                <div
                  class="gigCardBodyBottom d-flex justify-content-between align-items-center"
                >
                  <div>
                      <small class="cl-yellow fw-bold"
                        ><i class="fas fa-calendar-check"></i> 
                        {{$item['due_date']}}
                        </small
                      >
                    </div>
                  <div>
                    <small class="cl-dark-ash2 fs12"
                      >Prize
                      <span class="cl-yellow fs16 fw-bold">
                        ${{$item['prize_money']}}
                      </span></small
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @if($contestlist->isEmpty())
          <div style="height: 200px;">
            No Contest available
          </div>
            
          @endif
        </div>
        <!-- --------------------------------- pagination ------------------------>
      <div class="pagination d-flex justify-content-center align-items-center">
          {{$contestlist->links('vendor.pagination.bootstrap-4')}}
      </div>
<!-- --------------------------------- pagination ------------------------>
      </div>
    </div>
    </div>
  </div>
    </div>
    <!----------User Profile End------------->


    <!-- Bottom Section -->
    <!------------------------Footer------------------------------>
    <x-footer/>
    <script src="js/main.js"></script>
  </body>
</html>
