@extends('layouts.main_layout')

@section('content')

    {{-- <section class="hero">
        <div class="p-4 p-md-5  text-white rounded bg-dark hero-background">
            <img src="{{asset('assets/imgs/hero.png')}}" alt="">
            <div class="col-md-6 px-0">
              <h1 class="display-4 fst-italic"> حدث تايم </h1>
              <p class="lead my-3"> <Span class="display-4"> حيث تبدأ كل الفعاليات </Span> </p>
              <p class="lead my-3"> الموتمرات والندوات وورش العمل </p>
            </div>
          </div>
    </section> --}}

    <section class="hero">
        <div class="header">

            <div class="col-md-6 px-0 text_hero ">
                <h1 class="display-4 fst-italic"> حدث تايم <span class="display-6">حيث تبدأ</span></h1>
                <div class="d-flex">
                    <p class="lead my-3 display-6">   كل الفعاليات  </p>

                    <p class="lead my-3 display-6 typing"></p>
                </div>


                <h1 id="typed-text"></h1>
                <h1 id="typed-text"></h1>
            </div>

            {{-- <img src="{{asset('assets/imgs/hero.png')}}" alt=""> --}}
            <!--Waves Container-->
            <div class="svg">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                  <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(27,97,125,1)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.3)" />

                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
                </svg>
            </div>
            <!--Waves end-->

        </div>
    </section>

    <!-- <section class="about-us pt-7rem bg-light text-center">
      <h1> حولنا </h1>
      <div class="container">

      </div>
    </section> -->


    {{-- services --}}
    <section class="myservices pt-7rem   ">
      <h1 class="pb-5 text-center"> الخدمات </h1>
      <div class="container">
          <div class="row  d-flex justify-content-center">

              <div class="col-10 col-md-6 mx-auto">
                  <div class="services-card">
                      <div class="card  border-0" >
                        <div class="row">
                            <div class="col-2 ">
                                {{-- <img src="./assets/imgs/Luxury.jpg" class="card-img-top" alt="..."> --}}
                                <p class="fs_4rem text-end"><i class="fa-solid fa-wifi"></i></p>
                            </div>
                            <div class="col-10 ">
                                 <div class="card-body">
                                    <p class="card-text"> توفير خدمة الإنترنت في قاعة الحجز يعزز تجربة العملاء ويسهل التواصل والعمل الاحترافي. كما يدعم التقنية والابتكار ويوفر مصدرًا إضافيًا للإيرادات </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-10 col-md-6 mx-auto">
                  <div class="services-card">
                      <div class="card border-0" >
                        <div class="row align-items-center">
                            <div class="col-2 ">
                                <p class="fs_4rem text-end"><i class="fa-regular fa-snowflake"></i></p>
                            </div>
                            <div class="col-10 ">
                                <div class="card-body">
                                    <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-10 col-md-6 mx-auto">
                  <div class="services-card">
                      <div class="card border-0" >
                        <div class="row align-items-center">
                            <div class="col-2 ">
                                <p class="fs_4rem text-end"><i class="fa-solid fa-square-parking"></i></p>
                            </div>
                            <div class="col-10 ">
                                <div class="card-body">
                                    <p class="card-text"> توفير موقف سيارات بجانب قاعة الحجز يسهل ويحسن تجربة العملاء، ويزيد من الأمان والثقة، مما يساهم في زيادة الرضا والطلب على الحجوزات. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-10 col-md-6 mx-auto">
                  <div class="services-card">
                      <div class="card border-0" >
                        <div class="row align-items-center">
                            <div class="col-2 ">
                                <p class="fs_4rem text-end"><i class="fa-solid fa-tv"></i></p>
                            </div>
                            <div class="col-10 ">
                                <div class="card-body">
                                    <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-10 col-md-6 mx-auto">
                <div class="services-card">
                    <div class="card border-0" >
                        <div class="row align-items-center">
                            <div class="col-2 ">
                                {{-- <p class="fs_4rem"><img src="{{asset('assets/imgs/tea-cup.png')}}"   alt="..."></p> --}}
                                <p class="fs_4rem"><img src="{{asset('assets/imgs/mug-tea.svg')}}" style="width: 60px"  alt=""></p>
                            </div>
                            <div class="col-10 ">
                                <div class="card-body">
                                    <p class="card-text"> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-6 mx-auto">
                <div class="services-card">
                    <div class="card border-0" >
                        <div class="row align-items-center">
                            <div class="col-2 ">
                                <p class="fs_4rem"><i class="fa-solid fa-ban-smoking"></i></p>
                            </div>
                            <div class="col-10 ">
                                <div class="card-body">
                                    <p class="card-text"> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-6 mx-auto">
                <div class="services-card">
                    <div class="card border-0" >
                        <div class="row align-items-center">
                            <div class="col-2 ">
                                <p class="fs_4rem text_primary"><img src="{{asset('assets/imgs/sandwich.svg')}}" style="width: 55px" alt=""></p>
                            </div>
                            <div class="col-10 ">
                                <div class="card-body">
                                    <p class="card-text"> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-6 mx-auto">
                <div class="services-card">
                    <div class="card border-0" >
                        <div class="row align-items-center">
                            <div class="col-2 ">
                                <p class="fs_4rem text_primary"><i class="fas fa-headset"></i></p>
                            </div>
                            <div class="col-10 ">
                                <div class="card-body">
                                    <p class="card-text"> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.  </p>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
  </section>

  {{-- halls --}}
  {{-- @if (auth()->user()->role_id != 2) --}}


    <section class="halls pt-7rem   ">
        <h1 class=" pb-5 text-center">القاعات</h1>
        <div class="container">
            <div class="row halls-card d-flex justify-content-center">

                <div class="col-10 col-md-6 col-lg-3 mb-3 gap-2">
                    <div class="card card_shadow p-0 gap-0 rounded-3" style="width: 19rem;">
                        <img src="./assets/imgs/sada1.jpg" style="height:13.5rem" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"> قاعة السعادة </h5>
                          <p class="card-text">توفر إمكانية عقد دورات وورش عمل. كما تحتوي القاعة على نظام تكييف وشبكة إنترنت واي فاي.</p>
                        </div>
                        <div class="">
                            <a href="{{route('halls.landingpageHallDetails',1)}}" class="btn d-flex"> <p class="text-myblue ms-2"> تفاصيل </p>
                                <span> <i class="fa fa-angle-left position-relative" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-10 col-md-6 col-lg-3 mb-3 gap-2">
                    <div class="card card_shadow p-0 gap-0 rounded-3" style="width: 19rem;">
                        <img src="./assets/imgs/shabam.jpg" style="height:13.5rem" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"> قاعة الهجرين </h5>
                          <p class="card-text">توفر إمكانية عقد دورات وورش عمل. كما تحتوي القاعة على نظام تكييف وشبكة إنترنت واي فاي.</p>
                        </div>
                        <div class="">
                            <a href="{{route('halls.landingpageHallDetails',2)}}" class="btn d-flex"> <p class="text-myblue ms-2"> تفاصيل </p>
                                <span> <i class="fa fa-angle-left position-relative" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                 <div class="col-10 col-md-6 col-lg-3 mb-3 gap-2">
                    <div class="card card_shadow p-0 gap-0 rounded-3" style="width: 19rem;">
                        <img src="./assets/imgs/istdama1.jpg" style="height:13.5rem" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"> قاعة الاستدامة  </h5>
                          <p class="card-text">توفر إمكانية عقد دورات وورش عمل. كما تحتوي القاعة على نظام تكييف وشبكة إنترنت واي فاي.</p>
                        </div>
                        <div class="">
                            <a href="{{route('halls.landingpageHallDetails',3)}}" class="btn d-flex"> <p class="text-myblue ms-2"> تفاصيل </p>
                                <span> <i class="fa fa-angle-left position-relative" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                 <div class="col-10 col-md-6 col-lg-3 mb-3 gap-2">
                    <div class="card card_shadow p-0 gap-0 rounded-3" style="width: 19rem;">
                        <img src="./assets/imgs/conv.jpg" style="height:13.5rem" class="card-img-top img-fluid " alt="...">
                        <div class="card-body">
                          <h5 class="card-title"> قاعة الاجتماعات </h5>
                          <p class="card-text">توفر إمكانية عقد دورات وورش عمل. كما تحتوي القاعة على نظام تكييف وشبكة إنترنت واي فاي.</p>
                        </div>
                        <div class="">
                            <a href="{{route('halls.landingpageHallDetails',7)}}" class="btn d-flex"> <p class="text-myblue ms-2"> تفاصيل </p>
                                <span> <i class="fa fa-angle-left position-relative" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-4 w-100 text-center mt-3 btn_more_halls">
                <p><a class="btn btn-primary bg-grad btn_halls_more" href="{{route('halls.landingpageHalls')}}"> المزيد </a></p>
            </div>
        </div>
    </section>

    {{-- @endif --}}
    <section class="question pt-7rem text-center  pb-5" >
        <h1 class="pb-5"> الاسئلة الشائعة </h1>
        <div class="container">

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed text-end" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        ما هي أنواع الفعاليات التي يمكنني إدارتها باستخدام موقع حدث تايم للمعارض والمؤتمرات؟
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"> يمكنك إدارة مجموعة واسعة من الفعاليات المهنية، بما في ذلك المؤتمرات والقمم والندوات والمعارض وفعاليات التواصل والحفلات وإطلاق المنتجات ومؤتمرات التكنولوجيا والابتكار. </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed text-end" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        هل يمكنني حجز القاعة لإقامة دورة تدريبية؟
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-end"> يمكنك حجز القاعة لإقامة دورة تدريبية. تمتاز القاعة بمساحتها الواسعة وتوفرها لعقد الدورات وورش العمل. </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed text-end" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        ما هي الخدمات المتوفرة في القاعة؟
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-end">القاعة توفر العديد من الخدمات لتلبية احتياجات الأشخاص الذين يستخدمونها. بعض الخدمات المتوفرة في القاعة تشمل:

                        مساحة القاعة: تتميز القاعة بمساحتها البالغة 30 متر مربع، مما يتيح المساحة الكافية لإقامة الدورات وورش العمل والفعاليات الأخرى.

                        تجهيزات التكييف: القاعة مجهزة بنظام تكييف لضمان راحة الحضور وتوفير البيئة المناسبة للتعلم والمشاركة.

                        شبكة الإنترنت واي فاي: يتوفر اتصال إنترنت لاسلكي عالي السرعة في القاعة، مما يتيح للحضور الوصول إلى الموارد العبر الإنترنت والتواصل مع الآخرين.

                        شاشة عرض كبيرة: تتوفر شاشة عرض كبيرة في القاعة، ما يسهّل عرض المحتوى المرئي والشرائح التقديمية والمواد التعليمية الأخرى.

                        ستاند الأوراق: يوفر القاعة ستاند للأوراق، وهو عبارة عن حامل يمكن استخدامه لعرض المستندات والملاحظات والرسومات وغيرها.

                        ربط بث الألياف: بالإضافة إلى ذلك، يمكن ربط القاعة بالألياف البصرية لإجراء بث مباشر، مما يتيح إمكانية البث المباشر للفعاليات أو الدورات التدريبية.</div>
                  </div>
                </div>
              </div>
        </div>

    </section>

    <section class="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 d-md-block text-center mb-5 mb-lg-0">
                    <p class="fs-3 mb-2"><i class="fa-solid fa-location-dot"></i></p>
                    <h3>عنواننا</h3>
                    <p>حضرموت - المكلا - اربعين شقة</p>
                    <div class="d-flex justify-content-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.1442846419914!2d49.113878625002656!3d14.533738285944715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3de8e69793c145e7%3A0x55d32bd799340eb6!2z2KPYqNix2KfYrCDYqNmGINmF2K3ZgdmI2Lg!5e0!3m2!1sar!2s!4v1704668537606!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-12 col-lg-6 d-md-block">
                    <div class="row text-center">
                        <div class="col-6 m-auto">
                            <p class="fs-3 mb-2"><i class="fa fa-envelope"></i></p>
                            <h3>راسلنا عبر</h3>
                            <p class="fs-5">tasg@gmail.com</p>
                        </div>
                        <div class="col-6 m-auto">
                            {{-- <p class="fs-3 mb-2"><i class="bi bi-telephone-plus"></i></p> --}}
                            <p class="fs-3 mb-2"><i class="bi bi-telephone-plus-fill"></i></p>
                            <h3>اتصل بنا عبر</h3>
                            <p class="fs-5"> 739531388 967+</p>
                        </div>
                    </div>

                    <form action="" class="form_contact_us">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label"> الاسم </label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder=" ادخل اسمك ">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label"> الاسم </label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="  بريدك الالكتروني ">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label"> العنوان </label>
                                <input type="text" name="subject" class="form-control" id="subject" placeholder=" عنوان الرسالة ">
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label"> الرسالة </label>
                                <textarea class="form-control" name="content" id="content" cols="30" rows="7" placeholder="  الرسالة "></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary w-100"> ارسال </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </section>


    @push('scripts')
    {{-- <script>
        const typed = new typed('.typing', {
            strings: ['Desinger','Developer'],
            typeSpeed: 100,
            // backSpeed: 50,
            loop: true
        });
    </script> --}}



    @endpush
@endsection

