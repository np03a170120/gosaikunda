<?php include 'header.php' ?>

<!-- BREADCRUMB -->
<section class="inner-breadcrumb" style="background-image: url(image/dummy1.jpg);">
    <div class="container">
        <div class="sec-title">
            <h3>Contact Us</h3>
        </div>
        <div class="ib-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="#">Contact Us</a></li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="contact-us sec-padding">
    <div class="container">
        <div class="cu-content">
            <div class="cuc-contact">
                <a href="#"><i class="fas fa-map-marked-alt"></i><span>Maitidevi, Kathmandu</span></a>
                <a href="#"><i class="fas fa-phone-alt"></i><span>9847779841</span></a>
                <a href="#"><i class="fas fa-mail-bulk"></i><span>company@gmail.com</span></a>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="cu-form">
                        <form action="#">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="fname">Full Name</label>
                                    <input type="text" class="form-control" id="fname">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="cu-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.461916159587!2d85.33326931490133!3d27.703020982793753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199f75f08da5%3A0x641a4463533be28c!2sUltrabyte%20International%20Pvt.%20Ltd!5e0!3m2!1sen!2snp!4v1617358907070!5m2!1sen!2snp"
                                width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>