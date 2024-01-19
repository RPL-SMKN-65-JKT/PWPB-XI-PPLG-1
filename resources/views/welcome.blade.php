<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel Portofolio</title>
        

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ url('vendor//bootstrap/css/bootstrap.min.css') }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />
        <link rel="stylesheet" type="text/css" href="{{ url('assets//css/flex-slider.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('assets//css/fontawesome.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('assets//css/lightbox.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('assets//css/owl.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('assets//css/templatemo-style.css') }}" />
        @vite('resources/css/app.css')
    </head>
    <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="assets/images/abigail.jpg"  class="object-fit-cover rounded-full" alt="" /></a>
            </div>
            <div class="author-content">
              <h4>Abigail Makfira</h4>
              <span>Web Designer</span>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">About Me</a></li>
                <li><a href="#section2">What I’m good at</a></li>
                <li><a href="#section3">My Work</a></li>
                <li><a href="#section4">Contact Me</a></li>
              </ul>
            </nav>
            <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href="https://www.instagram.com/abigailmakfiraa/"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a href="https://github.com/abigailmakfira"><i class="fa fa-github"></i></a>
                </li>
              </ul>
            </div>
            <div class="copyright-text">
              <p>Copyright 2023 Abigail M.</p>
            </div>
          </div>
        </div>
      </div>

      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h2>About Me</h2>
            <div class="line-dec"></div>
            <span
              >Welcome to my personal portofolio, disini saya akan memberikan pengenalan singkat dan menunjukkan skill serta portofolio apa saja yang pernah saya buat.</span
            >
          </div>
          <div class="left-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-image">
                  <img class="" src="assets/images/banner.jpg" alt="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-text">
                  <h4>Abigail <span style="color:yelllow;"></span>Makfira</h4>
                  <p>
                  Nama saya Abigail Makfira Bugis Syah, saya berumur 17 tahun dan saya merupakan pelajar dari sekolah SMK Negri 65 Jakarta dengan jurusan Pengembang Perangkat Lunak dan GIM.
                  </p>
                  <div class="white-button">
                    <a href="https://www.instagram.com/abigailmakfiraa/" target="_blank">Follow Me</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="right-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-text">
                  <h4>SMKN 65 Jakarta</h4>
                  <p>
                  SMKN 65 Jakarta adalah sebuah sekolah menengah kejuruan di Jakarta, Indonesia. Sekolah ini memberikan pendidikan menengah kejuruan yang berkualitas dengan berbagai program keahlian sesuai dengan kebutuhan pasar kerja. sekolah menengah kejuruan 65 terdapat jurusan PPLG, DKV dan BCF
                  </p>
                  <div class="white-button">
                    <a href="https://www.instagram.com/smkn65jakarta.official/" target="_blank">My School</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-image">
                  <img src="assets/images/sekolah.jpeg"  alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section my-services" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2>What I’m good at?</h2>
            <div class="line-dec"></div>
            <span
              >Saya memiliki skill web development yang memumpuni untuk basic web development.</span
            >
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <h4>HTML</h4>
                <p>
                Saya cukup ahli HTML, skill saya sudah cukup memumpuni untuk membuat website sederhana dengan tag tag sederhana HTML.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="second-service-icon service-icon"></div>
                <h4>CSS</h4>
                <p>
                Saya cukup ahli untuk menggunakan attribut pada styling CSS, skill saya sudah cukup untuk membuat tampilan website yang lebih menarik.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="third-service-icon service-icon"></div>
                <h4>JAVA</h4>
                <p>
                Saya lumayan bisa bahasa JAVA, skill saya sudah cukup untuk membuat program-program sederhana hingga menengah pada bahasa JAVA.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="fourth-service-icon service-icon"></div>
                <h4>MYSQL</h4>
                <p>
                Saya mampu membuat database dengan MYSQL, skill saya sudah cukup unutk membuat database serta isi dari database tersebut.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>My Work</h2>
            <div class="line-dec"></div>
            <span
              >project apa saja yang sudah saya buat? liat selengkapnya di bawah.</span
            >
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                <label
                  ><input
                    type="radio"
                    data-type="*"
                    checked=""
                    name="isotope-filter"
                  />
                  <span>all</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="website"
                    name="isotope-filter"
                  />
                  <span>Website</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="java"
                    name="isotope-filter"
                  />
                  <span>Java</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="mysql"
                    name="isotope-filter"
                  />
                  <span>MySQL</span></label
                >
              </form>
              <div class="isotope-box">
                <div class="isotope-item" data-type="website">
                  <figure class="snip1321">
                    <img
                      src="assets/images/porto.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/porto.png"
                        data-lightbox="image-1"
                        data-title=""
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Portofolio</h4>
                      <span>this is my personal portofolio website</span>
                      <a href="https://abigailmakfira.github.io/" target="_blank">
                        Preview
                      </a>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="website">
                  <figure class="snip1321">
                    <img
                      src="assets/images/porto2.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/porto2.png"
                        data-lightbox="image-1"
                        data-title=""
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Landing page</h4>
                      <span>Personal favorite landing page</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="website">
                  <figure class="snip1321">
                    <img
                      src="assets/images/porto3.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/porto3.png"
                        data-lightbox="image-1"
                        data-title=""
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Tabels and Barbie Website</h4>
                      <span>School Assigment website</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="website">
                  <figure class="snip1321">
                    <img
                      src="assets/images/porto4.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/porto4.png"
                        data-lightbox="image-1"
                        data-title=""
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Bil's Movie List</h4>
                      <span>School Assigment website</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="java">
                  <figure class="snip1321">
                    <img
                      src="assets/images/porto5.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/porto5.png"
                        data-lightbox="image-1"
                        data-title=""
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Java Simple Program</h4>
                      <span>School Assigment Java Program</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="mysql">
                  <figure class="snip1321">
                    <img
                      src="assets/images/porto6.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/porto6.png"
                        data-lightbox="image-1"
                        data-title=""
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>MYSQL Databases</h4>
                      <span>School Assigment with PHPMyAdmin</span>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section contact-me" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <h2>Contact Me</h2>
            <div class="line-dec"></div>
          </div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="name"
                          type="text"
                          class="form-control"
                          id="name"
                          placeholder="Your name..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="email"
                          type="email"
                          class="form-control"
                          id="email"
                          placeholder="Your email..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input
                          name="subject"
                          type="text"
                          class="form-control"
                          id="subject"
                          placeholder="Subject..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea
                          name="message"
                          rows="6"
                          class="form-control"
                          id="message"
                          placeholder="Your message..."
                          required=""
                        ></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        
                        <button type="submit" class="button">
                        <a href="https://wa.me/6281311990747" class="text-danger hover:text-white">
                          Send Message
                        </a>
                        </button>            
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
  </body>
</html>
