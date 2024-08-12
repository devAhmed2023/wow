<!-- Footer -->
<footer>
    <div class="container">
        <div class="sec aboutus">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, minima. Illo error laboriosam tempore iste distinctio ab, laborum mollitia in dolor dignissimos est labore quo et earum sit voluptatum odio!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, minima. Illo error laboriosam tempore iste distinctio ab, laborum mollitia in dolor dignissimos est labore quo et earum sit voluptatum odio!
            </p>
            <ul class="sci">
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                <li><a href=""><i class="fab fa-youtube"></i></a></li>
                <li><a href=""><i class="fab fa-google-plus"></i></a></li>
            </ul>
        </div>
        <div class="sec quicklinks">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="sec quicklinks">
            <h2>My Account</h2>
            <ul>
                <li><a href="#">Register</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="#">Checkout</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
        <div class="sec contactus">
            <h2>Contact Us</h2>
            <ul class="info">
                <li>
                    <span><i class="fa-solid fa-location-dot"></i></span>
                    <span>12th Rabiaa El-Lolli st, From Abd El-Khallek st <br>Omraneya Sharkya, <br>Giza, Egypt</span>
                </li>
                <li>
                    <span><i class="fa-solid fa-phone"></i></span>
                    <span><a href="tel:+201125068223">(002) 0112-506-8223</a> <br><a href="tel:+201020045190">(002) 0102-004-5190</a></span>
                </li>
                <li>
                    <span><i class="fa-solid fa-envelope"></i></span>
                    <span><a href="mailto:info@wow-des.com">info@wow-des.com</a> <br><a href="mailto:sales@wow-des.com">sales@wow-des.com</a></span>
                </li>
            </ul>
        </div>
    </div>
</footer>
<div class="copyrightText">
    <p>Copyright &copy; 2024 Wow Design. All Rights Reserved.</p>
</div>
    <script src="<?= $js; ?>jquery-3.7.1.min.js"></script>
    <script src="<?= $js; ?>bootstrap.bundle.min.js"></script>
    <script src="<?= $js; ?>main-script.js"></script>
    <script>
        let list = document.querySelectorAll(".list");
        let itemBox = document.querySelectorAll(".itemBox");

        for (let i = 0; i < list.length; i++) {
            list[i].addEventListener('click', function(){
                for (let j = 0; j < list.length; j++) {
                    list[j].classList.remove('active');
                }
                this.classList.add('active');

                let dataFilter = this.getAttribute('data-filter');

                for (let k = 0; k < itemBox.length; k++) {
                    itemBox[k].classList.remove('active');
                    itemBox[k].classList.add('hide');

                    if (itemBox[k].getAttribute('data-item') == dataFilter || dataFilter == "all") {
                        itemBox[k].classList.remove('hide');
                        itemBox[k].classList.add('active');
                    }
                }
            });
        }
    </script>
</body>
</html>