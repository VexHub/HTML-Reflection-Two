<!DOCTYPE html>
<html lang="en" id="index-html">

<?php
$page = 'index';
include('inc\head.php');
//replace with bootstrap
include('src\contactDb.php');
?>



<body id="index-body">
    <div id="body-container">

        <?php include('inc\header.php');?>

        <h1>Our Offices</h1>
        <section id="offices">

            <div class="office-card">
                <div class="office-card-upper">
                    <div class="office-address">
                        <div class="office-image">
                            <a href="#">
                                <img src="#" alt="Cambridge Office">
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
                            <div class="link-buton">
                                <a href="#" class="">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="office-card-lower">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="370" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=NetMatters,%20CB4%200WS%20&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe><style>.mapouter{position:relative;text-align:right;height:300px;width:370px;}</style>
                            <a href="https://www.embedgooglemap.net">get google map embed code</a>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:370px;}</style>
                        </div>
                    </div>
                </div>
            </div>

            <div class="office-card">
                <div class="office-card-upper">
                    <div class="office-address">
                        <div class="office-image">
                            <a href="#">
                                <img src="#" alt="Wymondham Office">
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
                                <a href="#" class="">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="office-card-lower">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="370" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=NetMatters,%20NR18%200WZ%20&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                            <style>.mapouter{position:relative;text-align:right;height:300px;width:370px;}</style>
                            <a href="https://www.embedgooglemap.net">get google map embed code</a>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:370px;}</style>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="office-card">
                <div class="office-card-upper">
                    <div class="office-address">
                        <div class="office-image">
                            <a href="#">
                                <img src="#" alt="Great Yarmouth Office">
                            </a>
                        </div>
                        <div class="content">
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
                                <a href="#" class="">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="office-card-lower">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="370" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=NetMatters,%20NR31%207RA%20&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <style>.mapouter{position:relative;text-align:right;height:300px;width:370px;}</style>
                                <a href="https://www.embedgooglemap.net">get google map embed code</a>
                                <style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:370px;}
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

        <?php
        if ($successCheck) {
            echo '<div class="success-container">';
            echo '<p>Your message has been sent!</p>';
            echo '</div>';
        }
        ?>
        <form method="POST" action="contact.php" accept-charset="UTF-8" id="contact-form">
            <div class="row">
                <div class="form-group">
                    <label for="name" class="required">Your Name</label>
                    <?php 
                    echo '<input class="form-control ';
                    $formObj->inputError('name', 'strCheck', $formObj);
                    echo '" name="name" type="text" value="" id="name">';
                    ?>
                </div>

                <div class="form-group">
                    <label for="email" class="required">Your Email</label>
                    <?php 
                    echo '<input class="form-control ';
                    $formObj->inputError('email', 'emailCheck', $formObj);
                    echo '" name="email" type="email" value="" id="email">';
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="telephone" class="required">Your Telephone Number</label>
                    <?php 
                    echo '<input class="form-control ';
                    $formObj->inputError('telephone', 'phoneCheck', $formObj);
                    echo '" name="telephone" type="text" value="" id="telephone">';
                    ?>
                </div>

                <div class="form-group">
                    <label for="subject" class="required">Subject</label>
                    <?php 
                    echo '<input class="form-control ';
                    $formObj->inputError('subject', 'strCheck', $formObj);
                    echo '" name="subject" type="text" value="" id="subject">';
                    ?>
                </div>
            </div>

            <div class="form-group">
                <label for="message" class="required">Message</label>
                <?php 
                    echo '<textarea class="form-control ';
                    $formObj->inputError('message', 'strCheck', $formObj);
                    echo '" name="message" cols="50" rows="50" id="message"></textarea>';
                    ?>
            </div>


            <div class="form-group">
            <label class="contact-checkbox">
                <span class="button">
                    <span class="checkbox-tick"></span>
                    <input name="marketing_preference" type="checkbox" value="1">
                </span>
                <span class="checkbox-text">
                    Please tick this box if you wish to receive marketing information from us.
                    Please see our <a href="https://www.netmatters.co.uk/privacy-policy" target="_blank">Privacy Policy</a> for more information on how we use your data
                </span>
            </label>
            </div>

            <button name="submit" class="contact-submit">
                Send Enquiry
            </button>

        </form>

    </div>
</body>

<?php include('inc\footer.php'); ?>

<?php include('inc\script.php') ?>