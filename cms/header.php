<?php
include_once 'inc/functions.php';
$result = listsettadmin();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?php echo $result['title']; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo $result['keywords']; ?>" name="keywords">
    <meta content="<?php echo $result['description']; ?>" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: NewBiz
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<body>

<!--==========================
Header
============================-->
<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
            <a href="#intro" class="scrollto"><img src="<?php echo $result['logo']; ?>" alt="" class="img-fluid"></a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block ">
            <ul>
                <?php
                $result = listmenuuser();

                foreach ($result as $res):
                    $rows = listsubmenuuser($res['id']);
                    ?>
                    <li class='drop-down'>
                        <a href='<?php echo $res['url']; ?>'><?php echo $res['title']; ?></a>
                        <?php

                        if ($rows):
                            ?>
                            <ul>
                                <?php foreach ($rows as $row): ?>
                                    <li><a href="<?php echo $row['url']; ?>"><?php echo $row['title']; ?></a></li>
                                <?php endforeach; ?> </ul>
                        <?php endif; ?>
                    </li>

                <?php endforeach; ?>
            </ul>
        </nav>
        <!-- .main-nav -->
    </div>
</header>
<!-- #header -->