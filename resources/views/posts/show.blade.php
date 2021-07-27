<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Seven Grains</title>
 
  <!-- MDB icon -->
  @include('header')
  <!-- Box Style-->
  <style>
        .box {
      background: #fff;
    }

  </style>
  <!--Box style end-->
  
</head>
<!--first navbar start-->
@include('layouts/topnav')
<!--first navbar end-->

<!--Second Navbar start-->
@include('layouts/bottomnav')
<!--Second Navbar end-->
<body>
  <!-- Start your project here-->  
  <!--Blog Start-->
    <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0 align-content-center" >
            
          </div>
          
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="card">
                    <p class="text-center" style="font-size: 30px; font-family: Times New Roman", Times, serif;">
                        {{$post->title}}
                    </p>
                
                <div class="card-body">
                    <img src="{{asset('images/'.$post->image)}}" class="rounded img-fluid d-inline p-3" style="width: 450px" alt="Blog image"><br>
                    {!!$post->body!!}
                </div> <br><br>
                <p>
                  <a href="" class="btn btn btn-outline-success btn-sm waves-effect" data-toggle="modal" data-target="#modalRegisterForm">Sign Up</a>
                   for similar articles
                </p> <br>

                <!--sharing buttons-->
               <b>Share on:</b> 
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
              <!--sharing buttons end-->

              @include('formerrors')

              <form action="{{route('comments.store')}}" method="post">
                  @csrf
                          <!-- Name input -->
                    <div class="form-element mb-4">
                      <input type="text" name="name" id="name" placeholder="Name" class="form-control"/>
                    </div>

                    <!-- Message input -->
                    <div class="form-element mb-4">
                      <textarea class="form-control" name="comment" id="comment" placeholder="Comment" rows="4"></textarea>
                    </div>
                    <input type="hidden" name="post_id" value="{{$post->id}}"/>
                    <button type = "submit" class="btn btn-sm btn-primary">Submit</button>
              </form> <br><br>

              
              <!--Comments display start-->
              @empty($post->comments)
              <h4>There are no comments yet!</h4>
              @endempty
            
              @isset($post->comments)
                @foreach ($post->comments as $comment)
                <div class="person">
                  <img src="{{asset('images/static/person.png')}}" width="50px" class="img-circle img-sm elevation-2" alt="User Image">
                  {{$comment->name}}<br>
                  </div>
                  {{$comment->comment}}
                </div><hr>
                @endforeach
              @endisset
             
              <!--Comments display end-->

            </div>
        </div>
        </div>
    </div>
  <!--Blog end-->

  <!--Footer start-->
  @include('layouts/footer')
  <!-- Footer end-->

  <!-- End your project here-->

    <!--Modal-->
    @include('layouts.modals');
  <!--footer-->
  @include('bottom')
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f00f98ef0b9a586"></script>

</body>
</html>
