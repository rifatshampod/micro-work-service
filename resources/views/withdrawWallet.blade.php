<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="Wallet : "/>

  <body>
    <!-- Hero start -->
      <x-header2/>
    <!-- Hero end -->

    <!----------My Wallet Edit Start------------->
    <section class="reachargeWallet p-100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
<div class="col-lg-6 col-12">
                  <div class="mb-4 text-center">
                    <h4 class="fw-bold">Select A Payment Method</h4>
                  </div>
                    <div class="walletNavTab d-flex justify-content-center">
                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item mx-2" role="presentation">
                          <button class="nav-link" id="pills-bkash-tab" data-bs-toggle="pill" 
                          data-bs-target="#pills-bkash" type="button" role="tab" aria-controls="pills-bkash" 
                          aria-selected="true">
                          <div class="walletTabImg">
                            <img src="assets/image/bkash.png" alt="">
                          </div>
                        </button>
                        </li>
                        <li class="nav-item mx-2" role="presentation">
                          <button class="nav-link" id="pills-nagad-tab" data-bs-toggle="pill" 
                          data-bs-target="#pills-nagad" type="button" role="tab" 
                          aria-controls="pills-nagad" aria-selected="false">
                          <div class="walletTabImg">
                            <img src="assets/image/nagad.png" alt="">
                          </div>
                          </button>
                        </li>
                        <li class="nav-item mx-2" role="presentation">
                          <button class="nav-link" id="pills-payeer-tab" data-bs-toggle="pill" data-bs-target="#pills-payeer" type="button" role="tab" aria-controls="pills-payeer" aria-selected="false">
                          <div class="walletTabImg">
                            <img src="assets/image/payeer.png" alt="">
                          </div>
                          </button>
                        </li>
                        <li class="nav-item mx-2" role="presentation">
                          <button class="nav-link" id="pills-perfect-tab" data-bs-toggle="pill" data-bs-target="#pills-perfect" type="button" role="tab" aria-controls="pills-perfect" aria-selected="false">
                          <div class="walletTabImg">
                            <img src="assets/image/nagad.png" alt="">
                          </div>
                          </button>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show  my-5" id="pills-bkash" role="tabpanel" aria-labelledby="pills-bkash-tab">
                        <div class="PamentInsruction d-flex justify-content-center cl-grey mb-5">
                            <ul>
                              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            </ul>
                        </div>
                        <div>
                          {{-- ---------- bkash deposit form  ----------- --}}
                          <form action="withdraw-request" method="POST">
                            @csrf
                            <div class="row justify-content-center">
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bold">Recharge Method</label>
                                  <input type="text" name="method" class="form-control bg-cl-ash2" id="exampleFormControlInput1" value="Bkash" readonly>
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bold">Amount</label>
                                  <input type="number" name="amount" class="form-control bg-cl-ash2" id="exampleFormControlInput1" placeholder="Enter Amount">
                                </div>
                              </div>

                              <div class="col-lg-12">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bold">Account</label>
                                  <input type="text" class="form-control bg-cl-ash2" name="account_no" id="exampleFormControlInput1" placeholder="Enter Account No">
                                </div>
                              </div>
                              
                              
                              <div class="col-lg-3">
                                <div class="my-2">
                                  <button type="submit" class="px-4 py-2 border-0 rounded-3 bg-cl-pm text-white">Submit</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="tab-pane fade my-5" id="pills-nagad" role="tabpanel" aria-labelledby="pills-nagad-tab">
                      <div class="PamentInsruction d-flex justify-content-center cl-grey mb-5">
                            <ul>
                              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            </ul>
                        </div>
                        <div>
                          <form action="">
                            <div class="row justify-content-center">
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bold">Recharge Method</label>
                                  <input type="text" class="form-control bg-cl-ash2" id="exampleFormControlInput1" value="Nagad" readonly>
                                </div>
                              </div>
                              
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bold">Amount</label>
                                  <input type="number" class="form-control bg-cl-ash2" id="exampleFormControlInput1" placeholder="Enter Amount">
                                </div>
                              </div>

                              <div class="col-lg-12">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bold">Account</label>
                                  <input type="text" class="form-control bg-cl-ash2" id="exampleFormControlInput1" placeholder="Enter Account No">
                                </div>
                              </div>
                              
                              <div class="col-lg-3">
                                <div class="my-2">
                                  <button type="submit" class="px-4 py-2 border-0 rounded-3 bg-cl-pm text-white">Submit</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="tab-pane fade my-5" id="pills-payeer" role="tabpanel" aria-labelledby="pills-payeer-tab">
                      <div class="PamentInsruction d-flex justify-content-center cl-grey mb-5">
                            <ul>
                              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            </ul>
                        </div>
                        <div>
                          <form action="">
                            <div class="row justify-content-center">
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bold">Recharge Method</label>
                                  <input type="text" class="form-control bg-cl-ash2" id="exampleFormControlInput1" value="Payeer" readonly>
                                </div>
                              </div>
                              
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bold">Amount</label>
                                  <input type="number" class="form-control bg-cl-ash2" id="exampleFormControlInput1" placeholder="Enter Amount">
                                </div>
                              </div>

                              <div class="col-lg-12">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bold">Account</label>
                                  <input type="text" class="form-control bg-cl-ash2" id="exampleFormControlInput1" placeholder="Enter Account No">
                                </div>
                              </div>

                        
                              <div class="col-lg-3">
                                <div class="my-2">
                                  <button type="submit" class="px-4 py-2 border-0 rounded-3 bg-cl-pm text-white">Submit</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="tab-pane fade my-5" id="pills-perfect" role="tabpanel" aria-labelledby="pills-perfect-tab">
                      <div class="PamentInsruction d-flex justify-content-center cl-grey mb-5">
                            <ul>
                              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            </ul>
                        </div>
                        <div>
                          <form action="">
                            <div class="row justify-content-center">
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bold">Recharge Method</label>
                                  <input type="text" class="form-control bg-cl-ash2" id="exampleFormControlInput1" value="Perfect Money" readonly>
                                </div>
                              </div>
                              
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bold">Amount</label>
                                  <input type="number" class="form-control bg-cl-ash2" id="exampleFormControlInput1" placeholder="Enter Amount">
                                </div>
                              </div>

                              <div class="col-lg-12">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label fw-bold">Account</label>
                                  <input type="text" class="form-control bg-cl-ash2" id="exampleFormControlInput1" placeholder="Enter Account No">
                                </div>
                              </div>

                              
                              <div class="col-lg-3">
                                <div class="my-2">
                                  <button type="submit" class="px-4 py-2 border-0 rounded-3 bg-cl-pm text-white">Submit</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
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
