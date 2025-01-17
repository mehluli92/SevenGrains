<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Seven-Grains-Admin</title>
    <link rel="apple-touch-icon" src="{{URL::asset('images/static/logo.jpeg')}}>
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('theme-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/theme-assets/css/vendors.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/theme-assets/vendors/css/charts/chartist.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/theme-assets/css/app-lite.css')}}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/theme-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/theme-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/theme-assets/css/pages/dashboard-ecommerce.css')}}" >
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
<!-- TINYMCE START -->
<script type="text/javascript" src="{{URL::asset('admin/theme-assets/vendors/js/editors/tinymce/tinymce.min.js')}}"></script> 
<script>  

tinymce.init({
  selector: 'textarea#description',
  height: 150,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste imagetools wordcount'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

</script>
<!-- TINYMCE END -->
  </head>
  
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top Navigation Start-->
    @include('admin/topnav')
    <!-- fixed-top Navigation End-->

    <!-- ////////////////////////////////////////////////////////////////////////////-->


  <!--Side Menu start-->
    @include('admin/sidemenu');
  <!--Side Menu end-->
  
  <!--Post Area start-->
  <div class="container">
      <div class="row">
          <div class="col-3"></div>
          <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h4> Edit Event</h4>
                    <div class="float-right">
                      <a class="btn btn-primary" href="{{ route('events.index')}}">View all Events</a>
                    </div>
                </div>
        
                <div class="card-body">
                  @include('formerrors')

                  <img src="{{asset('images/'.$event->image)}}" alt="">
                    <form action="{{route('events.update')}}" method = "post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                          <label for="featured_image">Image</label>
                          <input type="file" name="image" class="form-control-file border">
                        </div>

                        <div class="form-group row">
                            <label for="description">
                             <h3>Description</h3> </label> <br>
                            <textarea id="description" name="description">
                              {{$event->description}}
                            </textarea>
                        </div>
                        <input type="hidden" name="id" value = "{{$event->id}}">
                        <button type = "submit" class = "btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
          </div>
      </div>
  </div>
    
  <!--Post Area end-->


  
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2021  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">MENOKWS</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="#" target="_blank"> More</a></li>
        </ul>
      </div>
    </footer>

       <!-- BEGIN VENDOR JS-->
       <script src="{{URL::asset('admin/theme-assets/vendors/js/vendors.min.js')}}"  type="text/javascript"></script>
       <!-- BEGIN VENDOR JS-->
       <!-- BEGIN PAGE VENDOR JS-->
       <script src="{{URL::asset('admin/theme-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
       <!-- END PAGE VENDOR JS-->
       <!-- BEGIN CHAMELEON  JS-->
       <script src="{{URL::asset('admin/theme-assets/js/core/app-menu-lite.js')}}" type="text/javascript"></script>
       <script src="{{URL::asset('admin/theme-assets/js/core/app-lite.js')}}" type="text/javascript"></script>
       <!-- END CHAMELEON  JS-->
       <!-- BEGIN PAGE LEVEL JS-->
       <script src="{{URL::asset('admin/theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript')}}"></script>
       <!-- END PAGE LEVEL JS-->
  </body>
</html>