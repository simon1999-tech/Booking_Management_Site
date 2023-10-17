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
    </header>
    <main class="m-5">
        {!! isset($data->html)?$data->html : 'Page Not Found' !!}
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