<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Seven Grains</title>
  @include('header')
  <style>
        .box {
      background: #fff;
      outline-color: rgb(126, 119, 119);
      outline-style: solid;
      /* border-radius: 2px;
      padding-bottom: 100%; */
    }
      .subheading{
        font-size: 30px; font-family: Arial, Helvetica, sans-serif;
      }
      .service-text{
        font-size: 17px;
        font-family: serif;
      }
  </style>
  <!--Box style end-->
  
</head>
<!--first navbar start-->
@include('layouts/topnav')
<!--first navbar end-->

<!--Second Navbar start-->
<nav class="navbar navbar-expand-lg fw-bold" style="background-color:  #1b5e20;">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarLeftAlignExample"
      aria-controls="navbarLeftAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="text-decoration-color: #fff">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{route('landing')}}">Home</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link text-white" href="#services">Services</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link text-white" href="{{route('about')}}">About</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link text-white" href="#events">Upcoming Events</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link text-white" href="{{route('posts.index')}}">Blog</a>
        </li>
      
       
        <li class="nav-item ">
          <a class="nav-link text-white" href="#contact">Contact</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <div class="align-right">
  
  </div>
  <!-- Container wrapper -->
</nav>
<!--Second Navbar end-->
<body>
  <!-- Start your project here-->  
  <!-- Courosel test start-->
   <!--Carousel Wrapper-->
