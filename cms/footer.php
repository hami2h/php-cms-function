<?php
$result = listsettadmin();
?>
<!--==========================
Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                    <h3 class="text-warning">بیزینس من</h3>
                    <p class=" text-justify">بیزینس من یکی از بزرگترین شرکت ها در ایران میباشد که یکسال قبل فعالیت خود
                        را شروع کرده و در سایر کشور ها نیز فعالیت خود را گسترانده . حدف از ایجاد وبسیات بیزینس من آموزش
                        کامل بیزینس و ارائه ی تمام نمونه کار های این شرکت میباشد
                        . ما بسیار مشتا ق هستیم تا در صورت تمایل شما با شما همکاری کنیم</p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links ">
                    <h4 class="text-warning font-italic">لینک های مفید </h4>
                    <ul>
                        <li><a href="#">خانه</a></li>
                        <li><a href="#"> درباره ما</a></li>
                        <li><a href="#">سرویس های ما</a></li>
                        <li><a href="#"> تیم و کار ما</a></li>
                        <li><a href="#"> مقالات درباره ی بیزینس</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact ">
                    <h4 class="text-warning font-italic"> تماس با ما</h4>
                    <p>
                        تهران <br> تهران<br> سعادت آباد <br>
                        <strong>تلفن:</strong> +98 9001234567<br>
                        <strong>ایمیل:</strong> ehsan2003azimnia@gmail.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter text-justify text-center">
                    <h4 class=" text-warning font-italic">خبرنامه ی ما </h4>
                    <p>تیم ما یک تیم بسیار حرفه ای است که با تکیه به آخرین وضعیت و قوانین دنیا پیش میرود و خیلی مشتاق
                        هست که در مسائل بیزینس با شما همکاری کند.</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="ارسال">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class=" container ">
        <div class="copyright ">
            <?php echo $result['copyright']; ?>        </div>
        <div class="credits ">
            برنامه نویسی <a href="https://raycaweb.com/ " rel="nofollow"> رایکا وب </a>
        </div>
    </div>
</footer>
<!-- #footer -->

<a href="# " class="back-to-top "><i class="fa fa-chevron-up "></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader "></div> -->

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js "></script>
<script src="lib/jquery/jquery-migrate.min.js "></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js "></script>
<script src="lib/easing/easing.min.js "></script>
<script src="lib/mobile-nav/mobile-nav.js "></script>
<script src="lib/wow/wow.min.js "></script>
<script src="lib/waypoints/waypoints.min.js "></script>
<script src="lib/counterup/counterup.min.js "></script>
<script src="lib/owlcarousel/owl.carousel.min.js "></script>
<script src="lib/isotope/isotope.pkgd.min.js "></script>
<script src="lib/lightbox/js/lightbox.min.js "></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js "></script>

<!-- Template Main Javascript File -->
<script src="js/main.js "></script>

</body>

</html>