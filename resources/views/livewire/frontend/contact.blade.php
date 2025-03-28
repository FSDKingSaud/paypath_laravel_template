@section('hero-about-section')
    <!-- ======== 5.1. contact-hero section ========  -->
    <div class="container">
        <div class="contact-hero">
            <h2 class="text-center">CONTACT</h2>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis quam aut corrupti
                Lorem ipsum dolor sit amet consectetur.</p>
        </div>
    </div>
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96748.5656858991!2d-74.26445728824706!3d40.73138423906509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25370329a0e1d%3A0xe1bcdc2adcfee473!2sNewark%2C%20NJ%2C%20USA!5e0!3m2!1sen!2s!4v1691826891864!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ======== End of 5.1. contact-hero section ========  -->
@endsection


@section('main-section')
    <section class="d-flex justify-content-center">
        <div class="help position-relative">
            <div class="container">
                <div class="row d-flex gap-lg-5 gap-md-3 gap-sm-4 gap-3 justify-content-center">
                    <div class="col-lg-5 col-md-5 help-crd1 aos-init" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <h4>HOW CAN WE HELP?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. assumenda eligendi debitis sunt sequi
                            tempora corporis, sed id animi eveniet.</p>
                        <div class="d-flex gap-4 align-items-center">
                            <i class="fa-solid fa-house"></i>
                            <span>Plaza X, XY Floor, XYZ Street</span>
                        </div>
                        <div class="d-flex gap-4 align-items-center">
                            <i class="fa-solid fa-phone"></i>
                            <span>+123-456-7890</span>
                        </div>
                        <div class="d-flex gap-4 align-items-center">
                            <i class="fa-solid fa-envelope"></i>
                            <span>yourname@email.com</span>
                        </div>
                        <h5>OPERATING HOURS</h5>
                        <div class="d-flex gap-4 align-items-center">
                            <i class="fa-solid fa-clock"></i>
                            <span>Monday To Friday <br> 8:00am to 8:00pm AEDT</span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 contact-email aos-init" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <h4>EMAIL US</h4>
                        <form action="action_page.php" id="footer-sub">
                            <div class="row justify-content-center gap-3">
                                <input type="text" name="name" id="name" class="col-md-5 col-sm-12 col-12"
                                    placeholder="Your Name" required="">
                                <input type="email" name="email" id="email" class="col-md-5 col-sm-12 col-12"
                                    placeholder="Email Address" required="">
                                <input type="number" name="number" id="number" class="col-md-5 col-sm-12 col-12"
                                    placeholder="Phone Number" required="">
                                <input type="text" name="subject" id="subject" class="col-md-5 col-sm-12 col-12"
                                    placeholder="Subject" required="">
                                <textarea class="col-md-11 col-12" name="massage" id="massage" cols="30" rows="10"
                                    placeholder="Write here message"></textarea>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <button class=" e-btn btn-hover1" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div id="Succes-box"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 5.1. map help section ========  -->
@endsection

<span></span>
