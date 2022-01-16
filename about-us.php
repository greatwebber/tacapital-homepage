<?php
$page_title = "About Us";
require_once 'include/config.php';
require_once 'layouts/header.php';

?>
<?php flash(); ?>

<div class="page-title-area title-bg-one">
    <div class="title-shape">
        <img src="assets/img/title/title-bg-shape.png" alt="Shape">
    </div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>About</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>
                            <span>About</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="founder-area section-overlay pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="founder-content">
                    <div class="section-title">
                        <span class="sub-title">Company overview</span>
                        <p>TA Capital Investments is a global consulting powerhouse. We began our operations within the last decade. and have grown due to excellent relationships with our clients.
                        </p>
                    </div>
                    <p class="founder-p">We’re a global consultancy that helps the world’s most ambitious change makers define the future, we work alongside our clients as one team with a shared ambition to achieve extraordinary results, outperform the competition and redefine industries. We complement our tailored, integrated expertise with a vibrant ecosystem of digital innovators to deliver better, faster and more enduring outcomes. </p>
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="about-us.php#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Our Mission</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <p>Our mission is to help individuals and corporations to determine and achieve their financial and fund raising goals through a comprehensive financial management process. Our role is that of an independent and trusted financial counselor, providing personalized service with uncompromising integrity.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="founder-img">
                    <img src="assets/img/founder-main1.jpg" alt="Founder">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="subscribe-area four ptb-100 mtb-100">
    <div class="subscribe-img">
        <img src="assets/img/subscribe-main2.png" alt="Subscribe">
    </div>
    <div class="container">
        <div class="subscribe-wrap">
            <div class="section-title two">
                <h2>Subscribe Our Newsletter</h2>
            </div>
            <form class="newsletter-form" data-toggle="validator">
                <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
                <button class="btn common-btn" type="submit">
                    Subscribe
                    <span></span>
                </button>
                <div id="validator-newsletter" class="form-result"></div>
            </form>
        </div>
    </div>
</section>
<?php
require_once 'layouts/footer.php';
?>
