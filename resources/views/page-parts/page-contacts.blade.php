<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase" data-aos="zoom-in" data-aos-delay="100">Contact Us</h2>
            <h3 class="section-subheading text-muted" data-aos="fade-up" data-aos-delay="150">Have some question?</h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form method="post" action="{{ route('contacts.store') }}" enctype="multipart/form-data" id="contactForm">
            @csrf
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group" data-aos="fade-right" data-aos-delay="200">
                        <!-- Name input-->
                        <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group" data-aos="fade-right" data-aos-delay="200">
                        <!-- Email address input-->
                        <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0" data-aos="fade-right" data-aos-delay="200">
                        <!-- Phone number input-->
                        <input class="form-control" id="cellphone" name="cellphone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0"  data-aos="fade-left" data-aos-delay="200">
                        <!-- Message input-->
                        <textarea class="form-control" id="messages" name="messages" placeholder="Your Message *" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
            <!-- Submit Button-->
            <div class="text-center"  data-aos="fade-up" data-aos-delay="200">
                <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit" name="submitButton">Send Message</button>
            </div>
        </form>
    </div>
    <!-- Google Map Start -->
<div div class="container pt-5 px-0 wow fadeIn" id="map" data-wow-delay="0.1s"  data-aos="fade-up" data-aos-delay="200">
    <iframe class="w-100 mb-n2" style="height: 450px;"
    src="https://maps.google.com/maps?q=Ampayon,%20snack%20attack&t=&z=13&ie=UTF8&iwloc=&output=embed"
        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</section>