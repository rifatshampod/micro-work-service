<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="Payment proof : "/>

  <body>
    <x-header-white/>

    <!----------Payment History Start------------->
    <section class="pHistory py-5">
        <div class="container">
            <div>
                <div class="mb-3">
                    <h2 class="cl-mat-black fw-bold">Recent Withdraw History</h2>
                </div>
                <div class="pHistorySearchDiv d-flex justify-content-end mb-3 px-1">
                    <!-- <div class="pHistorySearch px-2 w-20 d-flex justify-content-between align-items-center rounded-3"> -->
                        <div class="pHistorySearch">
                            <input class="p-2 w-100 rounded-3" type="text" placeholder="Search">
                        </div>
                        <!-- <div class="">
                            <i class="fas fa-search cursor pe-2"></i>
                        </div> -->
                    <!-- </div> -->
                </div>
            </div>
            <div class="pHistoryTable table-responsive mb-4">
                <table class="table table-hover table-borderless">
                    <thead>
                      <tr class="cl-deep-blue fw-bold">
                        <th scope="col">Id</th>
                        <th scope="col">Email</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Method</th>
                        <th scope="col">Country</th>
                        <th scope="col">Status</th>
                        <th class="text-end" scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- one row -->

                      @foreach ($prooflist as $item)

                        <tr class="cl-dark-ash2">
                        <td>{{$item['id']}}</td>
                        <td>{{$item['email']}}</td>
                        <td>${{$item['payment']}}</td>
                        <td>{{$item['method']}}</td>
                        <td>{{$item['country']}}</td>
                        <td>
                  
                          @if ($item['status']==0)    
                              <div class="">
                                <small class="pTablestatus bg-cl-light-red px-4 py-1">UnPaid</small>
                              </div>
                          @else                         
                              <div class="">
                                <small class="pTablestatus bg-cl-light-green px-4 py-1">Paid</small>
                              </div>
                          @endif
                          
                            
                        </td>
                        <td class="text-end">{{$item['date']}}</td>
                      </tr>

                          
                      @endforeach
                      
                      <!-- one row -->
                      
                    </tbody>
                  </table>
            </div>
            <!-- --------------------------------- pagination ------------------------>
            <div class="pagination d-flex justify-content-center align-items-center">
              {{$prooflist->links('vendor.pagination.bootstrap-4')}}
            </div>
            <!-- --------------------------------- pagination ------------------------>
        </div>
    </section>
    <!----------Payment History End------------->

    <!----------Bottom Banner Start------------->
    <section class="bottomBanner">
      <div class="container">
        <div class="bottomBannerContent cl-white fw-bold">
          <h2>The Ultimate Way To <br> Earn money online.</h2>
        </div>
      </div>
    </section>
    <!----------Bottom Banner End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <script src="js/main.js"></script>
  </body>
</html>