<div class="d-block view">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item view active">
      <img class="d-block w-100" src="{{URL::asset('/images/static/barley2.jpg')}}"  style="height: 400px" alt="First slide">
      <div class="carousel-caption d-none d-md-block text-margin">
        <h1>Agro Marketing Consultancy</h1>
        <p>We provide excellent marketing services for your products. </p>
      </div>
      </div>
      <div class="carousel-item view">
        <img class="d-block w-100" src="{{URL::asset('/images/static/tractor.jpg')}}"  style="height: 400px" alt="Second slide">
        <div class="carousel-caption d-none d-md-block text-margin">
          <h1>Grains.</h1>
          <p>We specialise in seven grains.</p>
        </div>
      </div>
      <div class="carousel-item view">
        <img class="d-block w-100" src="{{URL::asset('/images/static/corn.jpg')}}"  style="height: 400px" alt="Third slide">
        <div class="carousel-caption d-none d-md-block text-margin">
          <h1>Farming Consultacy.</h1>
          <p>We provide you with valuable information from experts.
          </p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--/.Carousel Wrapper-->
  <!-- Courosel test end-->
  <!--Services Start-->
  <div class="container-fluid">
    <p class="text-center subheading" >
      <span class="border-bottom border-3 border-dark" >Our Services</span>
    </p>
    <div class="row">
      <!-- block 1 start-->
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <!--youtube video start-->
        <div class="embed-responsive embed-responsive-16by9">
          <iframe
            src="https://www.youtube.com/embed/edU4PF4NG78"
            title="YouTube video"
            allowfullscreen
          ></iframe>
        </div>
        <!--youtube video end-->
      </div>
      <!-- block 1 end-->
      <!-- bock 2 start-->
      <div class="col-lg-2 col-md-2 col-xs-2">
        <div class="box w-55 h-50 text-wrap text-center">
          <h5><b>Market Consultacy</b></h5>
          <p class="service-text">
            We offer opportunies to widen the market field for export & import of
            grains around the world
          </p>
        </div><br>
        <div class="box w-55 h-50 text-wrap  text-center">
          <h5><b>Lease Contract Farming</b></h5>
          <p class="service-text">
            We facilitate the signing of that contract so that no one will be taken
            advantage of during the process.
          </p>
        </div>
    </div>
      <!-- block 2 end-->
      <!-- bock 3 start-->
      <div class="col-lg-2 col-md-2 col-xs-2">
        <div class="box w-55 h-50 text-wrap text-center">
          <h5><b>Farming Consultant</b></h5>
          <p class="service-text">
            Assist Farmers with informaon about, which crops are on demand that season, also 
            guide them cost analysis for beer harvest. We do analytics.
          </p>
        </div><br>
        <div class="box w-55 h-50 text-wrap text-center">
          <h5><b>Packaging and Distribution</b></h5>
          <p class="service-text">
            Add value to the product before hit the market. Supplying to Manufacturers,
            NGOs, Governments and Traders
          </p>
        </div>
    </div>
     <!-- block 3 end-->
     <!--block 4 start-->
     <div class="col-lg-2 col-md-2 col-xs-2">
      <div class="box w-55 h-50 text-wrap text-center">
        <h5><b>Farming Service</b></h5>
        <p class="service-text">
          We can assist you with Farming employees, 
          manage your project & source farming equipment for you.
        </p>
      </div><br>
      <div class="box w-55 h-50 text-wrap text-center">
        <h5><b>Suppliers of</b></h5>
        <p class="service-text">
          Maize, Wheat, Soya Beans, Sugar Beans, Ground Nuts, Small Grains
        </p>
      </div>
  </div>
     <!--block 4 end-->
    </div>
  </div> <br> <br>
  <!--Services end-->
  <!-- Events section start-->
  <p id="events" class="text-center subheading" >
    <span class="border-bottom border-3">Upcoming Events</span>
  </p>
  <div class="container-fluid align-content-center" style="background-color: #1b5e20">
    
    @if (count($events) == null)
        <p style="text-decoration-color: yellow; font-size: 30px; font-family: Arial, Helvetica, sans-serif;">
          Events have will be published soon. Check again later!
        </p>
    @else
        <div class="row">
          @foreach ($events as $event)
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
            <div class="card text-dark bg-warning" style="width: 24rem; height: 30rem">
              <img
                src="{{asset('images/'.$event->image)}}"
                class="card-img-top shadow-2-strong"
                alt="event"
                style="width: 24rem; height: 26rem"
              />
              <div class="card-body">
                <p class="card-text">
                  {!!$event->description!!}
                </p>
              </div>
            </div>
          </div>
              
          @endforeach
        </div>
    @endif
    <br> <br>
  </div> 
   <!--contact section start-->
   <div id="contact" class="container-fluid" style="background-color: #FAFAFA">
    <p class="text-center subheading" >
      <span class="border-bottom border-3 border-dark">Contact Us</span>
    </p>
    <div class="row" style="color: grey;">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <form action="{{route('contacts.store')}}" method = "post" enctype="multipart/form-data">
          @csrf
          <!-- Name input -->
          <div class="form-element mb-5">
            <input type="text" id="name" name="name" class="form-control" placeholder="Name" />
          </div>

          <!-- Phone input -->
          <div class="form-element mb-4">
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" />
          </div>
        
          <!-- Email input -->
          <div class="form-element mb-4">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email"/>
          </div>
        
          <!-- Message input -->
          <div class="form-element mb-4">
            <textarea class="form-control" id="message" name="message" rows="4">Message</textarea>
          </div>
        
          <!-- Submit button -->
          <button type="submit" class="btn btn-success btn-block btn-rounded mb-4">Send</button>
        </form>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <!--google maps start-->
          <div class="card">
            <!--Google maps-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.153727415181!2d31.048028414513762!3d-17.83142708108721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a4e5ddd33421%3A0x2fdfecbd8b3e6438!2sGelfand%20House%2C%2056%20Speke%20Ave%2C%20Harare%2000263!5e0!3m2!1sen!2szw!4v1616500320596!5m2!1sen!2szw" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            <!--Google maps-->
          </div>
          <!-- google maps end-->
      </div>
    </div>
  </div>
  <!--contact section end-->
  <!-- Registration Modal start-->
    @include('layouts.modals')
  <!-- Registration Modal end-->

  <!--Footer start-->
  @include('layouts/footer')
  <!-- Footer end-->

  <!-- testing courousel end-->
@include('bottom')
</body>
</html>
