<head>
    <!-- Meta Information and Viewport Width Set -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- // -->


    <!-- Slick Style Sheet -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <!-- Hamburger Style Sheet-->
    <link href="dist/hamburgers.css" rel="stylesheet">
    <!-- Author Style Sheet -->
    <link rel="stylesheet" href="scss/style.css">
    
    <!-- Icon Style Sheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Google Font 'Poppins's -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
     <!-- // -->

    <title>
    <?php
    if (!isset($page) || $page == 'index') {
        $pageTitle = 'Netmatters | Full Service Digital Agency | Norwich, Norfolk | Netmatters';
    } else if ($page == 'contact') {
        $pageTitle = 'Contact Us | Netmatters';
    }
    echo $pageTitle;
    ?>
    
    </title>
</head>