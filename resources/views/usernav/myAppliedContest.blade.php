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
                onclick="location.href='contests'">
                    Apply to a new Contest
                </button>
            </div>
          </div>
          <div class="cl-mat-black">
            <h4>Applied Contest</h4>
          </div>
        </div>
        <div class="table-responsive-md jobTable">
          @if ($submission->isEmpty())
                <div class="text-center">No contest applied yet</div>
            @else
          <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">Contest Name</th>
                  <th scope="col">Attachments</th>
                  <th scope="col">Deadline</th>
                  <th scope="col">Prize Money</th>
                  <th scope="col">Status</th>
                  <th class="text-end" scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($submission as $item)
                    <tr class="tableRow bg-white rounded-3 cl-grey">
                  <td scope="row">
                    {{$item['title']}}</td>
                  <td><a href="/{{$item['attachment']}}" download>
                    <i class="fas fa-link cl-pm me-2"></i>{{$item['attachment']}}
                  </a>
                  </td>
                  <td>{{$item['deadline']}}</td>
                  <td>$ {{$item['prize_money']}}</td>
                  @if ($item['status']==0)
                      <td>Pending</td>
                  @else
                      <td>Approved</td>
                  @endif
                  <td><a href="contest-details={{$item['contestId']}}">
                      <div class="tableRowBtn d-flex justify-content-end">
                        <div class="tableIcon d-flex justify-content-center align-items-center me-2">
                            <i class="fa fa-eye cl-pm"></i>
                        </div>
                      </div>
                    </a>
                  </td>
                </tr>
                @endforeach  
               
              </tbody>
          </table>
          @endif
      </div>
      </div>
    </div>
    </div>
  </div>
    </div>
    <!----------User Profile End------------->


    <!-- Bottom Section -->
    <!------------------------Footer------------------------------>
    <footer class="footer bg-cl-navy-blue py-5">
      <div class="container">
        <div class="footerLogo d-flex justify-content-center">
          <div class="footerLogoImg mb-5">
            <img src="assets/image/logo.png" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 mb-4">
            <div>
              <div class="text-white fw-bold mb-3">
                <h4>Contact Us Now</h4>
              </div>
              <div class="text-white fw-lighterr d-flex align-items-center">
                <div>
                  <i class="far fa-envelope me-2 mt-2"></i>
                </div>
                <div>
                  <small>ptoworkers@gmail.com</small>
                </div>
              </div>
              <div class="text-white fw-lighterr d-flex align-items-center">
                <div>
                  <i class="fas fa-phone-alt me-2 mt-2"></i>
                </div>
                <div>
                  <small>+880-1676044462</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mb-4">
            <div>
              <div class="text-white fw-bold mb-3">
                <h4>Usefull Links</h4>
              </div>
              <div class="d-flex">
                <div class="me-4">
                  <div class="text-white cursor" onclick="location.href='index.html'">
                    <small>Home</small>
                  </div>
                  <div class="text-white cursor" onclick="location.href='terms.html'">
                    <small>Terms of Services</small>
                  </div>
                  <div class="text-white cursor" onclick="location.href='faq.html'">
                    <small>FAQs</small>
                  </div>
                  <div class="text-white cursor" onclick="location.href='support.html'">
                    <small>Support</small>
                  </div>
                </div>
                <div>
                  <div class="text-white cursor" onclick="location.href='about.html'">
                    <small>About Us</small>
                  </div>
                  <div class="text-white cursor" onclick="location.href='privacy.html'">
                    <small>Privacy Policy</small>
                  </div>
                  <div class="text-white cursor" onclick="location.href='refundpolicy.html'">
                    <small>Refund Policy</small>
                  </div>
                  <div class="text-white cursor" onclick="location.href='career.html'">
                    <small>Career</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mb-4">
            <div>
              <div class="text-white fw-bold mb-3">
                <h4>Payment Methods</h4>
              </div>
              <div class="text-white mb-2">
                <small>We Support</small>
              </div>
              <div class="d-flex">
                <div class="footerPmImg cursor">
                  <img src="assets/image/paypal.png" alt="">
                </div>
                <div class="footerPmImg mx-2 cursor">
                  <img src="assets/image/neteller.png" alt="">
                </div>
                <div class="footerPmImg cursor">
                  <img src="assets/image/skrill.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mb-4">
            <div>
              <div class="text-white fw-bold mb-3">
                <h4>Downloads</h4>
              </div>
              <div class="text-white mb-2">
                <small>Download Our App From</small>
              </div>
              <div class="footerApp bg-cl-pm d-flex align-items-center cursor px-3 py-2 rounded-3">
                <div class="me-2">
                  <i class="fab fa-google-play cl-white"></i>
                </div>
                <div class="footerAppBtnContent text-white">
                  <h5>Google Play</h5>
                  <small>Get It Now</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!----------Copy Right------------------->
    <footer class="CopyRight bg-cl-navy-blue py-3">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="copyRightContentLeft text-white w-50">
         Ptoworkers.com copyright &copy; 2021. All rights reserved.
        </div>
        <div class="copyRightContentRight text-white">
          <small>Powered by <span class="cl-sky-blue cursor">NoboIT</span></small>
        </div>
      </div>
    </footer>

    <script src="js/main.js"></script>
  </body>
</html>
