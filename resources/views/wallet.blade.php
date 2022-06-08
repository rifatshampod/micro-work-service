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
                                        <p class="fs36 cl-pm fw-bold">$ {{collect($balance)->sum('amount')-collect($withdraw)->sum('amount')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="myWalletCard bg-cl-pink p-4">
                                    <div>
                                        <h4 class="fs18">Total Deposit So Far</h4>
                                    </div>
                                    <div>
                                        <p class="fs36 fw-bold">$ {{collect($balance)->sum('amount')}}</p>
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
                        <div class="d-flex justify-content-center">
                            <button onclick="location.href='recharge-wallet'" class="px-4 py-2 bg-cl-pm border-0 rounded-3 cl-white mx-1">Recharge</button>
                            <button onclick="location.href='withdraw-wallet'" class="px-4 py-2 bg-cl-red border-0 rounded-3 cl-white mx-1">Withdraw</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="myWalletBottom py-5" id="all-transactions">
                <div style="height: 50px;">

                </div>
                <div>
                    <div class="text-center mb-4">
                        <h3 class="cl-mat-black fw-bold pt-5 pb-3">Recent Transaction History</h3>

                    </div>
                </div>
                <div class="pHistoryTable table-responsive mb-4">
                    <table class="table table-hover table-borderless">
                        <thead>
                          <tr class="cl-deep-blue fw-bold">
                            <th scope="col">Date</th>
                            <th scope="col">Method</th>
                            <th scope="col">account</th>
                            <th scope="col">amount</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction as $item)
                            <tr class="cl-dark-ash2">
                                <td>{{$item['created_at']->format('d/m/Y')}}</td>
                                <td>{{$item['method']}}</td>
                                <td>{{$item['account_no']}}</td>
                                <td>{{$item['amount']}}</td>
                                <td>
                                    <div class="">
                                        @if($item['status']==0)
                                            <small class="pTablestatus bg-cl-light-red px-4 py-1">Pending</small>
                                        @else
                                            <small class="pTablestatus bg-cl-light-green px-4 py-1">Approved</small>
                                        @endif
                                        
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                          
                          
                        </tbody>
                      </table>
                </div>
                {{-- <div class="pagination d-flex justify-content-center align-items-center">
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
              </div> --}}
            </div>
        </div>
    </section>
    <!----------My Wallet End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <script src="js/main.js"></script>
  </body>
</html>
