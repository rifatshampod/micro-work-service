<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="Wallet : "/>

  <body>
    <!-- Hero start -->
    <section class="hero SingleJobHero">
      <x-header/>
      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="singleJobHeroContent">
            <div class="text-center">
              <h3 class="cl-white">My Wallet</h3>
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
                  <li class="breadcrumb-item cl-white">My Wallet</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <!----------My Wallet Edit Start------------->
    <section class="reachargeWallet p-100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" 
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" 
                        aria-selected="true">
                        <img width="50px" src="https://www.tbsnews.net/sites/default/files/styles/big_2/public/images/2019/07/11/bkash_logo_0.jpg?itok=70lkuu3X&timestamp=1562856146" alt="">
                      </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" 
                        data-bs-target="#pills-profile" type="button" role="tab" 
                        aria-controls="pills-profile" aria-selected="false">
                        <img width="50px" src="https://www.tbsnews.net/sites/default/files/styles/big_2/public/images/2019/07/11/bkash_logo_0.jpg?itok=70lkuu3X&timestamp=1562856146" alt="">
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------My Wallet Edit End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <script src="js/main.js"></script>
  </body>
</html>
