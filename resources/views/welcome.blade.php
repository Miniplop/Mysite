<!DOCTYPE html>
<html>
<head>
    <title>Kévin Jean,full-stack developer</title>
    <link href='https://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('/bower_components/bootstrap/css/bootstrap.css')}}"/>
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
                            <a href="#contact-section">Contact</a>
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
                    <p>Blazueygazuoeouazeboazueboahzeboazhbeoahzbe b e zeiauzgeuae a</p>
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
                    <p>Blazueygazuoeouazeboazueboahzeboazhbeoahzbe b e zeiauzgeuae a</p>
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
                    <p>Blazueygazuoeouazeboazueboahzeboazhbeoahzbe b e zeiauzgeuae a</p>
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
                    <p>Blazueygazuoeouazeboazueboahzeboazhbeoahzbe b e zeiauzgeuae a</p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- #END SERVICE SECTION -->

<!-- SKILLS SECTION -->
<div class="section" id="skills-section">

        <div class="container">
            <div class="chart" id="graph" data-percent="88"></div>
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
                    <h3>My Story</h3>
                </div>
            </div>
            <div class="col-md-12">
                <section id="cd-timeline">
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img">
                            <img src="{{asset('/bower_components/vertical-timeline/img/cd-icon-location.svg')}}" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>ENSIMAG</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                            <a href="#0" class="cd-read-more">Read more</a>
                            <span class="cd-date">2013-2016</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img">
                            <img src="{{asset('/bower_components/vertical-timeline/img/cd-icon-location.svg')}}" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Cycle Préparatoire Polytechnique</h2>
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
                            <h2>BAC S</h2>
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
            <div class="title">
                <h1>My Hobbies </h1>
            </div>
            <div class="row">
                <div class="box-hobbies ">
                    <div class="icon-hobbies">
                        <img class="img-responsive" src="{{asset("/images/icons/drink24.svg")}}">
                    </div>
                </div>
                <div class="box-hobbies">

                </div>
                <div class="box-hobbies">

                </div>
            </div>
        </div>


</div>
<!-- #END HOBBIES SECTION -->

<!-- CV SECTION -->
<div class="section" id="service-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-head">
                <div class="section-title">
                    <h1>My CV</h1>
                </div>
                <div>
                    <h3>Lama</h3>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- #END CV SECTION -->

<!-- CAFE SECTION -->
<div class="section" id="skills-section">
    <div class="container">
        <div class="section-title">
            <h1>HOBBIES</h1>
        </div>
        <h3>My history</h3>
    </div>
</div>
<!-- #END CAFE SECTION -->


<!-- CONTACT SECTION -->
<div class="section" id="contact-section">
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
<!-- #END CONTACT SECTION -->

</body>
<!-- #END BODY -->

<!-- INCLUDE LIBRARY -->
<script src="{{asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('/bower_components/underscore/underscore-min.js')}}"></script>
<script src="{{asset('/bower_components/modernizr/modernizr.js')}}"></script>
<script src="{{asset('/bower_components/chart/Chart.min.js')}}"></script>
<script src="{{asset('/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/bower_components/vertical-timeline/js/main.js')}}"></script>
<script src="{{asset('/bower_components/progressbar/progressbar.min.js')}}"></script>

<!-- SCRIPT JAVASCRIPT -->
<script src="{{asset('/js/main.js')}}"></script>
<!-- #END SCRIPT JAVASCRIPT -->

</html>
