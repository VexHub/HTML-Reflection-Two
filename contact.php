<!DOCTYPE html>
<html lang="en" id="index-html">

<?php
$page = 'contact';
include('inc\head.php');
//replace with bootstrap
include('src\contactDb.php');
?>



<body id="contact-body">
    <div id="body-container">

        <?php include('inc\header.php');?>

        <h1>Our Offices</h1>
        <section id="offices">

            <div class="office-card">
                <div class="office-card-upper">
                    <div class="office-address">
                        <div class="office-image">
                            <a href="#">
                                <img src="resources/img/cambridge.jpg" alt="Cambridge Office">
                            </a>
                        </div>
                        <div class="office-details">
                            <h2>
                                <a href="#">
                                    Cambridge Office
                                </a>
                            </h2>
                            <p>
                                Unit 1.28,
                                <br>
                                St John's Innovation Centre,
                                <br>
                                Cowley Road,
                                Milton,
                                <br>
                                Cambridge,
                                <br>
                                CB4 0WS
                            </p>
                            <div class="office-tel">
                                <a href="tel:01223375772" class="telephone-link">
                                    01223 37 57 72
                                </a>
                            </div>
                            <div class="link-button">
                                <a href="#" class="carousel-button carousel-design contact-button">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="office-card-lower">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=NetMatters,%20CB4%200WS%20&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe><style>.mapouter{position:relative;text-align:right;}</style>
                            <a href="https://www.embedgooglemap.net">get google map embed code</a>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;}</style>
                        </div>
                    </div>
                </div>
            </div>

            <div class="office-card">
                <div class="office-card-upper">
                    <div class="office-address">
                        <div class="office-image">
                            <a href="#">
                                <img src="resources/img/wymondham.jpg" alt="Wymondham Office">
                            </a>
                        </div>
                        <div class="office-details">
                            <h2>
                                <a href="#">
                                Wymondham Office 
                                </a>
                            </h2>
                            <p>
                                Unit 15, 
                                <br>
                                Penfold Drive, 
                                <br>
                                Gateway 11 Business Park, 
                                <br>
                                Wymondham, 
                                Norfolk, 
                                <br>
                                NR18 0WZ 
                            </p>
                            <div class="office-tel">
                                <a href="tel:01603704020" class="telephone-link">
                                    01603 70 40 20
                                </a>
                            </div>
                            <div class="link-button">
                                <a href="#" class="carousel-button carousel-design contact-button">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="office-card-lower">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=NetMatters,%20NR18%200WZ%20&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                            <style>.mapouter{position:relative;text-align:right;}</style>
                            <a href="https://www.embedgooglemap.net">get google map embed code</a>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;}</style>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="office-card">
                <div class="office-card-upper">
                    <div class="office-address">
                        <div class="office-image">
                            <a href="#">
                                <img src="resources/img/yarmouth-2.jpg" alt="Great Yarmouth Office">
                            </a>
                        </div>
                        <div class="office-details">
                            <h2>
                                <a href="#">
                                Great Yarmouth Office
                                </a>
                            </h2>
                            <p>
                                Suite F23, 
                                <br>
                                Beacon Innovation Centre, 
                                <br>
                                Beacon Park, 
                                Gorleston, 
                                <br>
                                Great Yarmouth, 
                                Norfolk, 
                                <br>
                                NR31 7RA 
                            </p>
                            <div class="office-tel">
                                <a href="tel:01493603204" class="telephone-link">
                                    01493 60 32 04
                                </a>
                            </div>
                            <div class="link-button">
                                <a href="#" class="carousel-button carousel-design contact-button">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="office-card-lower">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=NetMatters,%20NR31%207RA%20&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <style>.mapouter{position:relative;text-align:right;}</style>
                                <a href="https://www.embedgooglemap.net">get google map embed code</a>
                                <style>.gmap_canvas {overflow:hidden;background:none!important;}
                            </style>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <?php
        $formObj = new contactObj();
        $formObj->createConnection();
        $successCheck = false;

        if($formObj->inputCheck()) {
            $formObj->runQuery(
                htmlspecialchars(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING)),
                htmlspecialchars(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)),
                htmlspecialchars(filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING)),
                htmlspecialchars(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING)),
                htmlspecialchars(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING)),
                $formObj->isMarket()
                
            );
            $successCheck = true;
        }
        ?>

        
        <div class="form-container">

            <form method="POST" action="contact.php#contact-form" accept-charset="UTF-8" id="contact-form">
                <?php
                if ($successCheck) {
                    echo '<div class="success-container">';
                    echo '<p>Your message has been sent!</p>';
                    echo '</div>';
                }
                ?>
                <div class="row">
                    <div class="form-group">
                        <label for="name" class="required">Your Name<strong class="asterisk">*</strong></label>
                        <?php 
                        echo '<input class="form-text form-control ';
                        $formObj->inputError('name', 'strCheck', $formObj);
                        echo '" name="name" type="text" value="" id="name">';
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="email" class="required">Your Email<strong class="asterisk">*</strong></label>
                        <?php 
                        echo '<input class="form-text form-control ';
                        $formObj->inputError('email', 'emailCheck', $formObj);
                        echo '" name="email" type="email" value="" id="email">';
                        ?>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="telephone" class="required">Your Telephone Number<strong class="asterisk">*</strong></label>
                        <?php 
                        echo '<input class="form-text form-control ';
                        $formObj->inputError('telephone', 'phoneCheck', $formObj);
                        echo '" name="telephone" type="text" value="" id="telephone">';
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="subject" class="required">Subject<strong class="asterisk">*</strong></label>
                        <?php 
                        echo '<input class="form-text form-control ';
                        $formObj->inputError('subject', 'strCheck', $formObj);
                        echo '" name="subject" type="text" value="" id="subject">';
                        ?>
                    </div>
                </div>

                <div class="form-message">
                    <label for="message" class="required">Message<strong class="asterisk">*</strong></label>
                    <?php 
                        echo '<textarea class="form-text form-control ';
                        $formObj->inputError('message', 'strCheck', $formObj);
                        echo '" name="message" cols="50" rows="50" id="message"></textarea>';
                        ?>
                </div>


                <div class="form-group">
                <label class="contact-checkbox">
                <div class="check-container">
                    <input class="form-check" type="checkbox" name="form-check" value="1">
                    <label for="form-check" class="form-checkset"></label>
                </div>
                <p class="form-statement top-statement">
                    Please tick this box if you wish to receive marketing information from us. Please see our  
                    <a href="https://www.netmatters.co.uk/privacy-policy">Privacy Policy</a>
                    for more information on how we use your data.
                </p>
                </label>
                </div>

                <button id="contact-submit" name="submit" class="carousel-button carousel-design contact-button">
                    Send Enquiry
                </button>

            </form>

            <div class="form-information">
                <h3>Email us on:</h3>
                <a href="#"><h2>sales@netmatters.com</h2></a>
                <h3>Business hours:</h3>
                <h3>Monday - Friday 07:00 - 18:00 </h3>
                <a href="#"><h3>Out of Hours IT Support</h3></a>
            </div>
        </div>
        
    </div>
</body>

<?php include('inc\footer.php'); ?>

<?php include('inc\script.php') ?>