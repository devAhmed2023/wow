<?php

    include("init.php");

?>

<!-- Carousel start -->
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= $img; ?>slider_images/1.jpg" alt="" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="<?= $img; ?>slider_images/2.jpg" alt="" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="<?= $img; ?>slider_images/3.jpg" alt="" class="d-block w-100">
        </div>
    </div>
    <button type="button" class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button type="button" class="carousel-control-next" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel end -->

<!-- Services start -->
<div class="services pd">
    <div class="container">
        <h3 class="title">Services</h3>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="square">
                    <i class="fab fa-html5"></i>
                </div>
                <div class="serv">
                    <h5>Web Design</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, eveniet ut? Recusandae, tempore. Velit, et ipsam! Laborum, impedit iusto. Labore voluptas dolor quos quidem eligendi. Amet iste autem voluptate nobis!</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="square">
                    <i class="fas fa-code"></i>
                </div>
                <div class="serv">
                    <h5>Web Development</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, eveniet ut? Recusandae, tempore. Velit, et ipsam! Laborum, impedit iusto. Labore voluptas dolor quos quidem eligendi. Amet iste autem voluptate nobis!</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="square">
                    <i class="fas fa-palette"></i>
                </div>
                <div class="serv">
                    <h5>Graphic Design</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, eveniet ut? Recusandae, tempore. Velit, et ipsam! Laborum, impedit iusto. Labore voluptas dolor quos quidem eligendi. Amet iste autem voluptate nobis!</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="square">
                    <i class="fas fa-server"></i>
                </div>
                <div class="serv">
                    <h5>Web Hosts</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, eveniet ut? Recusandae, tempore. Velit, et ipsam! Laborum, impedit iusto. Labore voluptas dolor quos quidem eligendi. Amet iste autem voluptate nobis!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services end -->

<!-- Pricing start -->
<div class="pricing pd">
    <div class="container">
        <h3 class="title2">Pricing</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="single-price">
                    <div class="price-head">
                        <h2>Free</h2>
                        <p>EGP 0<span>/year</span></p>
                    </div>
                    <div class="price-content">
                        <ul>
                            <li><i class="fas fa-check-circle"></i> 5GB Space</li>
                            <li><i class="fas fa-check-circle"></i> 10GB Bandwidth</li>
                            <li><i class="fas fa-times-circle"></i> 15 Email Account</li>
                            <li><i class="fas fa-times-circle"></i> Unlimited Domain</li>
                            <li><i class="fas fa-times-circle"></i> Unlimited Support</li>
                        </ul>
                    </div>
                    <div class="price-button">
                        <a href="#" class="buy-btn">Join Free</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-price">
                    <div class="price-head">
                        <h2>Free</h2>
                        <p>EGP 0<span>/year</span></p>
                    </div>
                    <div class="price-content">
                        <ul>
                            <li><i class="fas fa-check-circle"></i> 5GB Space</li>
                            <li><i class="fas fa-check-circle"></i> 10GB Bandwidth</li>
                            <li><i class="fas fa-times-circle"></i> 15 Email Account</li>
                            <li><i class="fas fa-times-circle"></i> Unlimited Domain</li>
                            <li><i class="fas fa-times-circle"></i> Unlimited Support</li>
                        </ul>
                    </div>
                    <div class="price-button">
                        <a href="#" class="buy-btn">Join Free</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-price">
                    <div class="price-head">
                        <h2>Free</h2>
                        <p>EGP 0<span>/year</span></p>
                    </div>
                    <div class="price-content">
                        <ul>
                            <li><i class="fas fa-check-circle"></i> 5GB Space</li>
                            <li><i class="fas fa-check-circle"></i> 10GB Bandwidth</li>
                            <li><i class="fas fa-times-circle"></i> 15 Email Account</li>
                            <li><i class="fas fa-times-circle"></i> Unlimited Domain</li>
                            <li><i class="fas fa-times-circle"></i> Unlimited Support</li>
                        </ul>
                    </div>
                    <div class="price-button">
                        <a href="#" class="buy-btn">Join Free</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing end -->

<!-- Gallery start -->
<div class="gallery pd">
    <div class="container">
        <h3 class="title">Portfolio</h3>
        <ul>
            <li class="list active" data-filter="all">All</li>
            <li class="list" data-filter="design">Design</li>
            <li class="list" data-filter="development">Devlopment</li>
            <li class="list" data-filter="graphic">Graphic</li>
        </ul>
        <div class="product">
            <div class="itemBox" data-item="development">
                <img src="<?= $img; ?>portfolio/pro01.jpg" alt="">
            </div>

            <div class="itemBox" data-item="development">
                <img src="<?= $img; ?>portfolio/pro02.jpg" alt="">
            </div>

            <div class="itemBox" data-item="design">
                <img src="<?= $img; ?>portfolio/pro03.jpg" alt="">
            </div>

            <div class="itemBox" data-item="design">
                <img src="<?= $img; ?>portfolio/pro04.jpg" alt="">
            </div>

            <div class="itemBox" data-item="design">
                <img src="<?= $img; ?>portfolio/pro05.jpg" alt="">
            </div>

            <div class="itemBox" data-item="design">
                <img src="<?= $img; ?>portfolio/pro06.jpg" alt="">
            </div>

            <div class="itemBox" data-item="graphic">
                <img src="<?= $img; ?>portfolio/pro07.jpg" alt="">
            </div>

            <div class="itemBox" data-item="graphic">
                <img src="<?= $img; ?>portfolio/pro08.jpg" alt="">
            </div>

            <div class="itemBox" data-item="graphic">
                <img src="<?= $img; ?>portfolio/pro09.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Gallery end -->

<!-- Testmonials start -->
 <div class="contact pd">
    <div class="container">
        <h3 class="title2">Contact Us</h3>
        <div class="content">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>12th Rabiaa El-Lolli st, From Abd El-Khallek st <br>Omraneya Sharkya, <br>Giza, Egypt</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>(002) 0112-506-8223 <br>(002) 0102-004-5190</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>info@wow-des.com <br>sales@wow-des.com</p>
                    </div>
                </div>
            </div>

            <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" id="" required>
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="" id="" required>
                        <span>E-Mail</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="" id="" required></textarea>
                        <span>Type Your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>
 <!-- Testmonials end -->


<?php

    include("includes/templates/footer.php");

?>