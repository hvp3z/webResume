<?php include('includes/header.php'); ?>
<body>
    <?php include('includes/loaderTemplate.php'); ?>
    <?php include('includes/nav.php'); ?>
    <?php include('includes/introHero.php'); ?>

    <main class="content-wrap">
        <section class="about-me" id="about">
          <div class="container">
           <div class="row">
             <div class="col-sm-12 text-center mb-5 wow zoomIn">
               <h2 class="section-title">
                 About Me
               </h2>
               <span class="background-text">about me</span>
             </div>
           </div> <!-- END row-->

            <div class="row">

              <div class="col-lg-4 text-center wow fadeInLeft">
                <img style="opacity:0.8; border-radius: 100%;" src="assets/img/about-large.jpg" alt="">
              </div>

              <div class="col-lg-8 about-me-text pl-lg-5">
                <p class="lead my-4">
                  Hello, I’m <strong>Matthieu</strong>, an independent Full-Stack developer
                  professional based in France. Find me on
                  <a href="https://github.com/hvp3z" class="github-link">Github</a> and
                  <a href="https://www.linkedin.com/in/matthieu-duret-6a68188b/" class="linkedin-link">LinkedIn</a>
                </p>
                <p class="mb-5">
                  Experienced Full Stack Developer with a demonstrated history of working in the marketing and banking industry. Skilled in Mobile Application Development, PHP, Apache Cordova, Mobile Applications, and Web Design. Strong engineering professional with a Master’s Degree focused in Computer Programming/Programmer, General from SUPINFO International University.
                </p>
                <h4>Personal Information</h4>
                <ul class="personal-info list-inline clearfix mb-5">
                  <li><strong>Full Name :</strong> Matthieu Duret Diabangouaya</li>
                  <li><strong>Birthday :</strong> 24 August 1990</li>
                  <li><strong>Address :</strong> Paris, France</li>
                  <li><strong>Phone :</strong> +33 665 799 277</li>
                  <li><strong>Email :</strong> <a href="mailto:support@echotheme.com">matthieu.dbng@gmail.com</a></li>
                  <li><strong>Job :</strong> Full-Stack developer</li>
                </ul>
                <!-- TODO: Able buttons, et faire les liens -->
                <a href="download-resume.php" class="btn btn-theme btn-active mr-md-3 wow slideInUp">download resume</a>
                <a href="contact.php" class="btn btn-theme wow slideInUp">get in touch now</a>
              </div> <!-- END col-md-8 about-me-text-->
            </div> <!-- END row-->

          </div> <!-- END container-->
        </section> <!-- END about-me-->

        <section class="work-experience bg-gray">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-center mb-5 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <h2 class="section-title">
                            work experience
                        </h2>
                        <span class="background-text">experience</span>
                    </div>
                </div> <!-- END row-->

                <div class="row">

                    <div class="col-md-6 mt-5">
                        <div class="work-exp-block wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
                            <h4 style="display:inline-block" class="block-title">Full Stack Developer</h4>
                            <img style="max-width:120px; max-height: 120px; display:inline-block;" src="assets/img/lc.jpg" alt="LaCentrale">
                            <div class="working-duration">
                                Nov 2017 - Now
                            </div>
                            <p>
                                <b>Responsibilities : </b>Application maintenance, Evolutions, Code optimization, Legacy code recovery, Gradual redesign to Symfony 3</br> <b>Technologies : </b>Symfony 3, Amazon Web Services, Git </br>
                                <b>Organisation : </b> Agile methodologies
                            </p>
                        </div> <!-- END work-exp-block-->
                    </div> <!-- END col-md-6 -->

                    <div class="col-md-6 mt-5">
                        <div class="work-exp-block wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                            <h4 style="display:inline-block;" class="block-title">Zend & Symfony Developer</h4>
                            <img style="max-width:120px; max-height: 120px; display:inline-block;" src="assets/img/ca.jpg" alt="Crédit Agricole">
                            <h6 class="company-name color-text">Crédit Agricole</h6>
                            <div class="working-duration">
                                May 2017 - Oct 2017
                            </div>
                            <p>
                                <b>Responsibilities : </b> Study, design and development of applications, maintenance of the internal applications portfolio</br>
                                <b>Technologies : </b>Zend FrameWork, Symfony 2, SQL Server Management Studio, Bootstrap, HTML5, CSS, JavaScript, jQuery, Git
                            </p>
                        </div> <!-- END work-exp-block-->
                    </div> <!-- END col-md-6 -->

                </div> <!-- END row-->

                <div class="row">

                    <div class="col-md-6 mt-5">
                        <div class="work-exp-block wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeIn;">
                            <h4 style="display:inline-block;" class="block-title">Symfony & SuiteCRM Developer</h4>
                            <h6 class="company-name color-text">Megamark</h6>
                            <div class="working-duration">
                                Sep 2016 - Apr 2017
                            </div>
                            <p>
                                <b>Responsabilities : </b> Customization of SuiteCRM to meet the expectations of Symfony's data consuming services, and creation of a portal managing data entered in the CRM with Symfony.</br>
                                <b>Technologies : </b> Symfony 3.1.5, SuiteCRM, Doctrine ORM, SASS, Bootstrap, Git
                            </p>
                        </div> <!-- END work-exp-block-->
                    </div> <!-- END col-md-6 -->

                    <div class="col-md-6 mt-5">
                        <div class="work-exp-block wow fadeIn" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                            <h4 class="block-title">Magento Developer</h4>
                            <h6 class="company-name color-text">Activ'Browser</h6>
                            <div class="working-duration">
                                Feb 2015 - Jul 2016
                            </div>
                            <p>
                                <b>Responsabilities : </b> Magento plugin creation, applications maintenance, support for evolutions and bug fixes on Magento client shops.</br>
                                <b>Technologies : </b> Magento Framework (1.4 to 1.8), JavaScript, Prototype, jQuery, HTML5, LESS, CSS3, Git
                            </p>
                        </div> <!-- END work-exp-block-->
                    </div> <!-- END col-md-6 -->

                </div> <!-- END row-->
            </div> <!-- END container-->
        </section> <!-- END work-experience-->

        <section class="education" id="education">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-center mb-5 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <h2 class="section-title">
                            education
                        </h2>
                        <span class="background-text">education</span>
                    </div>
                </div> <!-- END row-->

                <div class="row">

                    <div class="col-md-6 mt-5">
                        <div class="edu-block wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
                            <p class="edu-session">2009 - 2014</p>
                            <div class="edu-info-text">
                                <h4 class="block-title">M.Sc. - Computer Science and Information Systems</h4>
                                <h6 class="institute-name mb-4 mt-3">
                                    <a href="http://www.supinfo.com/" target="_blank" title="Supinfo">
                                        <img style="max-width:120px; max-height: 120px;" src="assets/img/supinfo.png" alt="supinfo">
                                    </a>
                                </h6>
                                <p>
                                    Master of Science / Expert in Computer Science and Information Systems, recognized by the French state at the highest level, Level 1 (Bac+5 engineer, Master). I studied in Tours (FR).
                                </p>
                            </div>
                        </div> <!--END edu-block-->
                    </div> <!-- END col-md-6 -->

                    <div class="col-md-6 mt-5">
                        <div class="edu-block wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
                            <p class="edu-session">2009</p>
                            <div class="edu-info-text">
                                <h4 class="block-title">Baccalauréat S. (Scientific)</h4>
                                <h6 class="institute-name mb-4 mt-3">Lycée Sainte-Ursule</h6>
                                <p>
                                    French High School diploma.
                                </p>
                            </div>
                        </div> <!--END edu-block-->
                    </div> <!-- END col-md-6 -->

                </div> <!-- END row-->

            </div> <!-- END container-->
        </section> <!-- END education-->


        <section class="skills">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-center mb-5 wow zoomIn" style="visibility: hidden; animation-name: none;">
                        <h2 class="section-title">
                            My Skills
                        </h2>
                        <span class="background-text">Skills</span>
                    </div>
                </div> <!-- END row-->

                <div class="row">

                    <div class="col-md-6 pt-4">
                        <h4 class="block-title">Development Skills</h4>

                        <div class="skill">
                            <p class="skill-name">PHP</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" style="width: 95%;"><span class="progress-tooltip" style="left:95%">95%</span></div>
                            </div>
                        </div> <!-- END skill-->

                        <div class="skill">
                            <p class="skill-name">JavaScript &amp; jQuery</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" style="width: 95%;"><span class="progress-tooltip" style="left:95%">95%</span></div>
                            </div>
                        </div> <!-- END skill-->

                        <div class="skill">
                            <p class="skill-name">Symfony 2 & 3 / Zend / Magento</p>
                               <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" style="width: 90%;"><span class="progress-tooltip" style="left:90%">90%</span></div>
                            </div>
                        </div> <!-- END skill-->

                        <div class="skill">
                            <p class="skill-name">SQL</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" style="width: 90%;"><span class="progress-tooltip" style="left:90%">90%</span></div>
                            </div>
                        </div> <!-- END skill-->

                    </div> <!-- END col-md-6 -->

                    <div class="col-md-6 pt-4">

                        <h4 class="block-title">Design Skills</h4>

                        <div class="skill">
                            <p class="skill-name">Animation</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" style="width: 85%;"><span class="progress-tooltip" style="left:85%">85%</span></div>
                            </div>
                        </div> <!-- END skill-->

                        <div class="skill">
                            <p class="skill-name">Info Graphic</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" style="width: 80%;"><span class="progress-tooltip" style="left:80%">80%</span></div>
                            </div>
                        </div> <!-- END skill-->

                        <div class="skill">
                            <p class="skill-name">Photoshop</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" style="width: 80%;"><span class="progress-tooltip" style="left:80%">80%</span></div>
                            </div>
                        </div> <!-- END skill-->

                        <div class="skill">
                            <p class="skill-name">UI/UX</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" style="width: 75%;"><span class="progress-tooltip" style="left:75%">75  %</span></div>
                            </div>
                        </div> <!-- END skill-->

                    </div> <!-- END col-md-6 -->
                </div> <!-- END row-->
            </div> <!-- END container-->
        </section> <!-- END skills-->




        <!--<section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center mb-5 wow zoomIn" style="visibility: hidden; animation-name: none;">
                        <h2 class="section-title">
                            What people say
                        </h2>
                        <span class="background-text">testimonials</span>
                    </div>
                </div>
                <div class="row">
                    <div class="quote-slides owl-carousel owl-loaded owl-drag">


                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3420px;"><div class="owl-item active" style="width: 570px;"><div class="quote-item">
                            <div class="author-avatar">
                                <img src="assets/img/author/1.jpg" alt="">
                            </div>
                            <div class="quote-text">
                                <h4 class="author-name">Sultan Ahmed Jibon</h4>
                                <p class="author-profession">Software Developer</p>
                                <p>
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming vulputate. Nihil imper per tem.
                                </p>
                            </div>
                        </div></div><div class="owl-item active" style="width: 570px;"><div class="quote-item">
                            <div class="author-avatar">
                                <img src="assets/img/author/2.jpg" alt="">
                            </div>
                            <div class="quote-text">
                                <h4 class="author-name">Sultan Ahmed Jibon</h4>
                                <p class="author-profession">Software Developer</p>
                                <p>
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming vulputate. Nihil imper per tem.
                                </p>
                            </div>
                        </div></div><div class="owl-item" style="width: 570px;"><div class="quote-item">
                            <div class="author-avatar">
                                <img src="assets/img/author/1.jpg" alt="">
                            </div>
                            <div class="quote-text">
                                <h4 class="author-name">Sultan Ahmed Jibon</h4>
                                <p class="author-profession">Software Developer</p>
                                <p>
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming vulputate. Nihil imper per tem.
                                </p>
                            </div>
                        </div></div><div class="owl-item" style="width: 570px;"><div class="quote-item">
                            <div class="author-avatar">
                                <img src="assets/img/author/2.jpg" alt="">
                            </div>
                            <div class="quote-text">
                                <h4 class="author-name">Sultan Ahmed Jibon</h4>
                                <p class="author-profession">Software Developer</p>
                                <p>
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming vulputate. Nihil imper per tem.
                                </p>
                            </div>
                        </div></div><div class="owl-item" style="width: 570px;"><div class="quote-item">
                            <div class="author-avatar">
                                <img src="assets/img/author/1.jpg" alt="">
                            </div>
                            <div class="quote-text">
                                <h4 class="author-name">Sultan Ahmed Jibon</h4>
                                <p class="author-profession">Software Developer</p>
                                <p>
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming vulputate. Nihil imper per tem.
                                </p>
                            </div>
                        </div></div><div class="owl-item" style="width: 570px;"><div class="quote-item">
                            <div class="author-avatar">
                                <img src="assets/img/author/2.jpg" alt="">
                            </div>
                            <div class="quote-text">
                                <h4 class="author-name">Sultan Ahmed Jibon</h4>
                                <p class="author-profession">Software Developer</p>
                                <p>
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming vulputate. Nihil imper per tem.
                                </p>
                            </div>
                        </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                </div>
            </div>
        </section> --> <!-- END testimonials-->


        <section class="my-interest bg-gray">

          <div class="container">

           <div class="row">
             <div class="col-sm-12 text-center mb-5 wow zoomIn">
               <h2 class="section-title">
                 My Interests
               </h2>
               <span class="background-text">Interests</span>
             </div>
           </div> <!-- END row-->

           <div class="row">
           <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">
               <div class="interest-block">
                   <span class="lnr lnr-code"></span>
                   <p> Coding </p>
               </div>
           </div> <!-- END col-lg-2 col-md-4-->

           <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".6s">
               <div class="interest-block">
                   <span class="lnr lnr-laptop-phone"></span>
                   <p> Gaming </p>
               </div>
           </div> <!-- END col-lg-2 col-md-4-->

            <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="interest-block">
                    <span class="lnr lnr-music-note"></span>
                    <p> Music </p>
                </div>
            </div> <!-- END col-lg-2 col-md-4-->

            <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".4s">
                <div class="interest-block">
                    <span class="lnr lnr-cart"></span>
                    <p> Shopping </p>
                </div>
            </div> <!-- END col-lg-2 col-md-4-->

            <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="interest-block">
                    <span class="lnr lnr-bus"></span>
                    <p> Travelling </p>
                </div>
            </div> <!-- END col-lg-2 col-md-4-->

            <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <div class="interest-block">
                    <span class="lnr lnr-coffee-cup"></span>
                    <p> Coffee </p>
                </div>
            </div> <!-- END col-lg-2 col-md-4-->
           </div> <!-- END row-->

          </div> <!-- END container-->
        </section> <!-- END my-interest-->





        <!-- <section class="awards">

          <div class="container">

            <div class="row">
             <div class="col-sm-12 text-center mb-5 wow zoomIn">
               <h2 class="section-title">
                 My Awards
               </h2>
               <span class="background-text">Awards</span>
             </div>
            </div>

            <div class="row">

              <div class="awards-slides owl-carousel">

                <div class="awards-item">
                  <div class="awards-logo">
                    <img src="assets/img/awards/1.jpg" alt="">
                  </div>
                  <h4 class="block-title my-4">Excellence Award 2012</h4>
                  <p>
                    Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie.
                  </p>
                </div>

                <div class="awards-item">
                  <div class="awards-logo">
                    <img src="assets/img/awards/2.jpg" alt="">
                  </div>
                  <h4 class="block-title my-4">Excellence Award 2012</h4>
                  <p>
                    Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie.
                  </p>
                </div>

                <div class="awards-item">
                  <div class="awards-logo">
                    <img src="assets/img/awards/3.jpg" alt="">
                  </div>
                  <h4 class="block-title my-4">Excellence Award 2012</h4>
                  <p>
                    Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie.
                  </p>
                </div>

                <div class="awards-item">
                  <div class="awards-logo">
                    <img src="assets/img/awards/1.jpg" alt="">
                  </div>
                  <h4 class="block-title my-4">Excellence Award 2012</h4>
                  <p>
                    Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie.
                  </p>
                </div>

                <div class="awards-item">
                  <div class="awards-logo">
                    <img src="assets/img/awards/2.jpg" alt="">
                  </div>
                  <h4 class="block-title my-4">Excellence Award 2012</h4>
                  <p>
                    Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie.
                  </p>
                </div>

                <div class="awards-item">
                  <div class="awards-logo">
                    <img src="assets/img/awards/3.jpg" alt="">
                  </div>
                  <h4 class="block-title my-4">Excellence Award 2012</h4>
                  <p>
                    Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie.
                  </p>
                </div>

                <div class="awards-item">
                  <div class="awards-logo">
                    <img src="assets/img/awards/3.jpg" alt="">
                  </div>
                  <h4 class="block-title my-4">Excellence Award 2012</h4>
                  <p>
                    Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie.
                  </p>
                </div>

              </div>
            </div>

          </div>
        </section> -->

    </main> <!-- END content-wrap-->

    <?php include('includes/footer.php'); ?>

</body>
</html>