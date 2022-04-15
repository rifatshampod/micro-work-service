<!DOCTYPE html>
<html lang="en">
<!-- link and header data -->
<x-assets title="Create contest : " />

<body>
    <!-- Hero start -->
    <section class="hero SingleJobHero">
        <x-header />
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="singleJobHeroContent">
                    <div class="text-center">
                        <h3 class="cl-white">Create a Campaign</h3>
                    </div>
                    <div class="breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item cl-white cursor" onclick="location.href='/'">
                                    Home
                                </li>
                                <li class="breadcrumb-item cl-white">Create a Campaign </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero end -->

    <!----------Create Job Start------------->
    <section class="createGig py-5">
        <div class="container">
            <form action="addCampaign" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                        
                            <div class="col-lg-6 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Select Job</label>
                                    <select name="job_id" class="form-select bg-cl-ash2"
                                        aria-label="Default select example">
                                        @foreach($joblist as $item)
                                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Select Campaign Duration</label>
                                    <select name="category" class="form-select bg-cl-ash2"
                                        aria-label="Default select example">
                                        
                                        <option value="1">1 Month</option>
                                        <option value="3">3 Months</option>
                                        <option value="6">6 Months</option>
                                        
                                    </select>
                                </div>
                            </div> --}}
                            <div class="col-lg-6 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold">Select Campaign Priority</label>
                                    <select name="priority" id="priority" class="form-select bg-cl-ash2"
                                        aria-label="Default select example">
                                        <option value="" selected disabled hidden>Select search category</option>
                                        <option value="1">Standard Priority</option>
                                        <option value="2">High Priority</option>
                                        
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 mb-4">
                                <div class="">
                                    <label class="mb-2 fw-bold"> Posting Cost</label>
                                    <div class="createJobCampaign d-flex rounded-3 bg-cl-ash2">
                                        <div
                                            class="createJobCampaignIcon d-flex justify-content-center align-items-center">
                                            <i class="fas fa-dollar-sign cl-pm"></i>
                                        </div>
                                        
                                        <div class="d-flex align-items-center px-4">
                                        <div id="1" style="display: none;"> 
                                            <input type="number" class="bg-cl-ash2" style="border:0" value="10" readonly/>
                                        </div>
                                        <div id="2" style="display: none;"> 
                                            <input type="number" class="bg-cl-ash2" style="border:0" value="20" readonly/>
                                        </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="mb-4">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="checkbox" name="agreement" value="1"
                                id="flexCheckDefault6" />
                            <label class="form-check-label" for="flexCheckDefault6">
                                I agree with Quick F.A.Q. and T.O.S.
                            </label>
                            @error('agreement')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{$message}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="bg-cl-pm border-0 rounded-3 px-4 py-2 cl-white">
                            Confirm Campaign
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!----------Create Job End------------->

    <!-- Bottom Section -->
    <x-footer />

    <script>
                $(document).ready(function() {
					
        	$("#priority").change(function(e) {
       			hideAll();
						$(e.target.options).removeClass();
						var $selectedOption = $(e.target.options[e.target.options.selectedIndex]);
						$selectedOption.addClass('selected');
       			$('#' + $selectedOption.val()).show();
        	});
        });

        function hideAll() {
        	$("#1").hide();
        	$("#2").hide();
					
        }

    </script>
    <!-- Load FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="js/main.js"></script>
    <script src="js/fileupload.js"></script>
</body>

</html>