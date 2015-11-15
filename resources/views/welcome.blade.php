<!DOCTYPE html>
<html>
<head>
    <title>Kévin Jean,full-stack developer</title>

    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Karma' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{asset('/bower_components/bootstrap/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('/bower_components/vertical-timeline/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('/font/foundation-icons/foundation-icons.css')}}"/>
    <link rel="stylesheet" href="{{asset('sass/main.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('/bower_components/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('/bower_components/owl-carousel/owl.theme.css')}}">
</head>



<!-- START BODY -->
<body>



<div id="loader-wrapper">
    <div id="loader">
        <!-- Loader SVG -->
        <div></div>
        <div class="sk-folding-cube">
            <img src="{{asset('/images/puff.svg')}}" width="100px">
        </div>
    </div>
</div>



<!-- NAVBAR SECTION-->
<div class="navbar collapse navbar-collapse section" id="header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-header">
                    <span id="Myname"> Kévin Jean</span>
                </div>
                <nav class="navbar-collapse collapse">
                    <ul class="nav navbar-right navbar-nav">
                        <li>
                            <a href="#home-section">Home</a>
                        </li>
                        <li>
                            <a href="#service-section" >Services</a>
                        </li>
                        <li>
                            <a href="#skills-section">Skills</a>
                        </li>
                        <li>
                            <a href="#resume-section">Formation</a>
                        </li>
                        <li>
                            <a href="#hobbies-section">Hobbies</a>
                        </li>
                        <li>
                            <a href="#cv-section">CV</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>
<!-- #END NAVBAR SECTION -->

<!-- HOME SECTION -->
<div class="section" id="home-section">
    <div class="container" id="home-container">
        <div class="row">
            <div id="myname">
                <h1 class="title">Kévin Jean</h1>
            </div>
            <div id="mydescription">
                <h4>
                    <span>I'm a Web Developer</span>
                </h4>
            </div>
            <div id="button-myservice">
                <a class="btn btn-lg" title="My services" href="#skills-section">MY SKILLS</a>
            </div>
        </div>
    </div>
</div>
<!-- #END HOME SECTION -->

<!-- SERVICE SECTION -->
<div class="section " id="service-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-head">
                <div class="section-title">
                    <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">Services</h1>
                </div>
            </div>
        </div>
        <div class="col-md-6 box-wrapper">
            <div class="box-icon wow flipInY" data-wow-duration="1s" data-wow-delay="200ms">
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
            </div>
            <div class="box-content wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">
                <div class="box-title">
                    <h3>Web Development</h3>
                </div>
                <div class="box-desc">
                    <p>
                        It's been two years that I spent most of my projects to the achievement of web application. By my curiosity and creativity, I discovered a passion for this domains.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 box-wrapper ">
            <div class="box-icon wow flipInY" data-wow-duration="1s" data-wow-delay="200ms">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </div>
            <div class="box-content wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">
                <div class="box-title">
                    <h3>Web Design</h3>
                </div>
                <div class="box-desc">
                    <p>
                        The web is a boundless field for creativity in design. In addition there are new inspiration every day , it's fascinating .
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 box-wrapper ">
            <div class="box-icon wow flipInY" data-wow-duration="1s" data-wow-delay="200ms">
                <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            </div>
            <div class="box-content wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">
                <div class="box-title " >
                    <h3>Mobile Development</h3>
                </div>
                <div class="box-desc">
                    <p>
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed Morbi accumsan ipsum velit.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 box-wrapper ">
            <div class="box-icon wow flipInY" data-wow-duration="1s" data-wow-delay="200ms">
                <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
            </div>
            <div class="box-content wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">
                <div class="box-title " >
                    <h3>Server Development</h3>
                </div>
                <div class="box-desc">
                    <p>
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed Morbi accumsan ipsum velit.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- #END SERVICE SECTION -->

<!-- SKILLS SECTION -->
<div class="section" id="skills-section">

    <div class="container">
        <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
            <div class="title ">
                <h1>My Skills </h1>
            </div>

        </div>

        <!-- CAROUSEL START -->
        <div  id="Myskills" class="owl-carousel">
            <div>
                <div class="wrapper-skill  wow flipInX" data-wow-duration="1s" data-wow-delay="200ms">
                    <canvas class="skill" id="myChart" skilled-pct="90" ></canvas>
                    <div class="skill-description">
                        <h3>JavaScript</h3>
                        <span>Backbone, Angular
                        </span>
                    </div>
                </div>
            </div>
            <div>
                <div class="wrapper-skill wow flipInX" data-wow-duration="1s" data-wow-delay="200ms">
                    <canvas class="skill  " id="myChart" skilled-pct="90" ></canvas>
                    <div class="skill-description">
                        <h3>PHP</h3>
                        <span>Symphony 2, Laravel
                        </span>
                    </div>
                </div>
            </div>
            <div>
                <div class="wrapper-skill wow flipInX" data-wow-duration="1s" data-wow-delay="200ms">
                    <canvas class="skill " id="myChart" skilled-pct="80" ></canvas>
                    <div class="skill-description">
                        <h3>HTML 5</h3>
                        <span>
                        </span>
                    </div>
                </div>
            </div>
            <div>
                <div class="wrapper-skill">
                    <canvas class="skill" id="myChart" skilled-pct="70"></canvas>
                    <div class="skill-description">
                        <h3>CSS 3</h3>
                        <span>Compass, Less
                        </span>
                    </div>
                </div>
            </div>
            <div>
                <div class="wrapper-skill">
                    <canvas class="skill" id="myChart" skilled-pct="60"></canvas>
                    <div class="skill-description">
                        <h3>DataBase</h3>
                        <span>MySql, MongoDB
                        </span>
                    </div>
                </div>
            </div>
            <div>
                <div class="wrapper-skill">
                    <canvas class="skill" id="myChart" skilled-pct="50"></canvas>
                    <div class="skill-description">
                        <h3>Others Tech.</h3>
                        <span>Java, C, C++
                        </span>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- #END SKILLS SECTION -->

<!-- FORMATION SECTION -->
<div class="section" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-head wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
                <div class="section-title ">
                    <h1>Formation</h1>
                </div>
            </div>
            <div class="col-md-12">
                <section id="cd-timeline">
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img">
                            <img src="{{asset('/bower_components/vertical-timeline/img/cd-icon-location.svg')}}" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>ENSIMAG - Grenoble</h2>
                            <p>  One of the best Engineer School for Computer Science in France. I studied 3 years with a specialty "Information System", moreover I did lots of projects with size team of varying sizes. </p>
                            <a href="http://ensimag.grenoble-inp.fr/l-ecole/?RH=ENSIMAG-01_Present" class="cd-read-more">Read more</a>
                            <span class="cd-date">2013-2016</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img">
                            <img src="{{asset('/bower_components/vertical-timeline/img/cd-icon-location.svg')}}" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>CPP - Nancy</h2>
                            <p>A preparatory class at large schools of French engineer. I followed specialization Mathematics/Computer Science and Automatism.</p>
                            <a href="http://www.la-prepa-des-inp.fr/cursus/" class="cd-read-more">Read more</a>
                            <span class="cd-date">2011-2013</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img">
                            <img src="{{asset('/bower_components/vertical-timeline/img/cd-icon-location.svg')}}" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>High School Diploma S - Toulouse</h2>
                            <p>Diploma obtained with mention "good" , specializing in engineering science</p>
                            <a href="https://fr.wikipedia.org/wiki/Baccalaur%C3%A9at_scientifique" class="cd-read-more">Read more</a>
                            <span class="cd-date">2011</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                </section>
            </div>

        </div>
    </div>

</div>
<!-- #END RESUME SECTION -->

<!-- HOBBIES SECTION -->
<div class="section" id="hobbies-section">
    <div class="container">
        <div class="section-title  wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
            <div class="title">
                <h1>My Hobbies</h1>
            </div>
        </div>
        <div class="section-content">

            <div class="col-md-3 col-sm-6 hi-icon-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
                <a class="hi-icon hi-icon-plane "></a>
                <h3>Travel</h3>
            </div>

            <div class="col-md-3 col-sm-6 hi-icon-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
                <a class="hi-icon hi-icon-sport">
                </a>
                <h3>Sport</h3>
            </div>

            <div class="col-md-3 col-sm-6 hi-icon-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
                <a class="hi-icon hi-icon-music"></a>
                <h3>Music</h3>
            </div>

            <div class="col-md-3 col-sm-6 hi-icon-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
                <a class="hi-icon hi-icon-video"></a>
                <h3>Video making</h3>
            </div>
        </div>

    </div>


</div>
<!-- #END HOBBIES SECTION -->

<!-- CV SECTION -->
<div class="section" id="cv-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-head wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
                <div class="section-title ">
                    <h1>My CV</h1>
                </div>
            </div>
            <div class="section-content">
                <div class="col-md-4  wow bounceIn" data-wow-duration="1s" data-wow-delay="200ms">

                    <img class=" visible-lg" src="{{asset("/images/cv.png")}}" >
                    </img>

                </div>
                <div class="col-md-8 " data-wow-duration="1s" data-wow-delay="200ms">
                    <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">CV PDF</h3>
                    <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">
                        My resume in PDF format contains all the information on my profile. If you can not find information on my resume, please see the complete website or <a href="mailto:kevin.jean@ensimag.grenoble-inp.fr">contact me.</a></p>
                    <button class="btn  btn-primary wow flipInX">
                        <a href="{{asset("/images/Resume.pdf")}}" download="Resume_Kévin_Jean.pdf" >
                            <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                            Download
                        </a>
                    </button>
                    <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">CV Online</h3>
                    <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">
                        Find me also on the professional network Linkedin or on GitHub to learn more about the projects on which I worked.
                    </p>
                    <button class="btn btn-primary wow flipInX" data-wow-duration="1s" data-wow-delay="200ms">
                        <i class="fi-social-linkedin"></i>
                        LinkedIn
                    </button>
                    <button class="btn btn-primary wow flipInX" data-wow-duration="1s" data-wow-delay="200ms">

                        <i class="fi-social-github"></i>
                        <a href="https://github.com/Miniplop">GitHub</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END CV SECTION -->


<!-- FOOTER SECTION -->
<div class="section" id="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 social-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">

                <div class="box-social box-social-mail">
                    <a href="mailto:kevin.jean@ensimag.grenoble-inp.fr">
                        <i class="fi-mail"></i>
                    </a>
                </div>
                <div class="box-social box-social-linkedin">
                    <a href="https://fr.linkedin.com/in/kévin-jean-054639aa">
                        <i class="fi-social-linkedin"></i>
                    </a>
                </div>
                <div class="box-social box-social-github">
                    <a href="https://github.com/Miniplop">
                        <i class="fi-social-github"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-12 wow fadeInUp" id="copyright" data-wow-duration="1s" data-wow-delay="200ms">
            ©2015 Kévin Jean. All rights reserved.
        </div>
    </div>
</div>
<!-- #END FOOTER SECTION -->

<!-- INCLUDE LIBRARY -->
<script src="{{asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('/bower_components/underscore/underscore-min.js')}}"></script>
<script src="{{asset('/bower_components/modernizr/modernizr.js')}}"></script>
<script src="{{asset('/bower_components/chart/Chart.min.js')}}"></script>
<script src="{{asset('/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/bower_components/vertical-timeline/js/main.js')}}"></script>
<script src="{{asset('/bower_components/vertical-timeline/js/main.js')}}"></script>
<script src="{{asset('/bower_components/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('/bower_components/bootstrap-validator/js/validator.js')}}"></script>
<script src="{{asset('/bower_components/WOW/dist/wow.min.js')}}"></script>

<!-- SCRIPT JAVASCRIPT -->
<script src="{{asset('/js/main.js')}}"></script>
<!-- #END SCRIPT JAVASCRIPT -->

</body>
<!-- #END BODY -->





</html>
