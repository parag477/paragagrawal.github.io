<?php require 'partials/_dbconnect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Parag Agrawal - Personal Portfolio" />
	<meta name="keywords" content="blog, business card, creative, creative portfolio, personal, portfolio, responsive portfolio, resume, resume theme, vcard" />
	<meta name="author" content="parag agrawal" />
    <title>Parag Agrawal - Personal Portfolio</title>
  <!--favicon-img--> 
   <link rel="icon" type="image/png" href="images/parag logo.png">
   <!--favicon-img-->
   <!--main css file should not be removed -->
    <link rel="stylesheet" href="css/index.css">
    <!--main css file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
</head>
<body>
    <!--contains all the div-->
    <div id="all">
    <!--mouse  follower-->
        <div class="cursor"></div>
    <!--mouse  follower-->
    <!--loader-->
        <div id="loader">
            <span class="color">Parag</span>Agrawal 
        </div>
    <!--loader-end-->
    <!--link-screen-->
        <div id="breaker">
        </div>
        <div id="breaker-two">
        </div>
    <!--link-screen-->
        <!--Main-Section-->
        <!--Navigator-fullscreen-->
        <div id="navigation-content">
            <div class="logo">
                <img src="images/favicon.ico" alt="logo">
            </div>
            <div class="navigation-close">
                <span class="close-first"></span>
                <span class="close-second"></span>
            </div>
            <div class="navigation-links">
                <a href="#" data-text="HOME" id="home-link" >HOME</a>
                <a href="#" data-text="ABOUT" id="about-link" >ABOUT</a>
                <!-- <a href="#" data-text="BLOG" id="blog-link" >BLOG</a> -->
                <a href="#" data-text="PORTFOLIO" id="portfolio-link" >PORTFOLIO</a>
                <a href="#" data-text="CONTACT" id="contact-link" >CONTACT</a>
            </div>
        </div>
        <!--Navigator-Fullscreen END-->
          <!--Home Page-->
        <!--Menubar-->
        <div id="navigation-bar">
            <img src="images/parag logo.png" alt="logo">
            <div class="menubar">
                <span class="first-span"></span>
                <span class="second-span"></span>
                <span class="third-span"></span>
            </div>
        </div>
        <!--Menubar End-->
          <!--Header-->
        <div id="header">
            <div id="particles"></div>
              <!--Social Media Links-->
            <div class="social-media-links">
               <a href="https://instagram.com/parag_codes"><img src="images/instagram logo.png" class="social-media" alt="instagram-logo"></a>
                <a href="https://facebook.com/parag.agrawal-101892202"><img src="images/facebook logo.png" class="social-media" alt="facebook-logo"></a>
                <a href="https://www.linkedin.com/in/parag-agrawal-101892202/"><img src="images/linkedin logo.png" class="social-media" alt="linkedin-logo"></a>
                <a href="https://twitter.com/Parag_477"><img src="images/twitter logo.png" class="social-media" alt="twitter-logo"></a>

            </div>
            <!--Social Media Links end-->
            <div class="header-content">
                <div class="header-content-box">
                <div class="firstline"><span class="color">Parag </span>Agrawal</div>
                <div class="secondline">
                I'm a
            <span class="txt-rotate color" data-period="1200"data-rotate='[ " Full Stack Developer.", " Python Programmer.", " Freelancer." ]'></span>
            <span class="slash">|</span>
        </div>
                    <div class="contact">
                <a href="Mailto:paragagrawal477@gmail.com"><img src="images/mail.png" alt="email-pic" class="contactpic"></a>
                <a href="Tel:+91 748 991 8182"><img src="images/call.png" alt="phone-pic" class="contactpic"></a>
                    </div>    
            </div>
            </div>
            <!--header image-->
            <div class="header-image">
            <img src="images/man2.jpg" alt="logo">
            </div>
            <!--header image end-->
        </div>
           <!--Header End-->
        <!--HomePage End-->
        <!--Main-Section End-->
        <!--about-->
        <div id="about">
            <div class="color-changer">
            <div class="color-panel">
                <img src="images/gear.png" alt="">
            </div>
            <div class="color-selector">
                <div class="heading">Custom Colors</div>
                <div class="colors">
                    <ul >
                    <li>
                        <a href="#0" class="color-red " title="color-red"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-purple" title="color-purple"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-malt" title="color-malt"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-green" title="color-green"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-blue" title="color-blue"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-orange" title="color-orange"></a>
                    </li>
                    </ul>
                </div>
            </div>
            </div>
            <!--about content-->
            <div id="about-content">
                <div class="about-header">
                    About <span class="color">Me</span>
                    <span class ="header-caption">Get to Know <span class="color"> me.</span></span>
                </div>
                <div class="about-main">
            <div class="about-first-paragraph wow">
            <!--about description-->
               <span class="about-first-line">
                    I'm a passionate 
                    <span class="color">web developer and freelancer</span>
                     based in Indore , India </span>
                     <br>
               <span class="about-second-line"> An enthusiastic and dedicated Web Develooper and Python Programmer who have keen focus on building his skills and personality.<br>
               Well I have covered many languages and currently I am investing my time on Machine Learning and Blockchain technologies. <br><br>
               Talking about my study background I am a sophomore pursuing Bachelor's degree in Computer Science.
               </span>
               <div class="cv">
                <a href="https://drive.google.com/file/d/1xE3hB4x4gLB4Bj9sb5_jLNgqo28iTILs/view?usp=share_link" target="_blank"><button>Download <span class="color">Resume</span></button></a>
            </div>
            </div>
            <!--about picture-->
            <div class="about-img">
                <img src="images/about.png" alt="Your Image">
            </div>
            </div>
    
            </div>
            <!--services start-->
            <div id="services">
                <div class="color-changer">
                    <div class="color-panel">
                        <img src="images/gear.png" alt="">
                    </div>
                    <div class="color-selector">
                        <div class="heading">Custom Colors</div>
                        <div class="colors">
                            <ul >
                            <li>
                                <a href="#0" class="color-red " title="color-red"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-purple" title="color-purple"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-malt" title="color-malt"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-green" title="color-green"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-blue" title="color-blue"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-orange" title="color-orange"></a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    </div>
            <!--services header-->
                    <div class="services-heading wow">
                        <span class="color">My</span> Services
                    </div>
            <!--services header end-->
            <!--services content-->
                    <div class="services-content">
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/coding.png" alt="service-one">
                               </div>
                               <div class="service-description">
                                <h2>Web Development</h2>
                                <p>As a web developer helps you build your dreamy website to get recognized throughout the world.</p>
                               </div>
                           </div>
                           <div class="service-two service wow">
                               <div class="service-img">
                               <img src="images/instagram.png" alt="service-two">
                               </div>
                               <div class="service-description">
                                <h2>Python Programming</h2>
                                <p>There are unlimited possibilities in developmment in Python with me. You can have every possible feature required in your project.</p>
                               </div>
                           </div>
                           <div class="service-three service wow">
                            <div class="service-img">
                               <img src="images/bulb.png" alt="service-three">
                            </div>
                            <div class="service-description">
                                <h2>SEO </h2>
                                <p>My SEO strategies will help your website grow faster and discovered by audience more easily. </p>
                            </div>
                        </div>
                    </div>
            </div>
            <!--services content end-->
            <!--services end-->
            <div id="skills">
                <div class="skills-header">
                     My <span class="color"> Skills</span>
                </div>
                <div class="skills-content " style="text-align: center;">


                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        Python
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="python-progress wow">97%</div>
                    </div>
                    </div>


                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        HTML/CSS
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="html-progress wow">97%</div>
                    </div>
                    </div>


                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        PHP
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="php-progress wow">90%</div>
                    </div>
                    </div>


                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                      Javascript
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="js-progress wow">89%</div>
                    </div>
                    </div>


                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        NodeJS/ExpressJS
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="node-progress wow">85%</div>
                    </div>
                    </div>


                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        SEO
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="seo-progress wow">85%</div>
                    </div>
                    </div>
                    

                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        Adobe Photoshop
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="adobe-progress wow">75%</div>
                    </div>
                    </div>


                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        Canva
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="canva-progress wow">75%</div>
                    </div>
                    </div>


                </div>
            </div>
    <!--copyright-section You Can Remove After Downloading-->
            <div class="footer">
             <div class="footer-text">
                 <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Parag Agrawal
             </div>
            </div>
    <!--copyright-section-->
        </div>
        <!--about end-->
        <!--portfolio-->
        <div id="portfolio">
            <div class="color-changer">
                <div class="color-panel">
                    <img src="images/gear.png" alt="">
                </div>
                <div class="color-selector">
                    <div class="heading">Custom Colors</div>
                    <div class="colors">
                        <ul >
                        <li>
                            <a href="#0" class="color-red " title="color-red"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-purple" title="color-purple"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-malt" title="color-malt"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-green" title="color-green"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-blue" title="color-blue"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-orange" title="color-orange"></a>
                        </li>
                        </ul>
                    </div>
                </div>
                </div>
            <div class="portfolio-header"> <span class="color"> My </span> Portfolio
            <span class ="header-caption"> Some Of My <span class="color"> Works</span></span></div>
             <div id="portfolio-content">
                 <div class="portfolio portfolio-first">
                     <div class="portfolio-image">
                        <img src="images/jarvis.jpg" alt="portfolio-first">
                     </div>
                     <div class="portfolio-text">
                         <h2>Jarvis</h2>
                         <p>Jarvis is a virtual assistant that can perform various task like talking, fetching news and cracking jokes and many others. <br>
                         <span class="tech-stack">Tech Stack :- </span>Python, Deep Learning and Computer Vision.</p>
                         <div class="button"><a href="https://github.com/parag477/Jarvis"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                     </div>
                 </div>
                 <div class="portfolio portfolio-second">
                    <div class="portfolio-image">
                        <img src="images/blog_website.jpg" alt="portfolio-second">
                    </div>
                    <div class="portfolio-text">
                        <h2>Blog Website</h2>
                        <p>A tech blog website named <a href="http://innotechzz.com" style = "text-decoration:none;">Innotechzz</a> that keeps you updated with new technology and science related news.<br>
                            <span class="tech-stack">Tech Stack :- </span>HTML, CSS, JavaScript, JQuery, Bootstrap, PHP, MySQL</p>
                        <div class="button"><a href="https://github.com/parag477"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                    </div>
                </div>
             
                <div class="portfolio portfolio-third">
                    <div class="portfolio-image">
                        <img src="images/document_scanner.jpg" alt="portfolio-third">
                    </div>
                    <div class="portfolio-text">
                        <h2>Document Scanner</h2>
                        <p>The purpose of Document Scanner is to extract the text from the document. It uses webcam for scanning the documents.<br>
                            <span class="tech-stack">Tech Stack :- </span>Python, Computer Vision</p>
                        <div class="button"><a href="https://github.com/parag477/Document-Scanner"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                    </div>
                </div>
             
                <div class="portfolio portfolio-third">
                    <div class="portfolio-image">
                        <img src="images/control_volume.jpg" alt="portfolio-third">
                    </div>
                    <div class="portfolio-text">
                        <h2>Control Volume With Hand</h2>
                        <p>Control Volume With Hand is a system that control the PC's volume via hand movements. It detects the hand moments like zoom out and zoom in for increment and decrement. <br>
                            <span class="tech-stack">Tech Stack :- </span>Python, Computer Vision</p>
                        <div class="button"><a href="https://github.com/parag477/Control-Volume-with-Hand"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                    </div>
                </div>

                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/virtual_paint.jpg" alt="portfolio-fourth">
                    </div>
                    <div class="portfolio-text">
                        <h2>Virtual Paint</h2>
                        <p>This project is for painting virtually throough defined colors. By detecting the hand movement it draws the painting. <br>
                            <span class="tech-stack">Tech Stack :- </span>Python, Computer Vision</p>
                        <div class="button"><a href="https://github.com/parag477/Virtual-Paint-Using-OpenCV"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                    </div>
                </div>
                 </div>
                    <!--copyright-section You Can Remove After Downloading-->
            <div class="footer">
                <div class="footer-text">
                    <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Parag Agrawal
                </div>
               </div>
       <!--copyright-section-->
             </div>
        <!--portfolio end-->

        
        <!--contact-->
    <?php
        $showAlert = false;
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'partials/_dbconnect.php';
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];


        $sql = "INSERT INTO `contact` (`name`, `email`, `subject`, `msg`, `ctime`) VALUES ('$name', '$email', '$subject', '$message'";

        $result = mysqli_query($con, $sql);
        if($result){
        $showAlert = true;
        }

        }
    ?>

     <div id="contact">
        <div class="color-changer">
            <div class="color-panel">
                <img src="images/gear.png" alt="">
            </div>
            <div class="color-selector">
                <div class="heading">Custom Colors</div>
                <div class="colors">
                    <ul >
                    <li>
                        <a href="#0" class="color-red " title="color-red"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-purple" title="color-purple"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-malt" title="color-malt"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-green" title="color-green"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-blue" title="color-blue"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-orange" title="color-orange"></a>
                    </li>
                    </ul>
                </div>
            </div>
            </div>
         <div class="contact-header">Contact <span class="color"> Me</span>
        <div class="contact-header-caption"> <span class="color"> Lets </span>Talk Further.</div></div>
        <div class="contact-content">

            <!--Contact form-->
             <div class="contact-form">
                 <div class="form-header">
                     Message Me
                 </div>

                 <form id="myForm" method="post" action="index.php">
                    <div class="input-line">
                        <input  id="name" name="name" type="text" placeholder="Name" class="input-name">
                        <input id="email" name="email" type="email" placeholder="Email"  class="input-name">
                    </div>
                        <input type="text" id="subject" name="subject" placeholder="subject" class="input-subject">
                        <textarea id ="body" name="message" class="input-textarea" placeholder="message"></textarea>

                    <button type="submit" id ="submit" value="send">Submit</button>
                 </form>
               
             </div>
            <!--Contact form-->

            <!--Contact information-->
             <div class="contact-info">
                <div class="contact-info-header">
                    Contact Info
                </div>
                <div class="contact-info-content">
                <div class="contect-info-content-line">
                    <img src="./images/icon-name.png" class="icon" alt="name-icon">
                    <div class="contact-info-icon-text">
                        <h6>Name</h6>
                        <p>Parag Agrawal</p>
                  </div>
                </div>
                <div class="contect-info-content-line">
                  <img src="./images/icon-location.png" class="icon" alt="location-icon">
                  <div class="contact-info-icon-text">
                      <h6>Location</h6>
                      <p>Indore, India</p>
                </div>
              </div>
              <div class="contect-info-content-line">
                  <img src="./images/icon-phone.png" class="icon" alt="phone-icon">
                  <div class="contact-info-icon-text">
                      <h6>Call</h6>
                      <p>+91 748 991 8182</p>
                </div>
              </div>
              
              <div class="contect-info-content-line">
                  <img src="./images/icon-email.png" class="icon" alt="email-icon">
                  <div class="contact-info-icon-text">
                      <h6>Email</h6>
                      <p>paragagrawal477@gmail.com</p>
                </div>
              </div>
                </div>
            <!--Contact information end-->
           </div>
        </div>
                    <!--copyright-section You Can Remove After Downloading-->
                    <div class="footer">
                        <div class="footer-text">
                            <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Parag Agrawal
                        </div>
                       </div>
               <!--copyright-section-->
     </div>
        <!--contact end-->
    </div>
    <!--all the divisions-->
    <script src="js/jquery.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/index.js"></script>
    <!--particles script-->
    <script>
  particlesJS("particles", {"particles":{"number":{"value":40,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
    </script>

</body>
</html>