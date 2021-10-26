<!DOCTYPE html>
<html lang="en" id="index-html">

<?php
$page = 'index';
include('inc\head.php');
//replace with bootstrap
include('src\db.php');
?>



<body id="index-body">
    <div id="body-container">

        <?php include('inc\header.php');?>


        <main>

            <!-- Carousel Section -->
            <section id="carousel"> <!--(1)/main-->
        
                <div class="slick">
                    <div class="slick-slide">
                        <div class="carousel-img-container">
                            <img class="carousel-img" src="resources/img/home-3wAI.jpg" alt="Web Design">
                        </div>
                        <div class="carousel-text">
                            <h1>Web Design</h1>
                            <p>For businesses looking to make a strong <br>and effective first impression.</p>
                            
                            <button class="carousel-button carousel-design">Find Out More<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>

                    <div class="slick-slide">
                        <div class="carousel-img-container">
                            <img class="carousel-img" src="resources/img/home-57sJ.jpg" alt="IT Support Norfolk">
                        </div>
                        <div class="carousel-text">
                            <h1>IT Support</h1>
                            <p>Fast and cost-effective IT support <br>services for your business</p>
                            
                            <button class="carousel-button carousel-it">Find Out More<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                             
                    <div class="slick-slide">
                        <div class="carousel-img-container">
                            <img class="carousel-img" src="resources/img/home-5yqm.jpg" alt="Telecoms Services">
                        </div>
                        <div class="carousel-text">
                            <h1>Telecoms Services</h1>
                            <p>A new approach to connectivity, see how <br>
                                we can help your business.</p>
                            
                            <button class="carousel-button carousel-telecoms">Find Out More<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>

                    <div class="slick-slide">
                        <div class="carousel-img-container">
                            <img class="carousel-img" src="resources/img/home-sqvx.jpg" alt="Bespoke Software">
                        </div>
                        <div class="carousel-text">
                            <h1>Bespoke Software</h1>
                            <p>Bring your business together <br>with solutions that grow with you.</p>
                            
                            <button class="carousel-button carousel-software">Find Out More<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>

                    <div class="slick-slide">
                        <div class="carousel-img-container">
                            <img class="carousel-img" src="resources/img/home-sqvx.jpg" alt="Digital Marketing">
                        </div>
                        <div class="carousel-text">
                            <h1>Digital Marketing</h1>
                            <p>Generating you new business through <br>results-driven marketing activities.</p>
                            
                            <button class="carousel-button carousel-marketing">See How We Can Help You<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>

                                
                    <div class="slick-slide">
                        <div class="carousel-img-container">
                            <img class="carousel-img" src="resources/img/home-lQs1.jpg" alt="Cyber Security">
                        </div>
                        <div class="carousel-text">
                            <h1>Cyber Security</h1>
                            <p>Keeping businesses and their customers <br>sensitive information protected.</p>
                            
                            <button class="carousel-button carousel-security">Find Out More<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                                
                        
                </div>




                
            </section>
            <!-- // END OF CAROUSEL // -->

            <!-- Service Cards --> 
            <section id="service-cards"> <!--(2)/main-->

                <!-- Bespoke Software Card -->
                <a href="https://www.netmatters.co.uk/bespoke-software" class="top-con">
                    <div class="card soft-card top-row"> <!--Top row card // (1)/service-cards-->
                        <div class="card-icon"> <!--(1)/soft-card-->
                            <i class="fas fa-th"></i>
                        </div>
                        <h2 class="card-h2">Bespoke Software</h2> <!--(2)/soft-card-->
                        <span></span> <!--Lining Span // (3)/soft-card-->
                        <p class="card-p"> <!--(4)/soft-card-->
                            Tailored software solutions to improve business productivity and online profits. Our expert team will ensure a software solution.
                        </p> 
                        <div class="card-button">Read More</div> <!--(5)/soft-card-->
                    </div>
                </a>

                <!-- IT Support Card -->
                <a href="https://www.netmatters.co.uk/it-support" class="top-con">
                    <div class="card it-card top-row"> <!--Top row card // (2)/service-cards-->
                        <div class="card-icon"> <!--(1)/it-card-->
                            <i class="fas fa-desktop"></i> 
                        </div>
                        <h2 class="card-h2">IT Support</h2> <!--(2)/soft-card-->
                        <span></span> <!--Lining Span // (3)/soft-card-->
                        <p class="card-p"> <!--(4)/soft-card-->
                            Remotely managed IT services that is catered to your businesses needs, adds value and reduces costs.
                        </p>
                        <div class="card-button">Read More</div> <!--(5)/soft-card-->
                    </div>
                </a>

                <!-- Digital Marketing Card --> 
                <a href="https://www.netmatters.co.uk/digital-marketing" class="top-con">
                    <div class="card market-card top-row"> <!--Top row card // (3)/service-cards-->
                        <div class="card-icon"> <!--(1)/market-card-->
                            <i class="fas fa-signal"></i>
                        </div>
                        <h2 class="card-h2">Digital Marketing</h2> <!--(2)/market-card-->
                        <span></span> <!--Lining Span // (3)/market-card-->
                        <p class="card-p">  <!--(4)/market-card-->
                            Driving brand awareness and ROI through creative digital marketing campaigns. We review and monitor online performances.
                        </p>
                        <div class="card-button">Read More</div> <!--(5)/market-card-->
                    </div>
                </a>

                <!-- Telecoms Services Card -->
                <a href="https://www.netmatters.co.uk/telecoms-services" class="bottom-con">
                    <div class="card tele-card bottom-row"> <!--Bottom row card // (4)/service-cards-->
                        <div class="card-icon"> <!--(1)/tele-card-->
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h2 class="card-h2">Telecoms Services</h2> <!--(2)/tele-card-->
                        <span></span> <!--Lining Span // (3)/tele-card-->
                        <p class="card-p"> <!--(4)/tele-card-->
                            Stay connected with bespoke telecoms solutions when you need it most.
                        </p> 
                        <div class="card-button">Read More</div> <!--(5)/tele-card-->
                    </div>
                </a>

                <!-- Web Design Card -->
                <a href="https://www.netmatters.co.uk/web-design" class="bottom-con">
                    <div class="card web-card bottom-row"> <!--Bottom row card // (5)/service-cards-->
                        <div class="card-icon"> <!--(1)/web-card-->
                            <i class="fas fa-code"></i>
                        </div>
                        <h2 class="card-h2">Web Design</h2> <!--(2)/web-card-->
                        <span></span> <!--Lining Span // (3)/web-card-->
                        <p class="card-p"> <!--(4)/web-card-->
                            User-centric design for businesses looking to make a lasting first impression.
                        </p>
                        <div class="card-button">Read More</div> <!--(5)/web-card-->
                    </div>
                </a>

                <!-- Cyber Security Card -->
                <a href="https://www.netmatters.co.uk/cyber-security" class="bottom-con">
                    <div class="card secur-card bottom-row"> <!--Bottom row card // (6)/service-cards-->
                        <div class="card-icon"> <!--(1)/secur-card-->
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h2 class="card-h2">Cyber Security</h2> <!--(2)/secur-card-->
                        <span></span> <!--Lining Span // (3)/secur-card-->
                        <p class="card-p"> <!--(4)/secur-card-->
                            Ensuring your online business stays secure 24/7, 365 days of the year.
                        </p>
                        <div class="card-button">Read More</div> <!--(5)/secur-card-->
                    </div>
                </a>

                <!-- Developer Training Card -->
                <a href="https://www.netmatters.co.uk/scs-web-developer-course" class="bottom-con">
                    <div class="card scs-card bottom-row"> <!--Bottom row card // (7)/service-cards-->
                        <div class="card-icon"> <!--(1)/scs-card-->
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h2 class="card-h2">Developer Training</h2> <!--(2)/scs-card-->
                        <span></span> <!--Lining Span // (3)/scs-card-->
                        <p class="card-p">  <!--(4)/scs-card-->
                            Have you considered a career in web development but you aren’t sure where to start?
                        </p>
                        <div class="card-button">Read More</div> <!--(5)/scs-card-->
                    </div>
                </a>
            </section>
            <!-- // END OF SERVICES CARDS // -->

            <!-- About Section -->
            <section id="about-section">

                <!--About Area (allows for image and margin response)-->
                <div class=about-area>

                    <!--About Text-->
                    <div class="about-text"> 
                        <h1 class="about-h1">Netmatters</h1> <!--(1)/about-text-->
                        <p class="about-p"> <!--(2)/about-text-->
                            Netmatters Ltd is a leading web design, IT support and digital marketing agency based in Wymondham, Norfolk.
                        </p> 
                        <p class="about-p"> <!--(3)/about-text-->
                            Founded in 2008, we work with businesses from a variety of industries to gain new prospects, nurture existing leads and further grow their sales.
                        </p>
                        <p class="about-p"> <!--(4)/about-text-->
                            We provide cost effective, reliable solutions to a range of services; from bespoke cloud-based management systems, workflow and IT solutions through to creative website development and integrated digital campaigning.
                        </p>
                        <a href="https://www.netmatters.co.uk/our-culture">
                            <div class="about-button"> <!--(5)/about-text-->
                                Our Culture
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <!-- // END OF ABOUT SECTION // -->

            <!-- News Section -->
            <section id="news">

                <!-- Break -->
                <div class="break-div">
                    <div class="break-align">
                        <h4>Latest</h4>
                        <span></span>
                    </div>
                </div>

                <!-- News Cards -->
                <div class="news-cards">

                <?php 
                $newsObj = new articleObj();
                $newsObj->createConnection();
                $newsObj->runQuery();
                ?>

                    <!-- 1st Card -->
                    <?php
                    for ($i = 0; $i <= 2; $i++) {
                        echo '<div class="card-news">' . "\n" .
                        '<a href="' . $newsObj->call('Link')[$i] . '">' . "\n" .
                            '<div class="news-img-container">' . "\n" .
                                '<img src="' . 
                                $newsObj->call('Article_Img')[$i] .
                                '">' . "\n" .
                                '<p>' . $newsObj->call('Type')[$i] . '</p>' . "\n" .
                            '</div>' . "\n" .
                        '</a>' . "\n" .
                        '<a href="'. $newsObj->call('Link')[$i] . '"><h3 class="news-h3">' .
                        $newsObj->call('Title')[$i] . 
                        '</h3></a>' . "\n" .
                        '<p class="news-p">' . "\n" .
                            $newsObj->call('Details')[$i] . "\n" .
                        '</p>' . "\n" .
                        '<a href="' . $newsObj->call('Link')[$i] . '"><div class="news-button">Read More</div></a>' . "\n" .
                        '<div class="post-info">' . "\n" .
                            '<img src="' . 
                                $newsObj->call('User_Img')[$i] . 
                                '" class="info-img">' . "\n" .
                            '<div class="info-text">' . "\n" .
                                '<strong>Posted by' . $newsObj->call('First_name')[$i] . $newsObj->call('Last_name')[$i] . '</strong>' . "\n" .
                                $newsObj->call('Date')[$i] . "\n" . 
                            '</div>' . "\n" .
                        '</div>' . "\n" .
                    '</div>' . "\n";
                    }
                    ?>
                    

                    
            <!-- // END OF NEWS SECTION // -->
                    
                </div>
            </section>
        </main>

        <section id="clients">

            <!-- Busseys -->
            <div class="client-item">
                <img src="resources/img/home-T5gi.jpg" alt="Busseys" class="client-img busseys-img grey">
                <img src="resources/img/home-gZQR.png" alt="Busseys" class="client-img busseys-img colored">
                <div class="pop-up pop-busseys">
                    <h3 class="client-name">Busseys</h3>
                    <span class="client-line"></span>
                    <p class="client-info">One of the UK's leading Ford dealerships.</p>
                </div>
            </div>

            <!-- Crane -->
            <div class="client-item">
                <img src="resources/img/home-BsyK.jpg" alt="Crane Garden Buildings" class="client-img crane-img grey">
                <img src="resources/img/home-MjHw.png" alt="Crane Garden Buildings" class="client-img crane-img colored">
                <div class="pop-up pop-crane">
                    <h3 class="client-name">Crane Garden Buildings</h3>
                    <span class="client-line"></span>
                    <p class="client-info">Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                </div>
            </div>

            <!-- Beat -->
            <div class="client-item">
                <img src="resources/img/home-RfLc.jpg" alt="Beat" class="client-img beat-img grey">
                <img src="resources/img/home-ukEL.png" alt="Beat" class="client-img beat-img colored">
                <div class="pop-up pop-beat">
                    <h3 class="client-name">Beat</h3>
                    <span class="client-line"></span>
                    <p class="client-info">The UK's eating disorder charity founded in 1989.</p>
                </div>
            </div>

            <!-- Northern Diver -->
            <div class="client-item">
                <img src="resources/img/home-jHUl.jpg" alt="Northern Diver" class="client-img northern-img grey">
                <img src="resources/img/home-kGn4.png" alt="Northern Diver" class="client-img northern-img colored">
                <div class="pop-up pop-northern">
                    <h3 class="client-name">Northern Diver</h3>
                    <span class="client-line"></span>
                    <p class="client-info">Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
                </div>
            </div>

        </section>

        <section id="newsletter">
            <form action="#" id="newsletter-form" class="newsletter-form" method="POST">
                <h2 class="form-h2">Email Newsletter Sign-Up</h2>
                <label for="form-name" class="form-label">Your Name <span>*</span></label>
                <input type="text" id="form-name" class="form-text" name="name" value="">
                <label for="form-email" class="form-label">Your Email <span>*</span></label>
                <input type="email" id="form-email" class="form-text" name="email" value="">
                <div class="check-container">
                    <input class="form-check" type="checkbox" name="form-check" value="1">
                    <label for="form-check" class="form-checkset"></label>
                </div>
                <p class="form-statement">
                    Please tick this box if you wish to receive marketing information from us. Please see our  
                    <a href="https://www.netmatters.co.uk/privacy-policy">Privacy Policy</a>
                    for more information on how we use your data.
                </p>
                <button class="form-button" name="submit">subscribe</button>
            </form>
        </section>

        <?php include('inc\footer.php'); ?>

        <section id="achievements">
            <div class="achievements-area">
                <img src="resources/img/PartnerBadge.png" alt="Google Partner" class="ach-img non-div">
                <img src="resources/img/silver-microsoft-partner.jpg" alt="Silver Microsoft Partner" class="ach-img non-div">
                <div class="ach-div">
                <img src="resources/img/future-50.jpg" alt="Future 50 Member" class="ach-img colored">
                <img src="resources/img/future-50-bw.jpg" alt="Future 50 Member" class="ach-img grey">
                </div>
                <div class="ach-div">
                <img src="resources/img/qms.jpg" alt="QMS 27001 Registered" class="ach-img colored">
                <img src="resources/img/qms-bw.jpg" alt="QMS 27001 Registered" class="ach-img grey">
                </div>
                <div class="ach-div">
                <img src="resources/img/norfolk-carbon-charter.jpg" alt="Norfolk Carbon Charter" class="ach-img colored">
                <img src="resources/img/norfolk-carbon-charter-bw.jpg" alt="Norfolk Carbon Charter" class="ach-img grey">
                </div>
                <div class="ach-div">
                <img src="resources/img/investing-in-future-growth.jpg" alt="Investing in Future Growth Winner" class="ach-img colored">
                <img src="resources/img/investing-in-future-growth-bw.jpg" alt="Investing in Future Growth Winner" class="ach-img grey">
                </div>
                <div class="ach-div">
                <img src="resources/img/princess-royal-training.jpg" alt="Princess Royal Training Award 2020" class="ach-img colored">
                <img src="resources/img/princess-royal-training-bw.jpg" alt="Princess Royal Training Award 2020" class="ach-img grey">
                </div>
                <div class="ach-div">
                <img src="resources/img/skills-of-tomorrow.jpg" alt="Skills of Tomorrow Winner" class="ach-img colored">
                <img src="resources/img/skills-of-tomorrow-bw.jpg" alt="Skills of Tomorrow Winner" class="ach-img grey colored">
                </div>
            </div>
        </section>

    </div>



    <?php include('inc\script.php') ?>
    <script type="text/javascript" src="slick/slick.min.js"></script>
</body>




</html>