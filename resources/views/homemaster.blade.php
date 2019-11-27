<!DOCTYPE html>
<html lang="en">
<head>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet"/>

  <!-- Page Title -->
  <title>Avishranta Aryal</title>


  <!-- FavIcon Link -->
  


  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Bootstrap core CSS -->
  <link href="{{url('public/frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{url('public/frontend/assets/css/fontawesome.css')}}" />
  <link rel="stylesheet" href="{{url('public/frontend/assets/css/templatemo-style.css')}}" />
  <link rel="stylesheet" href="{{url('public/frontend/assets/css/owl.css')}}" />
  <link rel="stylesheet" href="{{url('public/frontend/assets/css/lightbox.css')}}" />
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
                                <a href="#"><img src="{{url('public/frontend/assets/images/me.jpg')}}" alt="Avishranta Aryal" /></a>
                            </div>
                            <div class="author-content">
                                <h4>Avishranta Aryal</h4>
                                <span>Web Developer</span>
                            </div>
                       
                                <nav class="main-nav" role="navigation">
                                    <ul >
                                    
                                    <li><a href="{{route('about')}}">About Me</a></li>
                                    <li><a href="{{route('skills')}}">What I’m good at</a></li>
                                    <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
                                    <li><a href="{{url('/blogs')}}">Blogs</a></li>
                                        <li><a href="{{url('/contact')}}">Contact Me</a></li>
                                    </ul>
                                </nav>
                                <div class="social-network">
                                 <ul class="soial-icons">
                                    <li><a href="https://www.facebook.com/avishranta.aryal" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li> <a href="https://www.linkedin.com/in/avishranta-aryal-7b102517b/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li> <a href="https://github.com/AvishrantaAryal" target="_blank"><i class="fa fa-github"></i></a></li>
                                    <li> <a href="https://www.instagram.com/avishranta/"target="_blank"><i class="fa fa-instagram"></i></a></li>
                                 </ul>
                                </div>
                                 <div class="copyright-text">
                                    <p>Copyright 2019 @ Avishranta Aryal</p>
                                </div>
                        </div>
                    </div>
        </div>

    @yield('content')
    </div> 
</body>    
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{url('public/frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('public/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{url('public/frontend/assets/js/isotope.min.js')}}"></script>
    <script src="{{url('public/frontend/assets/js/owl-carousel.js')}}"></script>
    <script src="{{url('public/frontend/assets/js/lightbox.js')}}"></script>
    <script src="{{url('public/frontend/assets/js/custom.js')}}"></script>
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
</html>


