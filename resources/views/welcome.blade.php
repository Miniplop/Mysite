<!DOCTYPE html>
<html>
<head>
    <title>Kévin Jean,full-stack developer</title>

    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Karma' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{asset('/bower_components/bootstrap/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('/bower_components/slick/slick/slick.css')}}"/>
    <link rel="stylesheet" href="{{asset('/bower_components/slick/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('/bower_components/vertical-timeline/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('/font/foundation-icons/foundation-icons.css')}}"/>
    <link rel="stylesheet" href="{{asset('sass/main.css')}}"/>
</head>



<!-- START BODY -->
<body>



<div id="loader-wrapper">
    <div id="loader">
        <!-- Loader SVG -->

        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
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
                            <a href="#service-section" >Service</a>
                        </li>
                        <li>
                            <a href="#skills-section">Skills</a>
                        </li>
                        <li>
                            <a href="#resume-section">Resume</a>
                        </li>
                        <li>
                            <a href="#hobbies-section">Hobbies</a>
                        </li>
                        <li>
                            <a href="#cv-section">CV</a>
                        </li>
                        <li>
                            <a href="#contact-me-section">Contact</a>
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
                <a class="btn btn-lg" title="My services">MY SERVICES</a>
            </div>
        </div>
    </div>
</div>
<!-- #END HOME SECTION -->

<!-- SERVICE SECTION -->
<div class="section" id="service-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-head">
                <div class="section-title">
                    <h1>Services</h1>
                </div>
                <div>
                    <h3>All I Can Do</h3>
                </div>

            </div>
        </div>
        <div class="col-md-6 box-wrapper">
            <div class="box-icon">
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
            </div>
            <div class="box-content">
                <div class="box-title">
                    <h3>Web Development</h3>
                </div>
                <div class="box-desc">
                    <p>
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed Morbi accumsan ipsum velit.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 box-wrapper">
            <div class="box-icon">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </div>
            <div class="box-content">
                <div class="box-title">
                    <h3>Web Design</h3>
                </div>
                <div class="box-desc">
                    <p>
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed Morbi accumsan ipsum velit.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 box-wrapper">
            <div class="box-icon">
                <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            </div>
            <div class="box-content">
                <div class="box-title">
                    <h3>Mobile Development</h3>
                </div>
                <div class="box-desc">
                    <p>
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed Morbi accumsan ipsum velit.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 box-wrapper">
            <div class="box-icon">
                <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
            </div>
            <div class="box-content">
                <div class="box-title">
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
        <div class="section-title">
            <div class="title">
                <h1>My Skills </h1>
            </div>
            <div>
                <h3>Punchline batard</h3>
            </div>
        </div>

            <!-- CAROUSEL START -->
            <div class="skill-carousel">
                <div>
                    <div class="wrapper-skill">
                        <canvas class="skill" id="myChart" skilled-pct="90"></canvas>
                        <div class="skill-description">
                            <h3>JavaScript</h3>
                            <p>Backbone, Angular
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="wrapper-skill">
                        <canvas class="skill" id="myChart" skilled-pct="90"></canvas>
                        <div class="skill-description">
                            <h3>PHP</h3>
                            <p>Symphony 2, Laravel
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="wrapper-skill">
                        <canvas class="skill" id="myChart" skilled-pct="80"></canvas>
                        <div class="skill-description">
                            <h3>HTML 5</h3>
                            <p>World Wide Web Consortium
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="wrapper-skill">
                        <canvas class="skill" id="myChart" skilled-pct="70"></canvas>
                        <div class="skill-description">
                            <h3>CSS 3</h3>
                            <p>Compass, Less
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="wrapper-skill">
                        <canvas class="skill" id="myChart" skilled-pct="60"></canvas>
                        <div class="skill-description">
                            <h3>DataBase</h3>
                            <p>MySql, MongoDB
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="wrapper-skill">
                        <canvas class="skill" id="myChart" skilled-pct="50"></canvas>
                        <div class="skill-description">
                            <h3>Others Tech.</h3>
                            <p>Java, C, C++
                            </p>
                        </div>
                    </div>
                </div>
            </div>


    </div>
</div>
<!-- #END SKILLS SECTION -->

