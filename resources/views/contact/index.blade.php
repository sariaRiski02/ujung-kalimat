@include('template.header.index')

<div class="bg-light rounded-4 px-md-5 px-2" style="padding-top: 150px">
    <div class="text-center mb-5">
        <h1 class="fw-bolder">Kontak saya</h1>
        <p class="lead fw-normal text-muted mb-0">Saran & Masukan sangat diperlukan!</p>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-8 col-xl-6">
           
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <!-- Name input-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" data-sb-can-submit="no">
                    <label for="name">Full name</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                </div>
                <!-- Email address input-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" data-sb-can-submit="no">
                    <label for="email">Email address</label>
                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                </div>
                <!-- Phone number input-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" data-sb-can-submit="no">
                    <label for="phone">Phone number</label>
                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                </div>
                <!-- Message input-->
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required" data-sb-can-submit="no"></textarea>
                    <label for="message">Message</label>
                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br>
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                <!-- Submit Button-->
                <div class="d-grid">
                    <button class="btn btn-primary cursor-pointer btn-lg" id="submitButton" type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('template.footer.index')