<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/style.css') ?>" type="text/css">
    <title>Resume</title>
    <style>
        .header {
    padding: 2rem 0rem;
    display: block;
}

.wrapper {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    width: 100%;
}

.name-desc{
    width: 55%;
}

h1{
    font-size: 3.5rem;
    font-weight: 800;
}

.name-desc p {
    padding-top: 1.25rem;
    font-size: 1rem;
    line-height: 1.6;
}

.profile-details {
    width: 40%;
}

.profile-details .address-email {
    line-height: 1.65;
    padding-bottom: 1.32rem;
}

div.social-links {
    padding-left: 1.5rem;
    line-height: 1.65;
    font-size: 0.85rem;
}

.skills-exp-edu {
    width: 60%;
}

h3 {
    font-size: 1.325rem;
    text-transform: uppercase;
    color: blue;
}


.work-experience, .education-desc {
    width: 100%;
    margin-top: 1.625rem;
}
.heading-img {
    display: flex;
    flex-flow: row;
    align-items: center;
    padding-bottom: 0.65rem;
}

img  {
    width: 20px;
    height: 30px;
}

.work-experience p, .education-desc p {
    font-size: 0.95rem;
    font-weight: 400;
    /* line-height: 1.85; */
}

ul.desc, ul.skills-list, ul.strength-list, ul.lang-list, ul.cert-date {
    padding-left: 1.65rem;
    padding-top: 1.125rem;
    /* line-height: 1.65; */
}

.skills-project {
    width: 40%;
}

.project-listing p {
    line-height: 1.65;
    padding-top: 0.35rem;
    font-size: 0.85rem;
    font-weight: 400;
}

ul.desc, ul.cert-date {
    list-style-type: ' ☯ ';
}

section#contact {
  background-color: #212529;
  background-image: url("../assets/img/map-image.png");
  background-repeat: no-repeat;
  background-position: center;
}


    </style>
</head>