<!-- RESUME SECTION -->
<div class="section" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-head">
                <div class="section-title">
                    <h1>Resume</h1>
                </div>
                <div>
                    <h3>Once upon the time ...</h3>
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
                            <p>                                One of the best Engineer School for Computer Science in France. I studied 3 years with a specialty "Information System", moreover I did lots of projects with size team of varying sizes. </p>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                            <a href="#0" class="cd-read-more">Read more</a>
                            <span class="cd-date">2011-2013</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img">
                            <img src="{{asset('/bower_components/vertical-timeline/img/cd-icon-location.svg')}}" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>BAC S - Toulouse</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                            <a href="#0" class="cd-read-more">Read more</a>
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
        <div class="section-title">
            <div class="title">
                <h1>My Hobbies</h1>
            </div>
            <h3>Rest and peace</h3>
        </div>
        <div class="section-content">

            <div class="col-md-6">
                <div class="col-md-5 ">
                    <span class="box-icon">
                        <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                    </span>
                </div>
                <div class="col-md-7 box-content">
                    <div class="box-title">
                        <h3>Culture</h3>
                        <h5>Lama</h5>
                    </div>
                    <hr>
                    <div class="box-desc">
                        <ul>
                            <li>Reading</li>
                            <li>Cooking</li>
                            <li>Music</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-md-5 ">
                    <span class="box-icon">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    </span>
                </div>
                <div class="col-md-7 box-content">
                    <div class="box-title">
                        <h3>Games</h3>
                        <h5>Entertain</h5>
                    </div>
                    <hr>
                    <div class="box-desc">
                        <ul>
                            <li>Poker</li>
                            <li>Bowling</li>
                            <li>Video Making</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-md-5 ">
                    <span class="box-icon">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    </span>
                </div>
                <div class="col-md-7 box-content">
                    <div class="box-title">
                        <h3>Sports</h3>
                        <h5>Exert Yourself</h5>
                    </div>
                    <hr>
                    <div class="box-desc">
                        <ul>
                            <li>Swimming</li>
                            <li>Dancing</li>
                            <li>Running</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-md-5 ">
                    <span class="box-icon">
                        <span class="glyphicon glyphicon-plane" aria-hidden="true"></span>
                    </span>
                </div>
                <div class="col-md-7 box-content">
                    <div class="box-title">
                        <h3>Travel</h3>
                        <h5>Discover</h5>
                    </div>
                    <hr>
                    <div class="box-desc">
                        <ul>
                            <li>Linguistic travel</li>
                            <li>Camping</li>
                            <li>Hiking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
<!-- #END HOBBIES SECTION -->

<!-- CV SECTION -->
<div class="section" id="cv-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-head">
                <div class="section-title">
                    <h1>My CV</h1>
                </div>
                <div>
                    <h3>Wants to read more about me ?</h3>
                </div>
            </div>
            <div class="section-content">
                <div class="col-md-4">

                    <img class=" visible-lg" src="{{asset("/images/cv.png")}}">
                    </img>

                </div>
                <div class="col-md-8">
                    <h3>CV PDF</h3>
                    <p>
                        My resume in PDF format contains all the information on my profile. If you can not find information on my resume, please see the complete website or <a>contact me.</a></p>
                    <button class="btn  btn-primary">
                        <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                        Download
                    </button>
                    <h3>CV Online</h3>
                    <p>
                        Mon Curriculum Vitae au format PDF contient toutes les informations concernant mon profil en vue synthétique. Si vous ne trouvez pas une information dans mon CV, n'hésitez pas à consulter l'ensemble du site internet ou à me contacter.
                    </p>
                    <button class="btn btn-primary">
                        <i class="fi-social-linkedin"></i>
                        LinkedIn
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END CV SECTION -->

<!-- CONTACT ME SECTION -->
<div class="section" id="contact-me-section">
    <div class="container">
        <div class="section-title">
            <div class="title">
                <h1>Contact Me</h1>
            </div>
            <h3>Let's be friend</h3>
        </div>
        <div class="section-content">
            <form>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-3">
                            <label for="exampleInputEmail1">Name*</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Name">
                        </div>
                        <div class="col-md-3">
                            <label for="exampleInputPassword1">Email*</label>
                            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Your Email">
                        </div>
                    </div>


                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-2  col-md-8">
                            <label for="exampleInputFile">Message*</label>
                            <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                        </div>
                    </div>

                </div>
                <div class="">
                    <div type="submit" class="submit-button">
                        <a class="btn btn-lg">
                            Send Message
                        </a>
                    </div>
                </div>

            </form>
        </div>

    </div>
</div>
<!-- #END CONTACT ME SECTION -->


<!-- FOOTER SECTION -->
<div class="section" id="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 social-wrapper">
                <a href="http://skype.com">
                    <div class="box-social box-social-skype">
                        <i class="fi-social-skype"></i>
                    </div>
                </a>
                <div class="box-social box-social-mail">
                    <i class="fi-mail"></i>
                </div>
                <div class="box-social box-social-linkedin">
                    <i class="fi-social-linkedin"></i>
                </div>
            </div>

        </div>
        <div class="row"></div>
        <div class="col-md-12" id="copyright">
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
<script src="{{asset('/bower_components/slick/slick/slick.min.js')}}"></script>

<!-- SCRIPT JAVASCRIPT -->
<script src="{{asset('/js/main.js')}}"></script>
<!-- #END SCRIPT JAVASCRIPT -->

</body>
<!-- #END BODY -->





</html>
