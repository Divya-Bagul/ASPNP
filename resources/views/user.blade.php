@extends('user.main')

@section('template_title')

@endsection
@section('main_content')



<?php  use App\Http\Controllers\products;
    $product = products::productHomePage();
    ?>

<body>
    
<section id="hero" class="d-flex align-items-center">
      
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome to APSNP</h1>
      <h2>APSNP TECHNOLOGIES PRIVATE LIMITED</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="https://www.honeywellbuildings.in/assets/images/abt_img3.jpg" class="img-fluid" alt="">

            <p class="fst-italic">

            <b>APSNP</b> is Ahmedabad based VAD (Value added Distributors) fortechnology solutions and providing solutions across India, with a teamof more than 05 years of experience in providing solutions, we delivercustomized business solution through a combination of processexcellence, Quality framework & expeditious service delivery, tocustomer productivity at optimum cost.
            </p>

            <p class="fst-italic">
             At <b>APSNP</b> we believe in understanding our customers & their uniqueneeds, further providing them with our expertise solutions in meetingthat needs beyond expectation. It has been our endeavor to keep ourcommitments & achieving excellence in customer satisfaction.
            
            </p>


            <p class="fst-italic">
            <b>APSNP</b> value the time of our customers the most, to keep up with thisAPSNP has build a top-class infrastructure to support customers with ontime services. APSNP have dedicated customer care desk in place torespond customer queries in time. APSNP also provide 24 x 7 supportfacility to customers.
</p>
            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
            <b>APSNP</b> originally was founded in 2014 by young & dynamic personals
            </p>
            <p  class="fst-italic"><b>APSNP</b> is one of the Value-Added Distributor (Vad) through out in Gujaratand haveregistered office at Amdavad and branch office at Baroda, Surat & Rajkot.</p>
                <p class="fst-italic"><b>APSNP</b> is authorized partner for Variuos Products for Power, Colling, Fire & Safety, ITInfrastructure which drive the market Worldwide and are also the major OEM, we arealso into software like Microsoft, Autodesk, Firewall & Antivirus.
                        We have special team for data center setup.</p>
            <p  class="fst-italic">
                APSNP offers the most comprehensive range of highly reliable products that are insynch with the latest technology and uupdating our customers on the same is ourmotto. As a Promoter we offer the Following benefits:
            </p>
            <p class="bi bi-check-circle"> Best Technology in the industry</p>
            <p class="bi bi-check-circle"> Latest Product Range</p>
            <p class="bi bi-check-circle"> Best Prices</p>
            <p class="bi bi-check-circle"> Best after Sales Support</p>
            <p class="bi bi-check-circle"> Better Replacement Services</p>
            <p class="bi bi-check-circle"> Inventory of fast-moving Material</p>
            <p class="bi bi-check-circle"> Replacement / Stand by</p>
            <p class="bi bi-check-circle"> Demonstration SupportDS</p>






          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-2" data-aos="fade-up">
            <div class="box">
              <span>VALUES</span>
              <hr>
              <div class="row">
                <div class="col-lg-6">
                    <p class="bi bi-check-circle"> Continuity, experience, independence</p>
                    <p class="bi bi-check-circle"> Honesty, commitment to the long-term development of our
                    customers’ and partners’ business</p>
              

                 </div>
                 <div class="col-lg-6">
                    <p class="bi bi-check-circle"> Cooperation, social responsibility</p>
                        <p class="bi bi-check-circle"> Innovation, orientation towards solutions</p>
                    </div>
                </div>
                <p class="bi bi-check-circle ml-lg-5"> Trust and Security</p>
            </div>
          </div>

          

         
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row d-flex align-items-center">
 @foreach($product as $item) 
          <div class="col-lg-2 col-md-4 col-6">

       <br>   
<img src="{{asset('product_images/'.$item->image)}}" class="img-fluid" alt="">
          <div>{{$item->product_name}}</div>
          </div>
@endforeach
          
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Vision And Mission</span>
          <h2>Vision And Mission</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="col-lg-4  offset-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">VISION </a></h4>
              <p>VISION to ensure availability of Power & Fire Safety aswell as Security whenever data is created, transmitted or
                stored and Human is Alive. From desktop to data centre tofactory floor.</p>
            </div>
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">MISSION</a></h4>
              <p>MISSION To create delighted customers by improvingthe manageability, availability and performance of
                    information systems and key process controls through therapid delivery of innovative fast and solutions to real
                    customer problems.</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> APSNP is one of the Value-Added Distributor (Vad) through out in Gujaratand haveregistered office at Amdavad and branch office at Baroda, Surat & Rajkot.</p>
          <a class="cta-btn" href="#about">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        

       

       

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
   

    <!-- ======= Team Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
  @include('sweetalert::alert')
          <div class="col-lg-6">
            <form action="{{url('contactform')}}" method="post" role="form" class="php-email-form">
              <div class="row">
                  @csrf
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 
</body>

</html>
@endsection