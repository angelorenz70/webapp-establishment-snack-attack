<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container-fluid">
        <div class="container">
            <h3 class="mb-4 text-light text-center" data-aos="zoom-in" data-aos-delay="100"><b>Contact Us</b></h3>
            <div class="row no-gutters mb-5 g-5 py-0">
                <div class="col-lg-7">
                    <div class="contact-wrap w-100">
                        <form id="contactForm" name="contactForm" class="contactForm" v-on:submit="sendMessage">
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="150">
                                    <label class="label text-light" for="name">Name</label>
                                    <div class="form-group">
                                        <input v-model="formData.name" type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="200"> 
                                    <div class="form-group">
                                        <label class="label text-light" for="email">Email Address</label>
                                        <input v-model="formData.email" type="email" class="form-control" name="email" id="email" placeholder="email address">
                                    </div>
                                </div>
                                <div class="col-md-12" data-aos="fade-right" data-aos-delay="250">
                                    <div class="form-group">
                                        <label class="label text-light" for="subject">Cellphone</label>
                                        <input v-model="formData.cellphone" type="text" class="form-control" name="subject" id="subject" placeholder="Cellphone">
                                    </div>
                                </div>
                                <div class="col-md-12" data-aos="fade-right" data-aos-delay="300">
                                    <div class="form-group">
                                        <label class="label text-light" for="#">Message</label>
                                        <textarea v-model="formData.messages" name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12" data-aos="fade-right" data-aos-delay="350">
                                    <div class="form-group">
                                        <input type="submit" value="Send Message" class="btn btn-primary">
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 align-items-stretch pt-3">
                    <div div class="container px-0 wow fadeIn" id="map" data-aos="fade-left" data-aos-delay="400">
                        <iframe class="w-100 mb-n2" style="height: 450px"
                        src="https://maps.google.com/maps?q=Ampayon,%20snack%20attack&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container">
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
    </div> --}}
</section>