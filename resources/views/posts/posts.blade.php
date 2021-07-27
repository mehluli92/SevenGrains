<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Seven Grains</title>
 
 @include('header')
  <!-- Box Style-->
  <style>
        .box {
      background: #fff;
      /* border-radius: 2px;
      padding-bottom: 100%; */
    }

  </style>
  <!--Box style end-->
  
</head>
<!--first navbar start-->
@include('layouts.topnav')
<!--first navbar end-->

<!--Second Navbar start-->
@include('layouts/bottomnav')
<!--Second Navbar end-->
<body>
  <!-- Start your project here-->  
  <!--Blog Start-->
    <div class="container">
                <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0">
              @auth
                  @if ($user->role == "admin")
                  <a class="btn btn-primary" href="{{ route('posts.create')}}">Back</a>
                  @endif
              @endauth  
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="post">
                    @if (count($posts)==0)
                        <h2>There are no posts yet</h2>
                        @auth
                          @if ($user->role == "admin")
                          <a class="btn btn-primary" href="{{ route('posts.create')}}">Back</a>
                          @endif
                        @endauth
                    @else

                    @foreach ($posts as $post)
                    <div class="d-flex flex-row" style="border">
                        <img src="{{asset('images/'.$post->image)}}" class="rounded d-inline p-3" style="width: 250px" alt="Blog image">
                    <div class="d-inline text-size-post" style="padding-top: 5%">
                      <a class="text-center" href="{{ route('posts.show',$post->id) }}">
                        <h3>
                            <b>{{ $post->title }}</b> 
                        </h3>
                      </a>
                      <p class="t-5" style="font-size: 20px; font-family: Times New Roman", Times, serif;">
                        {{substr(strip_tags($post->body), 0, 200)}}{{strlen(strip_tags($post->body)) > 200 ? "...": "" }}
                      </p>
                     @auth
                     @if ($user->role == "admin")
                     <div class="float-right">
                         <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
             
                             <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
             
                             <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
             
                             @csrf
                             @method('DELETE')
             
                             <button type="submit" class="btn btn-danger">Delete</button>
                         </form>
                         
                     </div>
                     @endif
                     @endauth
                    </div>
                    </div>
                    </div>
                    @endforeach   
                    @endif
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
                </div>
        </div>
  <!--Blog end-->
  

  <!--Footer start-->
  @include('layouts.footer')
  <!-- Footer end-->

  <!-- End your project here-->

  @include('layouts.modals');
  @include('bottom')

</body>
</html>
