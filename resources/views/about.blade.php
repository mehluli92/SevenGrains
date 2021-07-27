<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Seven Grains</title>
 
  <!-- MDB icon -->
  @include('header')
  <!--Box style end-->
  <style>
    .heading{
      font-size: 30px; 
      font-family: Arial, Helvetica, sans-serif;
    }
  </style>
  
</head>
<!--first navbar start-->
@include('layouts/topnav')
<!--first navbar end-->

<!--Second Navbar start-->
@include('layouts/bottomnav')
<!--Second Navbar end-->
<body>
  <!-- Start your project here-->  
  <!-- Image try start-->
  <div class="view">
    <img src="{{URL::asset('/images/static/corn.jpg')}}" class="w-100" style="height: 200px;" alt="placeholder">
    <div class="mask flex-center rgba-grey-light">
      <p class="text-white" style="font-size: 50px; font-family: Arial, Helvetica, sans-serif;">About Seven Grains</p>
    </div>
  </div>
  <!-- Image try end-->
  
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-center">
        <p class="heading" style="font-size: 20px; font-family: Times New Roman", Times, serif;">
          We have more than 15 years of experience and customer satisfaction.
          We offer exclusive packages of Agro-businesses such as Markeng Consultants, Contract
          Lease Farming, Farming Consultants, Packaging & Distribuon and Farming
          services. We operang from Harare to anywhere in Zimbabwe, SADC Region,
          Africa and around the world. Our services are one of a kind packages this world
          is looking for.
        </p>

        <p class="heading">Motto!</p>
        <p class="" style="font-size: 20px; font-family: Times New Roman", Times, serif;">Ready to feed you.</p>

        <p class="heading">AIM!</p>
        <p class="" style="font-size: 20px; font-family: Times New Roman", Times, serif;"> To ease the day to day business in Agriculture by providing lasting
          soluons.
        </p>
        <p class="heading">MISSION.</p>
        <p class="" style="font-size: 20px; font-family: Times New Roman", Times, serif;"> 
          <ul class="" style="font-size: 20px; font-family: Times New Roman", Times, serif;">
            <li>To provide efficient markeng skills to our client</li>
            <li>To grow the agro-business economy and create wealth for farmers</li>
            <li>To become the best grains markeng consultant company
              internaonal and local markets.</li>
          </ul>
        </p>

        <p class="heading" > Our Values.</p>
        <p class="" style="font-family: Lucida Console", "Courier New", monospace">Honesty. Reliability. Efficiency. Integrity. Growth</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-top: 20px">
        <p class="heading">
          Contact Us
        </p>
        <form action="{{route('contacts.store')}}" method = "post" enctype="multipart/form-data">
          @csrf
          <!-- Name input -->
          <div class="form-element mb-5">
            <input type="text" id="name" name="name" class="form-control" placeholder="Name" />

          </div>

          <!-- Phone input -->
          <div class="form-element mb-4" >
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" />
          </div>
        
          <!-- Email input -->
          <div class="form-element mb-4">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email Address"/>
          </div>
        
          <!-- Message input -->
          <div class="form-element mb-4">
            <textarea class="form-control" id="message" name="message" rows="4">Message</textarea>
          </div>
        
          <!-- Submit button -->
          <button type="submit" class="btn btn-dark btn-block btn-rounded mb-4">Send</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Modals-->
  @include('layouts/modals')

  <!--Footer start-->
  @include('layouts/footer')
  <!-- Footer end-->

  <!-- End your project here-->


 @include('bottom')
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f00f98ef0b9a586"></script>


</body>
</html>
