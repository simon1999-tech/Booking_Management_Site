@extends('layout.baseview')
@section('title','Login')
@section('style')
<style>
 .navbar-brand img {
  width: 60px;
}
.navbar-nav {
  align-items: center;
}
.navbar .navbar-nav .nav-link {
  
  font-size: 1.1em;
  padding: 0.5em 1em;
}
@media screen and (min-width: 768px) {
  .navbar-brand img {
    width: 80px;
  }
  .navbar-brand {
    margin-right: 0;
    padding: 0 1em;
  }
}
</style>
@endsection
@section('content')
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar1">
                    <div class="navbar-nav mx-auto text-black">
                        <a href="/" class="navbar-brand d-none d-md-block" style="padding-right:800px;">
                           <img src="{{asset('assets/images/logo.png')}}"  alt="Brand Logo">
                       </a>
                       <a href="/" class="nav-item nav-link active">Home</a>
                       <a href="#team" class="nav-item nav-link active">Team</a>
                       <a href="#about-us" class="nav-item nav-link active">About Us</a>
                       <a href="#contact" class="nav-item nav-link active">Contact Us</a>
                       <a href="login" class="nav-item nav-link active">Login</a>
                       <a href="signup" class="nav-item nav-link active">Register</a>
                    </div>
                </div>
            </div>
        </nav>
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" ></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" ></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/images/image2.jpg')}}" class="d-block w-100" alt="Carousel 1" style="max-height: 100vh;">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/image3.jpg')}}" class="d-block w-100" alt="Carousel 2" style="max-height: 100vh;">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/image1.jpg')}}" class="d-block w-100" alt="Carousel 3" style="max-height: 100vh;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </header>
    <main class="m-5">
        <section class="container m-4" id="about-us">
            <h6 class="display-5 text-center">About Us</h6>
            <div class="row">
                <div class="col-md-5">
                    <div class="container">
                        <img src="{{asset('assets/images/about.jpg')}}" class="d-block w-100" alt="About us">
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="text-black-50">
                    A Booking Management System is a software solution designed to help businesses and organizations manage their bookings, appointments, and reservations efficiently. Whether it's a hotel, restaurant, event venue, healthcare facility, or any other service-oriented business, a booking management system streamlines the process of scheduling and tracking reservations, making it easier for both customers and staff to manage bookings effectively.
                    </p>
                    <p>
                    An intuitive and easy-to-use interface for both customers and staff members.
                    Allows customers to book services or make reservations online through a website or mobile app.
                    Provides real-time information about the availability of services, rooms, or resources.
                    Integrates with calendars to avoid overbooking and schedule conflicts.
                    Sends automated reminders and notifications to customers about upcoming bookings or appointments.
                    Integrates with payment gateways to enable online payments and deposits, ensuring secure transactions.
                    Stores customer information, booking history, and preferences for personalized services.
                    Helps businesses manage staff schedules, assign tasks, and track their availability.
                    Generates reports and analytics to track booking trends, customer behavior, and revenue.
                    Compatible with various devices and platforms, including desktops, smartphones, and tablets.
                    Offers customization options to adapt to specific business needs and branding requirements.
                    Ensures data security and privacy, especially concerning customer information and payment details.
                    </p>
                </div>
            </div>
            <div class="row">
                <h6 class="display-6 text-center">What Makes us Unique</h6>
                <div class="col-md-4">
                    <div class="container text-center">
                        <span class="bi bi-person color-teal icon-lg"></span>
                        <p>Custom Tailored user Options</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container text-center">
                        <span class="bi bi-shield-shaded color-teal icon-lg"></span>
                        <p>Privary First Approach</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container text-center">
                        <span class="bi bi-list color-teal icon-lg"></span>
                        <p>Multiple Variations</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="container m-4" style="padding-top: 80px;">
            <h6 class="display-5 text-center">Our Innovative Team</h6>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="{{asset('assets/images/face1.jpg')}}" style="height: 300px;">
                            <div class="card-body text-center">
                                <h4 class="card-title">Team Member 1</h4>
                                <p class="card-text">Rabin kingstone</p>
                                <i class="bi bi-facebook icon-sm m-2"></i>
                                <i class="bi bi-instagram icon-sm m-2"></i>
                                <i class="bi bi-linkedin icon-sm m-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="{{asset('assets/images/face2.jpg')}}" style="height: 300px;">
                            <div class="card-body text-center">
                                <h4 class="card-title">Team Member 2</h4>
                                <p class="card-text">John Bejos </p>
                                <i class="bi bi-facebook icon-sm m-2"></i>
                                <i class="bi bi-instagram icon-sm m-2"></i>
                                <i class="bi bi-linkedin icon-sm m-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="{{asset('assets/images/face3.jpg')}}">
                            <div class="card-body text-center">
                                <h4 class="card-title">Team Member 3</h4>
                                <p class="card-text">Harry Smith</p>
                                <i class="bi bi-facebook icon-sm m-2"></i>
                                <i class="bi bi-instagram icon-sm m-2"></i>
                                <i class="bi bi-linkedin icon-sm m-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="container m-4" style="padding-top: 100px;">
            <h6 class="display-5 text-center ">Contact Us</h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="container p-3">
                        <p class="text-muted text-center fs-3">Here's our Contact Info</p>
                        <div class="text-black-s text-center fs-4">Our Email</div>
                        <div class="text-black-50 text-center fs-5">support@booking.com</div>
                        <div class="text-black-s text-center fs-4">Our Phone No.</div>
                        <div class="text-black-50 text-center fs-5">+91 13265 41208</div>
                        <div class="text-black-s text-center fs-4">Our Address</div>
                        <div class="text-black-50 text-center fs-5">Done Lane, Kolkate<br> Kolkate 700 XXX</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <p class="text-muted text-center fs-3">You can also Write to Us</p>
                        <div class="container p-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="name" class="form-label">Enter Your Name</label>
                                            <input type="text" class="form-control" name="name" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailid" class="form-label">Enter Your Email</label>
                                            <input type="email" class="form-control" name="email" id="emailid">
                                        </div>
                                        <div class="form-group">
                                            <label for="subject" class="form-label">Enter the subject</label>
                                            <input type="text" class="form-control" name="subject" id="subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="message" class="form-label">Enter Your Message</label>
                                            <textarea class="form-control" name="message" id="message"></textarea>
                                        </div>
                                        <div class="form-group text-center pt-3">                                               
                                            <input type="submit" class="btn btn-outline-dark" value="Send Message">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container m-5">
                        <img src="{{asset('assets/images/logo.png')}}" height="60px" class="bg-black">
                        <div>
                            <p class="text-white">A Booking Management System is a software solution designed to help businesses and organizations manage their bookings, appointments, and reservations efficiently. Whether it's a hotel, restaurant, event venue, healthcare facility, or any other service-oriented business, a booking management system streamlines the process of scheduling and tracking reservations, making it easier for both customers and staff to manage bookings effectively.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container m-5">
                        <p class="text-white fs-5">Quick Links</p>
                            <a  href="#about-us" class="remove-text-decoration text-white">About Us</a><br>
                            <a href="#contact" class="remove-text-decoration text-white">Contact Us</a><br>
                            <a href="#team" class="remove-text-decoration text-white">Team</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-white text-center">
                    <p>All rights reserved &copy 2023 <a href="/">Booking Management System</a></p>
                </div>
            </div>
        </div>
    </footer>
@endsection
@section('customjs')
<script>
</script>
@endsection