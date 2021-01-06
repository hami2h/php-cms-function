<?php
include_once 'header.php';
?>
    <!--==========================
         About Us Section
       ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>درباره ما</h3>
                <p>ما یک شرکتی هستیم در حوزه ی بیزینس که سالهاست در کشور های مختلف فعالیت داریم و تجربه ی عالی هم در
                    این حوزه کسب کرده ایم و مشتاقیم تا آنها را برای تو بیاموزیم</p>
            </header>

            <div class="row about-extra">
                <div class="col-lg-6 wow fadeInUp">
                    <img src="img/about-extra-1.svg" class="img-fluid" alt="عکس تبلیغات">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0 text-justify text-right">
                    <h4>ارتباط مستقیم با مشتریان</h4>
                    <p class=" text-justify ">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا
                        با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو
                        در زبان فارسی ایجاد کرد و در کنار آنها
                        مشغول شد
                    </p>

                </div>
            </div>
            <br>
            <div class="row about-extra">
                <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                    <img src="img/about-extra-2.svg" class="img-fluid" alt="عکس تبلیغات">
                </div>
                <br>

                <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1 text-justify text-right">
                    <h4>ارتباط غیرمستقیم در فضای مجازی با مشتریان</h4>
                    <p class=" text-justify text-centert">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا
                        با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو
                        در زبان فارسی ایجاد کرد و در کنار آنها
                        مشغول شد

                    </p>

                </div>

            </div>

        </div>

    </section>
    <!-- #about -->
    <!--==========================
         Team Section
       ============================-->
    <section id="team">
        <div class="container">
            <div class="section-header">
                <h3>تیم ما</h3>
                <p> ما یک تیم بسیار حرفه ای هستیم که در کنار شما آماده شده ایم تا تجربیاتمان را در اختیار شما قرار
                    دهیم
                </p>
            </div>

            <div class="row">


                <?php
                $resultteam = selectallteam();
                foreach ($resultteam as $resteam):

                    ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="<?php echo $resteam['pic']; ?>" class="img-fluid" alt="عکس تبلیغات">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $resteam['name']; ?></h4>
                                    <span><?php echo $resteam['pos']; ?></span>
                                    <div class="social">
                                        <a href="<?php echo $resteam['insta']; ?>"><i class="fa fa-instagram"></i></a>
                                        <a href="<?php echo $resteam['link']; ?>"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>

        </div>
    </section>
    <!-- #team -->
<?php
include_once 'footer.php';
?>