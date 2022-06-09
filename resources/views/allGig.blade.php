<!DOCTYPE html>
<html lang="en">
  <x-assets title="All Gigs : "/>

  <body>
    <!-- Hero start -->
    <section class="hero SingleJobHero">
      <x-header/>

      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="singleJobHeroContent">
            <div class="text-center">
              <h3 class="cl-white">All Gigs</h3>
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
                    onclick="location.href=''"
                  >
                    Gig
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
      
          <div class="d-flex justify-content-end mb-4">
            <div>
                <button class="px-4 py-2 bg-primary border-0 rounded-3 text-white" 
                onclick="location.href='add-gig'">
                    Post a New Gig
                </button>
            </div>
          </div>
        
        <div class="row">
          @foreach ($giglist as $item)

            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
            
            <div class="card teamCard cursor" onclick="location.href='gig-details={{$item['id']}}'">
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
                      <div class="gigcardBodyTopImg me-2">
                        @if($item['img']==null)
                          <img src="/assets/image/gigs/user.png" alt="" />
                        @else
                          <img src="{{$item['img']}}" alt="" />
                        @endif
                        
                      </div>
                      <div>
                        <small class="cl-pm fw-bold">{{$item['title']}}</small>
                      </div>
                    </div>
                    <div>
                      <small class="cl-yellow fw-bold"
                        >
                        @if($item['review_amount']==null)
                          <small class="fs10">No review</small> 
                        @else 
                          <i class="fas fa-star"></i> {{round($item['review']/$item['review_amount'], 1)}}
                          <span class="cl-black fw-lighter">({{$item['review_amount']}})</span>
                        @endif
                        
                        
                      </small>
                    </div>
                  </div>
                  <div>
                    <small class="cardText cl-dark-ash2"
                      >{!!$item['features']!!}</small
                    >
                  </div>
                </div>

                <div
                  class="gigCardBodyBottom d-flex justify-content-between align-items-center"
                >
                  <div class="gigCardHeartIcon cursor">
                    <i class="fas fa-heart toggle-box"></i>
                  </div>
                  <div>
                    <small class="cl-dark-ash2 fs12"
                      >STARTING AT
                      <span class="cl-yellow fs16 fw-bold">${{$item['price']}}</span></small
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        @if($giglist->isEmpty())
        <div style="height: 200px;">
          No gig available.
        </div>
          
        @endif
        <!-- --------------------------------- pagination ------------------------>
      <div class="pagination d-flex justify-content-center align-items-center">
          {{$giglist->links('vendor.pagination.bootstrap-4')}}
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