<body>
@if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif 
<header>
    <div class="wrapper">
        <div class="name-desc">
            <h1 class="name">Olalekan Temitayo</h1>
            <p>
            I am a Junior Software Developer with strong attention to detail. Since I started testing, I have learned
                how important it is to be meticulous and be a team player. I like new challenges, which made me want to
                learn more about this domain and improve my skills every day.
            </p>
        </div>
        <div class="profile-details">
            <div class="address-email">

                <address><i class="fad fa-location"></i>Old-Oko Oba, Agege. Lagos 100276. Nigeria.</address>
                <p><i class="far fa-phone-square"></i><span class="phone-number font-awesome"><a href="tel:+2348038513375">234(0)  909-974-9213</a></span></p>
                <p>
                    <i class="far fa-envelope"></i><span class="email font-awesome"><a href="mailto:isaiah.abiodun@outlook.com">olalekantemitayo7@gmail.com</a></span>
                </p>

            </div>
            <div class="social-links">
                <p>
                    <i class="fab fa-linkedin-in"></i><span class="linkedin font-awesome"><a href="#" target="_blank" rel="noopener noreferrer">LinkedIn</a></span>
                </p>
                <p>
                    <i class="fab fa-twitter"></i><span class="font-awesome"><a href="#" target="_blank" rel="noopener noreferrer">Twitter</a></span>
                </p>
                <p>
                    <i class="fab fa-github"></i><span class="font-awesome"><a href="https://github.com/temitayopelumi" target="_blank" rel="noopener noreferrer">GitHub</a></span>
                </p>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="wrapper">
        <div class="skills-exp-edu">
            <section class="experience">
            <h3>Experience</h3>
            <div class="work-experience">
                    <div class="heading-img">
                    <img src="https://i.imgur.com/OcE4iVn.png" alt="hotels-ng-ingressive-for-good">
                        <h4>HNG Internship <span>— &nbsp; Lagos</span></h4>
                    </div>
                    <p>Software Engineer</p>
                    <p class="date">07/2021 - </p>
                    <ul class="desc">
                        <li>Building Web services with Laravel.
                        </li>
                        <li>Understanding of Agile web development process.</li>
                        <li>Day-to-day remote meetings and stand-up with team members on slack.</li>
                    </ul>
            </div>
            <div class="work-experience">
                    <div class="heading-img">
                    <img src="https://www.facebook.com/cyberfleetng/photos/2354610014765334" alt="hotels-ng-ingressive-for-good">
                        <h4>Cyberfleetng <span>— &nbsp; Lagos</span></h4>
                    </div>
                    <p>Backend Developer</p>
                    <p class="date">08/2021 - present</p>
                    <ul class="desc">
                        <li>Building Web services with Laravel.
                        </li>
                        <li>Understanding of Agile web development process.</li>
                        <li>Day-to-day remote meetings and stand-up with team members on slack.</li>
                    </ul>
            </div>
            </section>
            <section class="education">
            <h3>Education</h3>
            <div class="education-desc">
                    <h4>Obafemi Awolowo university <span>— &nbsp; Osun, Nigeria</span></h4>
                    <p>Computer Science and Engineering</p>
                    <p class="date">12/2016 - present</p>
                    <ul class="desc">
                        <li>Computer science with Mathematics</li>
                    </ul>
                </div>
            </section>

        </div>
        <div class="skills-project">
        <section class="skills">
                <h3>Skills</h3>
                <div class="code">
                    <h4>Skills and Tools</h4>
                    <ul class="skills-list">
                        <li>Python</li>
                        <li>PHP</li>
                        <li>HTML/CSS</li>
                        <li>Linux Administration</li>
                        <li>Git</li>
                        <li>Laravel</li>
                        <li>Microsoft 365 Administartion</li>
                        <li>Bootstrap</li> 
                </ul>
                </div>     
        </section>
        <section class="projects">
                <h3>Projects</h3>
                <div class="project-listing">
                    <h4><a class="project-links" href="https://predicition.herokuapp.com/" target="_blank" rel="noopener noreferrer">Readmission of diabetics patient</a></h4>
                    <p class="project-desc">A machine learning web based that predicts if diabetics patient will be readmitted or not.
                        Technology used: Python, Exploratory Data Analysis, Visualization, Feature Engineering, Supervised ML </p>
                </div>
                <div class="project-listing">
                    <h4><a class="project-links" href="https://github.com/temitayopelumi/email-scheduler" target="_blank" rel="noopener noreferrer"> Emailscheduler Script
                            App</a></h4>
                    <p class="project-desc">A script that automates sending of emails to multiple recipients. Built using APScheduler and Sendgrid</p>
                </div>
                <div class="project-listing">
                    <h4><a class="project-links" href="http://teweatherapp.herokuapp.com/" target="_blank" rel="noopener noreferrer">TeWeatherApp
                            Planner</a></h4>
                    <p class="project-desc">A website that returns the weather condition of a city. Technology used: Flask web framework, heroku, HTML & CSS</p>
                </div>
            </section>
        </div>
    </div>
</main>


 <!-- Contact-->
 <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <!-- <form id="contactForm" data-sb-form-api-token="API_TOKEN"> -->
                <form id="contactForm"method="post" action="/" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input name="name" class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input name="email" class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input   name="subject" class="form-control" id="phone" type="text" placeholder="subject" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea name="message" class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <!-- <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div> -->
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <!-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> -->
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- <div class="row form-container">
            <div class="col-md-4"></div>
            <div class="contact-form card" style="width: 450px;">
                <h1 style="text-align: center;">Contact me</h1>
                <form method="post" action="/" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" class="form-control" placeholder="Your Name">
                            @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" class="form-control" placeholder="Your Email">
                            @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <input name="subject" type="text" class="form-control" placeholder="Subject">
                    </div>


                    <div class="form-group">
                        <textarea name="message" rows="5" cols="40" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div> -->


        
</body>

</html>