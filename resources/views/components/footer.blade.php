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
                  <small>{{$email->link}}</small>
                </div>
              </div>
              <div class="text-white fw-lighterr d-flex align-items-center">
                <div>
                  <i class="fas fa-phone-alt me-2 mt-2"></i>
                </div>
                <div>
                  <small>{{$phone->link}}</small>
                </div>
              </div>
            </div>
            <div class="d-flex mt-2">
            <a
                class="topSocialIcon d-flex justify-content-center align-items-center cursor mx-1"
                href="https://{{$facebook->link}}" target="_blank"
              >
                <i class="fab fa-facebook-f cl-white"></i>
              </a>
              <a
                class="topSocialIcon d-flex justify-content-center align-items-center cursor mx-1"
                href="https://{{$twitter->link}}" target="_blank"
              >
                <i class="fab fa-twitter cl-white"></i>
              </a>
              <a
                class="topSocialIcon d-flex justify-content-center align-items-center cursor mx-1"
                href="https://{{$youtube->link}}" target="_blank"
              >
                <i class="fab fa-youtube cl-white"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 mb-4">
            <div>
              <div class="text-white fw-bold mb-3">
                <h4>Usefull Links</h4>
              </div>
              <div class="d-flex">
                <div class="me-4">
                  <div class="text-white cursor" onclick="location.href='/'">
                    <small>Home</small>
                  </div>
                  <div class="text-white cursor" onclick="location.href='/terms-of-services'">
                    <small>Terms of Services</small>
                  </div>
                  <div class="text-white cursor" onclick="">
                    <small>FAQs</small>
                  </div>
                  <div class="text-white cursor" onclick="location.href='#'">
                    <small>Support</small>
                  </div>
                </div>
                <div>
                  <div class="text-white cursor" onclick="location.href='/about'">
                    <small>About Us</small>
                  </div>
                  <div class="text-white cursor" onclick="location.href='/privacy-policy'">
                    <small>Privacy Policy</small>
                  </div>
                  <!-- <div class="text-white cursor" onclick="location.href='/refund-policy'">
                    <small>Refund Policy</small>
                  </div> -->
                  <div class="text-white cursor" onclick="location.href='/career'">
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
                  <img src="assets/image/payeer.png" alt="">
                </div>
                <div class="footerPmImg mx-2 cursor">
                  <img src="assets/image/bkash.png" alt="">
                </div>
                <div class="footerPmImg cursor">
                  <img src="assets/image/nagad.png" alt="">
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
              <a class="footerApp bg-cl-pm d-flex align-items-center cursor px-3 py-2 rounded-3"
              href="https://{{$googlePlay->link}}" target="_blank">
                <div class="me-2">
                  <i class="fab fa-google-play cl-white"></i>
                </div>
                <div class="footerAppBtnContent text-white">
                  <h5>Google Play</h5>
                  <small>Get It Now</small>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!----------Copy Right------------------->
    <footer class="CopyRight bg-cl-navy-blue py-3">
      <div class="container d-flex justify-content-center align-items-center">
        <div class="copyRightContentLeft text-white">
         copyright &copy; 2022. All rights reserved By Kbhworkers.com LTD.
        </div>
      </div>
    </footer>

    <script src="js/main.js"></script>