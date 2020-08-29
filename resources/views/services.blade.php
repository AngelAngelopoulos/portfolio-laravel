@extends('layout')

@section('title', 'Services')

@section('content')
  <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>I can perform a variety of freelance services, among them are: </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-cloud"></i></div>
            <h4 class="title"><a href="">API's Rest</a></h4>
            <p class="description">The Rest APIs have come to position themselves as the preferred method to make a connection to your databases and back-end systems, don't let your data be exposed by a bad implementation and explore the options in the cloud.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">Web Sites</a></h4>
            <p class="description">The best way to attract customers to your business is through a website, I can create different types of them! Blogs, Landing Pages, Ecommerce and Personal Sites, you choose the platform!</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">Data Visualization</a></h4>
            <p class="description">Data is as important as money, with it you can analyze, reflect and even predict trends in the future, I can help you interpret them in the right way according to your case. Contact me.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-database-locked"></i></div>
            <h4 class="title"><a href="">Back-End Developement</a></h4>
            <p class="description">In these times it is important to have your sites secure, if you do not know how to implement that website I can help you, I will offer you the best solutions both in hosting and in the cloud, and the best, safely!</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-bar-code"></i></div>
            <h4 class="title"><a href="">Icon & Brand Design</a></h4>
            <p class="description">Nothing is enough when it comes to your brand, that's why through brand design you can make a difference.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-robot"></i></div>
            <h4 class="title"><a href="">AI Chat Bot</a></h4>
            <p class="description">Customer service is paramount in these times, that is why using language tools and artificial intelligence I can help you create a virtual assistant to help you with those doubts that make your customers but have already answered a thousand times.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
@endsection
