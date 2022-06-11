<!DOCTYPE html>
<html lang="en">
  <x-assets title="All Contests : "/>

  <body>
    <!-- Hero start -->
    <section class="hero SingleJobHero">
      <x-header/>

      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="singleJobHeroContent">
            <div class="text-center">
              <h3 class="cl-white">All Contests</h3>
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
                    onclick="location.href=''"
                  >
                    Find Contests
                  </li>
                  <li class="breadcrumb-item cl-white">All</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <!----------All Gigs Start------------->
    <section class="allGig py-5">
      <div class="container">
        @if (Session::get('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{Session::get('status')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

        <div class="d-flex justify-content-between mb-4">
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Select category
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
             @foreach ($categorylist as $item)
                  <li><a class="dropdown-item" href="contests-category={{$item['id']}}">{{$item['name']}}</a></li>
              @endforeach
            </ul>
          </div>
            <div>
                <button class="px-4 py-2 bg-primary border-0 rounded-3 text-white" 
                onclick="location.href='add-contest'">
                    Post a New Contest
                </button>
            </div>
          </div>
        <div class="row">
          @foreach ($contestlist as $item)

            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
            
            <div class="card teamCard cursor" onclick="location.href='contest-details={{$item['id']}}'">
              <div class="teamCardImage">
                <img
                  src="/{{$item['feature_image']}}"
                  class="card-img-top"
                  alt="..."
                />
              </div>
              <div class="card-body gigCardBody bg-cl-ash2">
                <div class="gigCardBodyTop">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                      <div>
                        <small class="cl-pm fw-bold">{{$item['contest_name']}}</small>
                      </div>
                    </div>
                    
                  </div>
                  <div>
                    <small class="cardText cl-dark-ash2"
                      >{!!$item['description']!!}</small
                    >
                  </div>
                </div>

                <div
                  class="gigCardBodyBottom d-flex justify-content-between align-items-center"
                >
                  <div>
                      <small class="cl-yellow fw-bold"
                        ><i class="fas fa-calendar-check"></i> {{$item['due_date']}}
                        </small
                      >
                    </div>
                  <div>
                    <small class="cl-dark-ash2 fs12"
                      >Prize
                      <span class="cl-yellow fs16 fw-bold">${{$item['prize_money']}}</span></small
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <!-- --------------------------------- pagination ------------------------>
      <div class="pagination d-flex justify-content-center align-items-center">
          {{$contestlist->links('vendor.pagination.bootstrap-4')}}
      </div>
<!-- --------------------------------- pagination ------------------------>
      </div>
    </section>
    <!----------All Gigs End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <script src="js/main.js"></script>
  </body>
</html>
