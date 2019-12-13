@extends('frontend.layouts.app')

@section('content')
  <div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('style/images/contact-us.jpg')}});">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center text-center">
        <div class="col-lg-12 col-sm-12">
          <h1 class="mb-4" data-aos="fade-up" data-aos-delay="">تواصل معنا </h1>
          <p class="custom-breadcrumbs" data-aos="fade-up" data-aos-delay="100"><a href="{{ route('index') }}">الصفحة الرئيسية</a> <span class="mx-3">\</span> تواصل معنا</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">

      <div class="row">
        <div class="col-12 contact-form-contact-info">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="">
              <p class="d-flex">
                <span class="ion-ios-location icon mr-5"></span>
                <span>34 Street Name, City Name Here, United States</span>
              </p>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <p class="d-flex">
                <span class="ion-ios-telephone icon mr-5"></span>
                <span>+1 242 4942 290</span>
              </p>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <p class="d-flex">
                <span class="ion-android-mail icon mr-5"></span>
                <span>info@yourdomain.com</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section bg-light block-11">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">Testimonial</h2>
        </div>
      </div>
      <div class="nonloop-block-11 owl-carousel">
        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="images/person_1.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading">Carl Smith</h2>
                <span class="meta">Customer Corp.</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat qui, ipsum debitis id
                  reprehenderit ut soluta possimus consectetur asperiores totam veniam quasi molestiae. Animi doloribus
                  accusamus eius ex laudantium vitae? &ldquo;</p>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="images/person_2.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading">Craig Darren</h2>
                <span class="meta">Customer Corp.</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>&rdquo; Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, ut enim error molestias maxime
                  deserunt voluptate doloribus nihil nesciunt id perferendis, doloremque earum architecto ab incidunt
                  sunt
                  corrupti. Consequuntur qui ullam voluptates sapiente quod esse eum. &ldquo;</p>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="images/person_1.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading">John Smith</h2>
                <span class="meta">Customer Corp.</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>&rdquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ab? Asperiores dolore
                  blanditiis quis sapiente soluta aliquid officiis. &ldquo;</p>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="images/person_2.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading">John Smith</h2>
                <span class="meta">Customer Corp.</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>&rdquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, accusamus? Porro fugit culpa
                  consequuntur dolorum. &ldquo;</p>
              </blockquote>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- END .block-4 -->
  </div>

  <div class="bg-primary py-5">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <h3 class="text-white mb-2 font-weight-normal" data-aos="fade-right" data-aos-delay="">Let's do more together</h3>
          <p class="text-white mb-4" data-aos="fade-right" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            
          <p class="mb-0" data-aos="fade-right" data-aos-delay="200"><a href="contact.html" class="btn btn-outline-white px-4 py-3">Get In Touch!</a></p>
        </div>
      </div>

    </div>
  </div>

  @endsection