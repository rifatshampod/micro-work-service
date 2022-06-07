<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="Wallet : "/>

  <body>
    <x-header2/>

    <!----------My Wallet Start------------->
    <section class="myWallet py-5">
        <div class="container">
            <div class="myWalletTop d-flex">
                <div class="myWalletTopLeft bg-cl-ash w-60 p-5">
                    <div class="mb-3">
                        <h3>
                            Hi, This is your wallet
                        </h3>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <div class="myWalletCard bg-cl-sky-blue p-4">
                                    <div>
                                        <h4 class="fs18">Available Amount</h4>
                                    </div>
                                    <div>
                                        <p class="fs36 cl-pm fw-bold">$200.50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="myWalletCard bg-cl-pink p-4">
                                    <div>
                                        <h4 class="fs18">Total Spent</h4>
                                    </div>
                                    <div>
                                        <p class="fs36 fw-bold">$220.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="myWalletTopRight d-flex justify-content-center align-items-center bg-cl-deep-blue w-40">
                    <div>
                        <div class="myWalletTopRightImg mb-4">
                            <img src="assets/image/allGigImg.png" alt="">
                        </div>
                        <div class="d-flex justify-content-center" onclick="location.href='recharge-wallet'">
                            <button class="px-4 py-2 bg-cl-pm border-0 rounded-3 cl-white">Recharge</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="myWalletBottom py-5">
                <div>
                    <div class="text-center mb-4">
                        <h3 class="cl-mat-black fw-bold pt-5 pb-3">Recent Withdraw History</h3>

                    </div>
                </div>
                <div class="pHistoryTable table-responsive mb-4">
                    <table class="table table-hover table-borderless">
                        <thead>
                          <tr class="cl-deep-blue fw-bold">
                            <th scope="col">Id</th>
                            <th scope="col">Username</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Method</th>
                            <th scope="col">Status</th>
                            <th class="text-end" scope="col">Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="cl-dark-ash2">
                            <td>001</td>
                            <td>sha**22@gmail.com</td>
                            <td>$50.00</td>
                            <td>DBBL</td>
                            <td>
                                <div class="">
                                    <small class="pTablestatus bg-cl-light-green px-4 py-1">Paid</small>
                                </div>
                            </td>
                            <td class="text-end">19 march 2022, 2.00 pm</td>
                          </tr>
                          <tr class="cl-dark-ash2">
                            <td>002</td>
                            <td>sha**22@gmail.com</td>
                            <td>$50.00</td>
                            <td>DBBL</td>
                            <td>
                                <div class="">
                                    <small class="pTablestatus bg-cl-light-red px-4 py-1">UnPaid</small>
                                </div>
                            </td>
                            <td class="text-end">19 march 2022, 2.00 pm</td>
                          </tr>
                          <tr class="cl-dark-ash2">
                            <td>003</td>
                            <td>sha**22@gmail.com</td>
                            <td>$50.00</td>
                            <td>DBBL</td>
                            <td>
                                <div class="">
                                    <small class="pTablestatus bg-cl-light-green px-4 py-1">Paid</small>
                                </div>
                            </td>
                            <td class="text-end">19 march 2022, 2.00 pm</td>
                          </tr>
                          <tr class="cl-dark-ash2">
                            <td>004</td>
                            <td>sha**22@gmail.com</td>
                            <td>$50.00</td>
                            <td>DBBL</td>
                            <td>
                                <div class="">
                                    <small class="pTablestatus bg-cl-light-red px-4 py-1">UnPaid</small>
                                </div>
                            </td>
                            <td class="text-end">19 march 2022, 2.00 pm</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="pagination d-flex justify-content-center align-items-center">
                  <div class="d-flex justify-content-center flex-wrap">
                      <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                          <i class="fas fa-chevron-left"></i>
                      </div>
                      <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-cl-pm cl-white mx-2">
                          1
                      </div>
                      <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                          2
                      </div>
                      <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                          3
                      </div>
                      <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                          4
                      </div>
                      <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                          5
                      </div>
                      <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                          <i class="fas fa-chevron-right"></i>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </section>
    <!----------My Wallet End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <script src="js/main.js"></script>
  </body>
</html>
