<?php
 include "header.php";
?>
<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>Ezigbo Ltd</span></h2>
            <p data-aos="fade-up">
              Your Partner in Excellence for Aluminium Construction, Gas, and Oil Solutions <br> <br>
              At Ezigb Ltd, we redefine possibilities in the world of construction and energy. With a relentless commitment to innovation, precision, and client satisfaction, we stand as a beacon of excellence in Nigeria and beyond.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)">
      </div>
      <!-- <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/ali-hero.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/gas-hero.jpeg)"></div> -->
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/gas1-hero.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/gas2-hero.jpeg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>Building the Future, Powering Progress.</h3>
              <p>
                At Ezigb Ltd, we believe in more than constructing structures and providing energy solutions. We are architects of the future, shaping landscapes, and empowering progress. With innovation as our cornerstone and quality as our compass, we redefine the possibilities of aluminium construction and gas and oil solutions. Join us in creating a sustainable, efficient, and inspiring tomorrow.
              </p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3>Get a quote</h3>
              <p>Where precision meets innovation, and excellence is our tradition.</p>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Get a quote</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get Started Section -->

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Constructions</h2>
          <p>At Ezigbo Ltd, we don't just build structures; we craft experiences, engineer marvels, and redefine the landscape of construction. With a passion for precision and an unwavering commitment to excellence, our construction services set us apart as industry leaders in Nigeria.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/Bilka.jpeg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Innovative Design</h4>
                    <p>
                      We believe in creating spaces that transcend expectations. Our team of architects and designers employs innovative approaches, blending functionality with aesthetics to bring your vision to life.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/advance.jpeg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Advanced Materials</h4>
                    <p>
                      Ezigb Ltd is synonymous with durability. We utilize cutting-edge materials, with a focus on aluminum construction, ensuring structures that stand the test of time while minimizing environmental impact.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/resident.jpeg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Residential Construction</h4>
                    <p>
                    Transform your dream home into a tangible reality with Ezigb Ltd. Our residential construction services combine functionality and elegance, creating spaces that resonate with your lifestyle.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-4.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Commercial Projects</h4>
                    <p>
                    From sleek corporate offices to expansive commercial complexes, Ezigb Ltd delivers on time and within budget. We understand the unique demands of commercial construction and tailor solutions to meet your business needs.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Services</h2>
          <p>Ezigb Ltd is your trusted partner for cutting-edge construction solutions. Specializing in residential, commercial, and industrial projects, we bring precision craftsmanship and a commitment to excellence to every detail. Elevate your vision with Ezigb Ltd – where innovation meets construction.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Aluminum Construction</h3>
              <p>
                Transforming Visions into Architectural Marvels
                Our aluminum construction services are a testament to precision and durability. From sleek modern designs to robust industrial structures, Ezigb Ltd shapes the future with aluminium.
              </p>
              <!-- <a href="service-details.html" class="readmore stretched-link">Learn more <i
                  class="bi bi-arrow-right"></i></a> -->
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Gas and Oil Solutions</h3>
              <p>
                Fueling Progress, Powering Possibilities
                Ezigb Ltd is your trusted partner for comprehensive gas and oil solutions. We specialize in designing, implementing, and maintaining systems that drive efficiency and sustainability.
              </p>
              <a href="service-details.php" class="readmore stretched-link">Learn more <i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Residential Construction</h3>
              <p>
                Transform your dream home into a tangible reality with Ezigb Ltd. Our residential construction services combine functionality and elegance, creating spaces that resonate with your lifestyle.
              </p>
              <!-- <a href="service-details.html" class="readmore stretched-link">Learn more <i
                  class="bi bi-arrow-right"></i></a> -->
            </div>
          </div><!-- End Service Item -->

           <!-- Add more service if theres need -->

          <!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/gas2-hero.jpeg);" data-aos="zoom-in"
            data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Gas and Oil Solutions by Ezigbo Ltd</h3>
            <p>Ezigb Ltd is at the forefront of providing comprehensive Gas and Oil solutions tailored to meet the dynamic needs of modern industries. Our services encompass:</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Exploration and Production</a></h4>
                <p>Leverage our expertise in exploration and production services to optimize resource discovery and extraction, ensuring efficient and sustainable operations.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                  deleniti atque</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Processing and Refining</a></h4>
                <p>Ezigb Ltd excels in processing and refining, transforming raw materials into high-quality products with a focus on environmental sustainability and industry standards.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Distribution and Logistics</a></h4>
                <p>Seamlessly transport and distribute energy resources with our state-of-the-art logistics solutions, ensuring a reliable supply chain for your business.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row  g-2 d-flex">

          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Quality Assurance</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Timely Delivery</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Client-Centric Approach</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Let's Build Together</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                data-aos="fade-up" data-aos-delay="100">
                <h3>Quality Assurance</h3>
                <p class="fst-italic">
                  Our commitment to quality is unwavering. Ezigb Ltd conducts rigorous quality checks at every stage of construction, ensuring that every project meets the highest standards.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Stringent Inspections: Conducting thorough inspections at various project milestones.</li>
                  <li><i class="bi bi-check2-all"></i>Compliance Checks: Ensuring all construction processes adhere to quality standards and regulations.</li>
                  <li><i class="bi bi-check2-all"></i>Material Selection: Choosing materials with proven quality and performance.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/RoofingSheets.jpeg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Timely Delivery</h3>
                <p class="fst-italic">
                  We understand the importance of deadlines. Ezigb Ltd prides itself on delivering projects on time, ensuring that your vision becomes a reality when you expect it.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>Project Planning: Developing comprehensive project schedules from initiation to completion.</li>
                  <li><i class="bi bi-check2-all"></i>Resource Management: Efficient allocation of manpower and materials for optimal productivity.</li>
                  <li><i class="bi bi-check2-all"></i>Milestone Tracking: Monitoring progress against predefined milestones to stay on schedule.</li>
                  <li><i class="bi bi-check2-all"></i>Proactive Problem Solving: Addressing challenges promptly to prevent delays.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/Roofing Sheets_Cost.jpeg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Client-Centric Approach</h3>
                <ul>
                  <li><i class="bi bi-check2-all"></i>Needs Assessment: Understanding and prioritizing client requirements.</li>
                  <li><i class="bi bi-check2-all"></i>Communication: Establishing open and transparent communication channels.</li>
                  <li><i class="bi bi-check2-all"></i> Tailored Solutions: Offering customized solutions to meet individual client goals.</li>
                </ul>
                <p class="fst-italic">
                  Your satisfaction is our priority. Ezigb Ltd collaborates closely with clients, ensuring clear communication and transparency throughout the construction process.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/Cost-Of-Aluminium.jpeg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Let's Build Together</h3>
                <p class="fst-italic">
                  Embark on a construction journey with Ezigb Ltd – where precision meets passion, and excellence is etched in every brick. Contact us today to discuss your project and experience construction at its finest.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>Transparency: Openly sharing information and insights throughout the building process.</li>
                  <li><i class="bi bi-check2-all"></i>Innovation: Introducing creative and forward-thinking ideas to enhance project outcomes.</li>
                  <li><i class="bi bi-check2-all"></i>Commitment: Dedicated to the shared journey of creating exceptional residential spaces.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/RoofingSheets1.jpeg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

        </div>

      </div>
    </section><!-- End Features Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia
            reprehenderit sunt deleniti</p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                    minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                    culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                    quid.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->    
  

  </main><!-- End #main -->

<?php
include "footer.php";