@extends('layouts.main_layout')

@section('content')

    <section class="hero">
        <div class="p-4 p-md-5  text-white rounded bg-dark hero-background">
            <div class="col-md-6 px-0">
              <h1 class="display-4 fst-italic"> حدث تايم </h1>
              <p class="lead my-3"> <Span class="display-4"> حيث تبدأ كل الفعاليات </Span> </p>
              <p class="lead my-3"> الموتمرات والندوات وورش العمل </p>
            </div>
          </div>
    </section>

    <!-- <section class="about-us pt-7rem bg-light text-center">
      <h1> حولنا </h1>
      <div class="container">

      </div>
    </section> -->



    <section class="myservices pt-7rem bg-light text-center ">
      <h1 class="pb-5"> الخدمات </h1>
      <div class="container">
          <div class="row  d-flex justify-content-center">
              <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="services-card">
                      <div class="card" style="width: 16rem;">
                          <img src="./assets/imgs/Luxury.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                  </div>
              </div>
              <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="services-card">
                      <div class="card" style="width: 16rem;">
                          <img src="./assets/imgs/Luxury.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                  </div>
              </div>
              <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="services-card">
                      <div class="card" style="width: 16rem;">
                          <img src="./assets/imgs/Luxury.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                  </div>
              </div>
              <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="services-card">
                      <div class="card" style="width: 16rem;">
                          <img src="./assets/imgs/Luxury.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                  </div>
              </div>
          </div>
      </div>
  </section>


    <section class="halls pt-7rem  bg-light ">
        <h1 class=" pb-5 text-center">القاعات</h1>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-10 col-md-6 col-lg-4">
                    <div class="halls-card">
                        <div class="card" style="width: 25rem;">
                            <img src="./assets/imgs/Luxury.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title"> قاعة السعادة </h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-10 col-md-6 col-lg-4">
                    <div class="halls-card">
                        <div class="card" style="width: 25rem;">
                            <img src="./assets/imgs/Luxury.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-10 col-md-6 col-lg-4">
                    <div class="halls-card">
                        <div class="card" style="width: 25rem;">
                            <img src="./assets/imgs/Luxury.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="question pt-7rem text-center bg-light pb-5" >
        <h1 class="pb-5"> الاسئلة الشائعة </h1>
        <div class="container">

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Accordion Item #1
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                  </div>
                </div>
              </div>
        </div>

    </section>


@endsection

