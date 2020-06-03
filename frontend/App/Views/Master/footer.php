<!-- Newsletter -->
<section class="section-letter">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <img id="contact-icon" src="/Public/image/contact.svg" alt="contact">
            </div>
        </div>

        <div class="row">
            <div class="letter-left col-12 col-lg-6 col-md-6 col-sm-12">
                <h2>LIÊN HỆ</h2>
                <p>Chúng tôi sẽ giúp bạn tìm đúng giải pháp cho đam mê của bạn.</p>
                <a href="mailto:duongdd@gmail.com" class="btn btn-secondary btn-lg">GỬI EMAIL</a>
                <a href="tel:0369855860" class="btn btn-secondary btn-lg">HOTLINE</a>
            </div>
            <div class="letter-right col-12 col-lg-6 col-md-6 col-sm-12">
                <h2>ĐĂNG KÝ NHẬN EMAIL CẬP NHẬT</h2>
                <p>Để lại email để nhận thông tin mới nhất.</p>

                <form class="form-inline" method="POST" action="/Cskh/addNew">
                    <div class="form-group mb-2">
                        <input type="email" class="form-control" name="customer_email" required oninvalid="this.setCustomValidity('Định dạng email không hợp lệ')"
                               oninput="setCustomValidity('')">
                    </div>
                    <button id="submit_email" type="submit" class="btn btn-secondary mb-2" name="submit">ĐĂNG KÝ</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!--End Newsletter -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                <ul class="footer-nav">
                    <li><a href="#">Về chúng tôi</a></li>
                    <li><a href="#">iOS App</a></li>
                    <li><a href="#">Android App</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                </ul>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                <ul class="social-links">
                    <li>
                        <a href="#"
                        ><ion-icon name="logo-facebook" class="logo-facebook"></ion-icon
                            ></a>
                    </li>
                    <li>
                        <a href="#"
                        ><ion-icon name="logo-twitter" class="logo-twitter"></ion-icon
                            ></a>
                    </li>
                    <li>
                        <a href="#"
                        ><ion-icon name="logo-twitch" class="logo-twitch"></ion-icon
                            ></a>
                    </li>
                    <li>
                        <a href="#"
                        ><ion-icon
                                    name="logo-instagram"
                                    class="logo-instagram"
                            ></ion-icon
                            ></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer-infor">
            <p>
                Copyright &copy; 2020 by Du Dinh Duong & La Dac Hieu & Le Duc Huy. All rights reserved.
            </p>
            <p>
                www.guitarh2d.com.vn
            </p>
        </div>
    </div>
</footer>
<!--End Footer -->