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
        <div class="row">
          @foreach ($giglist as $item)

            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
            
            <div class="card teamCard cursor" onclick="location.href='gig-details={{$item['id']}}'">
              <div class="teamCardImage">
                <img
                  src="assets/image/gigs/gig2.png"
                  class="card-img-top"
                  alt="..."
                />
              </div>
              <div class="card-body gigCardBody bg-cl-ash2">
                <div class="gigCardBodyTop">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                      <div class="gigcardBodyTopImg me-2">
                        <img src="assets/image/gigs/gigcard.jfif" alt="" />
                      </div>
                      <div>
                        <small class="cl-pm fw-bold">{{$item['title']}}</small>
                      </div>
                    </div>
                    <div>
                      <small class="cl-yellow fw-bold"
                        ><i class="fas fa-star"></i> {{$item['review']}}
                        <span class="cl-black fw-lighter">({{$item['review_amount']}})</span></small
                      >
                    </div>
                  </div>
                  <div>
                    <small class="cl-dark-ash2"
                      >{{$item['description']}}</small
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
