<!DOCTYPE html>
<html lang="en">
  <!-- link and header data --> 
  <x-assets title="FAQs : "/>

  <body>
    <x-header2/>

    <!----------Faq Start------------->
    <section class="faq py-5">
      <div class="container">
        <div class="text-center mb-4">
          <div>
            <h2 class="cl-mat-black fw-bold">Questions? Look Here</h2>
          </div>
          <div>
            <h4 class="cl-dark-ash2">Find your answers of your questions</h4>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-12 col-12">

            <!-- one item start -->
            @foreach ($collection as $item)
                            <div class="question px-4">
              <div class="my-3">
                <!-- question title -->
                <div
                  class="question-title bg-cl-ash2 d-flex justify-content-between align-items-center rounded-3"
                >
                  <div class="d-flex">
                    <div
                      class="bg-cl-green d-flex justify-content-center align-items-center px-3 py-2"
                    >
                      <small class="cl-white bg-cl-pm py-2 px-3 rounded-3"
                        >Q</small
                      >
                    </div>
                    <div class="px-2 py-2 me-2 d-flex align-items-center">
                      <small class="cl-dark-ash2 fs16"
                        >{{$item['email']}}</small
                      >
                    </div>
                  </div>
                  <div>
                    <button
                      type="button"
                      class="question-btn d-flex bg-cl-ash2 color-white fw-light px-3 py-2 rounded-3 border-0"
                    >
                      <div>
                        <span class="plus-icon">
                          <i class="fas fa-plus cl-pm"></i>
                        </span>
                        <span class="minus-icon">
                          <i class="fas fa-minus cl-pm"></i>
                        </span>
                      </div>
                    </button>
                  </div>
                </div>
                <!-- question text -->
                <div class="question-text bg-cl-ash2 p-3 my-2 rounded-3">
                    <div class="d-flex">
                        <div class="me-3">
                            <small class="cl-white bg-cl-dark-ash2 py-2 px-3 rounded-3"
                              >A</small
                            >
                          </div>
                          <div class="px-2">
                            <small class="cl-dark-ash2 fs16">
                              At vero eos et accusamus et iusto odio dignissimos ducimus
                              qui blanditiis praesentium voluptatum deleniti atque
                              corrupti quos dolores et quas molestias excepturi sint
                              occaecati cupiditate non provident
                            </small>
                          </div>
                    </div>
                </div>
              </div>
            </div>
            @endforeach

            <!-- one item end -->

            <div class="question px-4">
                <div class="my-3">
                  <!-- question title -->
                  <div
                    class="question-title bg-cl-ash2 d-flex justify-content-between align-items-center rounded-3"
                  >
                    <div class="d-flex">
                      <div
                        class="bg-cl-green d-flex justify-content-center align-items-center px-3 py-2"
                      >
                        <small class="cl-white bg-cl-pm py-2 px-3 rounded-3"
                          >Q</small
                        >
                      </div>
                      <div class="px-2 py-2 me-2 d-flex align-items-center">
                        <small class="cl-dark-ash2 fs16"
                          >How Does PTOWORKERS Work?</small
                        >
                      </div>
                    </div>
                    <div>
                      <button
                        type="button"
                        class="question-btn d-flex bg-cl-ash2 color-white fw-light px-3 py-2 rounded-3 border-0"
                      >
                        <div>
                          <span class="plus-icon">
                            <i class="fas fa-plus cl-pm"></i>
                          </span>
                          <span class="minus-icon">
                            <i class="fas fa-minus cl-pm"></i>
                          </span>
                        </div>
                      </button>
                    </div>
                  </div>
                  <!-- question text -->
                  <div class="question-text bg-cl-ash2 p-3 my-2 rounded-3">
                      <div class="d-flex">
                          <div class="me-3">
                              <small class="cl-white bg-cl-dark-ash2 py-2 px-3 rounded-3"
                                >A</small
                              >
                            </div>
                            <div class="px-2">
                              <small class="cl-dark-ash2 fs16">
                                At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blanditiis praesentium voluptatum deleniti atque
                                corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident
                              </small>
                            </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="question px-4">
                <div class="my-3">
                  <!-- question title -->
                  <div
                    class="question-title bg-cl-ash2 d-flex justify-content-between align-items-center rounded-3"
                  >
                    <div class="d-flex">
                      <div
                        class="bg-cl-green d-flex justify-content-center align-items-center px-3 py-2"
                      >
                        <small class="cl-white bg-cl-pm py-2 px-3 rounded-3"
                          >Q</small
                        >
                      </div>
                      <div class="px-2 py-2 me-2 d-flex align-items-center">
                        <small class="cl-dark-ash2 fs16"
                          >How Does PTOWORKERS Work?</small
                        >
                      </div>
                    </div>
                    <div>
                      <button
                        type="button"
                        class="question-btn d-flex bg-cl-ash2 color-white fw-light px-3 py-2 rounded-3 border-0"
                      >
                        <div>
                          <span class="plus-icon">
                            <i class="fas fa-plus cl-pm"></i>
                          </span>
                          <span class="minus-icon">
                            <i class="fas fa-minus cl-pm"></i>
                          </span>
                        </div>
                      </button>
                    </div>
                  </div>
                  <!-- question text -->
                  <div class="question-text bg-cl-ash2 p-3 my-2 rounded-3">
                      <div class="d-flex">
                          <div class="me-3">
                              <small class="cl-white bg-cl-dark-ash2 py-2 px-3 rounded-3"
                                >A</small
                              >
                            </div>
                            <div class="px-2">
                              <small class="cl-dark-ash2 fs16">
                                At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blanditiis praesentium voluptatum deleniti atque
                                corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident
                              </small>
                            </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="question px-4">
                <div class="my-3">
                  <!-- question title -->
                  <div
                    class="question-title bg-cl-ash2 d-flex justify-content-between align-items-center rounded-3"
                  >
                    <div class="d-flex">
                      <div
                        class="bg-cl-green d-flex justify-content-center align-items-center px-3 py-2"
                      >
                        <small class="cl-white bg-cl-pm py-2 px-3 rounded-3"
                          >Q</small
                        >
                      </div>
                      <div class="px-2 py-2 me-2 d-flex align-items-center">
                        <small class="cl-dark-ash2 fs16"
                          >How Does PTOWORKERS Work?</small
                        >
                      </div>
                    </div>
                    <div>
                      <button
                        type="button"
                        class="question-btn d-flex bg-cl-ash2 color-white fw-light px-3 py-2 rounded-3 border-0"
                      >
                        <div>
                          <span class="plus-icon">
                            <i class="fas fa-plus cl-pm"></i>
                          </span>
                          <span class="minus-icon">
                            <i class="fas fa-minus cl-pm"></i>
                          </span>
                        </div>
                      </button>
                    </div>
                  </div>
                  <!-- question text -->
                  <div class="question-text bg-cl-ash2 p-3 my-2 rounded-3">
                      <div class="d-flex">
                          <div class="me-3">
                              <small class="cl-white bg-cl-dark-ash2 py-2 px-3 rounded-3"
                                >A</small
                              >
                            </div>
                            <div class="px-2">
                              <small class="cl-dark-ash2 fs16">
                                At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blanditiis praesentium voluptatum deleniti atque
                                corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident
                              </small>
                            </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="question px-4">
                <div class="my-3">
                  <!-- question title -->
                  <div
                    class="question-title bg-cl-ash2 d-flex justify-content-between align-items-center rounded-3"
                  >
                    <div class="d-flex">
                      <div
                        class="bg-cl-green d-flex justify-content-center align-items-center px-3 py-2"
                      >
                        <small class="cl-white bg-cl-pm py-2 px-3 rounded-3"
                          >Q</small
                        >
                      </div>
                      <div class="px-2 py-2 me-2 d-flex align-items-center">
                        <small class="cl-dark-ash2 fs16"
                          >How Does PTOWORKERS Work?</small
                        >
                      </div>
                    </div>
                    <div>
                      <button
                        type="button"
                        class="question-btn d-flex bg-cl-ash2 color-white fw-light px-3 py-2 rounded-3 border-0"
                      >
                        <div>
                          <span class="plus-icon">
                            <i class="fas fa-plus cl-pm"></i>
                          </span>
                          <span class="minus-icon">
                            <i class="fas fa-minus cl-pm"></i>
                          </span>
                        </div>
                      </button>
                    </div>
                  </div>
                  <!-- question text -->
                  <div class="question-text bg-cl-ash2 p-3 my-2 rounded-3">
                      <div class="d-flex">
                          <div class="me-3">
                              <small class="cl-white bg-cl-dark-ash2 py-2 px-3 rounded-3"
                                >A</small
                              >
                            </div>
                            <div class="px-2">
                              <small class="cl-dark-ash2 fs16">
                                At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blanditiis praesentium voluptatum deleniti atque
                                corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident
                              </small>
                            </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="question px-4">
                <div class="my-3">
                  <!-- question title -->
                  <div
                    class="question-title bg-cl-ash2 d-flex justify-content-between align-items-center rounded-3"
                  >
                    <div class="d-flex">
                      <div
                        class="bg-cl-green d-flex justify-content-center align-items-center px-3 py-2"
                      >
                        <small class="cl-white bg-cl-pm py-2 px-3 rounded-3"
                          >Q</small
                        >
                      </div>
                      <div class="px-2 py-2 me-2 d-flex align-items-center">
                        <small class="cl-dark-ash2 fs16"
                          >How Does PTOWORKERS Work?</small
                        >
                      </div>
                    </div>
                    <div>
                      <button
                        type="button"
                        class="question-btn d-flex bg-cl-ash2 color-white fw-light px-3 py-2 rounded-3 border-0"
                      >
                        <div>
                          <span class="plus-icon">
                            <i class="fas fa-plus cl-pm"></i>
                          </span>
                          <span class="minus-icon">
                            <i class="fas fa-minus cl-pm"></i>
                          </span>
                        </div>
                      </button>
                    </div>
                  </div>
                  <!-- question text -->
                  <div class="question-text bg-cl-ash2 p-3 my-2 rounded-3">
                      <div class="d-flex">
                          <div class="me-3">
                              <small class="cl-white bg-cl-dark-ash2 py-2 px-3 rounded-3"
                                >A</small
                              >
                            </div>
                            <div class="px-2">
                              <small class="cl-dark-ash2 fs16">
                                At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blanditiis praesentium voluptatum deleniti atque
                                corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident
                              </small>
                            </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="question px-4">
                <div class="my-3">
                  <!-- question title -->
                  <div
                    class="question-title bg-cl-ash2 d-flex justify-content-between align-items-center rounded-3"
                  >
                    <div class="d-flex">
                      <div
                        class="bg-cl-green d-flex justify-content-center align-items-center px-3 py-2"
                      >
                        <small class="cl-white bg-cl-pm py-2 px-3 rounded-3"
                          >Q</small
                        >
                      </div>
                      <div class="px-2 py-2 me-2 d-flex align-items-center">
                        <small class="cl-dark-ash2 fs16"
                          >How Does PTOWORKERS Work?</small
                        >
                      </div>
                    </div>
                    <div>
                      <button
                        type="button"
                        class="question-btn d-flex bg-cl-ash2 color-white fw-light px-3 py-2 rounded-3 border-0"
                      >
                        <div>
                          <span class="plus-icon">
                            <i class="fas fa-plus cl-pm"></i>
                          </span>
                          <span class="minus-icon">
                            <i class="fas fa-minus cl-pm"></i>
                          </span>
                        </div>
                      </button>
                    </div>
                  </div>
                  <!-- question text -->
                  <div class="question-text bg-cl-ash2 p-3 my-2 rounded-3">
                      <div class="d-flex">
                          <div class="me-3">
                              <small class="cl-white bg-cl-dark-ash2 py-2 px-3 rounded-3"
                                >A</small
                              >
                            </div>
                            <div class="px-2">
                              <small class="cl-dark-ash2 fs16">
                                At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blanditiis praesentium voluptatum deleniti atque
                                corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident
                              </small>
                            </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="question px-4">
                <div class="my-3">
                  <!-- question title -->
                  <div
                    class="question-title bg-cl-ash2 d-flex justify-content-between align-items-center rounded-3"
                  >
                    <div class="d-flex">
                      <div
                        class="bg-cl-green d-flex justify-content-center align-items-center px-3 py-2"
                      >
                        <small class="cl-white bg-cl-pm py-2 px-3 rounded-3"
                          >Q</small
                        >
                      </div>
                      <div class="px-2 py-2 me-2 d-flex align-items-center">
                        <small class="cl-dark-ash2 fs16"
                          >How Does PTOWORKERS Work?</small
                        >
                      </div>
                    </div>
                    <div>
                      <button
                        type="button"
                        class="question-btn d-flex bg-cl-ash2 color-white fw-light px-3 py-2 rounded-3 border-0"
                      >
                        <div>
                          <span class="plus-icon">
                            <i class="fas fa-plus cl-pm"></i>
                          </span>
                          <span class="minus-icon">
                            <i class="fas fa-minus cl-pm"></i>
                          </span>
                        </div>
                      </button>
                    </div>
                  </div>
                  <!-- question text -->
                  <div class="question-text bg-cl-ash2 p-3 my-2 rounded-3">
                      <div class="d-flex">
                          <div class="me-3">
                              <small class="cl-white bg-cl-dark-ash2 py-2 px-3 rounded-3"
                                >A</small
                              >
                            </div>
                            <div class="px-2">
                              <small class="cl-dark-ash2 fs16">
                                At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blanditiis praesentium voluptatum deleniti atque
                                corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident
                              </small>
                            </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!----------Faq End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <script src="js/main.js"></script>
  </body>
</html>
