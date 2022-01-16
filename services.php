<?php
$page_title = "Services";
require_once 'include/config.php';
require_once 'layouts/header.php';

?>
<?php flash(); ?>

<div class="page-title-area title-bg-two">
    <div class="title-shape">
        <img src="assets/img/title/title-bg-shape.png" alt="Shape">
    </div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>Services</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>
                            <span>Services</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="services-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="services-item card-overlay active">
                    <i class="flaticon-marketing-strategy"></i>
                    <h3>
                        <a href="service-details.html">Business Strategy</a>
                    </h3>
                    <p>We build a custom portfolio based on your preferred risk profile. As prices move, our engine adjusts your portfolio to ensure it remains balanced and in line with your risk profile.</p>
                    <a class="services-btn" href="service-details.html">Read More</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="services-item card-overlay">
                    <i class="flaticon-dollars-money-bag-with-a-clock"></i>
                    <h3>
                        <a href="service-details.html">Investment Planning</a>
                    </h3>
                    <p>By default, each time you hit 10% profit, we secure your profits by converting them into EUR so you don't need to watch the market like a hawk. Alternatively you can choose to either secure performance fees only, or to leave your portfolio untouched.</p>
                    <a class="services-btn" href="service-details.html">Read More</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="services-item card-overlay active">
                    <i class="flaticon-strategy-in-a-labyrinth"></i>
                    <h3>
                        <a href="service-details.html">Project Management</a>
                    </h3>
                    <p>Our thinkorswim trading platform is a premier derivatives trading platform for serious futures traders. </p>
                    <a class="services-btn" href="service-details.html">Read More</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="services-item card-overlay">
                    <i class="flaticon-trend"></i>
                    <h3>
                        <a href="service-details.html">Financial Analysis</a>
                    </h3>
                    <p>We are in this together and hence will only charge you when your investment grows. No hidden fees, no recurring costs.</p>
                    <a class="services-btn" href="service-details.html">Read More</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="services-item card-overlay active">
                    <i class="flaticon-evaluate"></i>
                    <h3>
                        <a href="service-details.html">Audit & Evaluation</a>
                    </h3>
                    <p>From complex wealth management to your retirement needs, we can help you with financial planning.</p>
                    <a class="services-btn" href="service-details.html">Read More</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="services-item card-overlay">
                    <i class="flaticon-insurance"></i>
                    <h3>
                        <a href="service-details.html">Support & Maintain</a>
                    </h3>
                    <p>Get easy-to-use tools and the latest professional insights from our team of specialists.</p>
                    <a class="services-btn" href="service-details.html">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'layouts/footer.php';
?>
