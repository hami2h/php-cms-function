<?php
include_once 'header.php';
?>


    <!--==========================
    Intro Section
  ============================-->
    <section id="intro" class="clearfix">
        <div class="container">

            <div class="intro-img">
                <img src="img/intro-img.svg" alt="" class="img-fluid">
            </div>

            <div class="intro-info ">
                <h2> ما تو را با <span> بیزینس</span><br><br>آشنا خواهیم کرد</h2>
                <div>
                    <a href="#about" class="btn-get-started scrollto">همین حالا شروع کن</a>
                    <a href="#services" class="btn-services scrollto">اطلاعات بیشتر میخوام</a>
                </div>
            </div>

        </div>
    </section>
    <!-- #intro -->

    <main id="main">


        <!--==========================
      Services Section
    ============================-->
        <section id="services" >
            <div class="container">

                <header class="section-header">
                    <h3>سرویس ها</h3>
                    <p>ما در این سایت بهترین سرویس ها برای بیزینس را معرفی خواهیم کرد تا شما را تبدیل به یک بیزینس من
                        حرفه ای کنیم</p>
                </header>


                <div class="row">
                    <?php
                    $result = selectallservice();
                    foreach ($result as $serviceres):
                        ?>
                        <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box">
                                <h4 class="title"><a
                                            href="<?php echo $serviceres['url']; ?>"><?php echo $serviceres['title']; ?></a>
                                </h4>
                                <p class="description"><?php echo $serviceres['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>


        </section>
        <!-- #services -->

        <!--==========================
      Why Us Section
    ============================-->
        <section id="why-us" class="wow fadeIn">
            <div class="container">
                <header class="section-header">
                    <h3>بیزینس من ها چه کسانی هستند ؟</h3>
                    <p>بیزینس من ها یکی از نو ظهور ترین پدیده ها در صنعت دیجیتالینگ میباشند که اقتصاد دنیا را میچرخانند
                        . حالا تو هم آماده هستی که به دنیای بیزینس وارد شوی؟</p>
                </header>

                <div class="row row-eq-height justify-content-center">

                    <?php
                    $resprop = selectallproperty();
                    foreach ($resprop as $respro):
                        ?>
                        <div class="col-lg-4 mb-4">
                            <div class="card wow bounceInUp">
                                <i class="fa fa-diamond"></i>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $respro['title']; ?></h5>
                                    <p class="card-text"><?php echo $respro['description']; ?></p>
                                    <a href="<?php echo $respro['url']; ?>" class="readmore">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">274</span>
                        <p>آموزش ها</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">421</span>
                        <p> پروژه ها</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">1,364</span>
                        <p> دانشجویان</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">18</span>
                        <p>مدرسین</p>
                    </div>

                </div>

            </div>
        </section>

        <!--==========================
      Portfolio Section
    ============================-->
        <section id="portfolio" class="clearfix">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">پروژه ها</h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">همه</li>
                            <?php
                            $projectcats = selectallprojectcat();
                            foreach ($projectcats as $projectcat):
                                ?>
                                <li data-filter=".<?php echo $projectcat['slug']; ?>"><?php echo $projectcat['name']; ?></li>
                            <?php endforeach;
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">


                    <?php
                    $resprojects = selectallproject();
                    foreach ($resprojects as $respr):
                        ?>
                        <div class="col-lg-4 col-md-6 portfolio-item <?php echo $respr['filter']; ?>">
                            <div class="portfolio-wrap">
                                <img src="<?php echo $respr['pic']; ?>" class="img-fluid" alt="عکس تبلیغات">
                                <div class="portfolio-info">
                                    <h4><a href="#"><?php echo $respr['title']; ?>1</a></h4>
                                    <p><?php echo $respr['description']; ?></p>
                                    <div>
                                        <a href="<?php echo $respr['pic']; ?>" class="link-preview"
                                           data-lightbox="portfolio"
                                           data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="<?php echo $respr['link']; ?>" class="link-details"
                                           title="More Details"><i
                                                    class="ion ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>

            </div>
        </section>
        <!-- #portfolio -->

        <!--==========================
      Clients Section
    ============================-->
        <section id="testimonials" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>نظرات کاربران</h3>
                </header>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="owl-carousel testimonials-carousel wow fadeInUp">


                            <?php
                            $testires = selectalltestimonial();
                            foreach ($testires as $testi):
                                ?>
                                <div class="testimonial-item">
                                    <img src="<?php echo $testi['pic']; ?>" class="testimonial-img" alt="عکس تبلیغات">
                                    <h3><?php echo $testi['name']; ?></h3>
                                    <h4><?php echo $testi['pos']; ?></h4>
                                    <p>
                                        <?php echo $testi['about']; ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>


                        </div>

                    </div>
                </div>


            </div>
        </section>
        <!-- #testimonials -->


        <!--==========================
      Clients Section
    ============================-->
        <section id="clients" >

            <div class="container">

                <div class="section-header">
                    <h3> همکاری های ما</h3>
                    <p>ما یک تیم خیلی حرفه ای هستیم که تا کنون با شرکت های بزرگی در زمینه ی بیزینس همکاری داشته ایم</p>
                </div>

                <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="img/clients/client-1.png" class="img-fluid" alt="عکس تبلیغات">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="img/clients/client-2.png" class="img-fluid" alt="عکس تبلیغات">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="img/clients/client-3.png" class="img-fluid" alt="عکس تبلیغات">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="img/clients/client-4.png" class="img-fluid" alt="عکس تبلیغات">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="img/clients/client-5.png" class="img-fluid" alt="عکس تبلیغات">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="img/clients/client-6.png" class="img-fluid" alt="عکس تبلیغات">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="img/clients/client-7.png" class="img-fluid" alt="عکس تبلیغات">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="img/clients/client-8.png" class="img-fluid" alt="عکس تبلیغات">
                        </div>
                    </div>

                </div>

            </div>

        </section>

    </main>
<?php
include_once 'footer.php';
?>