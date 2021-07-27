<nav class="navbar navbar-expand-lg fw-bold" style="background-color: #1b5e20;">
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
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white" >
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{route('landing')}}">Home</a>
          </li>
  
          <li class="nav-item ">
            <a class="nav-link text-white text-bold" href="{{route('landing')}}">
              Services
            </a>
          </li>
  
          <li class="nav-item ">
            <a class="nav-link text-white" href="{{route('about')}}">About</a>
          </li>
  
          <li class="nav-item ">
            <a class="nav-link text-white" href=""{{route('landing')}}">Upcoming Events</a>
          </li>
  
          <li class="nav-item ">
            <a class="nav-link text-white" href="{{route('posts.index')}}">Blog</a>
          </li>
        
         
          <li class="nav-item ">
            <a class="nav-link text-white" href="{{route('landing')}}">Contact</a>
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